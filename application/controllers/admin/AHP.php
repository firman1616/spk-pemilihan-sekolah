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
            'user_id' => $this->session->userdata('id'),
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
            'user_id' => $this->session->userdata('id'),
            'title' => 'Hasil Perbandingan Alternatif',
            'name' => $this->session->userdata('nama'),
            'conten' => 'conten/hasil_kriteria',
            'footer_js' => array(
                'assets/js/AHP.js'
            )
        ];
        $this->load->view('template/conten', $data);
    }

    public function simpan_bobot()
    {
        $table = 'tbl_bobot_kriteria';
        $data = array(
            'fk_user' => $this->input->post($this->session->userdata('id')),
            'r_fasilitas'   => $this->input->post('rata1'),
            'r_akreditasi'      => $this->input->post('rata2'),
            'r_biaya'   => $this->input->post('rata3'),
            'r_beasiswa'   => $this->input->post('rata4'),
            'r_jarak'    => $this->input->post('rata5'),
        );
        $simpan = $this->db->insert($table, $data);
        if ($simpan) {
            $output = array('status' => true);
        } else {
            $output = array('status' => false);
        }
        echo json_encode($output);
    }
}
