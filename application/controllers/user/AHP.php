<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AHP extends CI_Controller
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
            'bobot' => $this->m_data->get_data('tbl_master_bobot'),
            'kriteria' => $this->m_data->get_data('tbl_master_kriteria'),
            'title' => 'Perhitungan AHP',
            'conten' => 'conten/ahp',
            'footer_js' => array(
                'assets/js/AHP.js'
            )
        ];
        $this->load->view('template/conten_user', $data);
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
        $this->load->view('template/conten_user', $data);
    }

    public function simpan_bobot()
    {
        $this->load->model('M_data');

        $table = array('tbl_bobot_kriteria', 'tbl_kriteria');
        // $table = 'tbl_bobot_kriteria';
        $data[] = array(
            'fk_user'       => $this->input->post('user'),
            'r_fasilitas'   => $this->input->post('rata1'),
            'r_akreditasi'  => $this->input->post('rata2'),
            'r_biaya'       => $this->input->post('rata3'),
            'r_beasiswa'    => $this->input->post('rata4'),
            'r_jarak'       => $this->input->post('rata5'),
        );

        $data[] = array(
            'fk_user'       => $this->input->post('user'),
            'C11'           => $this->input->post('c11'),
            'C12'           => $this->input->post('c12'),
            'C13'           => $this->input->post('c13'),
            'C14'           => $this->input->post('c14'),
            'C15'           => $this->input->post('c15'),

            'C21'           => $this->input->post('c21'),
            'C22'           => $this->input->post('c22'),
            'C23'           => $this->input->post('c23'),
            'C24'           => $this->input->post('c24'),
            'C25'           => $this->input->post('c25'),

            'C31'           => $this->input->post('c31'),
            'C32'           => $this->input->post('c32'),
            'C33'           => $this->input->post('c33'),
            'C34'           => $this->input->post('c34'),
            'C35'           => $this->input->post('c35'),

            'C41'           => $this->input->post('c41'),
            'C42'           => $this->input->post('c42'),
            'C43'           => $this->input->post('c43'),
            'C44'           => $this->input->post('c44'),
            'C45'           => $this->input->post('c45'),

            'C51'           => $this->input->post('c51'),
            'C52'           => $this->input->post('c52'),
            'C53'           => $this->input->post('c53'),
            'C54'           => $this->input->post('c54'),
            'C55'           => $this->input->post('c55'),
        );

        $x = 0;
        foreach ($table as $key => $value) {
            $this->db->insert($value, $data[$x++]);
        }

        $simpan = $this->db->insert($table, $data);
        if ($simpan) {
            $output = array('status' => true);
        } else {
            $output = array('status' => false);
        }
        echo json_encode($output);
    }
}
