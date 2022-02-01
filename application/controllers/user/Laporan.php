<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()

    {
        parent::__construct();

        if ($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 2) {
            redirect(base_url("login"));
        }
        //  $this->load->library('Pdf');
    }

    public function index()
    {
        $data = [
            'user_id' => $this->session->userdata('id'),
            'name'  => $this->session->userdata('nama'),
            'title' => 'Laporan Hasil',
            'conten' => 'user/laporan',
            'kriteria' => $this->m_data->kriteria($this->session->userdata('id')),
            'bobot_kriteria'    => $this->m_data->kriteria($this->session->userdata('id')),
            'master_saw' => $this->m_data->get_master_saw(),
            'bobot_saw' => $this->m_data->saw($this->session->userdata('id')),
        ];
        $this->load->view('template/conten_user', $data);
    }
}
