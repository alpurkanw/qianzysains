<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
        $sql = " SELECT * FROM tb_kategori
                ";
        // echo $sql;
        // return;
        $data["kategs"] =  $this->db->query($sql)->result();
        $this->load->view('admin/Vkategori', $data);
    }
    public function tambah()
    {

        $data["judul"] = "Form Tambah Team";
        $data["page"] = "form_tambah";

        $this->load->view('admin/Vkategori', $data);
    }
    public function tambah_proses()
    {

        $data = [
            "kategori" => $this->input->post('kategori'),
            "ket" => $this->input->post('ket')
        ];
        // echo $this->db->insert_id();
        $this->db->insert('tb_kategori', $data);
        $ret = $this->db->affected_rows();
        if ($ret > 0) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary py-1" role="alert">
                    Data buku berhasil ditambah 
                </div>');
            redirect('admin/Kategori');
            return;
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger py-1" role="alert">
                    Data buku GAGAL ditambah, error: ' . $this->db->error() . ' 
                </div>');
            redirect('admin/Kategori');
            return;
        }
    }

    function hapus($id)
    {
        // $id = $this->input->get('id');
        // echo $id;
        // return;
        $ret = $this->db->delete('tb_kategori', array('id' => $id));
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

    function updateKategOpenForm($id)
    {
        $data["judul"] = "Form Update Team";
        $data["page"] = "form_update";
        $sql = " 
            SELECT * FROM tb_kategori where id = $id
                ";
        $data["kateg"] =  $this->db->query($sql)->row_array();
        // print_r($data["team"]);
        // return;
        $this->load->view('admin/Vkategori', $data);
    }


    function updateTeamProses()
    {
        //Now Unlink



        // echo "berhasil upload";
        // print_r($_FILES);
        // return;
        $id = $this->input->post('id');
        $data = [
            "kategori" => $this->input->post('kategori'),
            "ket" => $this->input->post('ket')

        ];

        $where = [
            "id" => $id
        ];

        $this->db->where($where);
        $ret = $this->db->update('tb_kategori', $data);
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
