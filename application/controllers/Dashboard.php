<?php


class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('auth');
            redirect($url);
		};
        $this->load->model('m_dashboard');
        $this->load->model('m_login');
    }

    public function index()
    {
        $data['total_user'] = $this->m_dashboard->jumlah_user();
        $data['total_alumni'] = $this->m_dashboard->jumlah_alumni();
        $data['total_dosen'] = $this->m_dashboard->jumlah_dosen();
        $data['total_matkul'] = $this->m_dashboard->jumlah_matkul();

        $this->load->view("admin/layout/v_header");
        $this->load->view("admin/layout/sidebar");
        $this->load->view("admin/navbar/navbar");
        $this->load->view("admin/dashboard/dashboard", $data);
        $this->load->view("admin/layout/v_footer");
    }
}