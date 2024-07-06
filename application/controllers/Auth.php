<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_login', 'm_login');
    }

    public function index()
    {
        if($this->session->userdata('logged') !=TRUE){
            $this->load->view('auth/v_login');
        }else{
            $url=base_url('home');
            redirect($url);
        };
    }

    function autentikasi()
    {
        $username = $this->input->post('username');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $password = $this->input->post('password');

        $validasi_email = $this->m_login->cek_email($username);
        if($validasi_email->num_rows() > 0) {
            $validate_ps = $this->m_login->cek_password($username, $password);
            $x = $validate_ps->row_array();
            if($x['status'] == '1') {
                $this->session->set_userdata('logged', TRUE);
                $this->session->set_userdata('username', $username);
                $id=$x['id'];
                if($x['usertype'] == '1') {
                    $username = $x['username'];
                    $nama_lengkap = $x['nama_lengkap'];
                    $this->session->set_userdata('id', $id);
                    $this->session->set_userdata('username', $username);
                    $this->session->set_userdata('nama_lengkap', $nama_lengkap);
                    redirect('dashboard');

                } elseif ($x['usertype'] == '2') {
                    $nama = $x['nama'];
                    $this->session->set_userdata('access', 'Dokter');
                    $this->session->set_userdata('id', $id);
                    $this->session->set_userdata('nama', $nama);
                    redirect('r');
                    
                } elseif ($x['usertype'] == '3') {
                    $nama = $x['nama'];
                    $this->session->set_userdata('access', 'Mahasiswa');
                    $this->session->set_userdata('id', $id);
                    $this->session->set_userdata('nama', $nama);
                    redirect('a');
                }
            } else {
                $url=base_url('auth');
                echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
                <h3>Uupps!</h3>
                <p>Akun kamu telah di blokir. Silahkan hubungi admin.</p>');
                redirect($url);
            }
        } else {
            $url=base_url('auth');
                echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Uupps!</h3>
                    <p>Password yang kamu masukan salah.</p>');
                redirect($url);
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}