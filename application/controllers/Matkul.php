<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Matkul extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if($this->session->userdata('logged') !=TRUE){
            redirect('auth');
		};
        $this->load->model('m_matkul');
        $this->load->model('m_dosen');
    }

    public function index()
    {
        $data['title'] = "Mata Kuliah";
        $data['subtitle'] = "Manajemen Data Mata Kuliah";
        $data['matkuls'] = $this->m_matkul->tampil_data()->result_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/matkul/v_matkul', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function tambah()
    {
        $data['title'] = "Mata Kuliah";
        $data['subtitle'] = "Manajemen Data Mata Kuliah";

        $data['dosen'] = $this->m_dosen->tampil_data()->result_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/matkul/v_matkul_tambah', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function insert()
    {
        $nama_matkul = $this->input->post('nama_matkul', TRUE);
        $jml_sks = $this->input->post('jml_sks', TRUE);
        $dosen = $this->input->post('dosen', TRUE);

        $data = array(
            'nama_matkul' => $nama_matkul,
            'jml_sks' => $jml_sks,
            'id_dosen'=> $dosen
        );
        $this->m_matkul->insert_data($data);
        redirect('matkul');
    }

    public function edit($id)
    {
        $data['title'] = 'Mata Kuliah';
        $data['subtitle'] = 'Edit Data Mata Kuliah';

        $data['dosen'] = $this->m_dosen->tampil_data()->result_array();

        $where = array('id_matkul' => $id);
        $data['matkul'] = $this->m_matkul->edit_data($where)->row_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/matkul/v_matkul_edit', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function update()
    {
        $id_matkul = $this->input->post('id_matkul', true);
        $nama_matkul = $this->input->post('nama_matkul', true);
        $jml_sks = $this->input->post('jml_sks', true);
        $dosen = $this->input->post('dosen', true);

        $data = array(
            'nama_matkul' => $nama_matkul,
            'jml_sks'=> $jml_sks,
            'id_dosen'=> $dosen
        );

        $where = array('id_matkul' => $id_matkul);

        $this->m_matkul->update_data($data, $where);
        redirect('matkul');
    }

    public function hapus($id)
    {
        $where = array('id_matkul'=> $id);

        $this->m_matkul->hapus_data($where);
        redirect('matkul');
    }
}