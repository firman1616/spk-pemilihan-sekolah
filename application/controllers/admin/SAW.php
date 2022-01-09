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
            'desa' => $this->m_data->get_data('tbl_master_desa')

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
}
