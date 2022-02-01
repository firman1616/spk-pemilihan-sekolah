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

            'master_saw' => $this->m_data->get_data('tbl_master_saw'),
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

        // SAW
        // fasilitas
        $fa1 = array();
        for ($a = 0; $a < 6; $a++) {
            array_push($fa1, $_POST['fas' . $a]);
        }

        // akreditasi
        $akre = array();
        for ($b = 0; $b < 6; $b++) {
            array_push($akre, $_POST['akr' . $b]);
        }

        // Biaya
        $duit = array();
        for ($c = 0; $c < 6; $c++) {
            array_push($duit, $_POST['bia' . $c]);
        }

        // beasiswa
        $bonus = array();
        for ($d = 0; $d < 6; $d++) {
            array_push($bonus, $_POST['bea' . $d]);
        }

        // Jarak Sekolah
        $jar = array();
        for ($e = 0; $e < 6; $e++) {
            array_push($jar, $_POST['jarak' . $e]);
        }

        // $ahp = $this->m_data->bobot_kriteria($this->session->userdata('id'))->row_array();

        $ref1 = ($rata1 * ($fa1[0] / max($fa1))) + ($rata2 * ($akre[0] / max($akre))) + ($rata3 * (min($duit) / $duit[0])) + ($rata4 * ($bonus[0] / max($bonus))) + ($rata5 * (min($jar) / $jar[0]));

        $ref2 = ($rata1 * ($fa1[1] / max($fa1))) + ($rata2 * ($akre[1] / max($akre))) + ($rata3 * (min($duit) / $duit[1])) + ($rata4 * ($bonus[1] / max($bonus))) + ($rata5 * (min($jar) / $jar[1]));

        $ref3 = ($rata1 * ($fa1[2] / max($fa1))) + ($rata2 * ($akre[2] / max($akre))) + ($rata3 * (min($duit) / $duit[2])) + ($rata4 * ($bonus[2] / max($bonus))) + ($rata5 * (min($jar) / $jar[2]));

        $ref4 = ($rata1 * ($fa1[3] / max($fa1))) + ($rata2 * ($akre[3] / max($akre))) + ($rata3 * (min($duit) / $duit[3])) + ($rata4 * ($bonus[3] / max($bonus))) + ($rata5 * (min($jar) / $jar[3]));

        $ref5 = ($rata1 * ($fa1[4] / max($fa1))) + ($rata2 * ($akre[4] / max($akre))) + ($rata3 * (min($duit) / $duit[4])) + ($rata4 * ($bonus[4] / max($bonus))) + ($rata5 * (min($jar) / $jar[4]));

        $ref6 = ($rata1 * ($fa1[5] / max($fa1))) + ($rata2 * ($akre[5] / max($akre))) + ($rata3 * (min($duit) / $duit[5])) + ($rata4 * ($bonus[5] / max($bonus))) + ($rata5 * (min($jar) / $jar[5]));

        $data = [
            'user_id' => $this->session->userdata('id'),
            'title' => 'Hasil Perbandingan SAW',
            'name' => $this->session->userdata('nama'),
            'conten' => 'user/hasil_perhitungan',
            'ahp' => $this->m_data->bobot_kriteria($this->session->userdata('id')),
            'footer_js' => array(
                'assets/js/simpan_user.js'
            ),
            'rata' => array($rata1, $rata2, $rata3, $rata4, $rata5),
            'maxfa1' => $fa1[0] / max($fa1),
            'maxfa2' => $fa1[1] / max($fa1),
            'maxfa3' => $fa1[2] / max($fa1),
            'maxfa4' => $fa1[3] / max($fa1),
            'maxfa5' => $fa1[4] / max($fa1),
            'maxfa6' => $fa1[5] / max($fa1),

            'akre1' => $akre[0] / max($akre),
            'akre2' => $akre[1] / max($akre),
            'akre3' => $akre[2] / max($akre),
            'akre4' => $akre[3] / max($akre),
            'akre5' => $akre[4] / max($akre),
            'akre6' => $akre[5] / max($akre),

            'duit1' => min($duit) / $duit[0],
            'duit2' => min($duit) / $duit[1],
            'duit3' => min($duit) / $duit[2],
            'duit4' => min($duit) / $duit[3],
            'duit5' => min($duit) / $duit[4],
            'duit6' => min($duit) / $duit[5],

            'bonus1' => $bonus[0] / max($bonus),
            'bonus2' => $bonus[1] / max($bonus),
            'bonus3' => $bonus[2] / max($bonus),
            'bonus4' => $bonus[3] / max($bonus),
            'bonus5' => $bonus[4] / max($bonus),
            'bonus6' => $bonus[5] / max($bonus),

            'jarak1' => min($jar) / $jar[0],
            'jarak2' => min($jar) / $jar[1],
            'jarak3' => min($jar) / $jar[2],
            'jarak4' => min($jar) / $jar[3],
            'jarak5' => min($jar) / $jar[4],
            'jarak6' => min($jar) / $jar[5],

            'c11' => 1,
            'c12' => $_POST['c12'],
            'c13' => $_POST['c13'],
            'c14' => $_POST['c14'],
            'c15' => $_POST['c15'],

            'c21' => $c11 / $c12,
            'c22' => 1,
            'c23' => $_POST['c23'],
            'c24' => $_POST['c24'],
            'c25' => $_POST['c25'],

            'c31' => $c11 / $c13,
            'c32' => $c22 / $c23,
            'c33' => 1,
            'c34' => $_POST['c34'],
            'c35' => $_POST['c35'],

            'c41' => $c11 / $c14,
            'c42' => $c22 / $c24,
            'c43' => $c33 / $c34,
            'c44' => 1,
            'c45' => $_POST['c45'],

            'c51' => $c11 / $c15,
            'c52' => $c22 / $c25,
            'c53' => $c33 / $c35,
            'c54' => $c44 / $c45,
            'c55' => 1,

            'dis1' => $jar,

            'desa' => $_POST['desa']


        ];
        $this->load->view('template/conten_user', $data);
    }

    public function simpan_data()
    {
        $this->load->model('M_data');
        $table = array('tbl_bobot_kriteria', 'tbl_kriteria', 'tbl_alt_saw2');

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

        $data[] = array(
            'fk_desa' => $this->input->post('desa'),
            'fk_user' => $this->input->post('user'),
            'jarak_1' => $this->input->post('jar0'),
            'jarak_2' => $this->input->post('jar1'),
            'jarak_3' => $this->input->post('jar2'),
            'jarak_4' => $this->input->post('jar3'),
            'jarak_5' => $this->input->post('jar4'),
            'jarak_6' => $this->input->post('jar5'),
            'ref1' => $this->input->post('ref1'),
            'ref2' => $this->input->post('ref2'),
            'ref3' => $this->input->post('ref3'),
            'ref4' => $this->input->post('ref4'),
            'ref5' => $this->input->post('ref5'),
            'ref6' => $this->input->post('ref6'),
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
