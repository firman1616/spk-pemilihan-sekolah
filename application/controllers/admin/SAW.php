<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SAW extends CI_Controller
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
            'title' => 'Perhitungan SAW',
            'conten' => 'conten/saw',
            'bobot' => $this->m_data->bobot_kriteria($this->session->userdata('id')),
            'kriteria' => $this->m_data->get_data('tbl_master_kriteria'),
            'get_data' => $this->m_data->get_master_saw(),
            'desa' => $this->m_data->get_data('tbl_master_desa'),
            'footer_js'        => array(
                'assets/js/hitung.js',
            ),

        ];
        $this->load->view('template/conten', $data);
    }

    public function update_saw($id)
    {
        $table = 'tbl_master_saw';
        $data = array(
            'fasilitas' => $this->input->post('fasilitas'),
            'akreditasi' => $this->input->post('akreditasi'),
            'biaya' => $this->input->post('biaya'),
            'beasiswa' => $this->input->post('beasiswa')
        );
        $where = array('id_master_saw' => $id);
        $this->m_data->update_data($table, $data, $where);
        redirect('admin/SAW');
    }

    public function cari()
    {
        $kode = $_GET['kode'];
        $cari = $this->M_data->cari($kode)->result();
        echo json_encode($cari);
    }

    public function hasil_saw()
    {
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

        $ahp = $this->m_data->bobot_kriteria($this->session->userdata('id'))->row_array();


        $ref1 = ($ahp['r_fasilitas'] * ($fa1[0] / max($fa1))) + ($ahp['r_akreditasi'] * ($akre[0] / max($akre))) + ($ahp['r_biaya'] * (min($duit) / $duit[0])) + ($ahp['r_beasiswa'] * ($bonus[0] / max($bonus))) + ($ahp['r_jarak'] * (min($jar) / $jar[0]));

        $ref2 = ($ahp['r_fasilitas'] * ($fa1[1] / max($fa1))) + ($ahp['r_akreditasi'] * ($akre[1] / max($akre))) + ($ahp['r_biaya'] * (min($duit) / $duit[1])) + ($ahp['r_beasiswa'] * ($bonus[1] / max($bonus))) + ($ahp['r_jarak'] * (min($jar) / $jar[1]));

        $ref3 = ($ahp['r_fasilitas'] * ($fa1[2] / max($fa1))) + ($ahp['r_akreditasi'] * ($akre[2] / max($akre))) + ($ahp['r_biaya'] * (min($duit) / $duit[2])) + ($ahp['r_beasiswa'] * ($bonus[2] / max($bonus))) + ($ahp['r_jarak'] * (min($jar) / $jar[2]));

        $ref4 = ($ahp['r_fasilitas'] * ($fa1[3] / max($fa1))) + ($ahp['r_akreditasi'] * ($akre[3] / max($akre))) + ($ahp['r_biaya'] * (min($duit) / $duit[3])) + ($ahp['r_beasiswa'] * ($bonus[3] / max($bonus))) + ($ahp['r_jarak'] * (min($jar) / $jar[3]));

        $ref5 = ($ahp['r_fasilitas'] * ($fa1[4] / max($fa1))) + ($ahp['r_akreditasi'] * ($akre[4] / max($akre))) + ($ahp['r_biaya'] * (min($duit) / $duit[4])) + ($ahp['r_beasiswa'] * ($bonus[4] / max($bonus))) + ($ahp['r_jarak'] * (min($jar) / $jar[4]));

        $ref6 = ($ahp['r_fasilitas'] * ($fa1[5] / max($fa1))) + ($ahp['r_akreditasi'] * ($akre[5] / max($akre))) + ($ahp['r_biaya'] * (min($duit) / $duit[5])) + ($ahp['r_beasiswa'] * ($bonus[5] / max($bonus))) + ($ahp['r_jarak'] * (min($jar) / $jar[5]));



        $data = [
            'user_id' => $this->session->userdata('id'),
            'title' => 'Hasil Perbandingan SAW',
            'name' => $this->session->userdata('nama'),
            'conten' => 'conten/hasil_saw',
            'ahp' => $this->m_data->bobot_kriteria($this->session->userdata('id')),
            'footer_js' => array(
                // 'assets/js/SAW.js'
            ),
            'fasi1' => $fa1,
            'fasmax' => max($fa1),
            'fasmin' => min($fa1),
            'fas0' => $fa1[0] / max($fa1),
            'fas1' => $fa1[1] / max($fa1),
            'fas2' => $fa1[2] / max($fa1),
            'fas3' => $fa1[3] / max($fa1),
            'fas4' => $fa1[4] / max($fa1),
            'fas5' => $fa1[5] / max($fa1),

            'akred1' => $akre,
            'akremax' => max($akre),
            'akremin' => min($akre),
            'akr0' => $akre[0] / max($akre),
            'akr1' => $akre[1] / max($akre),
            'akr2' => $akre[2] / max($akre),
            'akr3' => $akre[3] / max($akre),
            'akr4' => $akre[4] / max($akre),
            'akr5' => $akre[5] / max($akre),

            'duit1' => $duit,
            'duitmax' => max($duit),
            'duitmin' => min($duit),
            'spp0' => min($duit) / $duit[0],
            'spp1' => min($duit) / $duit[1],
            'spp2' => min($duit) / $duit[2],
            'spp3' => min($duit) / $duit[3],
            'spp4' => min($duit) / $duit[4],
            'spp5' => min($duit) / $duit[5],

            'bonus1' => $bonus,
            'bonusmax' => max($bonus),
            'bonusmin' => min($bonus),
            'bantuan0' => $bonus[0] / max($bonus),
            'bantuan1' => $bonus[1] / max($bonus),
            'bantuan2' => $bonus[2] / max($bonus),
            'bantuan3' => $bonus[3] / max($bonus),
            'bantuan4' => $bonus[4] / max($bonus),
            'bantuan5' => $bonus[5] / max($bonus),

            'jarak1' => $jar,
            'jarakmax' => max($jar),
            'jarakmin' => min($jar),
            'km0' => min($jar) / $jar[0],
            'km1' => min($jar) / $jar[1],
            'km2' => min($jar) / $jar[2],
            'km3' => min($jar) / $jar[3],
            'km4' => min($jar) / $jar[4],
            'km5' => min($jar) / $jar[5],

            'bobot0' => $ahp['r_fasilitas'],
            'bobot1' => $ahp['r_akreditasi'],
            'bobot2' => $ahp['r_biaya'],
            'bobot3' => $ahp['r_beasiswa'],
            'bobot4' => $ahp['r_jarak'],

            'ref0' => $ref1,
            'ref1' => $ref2,
            'ref2' => $ref3,
            'ref3' => $ref4,
            'ref4' => $ref5,
            'ref5' => $ref6,

        ];

        $this->load->view('template/conten', $data);
    }

    public function simpan_data()
    {
        $table = 'tbl_alt_saw2';
        $data = array();
    }
}
