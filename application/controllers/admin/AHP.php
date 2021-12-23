<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AHP extends CI_Controller
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
            'bobot' => $this->m_data->get_data('tbl_master_bobot'),
            'kriteria' => $this->m_data->get_data('tbl_master_kriteria'),
            'title' => 'Perhitungan AHP',
            'conten' => 'conten/ahp',
            'footer_js' => array(
                'assets/js/AHP.js'
            )
        ];
        $this->load->view('template/conten', $data);
    }

    public function hasil_kriteria()
    {
        $data = [
            'title' => 'Hasil Perbandingan Alternatif',
            'name' => $this->session->userdata('nama'),
            'conten' => 'conten/hasil_kriteria'
        ];
        $this->load->view('template/conten', $data);
    }
}
