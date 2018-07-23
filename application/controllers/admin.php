<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $role = $this->session->userdata('role');
        $status = $this->session->userdata('status');

        if($status != "login"){
            redirect(base_url('login/login_admin'));
        }elseif($role == "2") {
            redirect(base_url('user/mohon_maaf'));
        }
    }

    public function index()
    {
        $data['title'] = "Home Admin";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_home_admin', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
    }

    public function aksi_upload()
    {
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('gambar', $config);

        if ( ! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/v_home_admin', $error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('admin/v_home_admin', $data);
        }
    }
}
