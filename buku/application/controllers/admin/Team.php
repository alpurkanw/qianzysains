<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Team extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_akses();
        // $this->load->library('form_validation');
        // $this->load->model('m_jns_tag', 'mtag');
    }

    public function index()
    {

        $data["judul"] = "Team";
        $data["page"] = "index";
        // return;
        $sql = " SELECT * FROM tb_team
                ";
        // echo $sql;
        // return;
        $data["teams"] =  $this->db->query($sql)->result();
        $this->load->view('admin/Vteam', $data);
    }
    public function tambah()
    {

        $data["judul"] = "Form Tambah Team";
        $data["page"] = "form_tambah";

        $this->load->view('admin/Vteam', $data);
    }
    public function tambah_proses()
    {

        // print_r($_FILES);
        // return;
        // if (empty($_FILES['file_gambar']['name'])) {
        // echo "kosong";

        // jika gambar ada 
        if ($_FILES['file_gambar']['name']) {
            $config['upload_path'] = './assets/image/team/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = true;
            $config['max_size']  = '2048'; //maksimal 2 MB

            $this->load->library('upload', $config);
            $this->upload->do_upload('file_gambar');
            $file = str_replace(" ", "_", $_FILES['file_gambar']['name']);
            $file_gambar =  $file;
        } else {
            $file_gambar = "empty_image.png";
        }

        // echo "berhasil upload";
        // print_r($_FILES);
        // return;
        $data = [
            "nama" => $this->input->post('nama'),
            "jabatan" => $this->input->post('jabatan'),
            "email" => $this->input->post('email'),
            "gambar" => $file_gambar,
            "twt" => $this->input->post('twt'),
            "fb" => $this->input->post('fb'),
            "ig" => $this->input->post('ig'),
            "ket" => $this->input->post('ket')
        ];
        // echo $this->db->insert_id();
        $this->db->insert('tb_team', $data);
        $ret = $this->db->affected_rows();
        if ($ret > 0) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                    Data buku berhasil ditambah 
                </div>');
            redirect('admin/Team');
            return;
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                    Data buku GAGAL ditambah, error: ' . $this->db->error() . ' 
                </div>');
            redirect('admin/Team');
            return;
        }
    }

    function hapus($id)
    {
        // $id = $this->input->get('id');
        // echo $id;
        // return;
        $ret = $this->db->delete('tb_team', array('id' => $id));
        if ($ret > 0) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success py-1" role="alert">
                            Data Team berhasil Dihapus
                        </div>'
            );
            // redirect('appv/C_mstTagihan');
            $this->index();
            // return;
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger py-1" role="alert">
                            Data Team GAGAL Dihapus, error: ' . $this->db->error() . '
                        </div>'
            );
            $this->index();
        }
    }

    function updateTeamOpenForm($id)
    {
        $data["judul"] = "Form Update Team";
        $data["page"] = "form_update";
        $sql = " 
            SELECT * FROM tb_team where id = $id
                ";
        $data["team"] =  $this->db->query($sql)->row_array();
        // print_r($data["team"]);
        // return;
        $this->load->view('admin/Vteam', $data);
    }


    function updateTeamProses()
    {
        //Now Unlink



        // jika gambar ada 
        if ($_FILES['file_gambar']['name']) {

            $upload_path = './assets/image/team/';
            $gambar_sebelum = $upload_path . $this->input->post("file_gambar_old");
            if (file_exists($gambar_sebelum)) {
                // echo $upload_path . $gambar_sebelum;
                // echo $gambar_sebelum;
                // echo "ada";
                unlink($gambar_sebelum);
            }


            $config['upload_path'] = './assets/image/team/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = true;
            $config['max_size']  = '2048'; //maksimal 2 MB

            $this->load->library('upload', $config);
            $this->upload->do_upload('file_gambar');
            $file = str_replace(" ", "_", $_FILES['file_gambar']['name']);
            $file_gambar =  $file;
        } else {
            $file_gambar = $this->input->post("file_gambar_old");
        }

        // echo "berhasil upload";
        // print_r($_FILES);
        // return;
        $id = $this->input->post('id');
        $data = [
            "nama" => $this->input->post('nama'),
            "jabatan" => $this->input->post('jabatan'),
            "email" => $this->input->post('email'),
            "gambar" => $file_gambar,
            "twt" => $this->input->post('twt'),
            "fb" => $this->input->post('fb'),
            "ig" => $this->input->post('ig'),
            "ket" => $this->input->post('ket')
        ];

        $where = [
            "id" => $id
        ];

        $this->db->where($where);
        $ret = $this->db->update('tb_team', $data);
        // print_r($ret);
        // return;
        if ($ret > 0) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success py-1" role="alert">
                                Data Team berhasil Update
                            </div>'
            );
            redirect('admin/Team');
            return;
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger py-1" role="alert">
                                Data Team GAGAL Update, error: ' . $this->db->error()["message"] . '
                            </div>'
            );
            redirect('admin/Team');
            return;
        }

        // else {
        //     echo "tidak ";
        // }
        // return;
        // redirect(base_url("admin/team"));
    }
}
    
    /* End of file Login.php */
