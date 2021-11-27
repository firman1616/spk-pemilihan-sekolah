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
            'nama_kriteria' => $this->input->post('nama_kriteria')
        );
        $this->m_data->simpan_data($table, $data);
        redirect('admin/Master');
    }

    public function alternatif()
    {
        $data = [
            'name'  => $this->session->userdata('nama'),
            'bobot' => $this->m_data->get_data('tbl_master_kriteria'),
            'title' => 'Master Kriteria',
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
}
