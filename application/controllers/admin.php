<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');

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
        $this->load->view('v_modals');
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

    public function load_datauser()
    {
        $data['title'] = "Home Admin";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['anggota'] = $this->m_admin->get_table('anggota')->result();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_datauser_admin', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function load_dataadmin()
    {
        $data['title'] = "Home Admin";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['admin'] = $this->m_admin->get_table('admin')->result();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_dataadmin_admin', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function add_datauser()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        $data = array(
            'nama_anggota' => $nama,
            'username' => $username,
            'password' => md5($password),
            'email_anggota' => $email
        );
        $this->m_admin->add_table('anggota', $data);
        redirect(base_url('admin/load_datauser'));
    }

    public function delete_user($id)
    {
        $where = array('id' => $id);
        $this->m_admin->delete_table($where, 'anggota');
        redirect(base_url('admin/load_datauser'));
    }

    public function edit_user($id)
    {
        $where = array('id' => $id);
        $data['title'] = "Edit User";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['user'] = $this->m_admin->edit_table($where, 'anggota')->result();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_edituser_admin', $data);
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function update_user()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = array(
            'nama_anggota' => $nama,
            'username' => $username,
            'password' => md5($password),
            'email_anggota' => $email
        );

        $where = array('id' => $id);

        $this->m_admin->update_table($where, $data, 'anggota');
        redirect(base_url('admin/load_datauser'));
    }

    public function add_dataadmin()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        $data = array(
            'nama_admin' => $nama,
            'username' => $username,
            'password' => md5($password),
            'email_admin' => $email
        );
        $this->m_admin->add_table('admin', $data);
        redirect(base_url('admin/load_dataadmin'));
    }

    public function delete_admin($id)
    {
        $where = array('id' => $id);
        $this->m_admin->delete_table($where, 'admin');
        redirect(base_url('admin/load_dataadmin'));
    }

    public function edit_admin($id)
    {
        $where = array('id' => $id);
        $data['title'] = "Edit User";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['user'] = $this->m_admin->edit_table($where, 'admin')->result();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_editadmin_admin', $data);
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function update_admin()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = array(
            'nama_admin' => $nama,
            'username' => $username,
            'password' => md5($password),
            'email_admin' => $email
        );

        $where = array('id' => $id);

        $this->m_admin->update_table($where, $data, 'admin');
        redirect(base_url('admin/load_dataadmin'));
    }
}
