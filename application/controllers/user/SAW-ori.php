<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SAW extends CI_Controller
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
        $data = [
            'user_id' => $this->session->userdata('id'),
            'title' => 'Hasil Perbandingan SAW',
            'name' => $this->session->userdata('nama'),
            'conten' => 'conten/hasil_saw',
            'bobot' => $this->m_data->bobot_kriteria($this->session->userdata('id')),
            'footer_js' => array(
                // 'assets/js/SAW.js'
            )
        ];
        $this->load->view('template/conten', $data);
    }

    public function simpan_alt()
    {
        $table = 'tbl_alt_saw';
        $data = array(
            'jarak_1'   => $this->input->post('jar0'),
            'jarak_2'   => $this->input->post('jar1'),
            'jarak_3'   => $this->input->post('jar2'),
            'jarak_4'   => $this->input->post('jar3'),
            'jarak_5'   => $this->input->post('jar4'),
            'jarak_6'   => $this->input->post('jar5'),
            'ref1'  => $this->input->post('ref1'),
            'ref2'  => $this->input->post('ref2'),
            'ref3'  => $this->input->post('ref3'),
            'ref4'  => $this->input->post('ref4'),
            'ref5'  => $this->input->post('ref5'),
            'ref6'  => $this->input->post('ref6'),
            'fk_user' => $this->input->post('user')
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
