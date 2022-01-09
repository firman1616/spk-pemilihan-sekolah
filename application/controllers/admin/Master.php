<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{

    public function __construct()

    {
        parent::__construct();

        if ($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1) {
            redirect(base_url("login"));
        }
        //  $this->load->library('Pdf');
    }

    public function index()
    {
        $data = [
            'name'  => $this->session->userdata('nama'),
            'bobot' => $this->m_data->get_data('tbl_master_kriteria'),
            'title' => 'Master Kriteria',
            'conten' => 'conten/master_kriteria',
            'kode'  => $this->m_data->kd_kriteria(),
            'master_kriteria' => $this->m_data->get_data('tbl_master_kriteria')
        ];
        $this->load->view('template/conten', $data);
    }

    public function tambah_data()
    {
        $table = 'tbl_master_kriteria';
        $data = array(
            'kode_kriteria' => $this->input->post('kode'),
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'atribut'       => $this->input->post('atribut')
        );
        $this->m_data->simpan_data($table, $data);
        redirect('admin/Master');
    }

    public function update_kriteria($id)
    {
        $table = 'tbl_master_kriteria';
        $data = array(
            'kode_kriteria' => $this->input->post('kode'),
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'atribut'       => $this->input->post('atribut')
        );
        $where = array('id_master_kriteria' => $id);
        $this->m_data->update_data($table, $data, $where);
        redirect('admin/Master');
    }

    public function alternatif()
    {
        $data = [
            'name'  => $this->session->userdata('nama'),
            'bobot' => $this->m_data->get_data('tbl_master_kriteria'),
            'title' => 'Master Alternatif',
            'conten' => 'conten/master_alternatif',
            'kode'  => $this->m_data->kd_alt(),
            'master_alternatif' => $this->m_data->get_data('tbl_master_alternatif')
        ];
        $this->load->view('template/conten', $data);
    }

    public function tambah_alt()
    {
        $table = 'tbl_master_alternatif';
        $data = array(
            'kode_alt' => $this->input->post('kode'),
            'nama_alt' => $this->input->post('nama_alternatif')
        );
        $this->m_data->simpan_data($table, $data);
        redirect('admin/Master/alternatif');
    }

    public function update_alt($id)
    {
        $table = 'tbl_master_alternatif';
        $data = array(
            'kode_alt' => $this->input->post('kode'),
            'nama_alt' => $this->input->post('nama_alt')
        );
        $where = array('id_master_alt' => $id);
        $this->m_data->update_data($table, $data, $where);
        redirect('admin/Master/alternatif');
    }

    public function desa()
    {
        $data = [
            'name'  => $this->session->userdata('nama'),
            'title' => 'Master Desa',
            'conten' => 'conten/master_desa',
            'master_desa' => $this->m_data->get_data('tbl_master_desa'),
            'master_alternatif' => $this->m_data->get_data('tbl_master_alternatif'),
        ];
        $this->load->view('template/conten', $data);
    }

    // public function tambah_desa()
    // {
    //     $table = 'tbl_master_desa';
    //     $data = array(
    //         'nama_desa' => $this->input->post('nama_desa')
    //     );
    //     $this->m_data->simpan_data($table, $data);
    //     redirect('admin/Master/desa');
    // }

    public function tambah_desa()
    {
        $desa = $this->input->post('nama_desa');
        $alt = $this->input->post('sekolah');
        $jar = $this->input->post('jarak');
        $this->m_data->jarak_sekolah($desa, $alt, $jar);
        redirect('admin/Master/desa');
    }

    public function update_desa($id)
    {
        $table = 'tbl_master_desa';
        $data = array(
            'nama_desa' => $this->input->post('nama_desa')
        );
        $where = array('id_master_desa' => $id);
        $this->m_data->update_data($table, $data, $where);
        redirect('admin/Master/desa');
    }

    public function jarak($id)
    {
        $data = [
            'name'  => $this->session->userdata('nama'),
            'title' => 'Master Jarak',
            'conten' => 'conten/master_jarak',
            'master_desa' => $this->m_data->get_data('tbl_master_desa'),
            'master_alternatif' => $this->m_data->get_data('tbl_master_alternatif'),
            'get_data' => $this->m_data->get_data_by_id('tbl_master_desa', array('id_master_desa' => $id)),
            'get_jarak' => $this->m_data->get_jarak($id)
            // 'kriteria' => $this->m_data->get_data('tbl_master_kriteria')
        ];
        $this->load->view('template/conten', $data);
    }
}
