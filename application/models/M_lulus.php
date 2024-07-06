<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class M_lulus extends CI_Model {
    function tampil_data()
    {
        $query = $this->db->query("Select lulus.*,
                                    alumni.nama_alumni,
                                    alumni.program_studi,
                                    alumni.angkatan
                                From lulus
                                INNER Join alumni ON lulus.id_alumni=alumni.id_alumni");
        return $query;
    }

    function insert_data($data)
    {
        return $this->db->insert('lulus', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('lulus', $where);
    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('lulus', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('lulus');
    }

    function cetak_invoice($id)
    {
        $query = $this->db->query("Select lulus.*,
                                    alumni.nama_alumni,
                                    alumni.alamat,
                                    alumni.kecamatan,
                                    alumni.kota,
                                    alumni.kode_pos,
                                    alumni.telepon
                                From lulus
                                INNER Join alumni ON lulus.id_alumni=alumni.id_alumni
                                WHERE lulus.id_lulus='$id'");
        return $query;     
    }
}