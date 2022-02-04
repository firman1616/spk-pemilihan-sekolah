<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
            'title' => 'Laporan',
            'conten' => 'conten/laporan',
            'id_user' => $this->m_data->get_data('tbl_user'),

        ];
        $this->load->view('template/conten', $data);
    }

    public function hasil_filter()
    {
        $user = $this->input->post("user_id");
        $data = [
            'name' => $this->session->userdata('nama'),
            'title' => 'Hasil Filter Laporan',
            'conten' => 'conten/hasil_laporan',
            'tampil_user' => $this->m_data->tampil_data_user($user),
            'kriteria' => $this->m_data->kriteria($user),
            'bobot_kriteria'    => $this->m_data->kriteria($user),
            'master_saw' => $this->m_data->get_master_saw(),
            'bobot_saw' => $this->m_data->saw($user),
        ];
        $this->load->view('template/conten', $data);
    }
}
