<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct(){
        parent::__construct();

        $role = $this->session->userdata('role');
        $status = $this->session->userdata('status');
        if($status != "login"){
            redirect(base_url('login/login_anggota'));
        }elseif($role == "1"){
            redirect(base_url('user/mohon_maaf'));
        }
    }

    public function index()
    {
        $data['title'] = "Home User";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');

        $this->load->view('header&footer/header', $data);
        $this->load->view('user/v_home_user', $data);
        $this->load->view('header&footer/footer');
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
}
