<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Alumni extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('auth');
            redirect($url);
		};

        $this->load->model("m_alumni");
    }

    function index() 
    {
        $data['title'] = 'Alumni';
        $data['subtitle'] = 'Manajemen Data Alumni';
        $data['alumnis'] = $this->m_alumni->tampil_data()->result_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar', $data);
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/alumni/v_alumni', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function tambah()
    {
        $data['title'] = "Alumni";
        $data['subtitle'] = "Add Alumni";

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/alumni/v_alumni_tambah', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function insert()
    {
        $nama_alumni = $this->input->post('nama_alumni', TRUE);
        $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $kecamatan = $this->input->post('kecamatan', TRUE);
        $kota = $this->input->post('kota', TRUE);
        $kode_pos = $this->input->post('kode_pos', TRUE);
        $program_studi = $this->input->post('program_studi', TRUE);
        $angkatan = $this->input->post('angkatan', TRUE);
        $tanggal_masuk = $this->input->post('tanggal_masuk', TRUE);
        $tanggal_lulus = $this->input->post('tanggal_lulus', TRUE);

        $data = array(
            'nama_alumni' => $nama_alumni,
            'jenis_kelamin'=> $jenis_kelamin,
            'alamat'=> $alamat,
            'kecamatan'=> $kecamatan,
            'kota'=> $kota,
            'kode_pos'=> $kode_pos,
            'program_studi'=> $program_studi,
            'angkatan'=> $angkatan,
            'tanggal_masuk' => $tanggal_masuk,
            'tanggal_lulus'=> $tanggal_lulus
        );
        $this->m_alumni->insert_data($data);
        redirect('alumni');
    }

    public function edit($id)
    {
        $data['title'] = 'Alumni';
        $data['subtitle'] = 'Edit Data Alumni';

        $where = array('id_alumni' => $id);
        $data['alumni'] = $this->m_alumni->edit_data($where)->row_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/alumni/v_alumni_edit', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function update()
    {
        $id_alumni = $this->input->post('id_alumni', TRUE);
        $nama_alumni = $this->input->post('nama_alumni', TRUE);
        $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $kecamatan = $this->input->post('kecamatan', TRUE);
        $kota = $this->input->post('kota', TRUE);
        $kode_pos = $this->input->post('kode_pos', TRUE);
        $program_studi = $this->input->post('program_studi', TRUE);
        $angkatan = $this->input->post('angkatan', TRUE);
        $tanggal_masuk = $this->input->post('tanggal_masuk', TRUE);
        $tanggal_lulus = $this->input->post('tanggal_lulus', TRUE);

        $data = array(
            'nama_alumni' => $nama_alumni,
            'jenis_kelamin'=> $jenis_kelamin,
            'alamat'=> $alamat,
            'kecamatan'=> $kecamatan,
            'kota'=> $kota,
            'kode_pos'=> $kode_pos,
            'program_studi'=> $program_studi,
            'angkatan'=> $angkatan,
            'tanggal_masuk' => $tanggal_masuk,
            'tanggal_lulus'=> $tanggal_lulus
        );

        $where = array('id_alumni' => $id_alumni);

        $this->m_alumni->update_data($data, $where);
        redirect('alumni');
    }

    public function hapus($id)
    {
        $where = array('id_alumni'=> $id);

        $this->m_alumni->hapus_data($where);
        redirect('alumni');
    }
}