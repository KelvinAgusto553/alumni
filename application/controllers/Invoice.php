<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Invoice extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('auth');
            redirect($url);
		};
    }

    public function index()
    {
        $this->load->view('admin/layout/v_header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/navbar/navbar');
        $this->load->view('admin/invoice/invoice');
        $this->load->view('admin/layout/v_footer');
    }
}