<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('m_login');
    }

    public  function login_admin()
    {
        $data['title'] = "Login Admin";

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_login_admin', $data);
        $this->load->view('header&footer/footer_admin');
    }

    public  function login_anggota()
    {
        $data['title'] = "Login Anggota";

        $this->load->view('header&footer/header', $data);
        $this->load->view('login/v_login');
        $this->load->view('header&footer/footer', $data);
    }

    public function tampil_signup()
    {
        $data['user'] = $this->m_login->tampil_signup()->result();
        $this->load->view('login/v_tampil_signup', $data);
    }

    public function signup()
    {
        $data['title'] = "Sign up";

        $this->load->view('header&footer/header', $data);
        $this->load->view('login/v_input_signup', $data);
        $this->load->view('header&footer/footer');
    }

    public function aksi_signup()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $role = $this->input->post('role');

        $where = array(
            'username' => $username,
            'password' => md5($password)
        );

        $data = array(
            'nama_anggota' => $nama,
            'username' => $username,
            'password' => md5($password),
            'email_anggota' => $email,
        );

        $this->m_login->tambah_user('anggota', $data);

        $cek = $this->m_login->cek_login('anggota',$where)->num_rows();

        if($cek > 0){
            $data_session = array(
                'nama' => $nama,
                'status' => 'login',
                'role' => $role
            );

            $this->session->set_userdata($data_session);

            redirect(base_url('user'));

        }
        redirect('home');
    }

    function aksi_login_anggota(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');

        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login('anggota',$where)->num_rows();

        if($cek > 0){
            $data_session = array(
                'nama' => $username,
                'status' => 'login',
                'role' => $role
            );

            $this->session->set_userdata($data_session);

            redirect(base_url('user'));

        }else{
            echo "Username dan password salah !";
        }
    }

    function aksi_login_admin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');

        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login('admin',$where)->num_rows();

        if($cek > 0){
            $data_session = array(
                'nama' => $username,
                'status' => 'login',
                'role' => $role
            );

            $this->session->set_userdata($data_session);

            redirect(base_url('admin'));

        }else{
            echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('home'));
    }
}
