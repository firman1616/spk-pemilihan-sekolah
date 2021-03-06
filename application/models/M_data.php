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
    return $this->db->query("SELECT * FROM tbl_bobot_kriteria WHERE fk_user = '$user' ORDER BY id_bobot__kriteria DESC LIMIT 1");
    //  
  }

  public function kriteria($user)
  {
    return $this->db->query("SELECT * FROM tbl_kriteria WHERE fk_user = '$user' ORDER BY id_kriteria DESC LIMIT 1");
  }

  public function saw($user)
  {
    return $this->db->query("SELECT
    id_alternatif_saw,
    jarak_1,
    jarak_2,
    jarak_3,
    jarak_4,
    jarak_5,
    jarak_6,
    ref1,
    ref2,
    ref3,
    ref4,
    ref5,
    ref6,
    fk_user,
    fk_desa,
    a.id_master_desa,
    a.nama_desa
  FROM
    tbl_alt_saw2 
  LEFT JOIN tbl_master_desa as a ON fk_desa = a.id_master_desa
    WHERE
    fk_user = '$user'
  ORDER BY
    id_alternatif_saw DESC 
    LIMIT 1 ");
  }

  public function jarak_sekolah($desa, $alt, $jar)
  {
    $this->db->trans_start();
    $data = array(
      'nama_desa' => $desa
    );
    $this->db->insert('tbl_master_desa', $data);
    // get id desa
    $desa_id = $this->db->insert_id();
    $result = array();
    foreach ($alt as $key => $value) {
      $result[] = array(
        'fk_desa' => $desa_id,
        'fk_alternatif' => $_POST['sekolah'][$key],
        'jarak' => $jar[$key]
      );
    }
    $this->db->insert_batch('tbl_master_jarak', $result);
    $this->db->trans_complete();
  }

  public function get_jarak($id)
  {
    return $this->db->query("SELECT
    id_master_desa,
    nama_desa,
    a.id_master_alt,
    a.nama_alt,
    b.fk_desa,
    b.fk_alternatif,
    b.jarak
  FROM
    tbl_master_desa
    JOIN tbl_master_jarak as b ON b.fk_desa = id_master_desa
    JOIN tbl_master_alternatif as a ON a.id_master_alt = b.fk_alternatif
    WHERE id_master_desa = $id");
  }

  public function get_master_saw()
  {
    return $this->db->query("SELECT
    id_master_saw,
    fk_alt,
    fasilitas,
    akreditasi,
    biaya,
    beasiswa,
    id_master_alt,
    nama_alt 
  FROM
    `tbl_master_saw`
    JOIN tbl_master_alternatif ON id_master_alt = fk_alt");
  }

  function cari($id)
  {
    return $this->db->query("SELECT
    id_master_desa,
    nama_desa,
    b.fk_desa,
    a.id_master_alt,
    b.fk_alternatif,
    b.jarak 
  FROM
    tbl_master_desa
    JOIN tbl_master_jarak AS b ON b.fk_desa = id_master_desa
    JOIN tbl_master_alternatif AS a ON a.id_master_alt = b.fk_alternatif 
  WHERE
    id_master_desa = $id");
  }

  public function tampil_data_user($user)
  {
    return $this->db->query("SELECT nama_user FROM `tbl_user` WHERE id_user = '$user'");
  }

  public function total_surveyor()
  {
    return $this->db->query("SELECT * FROM tbl_user WHERE level = '2'")->num_rows();
  }
}
