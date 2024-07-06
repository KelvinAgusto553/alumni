<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class M_dashboard extends CI_Model {
    public function jumlah_user()
    {
        // $this->db->select_sum('user');
        $query = $this->db->get('user');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function jumlah_alumni()
    {
        // $this->db->select_sum('user');
        $query = $this->db->get('alumni');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function jumlah_dosen()
    {
        // $this->db->select_sum('user');
        $query = $this->db->get('dosen');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_matkul()
    {
        // $this->db->select_sum('user');
        $query = $this->db->get('matkul');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}