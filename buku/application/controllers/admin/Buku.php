<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
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

        $data["judul"] = "Buku";
        $data["page"] = "index";
        // return;
        $sql = " SELECT * FROM `tb_buku`
                ";
        $data["buks"] =  $this->db->query($sql)->result();
        $this->load->view('admin/VBuku', $data);
    }
    public function tambah()
    {

        $data["judul"] = "Form Tambah Buku";
        $data["page"] = "form_tambah";
        $sql = " SELECT * FROM tb_kategori
        ";
        $data["kategs"] =  $this->db->query($sql)->result();

        $this->load->view('admin/VBuku', $data);
    }
    public function updateOpenForm($id)
    {

        $data["judul"] = "Form Update";
        $data["page"] = "form_update";
        $sql = " 
        SELECT * FROM tb_buku where id = $id
            ";
        $data["buku"] =  $this->db->query($sql)->row_array();

        $sql_kateg = " SELECT * FROM `tb_kategori`
                ";
        $data["kategs"] =  $this->db->query($sql_kateg)->result();

        $this->load->view('admin/VBuku', $data);
    }
    public function tambah_proses()
    {

        // print_r($_REQUEST);
        // return;
        // if (empty($_FILES['file_gambar']['name'])) {
        // echo "kosong";

        // jika gambar ada 
        if ($_FILES['file_gambar']['name']) {
            $config['upload_path'] = './assets/image/buku/';
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


        $data = [
            "judul" => $this->input->post('judul_buku'),
            "penulis" => $this->input->post('penulis'),
            "editor" => $this->input->post('editor'),
            "isbn" => floatval($this->input->post('isbn')),
            "jum_stok" => floatval($this->input->post('stok')),
            "tgl_terbit" => floatval($this->input->post('tgl_terbit')),
            "ukuran" => $this->input->post('ukuran'),
            "harga_jual" => $this->input->post('harga_jual'),
            "kategori" => $this->input->post('kateg'),
            "berat" => $this->input->post('berat'),
            "versi_cetak" => $this->input->post('st_cetak'),
            "versi_digital" => $this->input->post('st_digital'),
            "desk" => $this->input->post('ket'),
            "link_shoope" => $this->input->post('link_shoope'),
            "link_tokopedia" => $this->input->post('link_toped'),
            "link_google" => $this->input->post('link_google'),
            "gambar" => $file_gambar
        ];
        // echo $this->db->insert_id();
        $this->db->insert('tb_buku', $data);
        $ret = $this->db->affected_rows();
        if ($ret > 0) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                    Data buku berhasil ditambah 
                </div>');
            redirect('admin/Buku');
            return;
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                    Data buku GAGAL ditambah, error: ' . $this->db->error() . ' 
                </div>');
            redirect('admin/Buku');
            return;
        }
        // } else {
        //     $config['upload_path'] = './upload/';
        //     $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //     $config['overwrite'] = true;
        //     $config['max_size']  = '2000'; //maksimal 2 MB

        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('file_gambar')) {
        //         $uploadok = 0;
        //         $pesan_error = $this->upload->display_errors();
        //         $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        //             ' . $pesan_error . '
        //         </div>');
        //         redirect('admin/barang');
        //         return;
        //     } else {


        //         $data = [
        //             "nama_bar" => $this->input->post('nama_bar'),
        //             "ket" => $this->input->post('ket'),
        //             "kateg" => $this->input->post('kateg'),
        //             "harga_jual" => floatval($this->input->post('harga_jual')),
        //             "harga_beli" => floatval($this->input->post('harga_beli')),
        //             "stok" => $this->input->post('stok'),
        //             "gambar" => $_FILES['file_gambar']['name']
        //         ];
        //         // echo $this->db->insert_id();
        //         $ret = $this->brg->tambah($data);
        //         if ($ret > 0) {
        //             $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        //                 Data Barang berhasil ditambah 
        //             </div>');
        //             redirect('admin/barang');
        //             return;
        //         } else {
        //             $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        //                 Data Barang GAGAL ditambah, error: ' . $this->db->error() . ' 
        //             </div>');
        //             redirect('admin/barang');
        //             return;
        //         }
        //     }
        // }
    }

    public function detail($id)
    {

        $data["judul"] = "DetailBuku";
        $data["page"] = "detail_buku";

        $sql = " 
        SELECT * FROM tb_buku where id = $id
            ";
        $data["buku"] =  $this->db->query($sql)->row_array();

        $this->load->view('admin/VBuku', $data);
    }

    public function updateBukuProses($id)
    {


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


        $this->load->view('admin/VBuku', $data);
    }
    function hapus($id)
    {
        // $id = $this->input->get('id');
        // echo $id;
        // return;
        $ret = $this->db->delete('tb_buku', array('id' => $id));
        if ($ret > 0) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success py-1" role="alert">
                            Data Buku berhasil Dihapus
                        </div>'
            );
            // redirect('appv/C_mstTagihan');
            $this->index();
            // return;
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger py-1" role="alert">
                            Data Buku GAGAL Dihapus, error: ' . $this->db->error() . '
                        </div>'
            );
            $this->index();
        }
    }
}
    
    /* End of file Login.php */
