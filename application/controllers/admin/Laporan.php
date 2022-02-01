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
            'conten' => 'conten/laporan.php',
            'user' => $this->m_data->get_data('tbl_user')
        ];
        $this->load->view('template/conten', $data);
    }
}
