<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Report extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('auth');
            redirect($url);
		};
        $this->load->model('m_alumni');
        $this->load->model('m_dosen');
        $this->load->model('m_matkul');
    }

    public function data_alumni()
    {
        $data['title'] = "Laporan Alumni";

        $data['alumni'] = $this->m_alumni->tampil_data()->result_array();

        $this->load->view('admin/report/laporan_alumni', $data);
    }
    
    public function data_dosen()
    {
        $data['title'] = "Laporan Dosen";

        $data['dosen'] = $this->m_dosen->tampil_data()->result_array();

        $this->load->view('admin/report/laporan_dosen', $data);
    }

    public function data_matkul()
    {
        $data['title'] = "Laporan Mata Kuliah";

        $data['matkul'] = $this->m_matkul->tampil_data()->result_array();

        $this->load->view('admin/report/laporan_matkul', $data);
    }
    
    public function tgl_indo($tanggal){
        $bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
    );
    $pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
}