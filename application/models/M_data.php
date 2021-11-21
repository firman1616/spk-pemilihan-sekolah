<?php
class M_data extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  function get_data($table)
  {
    return $this->db->get($table);
  }
  function get_data_by_id($table, $where)
  {
    return $this->db->get_where($table, $where);
  }
  function simpan_data($table, $data)
  {
    $this->db->insert($table, $data);
  }
  function update_data($table, $data, $where)
  {
    $this->db->update($table, $data, $where);
  }
  function hapus_data($table, $where)
  {
    $this->db->delete($table, $where);
  }

  public function upload_data_brand($filename)
  {
    ini_set('memory_limit', '-1');
    $inputFileName = './assets/doc/' . $filename;
    try {
      $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
    } catch (Exception $e) {
      die('Error loading file :' . $e->getMessage());
    }

    $worksheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
    $numRows = count($worksheet);

    for ($i = 2; $i < ($numRows + 1); $i++) {

      $ins = array(
        "kode_brand"             => $worksheet[$i]["B"],
        "nama_brand"             => $worksheet[$i]["C"]
      );
      $this->db->insert('tbl_master_brand', $ins);
    }
  }

  public function upload_data_subs_item($filename)
  {
    ini_set('memory_limit', '-1');
    $inputFileName = './assets/doc/' . $filename;
    try {
      $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
    } catch (Exception $e) {
      die('Error loading file :' . $e->getMessage());
    }

    $worksheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
    $numRows = count($worksheet);

    for ($i = 2; $i < ($numRows + 1); $i++) {

      $ins = array(
        "kode_sub_kategori_item"             => $worksheet[$i]["B"],
        "nama_sub_kategori_item"             => $worksheet[$i]["C"],
        "kategori_item"                      => $worksheet[$i]["D"]
      );
      $this->db->insert('tbl_master_sub_category_item', $ins);
    }
  }

  function get_subitem($id)
  {
    $hasil = $this->db->query("SELECT * FROM tbl_master_sub_category_item WHERE kategori_item='$id'");
    return $hasil->result();
  }

  public function total_brand($brand)
  {
    return $this->db->query("SELECT MAX(jumlah) FROM tbl_item WHERE brand_item = $brand");
  }

  public function item_list()
  {
    return $this->db->query("SELECT
    a.id_item,
    a.nama_item,
    a.tipe_kategori,
    a.departemen,
    a.tipe_item,
    a.tipe_sub_item,
    a.brand_item,
    a.jumlah,
    a.tipe_sn,
    a.serial_number,
    a.deskripsi,
    a.panjang,
    a.lebar,
    a.tinggi,
    a.berat,
    a.warna,
    a.gambar_item,
    a.`user`,
    a.date,
    a.tahun_pembelian,
    a.no_kir,
    a.masa_berlaku_kir,
    a.masa_berlaku_stnk,
    a.pajak_kendaraan,
    a.berlaku_kendaraan,
    a.berlaku_stnk,
    a.berlaku_kir_silo,
		b.id_kategori,
    b.kd_kategori,
    b.category_name,
		c.id_departemen,
    c.kode_departemen,
    c.nama_departemen,
		d.id_kategori_item,
    d.kode_kategori_item,
    d.nama_kategori_item,
		e.id_brand,
    e.kode_brand,
    e.nama_brand,
		f.id_sub_kategori_item,
		f.kode_sub_kategori_item,
		f.nama_sub_kategori_item
  FROM
    tbl_item AS a
    LEFT JOIN tbl_master_kategori AS b ON a.tipe_kategori = b.id_kategori
    LEFT JOIN tbl_master_departemen AS c ON a.departemen = c.id_departemen
    LEFT JOIN tbl_master_category_item as d ON a.tipe_item = d.id_kategori_item
    LEFT JOIN tbl_master_brand as e ON a.brand_item = e.id_brand
		LEFT JOIN tbl_master_sub_category_item as f ON a.tipe_sub_item = f.id_sub_kategori_item");
  }

  public function employee()
  {
    return $this->db->query("SELECT a.id_karyawan, a.nama_karyawan, a.nik, a.departemen, b.id_departemen, b.nama_departemen FROM tbl_karyawan AS a
    LEFT JOIN tbl_master_departemen AS b ON a.departemen = b.id_departemen");
  }

  public function upload_data_employee($filename)
  {
    ini_set('memory_limit', '-1');
    $inputFileName = './assets/doc/' . $filename;
    try {
      $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
    } catch (Exception $e) {
      die('Error loading file :' . $e->getMessage());
    }

    $worksheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
    $numRows = count($worksheet);

    for ($i = 2; $i < ($numRows + 1); $i++) {

      $ins = array(
        "nama_karyawan"                      => $worksheet[$i]["B"],
        "departemen"                         => $worksheet[$i]["C"]
      );
      $this->db->insert('tbl_karyawan', $ins);
    }
  }

  public function user()
  {
    return $this->db->query("SELECT * FROM tbl_user")->num_rows();
  }

  public function karyawan()
  {
    return $this->db->query("SELECT * FROM tbl_karyawan")->num_rows();
  }

  public function brand()
  {
    return $this->db->query("SELECT * FROM tbl_master_brand")->num_rows();
  }

  public function item()
  {
    return $this->db->query("SELECT * FROM tbl_item")->num_rows();
  }

  public function transaksi()
  {
    return $this->db->query("
    SELECT
	a.id_transaksi,
	a.no_po,
	a.tgl_po,
	a.item_name,
  a.diterima_oleh,
  a.tgl_diterima,
	a.`user`,
	a.validation,
	b.id_item,
	b.nama_item,
	c.id_karyawan,
	c.nik,
	c.nama_karyawan,
	c.departemen,
	d.id_departemen,
	d.nama_departemen 
FROM
	`tbl_transaksi` AS a
	LEFT JOIN tbl_item AS b ON a.item_name = b.id_item
	LEFT JOIN tbl_karyawan AS c ON a.diterima_oleh = c.id_karyawan
	LEFT JOIN tbl_master_departemen AS d ON c.departemen = d.id_departemen
    ");
  }
}
