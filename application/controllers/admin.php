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

    public function load_databuku()
    {
        $data['title'] = "Home Admin";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['buku'] = $this->m_admin->get_table('buku')->result();
        $data['join'] = $this->m_admin->join_buku();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_databuku_admin', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function delete_buku($id)
    {
        $where = array('id' => $id);
        $this->m_admin->delete_table($where, 'buku');
        redirect(base_url('admin/load_databuku'));
    }

    public function add_databuku()
    {
        $nama = $this->input->post('nama');
        $cover_buku = $_FILES['cover_buku']['name'];
        $sinopsis = $this->input->post('sinopsis');
        $isi = $this->input->post('isi');
        $kategori = $this->input->post('kategori');
        $penerbit = $this->input->post('penerbit');

        if($foto='')
        {

        }
        else
        {
            $config['upload_path']      = 'assets/gambar/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = 100000000000;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('cover_buku'))
            {
                $error=array('error' => $this->upload->display_errors());
                print_r($error); die();
            }
            else
            {
                $data=array(
                    'nama'=>$nama,
                    'cover_buku'=>$cover_buku,
                    'sinopsis'=>$sinopsis,
                    'isi'=>$isi,
                    'id_kategori'=>$kategori,
                    'id_penerbit'=>$penerbit
                );

                $this->m_admin->add_table('buku', $data);
                redirect(base_url('admin/load_databuku'));
            }
        }
    }

    public function edit_buku($id)
    {
        $where = array('id' => $id);
        $data['title'] = "Edit User";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['buku'] = $this->m_admin->edit_table($where, 'buku')->result();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_editbuku_admin', $data);
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function update_buku()
    {
        $id = $this->input->post('id');
        $nama=$this->input->post('nama');
        $cover_buku=$_FILES['cover_buku']['name'];
        $sinopsis=$this->input->post('sinopsis');
        $isi=$this->input->post('isi');
        $kategori = $this->input->post('kategori');
        $penerbit = $this->input->post('penerbit');

        if($foto='')
        {

        }
        else
        {
            $config['upload_path']      = 'assets/gambar/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = 100000000000;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('cover_buku'))
            {
                $error=array('error' => $this->upload->display_errors());
                print_r($error); die();
            }
            else
            {
                $data=array(
                    'nama'=>$nama,
                    'cover_buku'=>$cover_buku,
                    'sinopsis'=>$sinopsis,
                    'isi'=>$isi,
                    'id_kategori'=>$kategori,
                    'id_penerbit'=>$penerbit
                );

                $where = array('id' => $id);

                $this->m_admin->update_table($where, $data, 'buku');
                redirect(base_url('admin/load_databuku'));
            }
        }
    }

    public function load_penerbit()
    {
        $data['title'] = "Home Admin";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['penerbit'] = $this->m_admin->get_table('penerbit')->result();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_datapenerbit_admin', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function add_penerbit()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');

        $data = array(
            'id' => $id,
            'nama' => $nama,
        );
        $this->m_admin->add_table('penerbit', $data);
        redirect(base_url('admin/load_penerbit'));
    }

    public function delete_penerbit($id)
    {
        $where = array('id' => $id);
        $this->m_admin->delete_table($where, 'penerbit');
        redirect(base_url('admin/load_penerbit'));
    }

    public function edit_penerbit($id)
    {
        $where = array('id' => $id);
        $data['title'] = "Edit User";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['penerbit'] = $this->m_admin->edit_table($where, 'penerbit')->result();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_editpenerbit_admin', $data);
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function update_penerbit()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');

        $data = array(
            'id' => $id,
            'nama' => $nama,
        );

        $where = array('id' => $id);

        $this->m_admin->update_table($where, $data, 'penerbit');
        redirect(base_url('admin/load_penerbit'));
    }

    public function load_kategori()
    {
        $data['title'] = "Home Admin";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['kategori'] = $this->m_admin->get_table('kategori')->result();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_datakategori_admin', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function add_kategori()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');

        $data = array(
            'id' => $id,
            'nama' => $nama,
        );
        $this->m_admin->add_table('kategori', $data);
        redirect(base_url('admin/load_kategori'));
    }

    public function delete_kategori($id)
    {
        $where = array('id' => $id);
        $this->m_admin->delete_table($where, 'kategori');
        redirect(base_url('admin/load_kategori'));
    }

    public function edit_kategori($id)
    {
        $where = array('id' => $id);
        $data['title'] = "Edit User";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['kategori'] = $this->m_admin->edit_table($where, 'kategori')->result();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_editkategori_admin', $data);
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function update_kategori()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');

        $data = array(
            'id' => $id,
            'nama' => $nama,
        );

        $where = array('id' => $id);

        $this->m_admin->update_table($where, $data, 'kategori');
        redirect(base_url('admin/load_kategori'));
    }
    public function load_peminjaman()
    {
        $data['title'] = "Home Admin";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['peminjaman'] = $this->m_admin->get_table('peminjaman')->result();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_datapeminjaman_admin', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }

    public function load_pengembalian()
    {
        $data['title'] = "Home Admin";
        $data['siapa'] = $this->session->userdata('nama');
        $data['role'] = $this->session->userdata('role');
        $data['pengembalian'] = $this->m_admin->get_table('pengembalian')->result();

        $this->load->view('header&footer/header_admin', $data);
        $this->load->view('admin/v_datapengembalian_admin', array('error' => ''));
        $this->load->view('header&footer/footer_admin');
        $this->load->view('v_modals');
    }
}
