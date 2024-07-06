<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class M_dosen extends CI_Model {
    function tampil_data()
    {
        return $this->db->get("dosen");
    }

    function insert_data($data)
    {
        return $this->db->insert('dosen', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('dosen', $where);
    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('dosen', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('dosen');
    }
}