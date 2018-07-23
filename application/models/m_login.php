<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    function __construct()
    {
        parent::__construct();

    }

    public function tambah_user($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function tampil_user()
    {
        return $this->db->get('anggota');
    }

    public function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }
}
