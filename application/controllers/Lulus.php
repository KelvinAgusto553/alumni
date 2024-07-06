<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Lulus extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('auth');
            redirect($url);
		};
        $this->load->model('m_lulus');
        $this->load->model('m_alumni');
    }

    public function index()
    {
        $data['title'] = 'Alumni';
        $data['subtitle'] = 'Manajemen Data Alumni';
        $data['luluss'] = $this->m_lulus->tampil_data()->result_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/lulus/v_lulus', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function tambah()
    {
        $data['title'] = "Kelulusan";
        $data['subtitle'] = "Tambah Mahasiswa";

        $data["alumni"] = $this->m_alumni->tampil_data()->result_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/lulus/v_lulus_tambah', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function insert()
    {
        $alumni = $this->input->post('alumni', TRUE);
        $status = $this->input->post('status', TRUE);

        $data = array(
            'id_alumni' => $alumni,
            'status' => $status
        );
        $this->m_lulus->insert_data($data);
        redirect('lulus');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data Lulusan';
        $data['subtitle'] = 'Edit Data';

        $data['alumni'] = $this->m_alumni->tampil_data()->result_array();

        $where = array('id_lulus' => $id);
        $data['lulus'] = $this->m_lulus->edit_data($where)->row_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/lulus/v_lulus_edit', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function update()
    {
        $id_lulus = $this->input->post('id_lulus', true);
        $alumni = $this->input->post('alumni', true);
        $status = $this->input->post('status', true);

        $data = array(
            'id_alumni' => $alumni,
            'status' => $status
        );

        $where = array('id_lulus' => $id_lulus);

        $this->m_lulus->update_data($data, $where);
        redirect('lulus');
    }

    public function hapus($id)
    {
        $where = array('id_lulus'=> $id);

        $this->m_lulus->hapus_data($where);
        redirect('lulus');
    }

    public function tampil_reuni()
    {
        $data['title'] = 'Reuni';
        $data['subtitle'] = 'Reuni';
        $data['luluss'] = $this->m_lulus->tampil_data()->result_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/reuni/v_reuni', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function print($id)
    {
        $data['a'] = $this->m_lulus->cetak_invoice($id)->row_array();

        $this->load->view('admin/invoice/invoice_print', $data);
    }
}