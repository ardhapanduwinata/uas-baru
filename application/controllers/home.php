<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();

        $role = $this->session->userdata('role');
        $status = $this->session->userdata('status');
        if($status == "login" && $role == "2"){
            redirect(base_url('user'));
        } elseif($status == "login" && $role == "1"){
            redirect(base_url('admin'));
        }
    }

	public function index()
	{
        $data['title'] = "Home";
        $data['siapa'] = $this->session->userdata('nama');

        $this->load->view('header&footer/header', $data);
		$this->load->view('v_home', $data);
        $this->load->view('header&footer/footer');
        $this->load->view('v_modals');
	}
}
