<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Dosen extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        if($this->session->userdata('logged') !=TRUE){
            redirect('auth');
		}
        $this->load->model('m_dosen');
    }

    function index() 
    {
        $data['title'] = 'Dosen';
        $data['subtitle'] = 'Manajemen Data Dosen';
        $data['dosens'] = $this->m_dosen->tampil_data()->result_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/dosen/v_dosen', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function tambah()
    {
        $data['title'] = "Dosen";
        $data['subtitle'] = "Tambah Dosen";

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/dosen/v_dosen_tambah', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function insert()
    {
        $nama_dosen = $this->input->post('nama_dosen', TRUE);
        $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);

        $data = array(
            'nama_dosen' => $nama_dosen,
            'jenis_kelamin' => $jenis_kelamin
        );
        $this->m_dosen->insert_data($data);
        redirect('dosen');
    }

    public function edit($id)
    {
        $data['title'] = 'Dosen';
        $data['subtitle'] = 'Edit Data Dosen';

        $where = array('id_dosen' => $id);
        $data['dosen'] = $this->m_dosen->edit_data($where)->row_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/dosen/v_dosen_edit', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function update()
    {
        $id_dosen = $this->input->post('id_dosen', TRUE);
        $nama_dosen = $this->input->post('nama_dosen', TRUE);
        $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);

        $data = array(
            'nama_dosen' => $nama_dosen,
            'jenis_kelamin'=> $jenis_kelamin,
        );

        $where = array('id_dosen' => $id_dosen);

        $this->m_dosen->update_data($data, $where);
        redirect('dosen');
    }

    public function hapus($id)
    {
        $where = array('id_dosen'=> $id);

        $this->m_dosen->hapus_data($where);
        redirect('dosen');
    }
}