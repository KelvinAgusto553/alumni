<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class M_login extends CI_Model {
    function cek_email($email)
    {
       $result = $this->db->query("SELECT * FROM user WHERE username='$email' LIMIT 1");
       return $result;
    }

    function cek_password($email, $password)
    {
        $result = $this->db->query("SELECT * FROM user WHERE username='$email' AND password=md5('$password') LIMIT 1");
        return $result;
    }

}