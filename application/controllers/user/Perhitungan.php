<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
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
            'name'  => $this->session->userdata('nama'),
            'title' => 'Perhitungan',
            'conten' => 'user/perhitungan',
            'desa' => $this->m_data->get_data('tbl_master_desa'),
            'alt' => $this->m_data->get_data('tbl_master_alternatif'),
            'bobot' => $this->m_data->get_data('tbl_master_bobot'),
            'saw' => $this->m_data->get_data('tbl_master_saw'),
            'footer_js'  => array(
                'assets/js/jarak.js',
            ),
        ];
        $this->load->view('template/conten_user', $data);
    }

    public function cari()
    {
        $kode = $_GET['kode'];
        $cari = $this->M_data->cari($kode)->result();
        echo json_encode($cari);
    }

    public function hasil_perhitungan()
    {
        $c11 = 1;
        $c12 = $_POST['c12'];
        $c13 = $_POST['c13'];
        $c14 = $_POST['c14'];
        $c15 = $_POST['c15'];

        $c21 = $c11 / $c12;
        $c22 = 1;
        $c23 = $_POST['c23'];
        $c24 = $_POST['c24'];
        $c25 = $_POST['c25'];

        $c31 = $c11 / $c13;
        $c32 = $c22 / $c23;
        $c33 = 1;
        $c34 = $_POST['c34'];
        $c35 = $_POST['c35'];

        $c41 = $c11 / $c14;
        $c42 = $c22 / $c24;
        $c43 = $c33 / $c34;
        $c44 = 1;
        $c45 = $_POST['c45'];

        $c51 = $c11 / $c15;
        $c52 = $c22 / $c25;
        $c53 = $c33 / $c35;
        $c54 = $c44 / $c45;
        $c55 = 1;

        $jum1 = $c11 + $c21 + $c31 + $c41 + $c51;
        $jum2 = $c12 + $c22 + $c32 + $c42 + $c52;
        $jum3 = $c13 + $c23 + $c33 + $c43 + $c53;
        $jum4 = $c14 + $c24 + $c34 + $c44 + $c54;
        $jum5 = $c15 + $c25 + $c35 + $c45 + $c55;

        // eigan1
        $e11 = $c11 / $jum1;
        $e21 = $c21 / $jum1;
        $e31 = $c31 / $jum1;
        $e41 = $c41 / $jum1;
        $e51 = $c51 / $jum1;
        // eigan2
        $e12 = $c12 / $jum2;
        $e22 = $c22 / $jum2;
        $e32 = $c32 / $jum2;
        $e42 = $c42 / $jum2;
        $e52 = $c52 / $jum2;
        // eigan3
        $e13 = $c13 / $jum3;
        $e23 = $c23 / $jum3;
        $e33 = $c33 / $jum3;
        $e43 = $c43 / $jum3;
        $e53 = $c53 / $jum3;
        // eigan4
        $e14 = $c14 / $jum4;
        $e24 = $c24 / $jum4;
        $e34 = $c34 / $jum4;
        $e44 = $c44 / $jum4;
        $e54 = $c54 / $jum4;
        // eigan5
        $e15 = $c15 / $jum5;
        $e25 = $c25 / $jum5;
        $e35 = $c35 / $jum5;
        $e45 = $c45 / $jum5;
        $e55 = $c55 / $jum5;

        // rata2
        $rata1 = ($e11 + $e12 + $e13 + $e14 + $e15) / 5;
        $rata2 = ($e21 + $e22 + $e23 + $e24 + $e25) / 5;
        $rata3 = ($e31 + $e32 + $e33 + $e34 + $e35) / 5;
        $rata4 = ($e41 + $e42 + $e43 + $e44 + $e45) / 5;
        $rata5 = ($e51 + $e52 + $e53 + $e54 + $e55) / 5;


        $data = [
            'user_id' => $this->session->userdata('id'),
            'title' => 'Hasil Perbandingan SAW',
            'name' => $this->session->userdata('nama'),
            'conten' => 'user/hasil_perhitungan',
            'ahp' => $this->m_data->bobot_kriteria($this->session->userdata('id')),
            'footer_js' => array(
                'assets/js/SAW.js'
            ),
            'rata' => array($rata1, $rata2, $rata3, $rata4, $rata5),
        ];
        $this->load->view('template/conten_user', $data);
    }
}
