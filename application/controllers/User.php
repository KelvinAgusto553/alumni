<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('auth');
            redirect($url);
		};

        $this->load->model('m_user');
    }

    public function index()
    {
        $data['title'] = 'User Account';
        $data['subtitle'] = 'Manajemen Data User';
        $data['users'] = $this->m_user->tampil_data()->result_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/user/v_user', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function tambah()
    {
        $data['title'] = 'User Account';
        $data['subtitle'] = 'Add User Account';

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/user/v_user_tambah', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function insert()
    {
        $username = $this->input->post('username', true);
        $password = md5($this->input->post('password', true));
        $nama_lengkap = $this->input->post('nama_lengkap', true);
        $status = $this->input->post('status', true);

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama_lengkap' => $nama_lengkap,
            'status' => $status
        );
        $this->m_user->insert_data($data);
        redirect('user');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data User';
        $data['subtitle'] = 'Edit User Account';

        $where = array('id' => $id);
        $data['user'] = $this->m_user->edit_data($where)->row_array();

        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/user/v_user_edit', $data);
        $this->load->view('admin/layout/v_footer');
    }

    public function update()
    {
        $id = $this->input->post('id', true);
        $username = $this->input->post('username', true);
        $nama_lengkap = $this->input->post('nama_lengkap', true);
        $password = md5($this->input->post('password', true));
        $status = $this->input->post('status', true);

        $data = array(
            'username'=> $username,
            'password'=> $password,
            'nama_lengkap'=> $nama_lengkap,
            'status' => $status
        );

        $where = array('id'=> $id);

        $this->m_user->update_data($data, $where);
        redirect('user');
    }

    public function hapus($id)
    {
        $where = array('id'=> $id);

        $this->m_user->hapus_data($where);
        redirect('user');
    }

    public function profile()
    {
        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/user/v_profile');
        $this->load->view('admin/layout/v_footer');
    }
}