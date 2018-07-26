<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function add_table($table, $data){
        $this->db->insert($table, $data);
    }

    public function get_table($table){
        return $this->db->get($table);
    }

    public function delete_table($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_table($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update_table($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function join_buku()
    {
        $this->db->select('*');
        $this->db->from('buku b');
        $this->db->join('kategori k', 'k.id = b.id_kategori', 'left');
        $this->db->join('penerbit p', 'p.id = b.id_penerbit', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }
}
