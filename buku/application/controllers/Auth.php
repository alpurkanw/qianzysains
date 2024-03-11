<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        // print_r($_SESSION);
        // return;

        if ($this->session->userdata('username') == '') {
            // jika email kosong maka kirim ke form login 
            $this->load->view('v_login');
        } else {

            // jika email ada cek level nya 
            if ($this->session->userdata('role_id')  == 1) {
                redirect("admin/Home");
            } else {
                $this->logout();
            }
        }
    }


    public function gagal()
    {
        $data['judul'] = 'Login Gagal';
        // $data['method'] = "open_index";
        $this->load->view('v_login', $data);
    }


    public function login()
    {


        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|required'
        );
        $this->form_validation->set_rules(
            'pass',
            'pass',
            'trim|required'
        );

        if ($this->form_validation->run() == TRUE) {

            $usernm = $this->input->post('username');
            $pass = $this->input->post('pass');



            $this->db->select(' * ');
            $this->db->from('tb_user');
            $this->db->where(["username" => $usernm]);

            $user = $this->db->get()->row_array();

            // print_r($user);
            // return;



            if ($user) {
                // if (password_verify($pass, $user["pass"])) {
                // if (password_verify($pass, $user["pass"])) {
                if ($pass == $user["password"]) {
                    $data = [
                        'id' => $user['id'],
                        'nama' => $user['nama'],
                        'email' => $user['email'],
                        'username' => $user['username'],
                        'role_id' => $user['role_id'],
                        'is_active' => $user['is_active']
                    ];


                    if ($data['role_id'] == '1') {

                        // print_r($_SESSION);
                        // return;
                        $this->session->set_userdata($data);
                        redirect('admin/Home');
                        return;
                        // } elseif ($data['jabatan'] == '2') {
                        //     redirect('appv/Home');
                        //     return;
                        // } elseif ($data['jabatan'] == '3') {
                        //     redirect('pic/Home');
                        //     return;
                        // } elseif ($data['jabatan'] == '4') {
                        //     redirect('mkr/Home');
                        //     return;
                    } else {
                        $this->session->set_flashdata(
                            'pesan',
                            '<div class= "alert alert-danger" role="alert" >Jabatan Belum disetting, Silahkan Hubungi Admin!</div>'
                        );
                        // $this->logout();
                        redirect('auth/gagal');
                        return;
                    }
                } else {

                    $this->session->set_flashdata(
                        'pesan',
                        '<div class= "alert alert-danger" role="alert" >Password Salah</div>'
                    );
                    redirect('auth/gagal');
                    return;
                }
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class= "alert alert-danger" role="alert" >Anda Belum Registrasi / Approve, Silahkan Hubungi Admin!</div>'
                );
                redirect('auth/gagal');
                return;
            }
        } else {
            // redirect('C_daftar/');
            // $data['judul'] = 'Login';
            $this->session->set_flashdata(
                'pesan',
                '<div class= "alert alert-danger" role="alert" >Parameter Belum Lengkap!</div>'
            );
            redirect(base_url());
            return;
        }
    }
    // public



    public function logout()
    {
        $this->session->unset_userdata('usernm');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata(
            'pesan',
            '<div class= "alert alert-success" role="alert" >Logout berhasil!</div>'
        );

        session_destroy();
        // session_destroy();
        redirect('Home/toko');
    }

    public function register()
    {
        $data['judul'] = 'Register';
        // $data['method'] = "open_index";
        $this->load->view('v_regis', $data);
    }

    public function regis_submit()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'trim|required|max_length[50]'
        );
        $this->form_validation->set_rules(
            'nohp',
            'No Hp',
            'trim|required|max_length[16]'
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required|is_unique[tb_user.email]'
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|required|max_length[25]|is_unique[tb_user.username]'
        );
        $this->form_validation->set_rules(
            'pass1',
            'Pass1',
            'trim|required|matches[pass2]'
        );
        $this->form_validation->set_rules(
            'pass2',
            'Pass2',
            'trim|required|matches[pass1]'
        );

        if ($this->form_validation->run() == true) {
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('pass1'),
                'tglTimeInput' => date('yyyymmdd His'),
                'role_id' => 2,
            ];

            $this->db->insert('tb_user', $data);
            if ($this->db->affected_rows() == 1) {
                //kirim telegram ke gw kalo ada yang daftar baru
                $text =
                    'Ada Pendaftaran User bos... Usernamenya : ' .
                    $data['username'] .
                    ' Emailnya : ' .
                    $data['email'] .
                    ' dan No Hp : ' .
                    $data['nohp'];
                sendNotif('123045474', $text);
                //////////////////////////////////////////////////
                echo 'Sukses';
            } else {
                echo 'Gagal';
            }

            redirect('auth');
            # code...
        } else {
            $this->register();
        }
    }

    public function blocked()
    {
        $this->load->view('tmp/v_forbidden');
        return;
    }
}
