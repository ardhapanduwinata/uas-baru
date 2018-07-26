<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_user');

        $this->load->helper(array('form', 'url'));
        $role = $this->session->userdata('role');
        $status = $this->session->userdata('status');

        if($status != "login"){
            redirect(base_url('v_home'));
        }elseif($role == "1"){
            redirect(base_url('user/mohon_maaf'));
        }
    }

    public function index()
    {
        $data['title'] = "Home User";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['buku'] = $this->m_user->get_table('buku')->result();

        $this->load->view('header&footer/header', $data);
        $this->load->view('user/v_home_user', $data);
        $this->load->view('header&footer/footer');
        $this->load->view('v_modals');
    }

    public  function mohon_maaf()
    {
        $data['title'] = "Mohon Maaf";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');

        $this->load->view('header&footer/header', $data);
        $this->load->view('mohon_maaf', $data);
        $this->load->view('header&footer/footer');
    }

    public function manage_profile()
    {
        $data['title'] = "Manage Profile";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');

        $this->load->view('header&footer/header_user', $data);
        $this->load->view('user/v_manage_profile_user', $data);
    }

    public function daftar_buku()
    {
        $data['title'] = "Manager";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
//        $data['anggota'] = $this->m_admin->get_table('anggota')->result();

        $this->load->view('header&footer/header_user', $data);
        $this->load->view('user/v_daftarbuku_user', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function peminjaman()
    {
        $data['title'] = "Manager";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
//        $data['anggota'] = $this->m_admin->get_table('anggota')->result();

        $this->load->view('header&footer/header_user', $data);
        $this->load->view('user/v_peminjaman_user', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function riwayat()
    {
        $data['title'] = "Manager";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
//        $data['anggota'] = $this->m_admin->get_table('anggota')->result();

        $this->load->view('header&footer/header_user', $data);
        $this->load->view('user/v_riwayat_user', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function details_buku($id)
    {
        $where = array('id' => $id);
        $data['title'] = "Details";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['buku'] = $this->m_user->getwhere_table($where ,'buku')->result();

        $this->load->view('header&footer/header', $data);
        $this->load->view('user/v_details_user', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function save_session()
    {
        $nama = $this->input->post('nama');
        $role = $this->input->post('role');

        $data_session = array(
            'nama' => $nama,
            'status' => 'login',
            'role' => $role
        );
        $this->session->set_userdata($data_session);

        redirect(base_url('user/manage_profile'));
    }
}
