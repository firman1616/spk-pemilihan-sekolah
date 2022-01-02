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

  function kd_kriteria()
  {
    $this->db->select('RIGHT(tbl_master_kriteria.id_master_kriteria,5) as kode', FALSE);
    $this->db->order_by('id_master_kriteria', 'DESC');
    $this->db->limit(1);

    $query = $this->db->get('tbl_master_kriteria');

    if ($query->num_rows() != 0) {
      $data = $query->row();
      $kode = intval($data->kode) + 1;
    } else {
      $kode = 1;
    }
    $kode_max = str_pad($kode, 1, "0", STR_PAD_LEFT);
    $kode_jadi = $kode_max;
    return $kode_jadi;
  }

  function kd_alt()
  {
    $this->db->select('RIGHT(tbl_master_alternatif.id_master_alt,5) as kode', FALSE);
    $this->db->order_by('id_master_alt', 'DESC');
    $this->db->limit(1);

    $query = $this->db->get('tbl_master_alternatif');

    if ($query->num_rows() != 0) {
      $data = $query->row();
      $kode = intval($data->kode) + 1;
    } else {
      $kode = 1;
    }
    $kode_max = str_pad($kode, 1, "0", STR_PAD_LEFT);
    $kode_jadi = $kode_max;
    return $kode_jadi;
  }

  public function bobot_kriteria($user)
  {
    return $this->db->query("SELECT * FROM tbl_bobot_kriteria WHERE fk_user = $user ORDER BY id_bobot__kriteria DESC LIMIT 1 ");
  }
}
