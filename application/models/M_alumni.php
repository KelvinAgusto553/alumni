<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class M_alumni extends CI_Model {
    function tampil_data()
    {
        return $this->db->get("alumni");
    }

    function insert_data($data)
    {
        return $this->db->insert('alumni', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('alumni', $where);
    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('alumni', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('alumni');
    }
}