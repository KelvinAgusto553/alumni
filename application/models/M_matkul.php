<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class M_matkul extends CI_Model {
    function tampil_data()
    {
        $query = $this->db->query("Select matkul.*,
                                    dosen.nama_dosen
                                From matkul
                                INNER Join dosen ON matkul.id_dosen=dosen.id_dosen");
        return $query;
    }

    function insert_data($data)
    {
        return $this->db->insert('matkul', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('matkul', $where);
    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('matkul', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('matkul');
    }
}