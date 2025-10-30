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

    public function tambahPenulis($id)
    {

        $data["judul"] = "Form Tambah Penulis";
        $data["page"] = "index";
        $queryPenulis = " SELECT * FROM tb_penulis where id_buku = $id";
        $data["penulis"] =  $this->db->query($queryPenulis)->result();

        $queryteam = " SELECT * FROM tb_team  ";
        $data["teams"] =  $this->db->query($queryteam)->result();

        $queryBuku = " SELECT * FROM tb_buku where id = $id 
            ";
        $data["buku"] =  $this->db->query($queryBuku)->result();


        $this->load->view('admin/VaddPenulis', $data);
    }
    public function OpntambahPenulis($id)
    {

        $data["judul"] = "Form Tambah Penulis";
        $data["page"] = "form_tambah";
        $sql = " SELECT * FROM tb_penulis 
        ";
        $data["penulis"] =  $this->db->query($sql)->result();

        $sql = " 
        SELECT * FROM tb_buku where id = $id
            ";
        $data["buku"] =  $this->db->query($sql)->row_array();


        $this->load->view('admin/VaddPenulis', $data);
    }
    public function prosesTambahPenulis()
    {

        // print_r($_POST);

        // Array ( [team] => 5-namae [jenis] => Editor [id_buku] => 6 [judul_buku] => buku daffa )
        $tim = explode("-", $_POST["team"]);
        // echo $tim[1];

        // return;

        $data = [
            "id_team" => $tim[0],
            "nama_team" => $tim[1],
            "id_buku" => $_POST["id_buku"],
            "judul_buku" => $_POST["judul_buku"],
            "jenis" => $this->input->post('jenis'),
            "tgl_input" => date("Ymd"),
            "user_input" => $_SESSION["nama"]

        ];
        // echo $this->db->insert_id();
        $this->db->insert('tb_penulis', $data);
        $ret = $this->db->affected_rows();
        if ($ret > 0) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                    Data Penulis berhasil ditambah 
                </div>');
            redirect('admin/Buku/tambahPenulis/' . $_POST["id_buku"]);
            return;
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                    Data Penulis GAGAL ditambah, error: ' . $this->db->error() . ' 
                </div>');
            redirect('admin/Buku/tambahPenulis/' . $_POST["id_buku"]);
            return;
        }
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

        // echo str_replace("-", "", $this->input->post('tgl_terbit'));
        // return;


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
            "isbn" => floatval($this->input->post('isbn')),
            "jum_stok" => floatval($this->input->post('stok')),
            "tgl_terbit" => $this->input->post('tgl_terbit'),
            "ukuran" => $this->input->post('ukuran'),
            "harga_jual" => $this->input->post('harga_jual'),
            "kategori" => $this->input->post('kateg'),
            "berat" => $this->input->post('berat'),
            "versi_cetak" => $this->input->post('st_cetak'),
            "versi_digital" => $this->input->post('st_digital'),
            "desk" => $this->input->post('ket'),
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
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Data buku GAGAL ditambah, error: ' . $this->db->error() . ' 
                </div>');
            redirect('admin/Buku');
            return;
        }
    }

    public function detail($id)
    {

        $data["judul"] = "DetailBuku";
        $data["page"] = "detail_buku";

        $sql = "  SELECT * FROM tb_buku where id = $id ";
        $data["buku"] =  $this->db->query($sql)->row_array();

        $queryPenulis = " SELECT * FROM tb_penulis where jenis = 'Penulis' and id_buku = $id ";
        $penulis  =  $this->db->query($queryPenulis)->result_array();

        foreach ($penulis as $key => $tm) {
            $data["Penulis"][] = $tm["nama_team"];
        }


        $queryEditor = " SELECT * FROM tb_penulis where jenis = 'Editor' and id_buku = $id  ";
        $editor =  $this->db->query($queryEditor)->result_array();
        foreach ($editor as $key => $tm) {
            $data["Editor"][] = $tm["nama_team"];
        }

        $this->load->view('admin/VBuku', $data);
    }

    public function updateBukuProses()
    {



        $id = $this->input->post('id');
        $data = [
            "judul" => $this->input->post('judul_buku'),
            "isbn" => $this->input->post('isbn'),
            "jum_stok" => floatval($this->input->post('stok')),
            "tgl_terbit" => $this->input->post('tgl_terbit'),
            "ukuran" => $this->input->post('ukuran'),
            "harga_jual" => $this->input->post('harga_jual'),
            "kategori" => $this->input->post('kateg'),
            "berat" => $this->input->post('berat'),
            "versi_cetak" => $this->input->post('st_cetak'),
            "versi_digital" => $this->input->post('st_digital'),
            "desk" => $this->input->post('ket')
        ];

        $where = [
            "id" => $id
        ];

        $this->db->where($where);
        $ret = $this->db->update('tb_buku', $data);
        // print_r($ret);
        // return;
        if ($ret > 0) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success py-1" role="alert">
                                Data Buku berhasil Update
                            </div>'
            );
            redirect('admin/Buku');
            return;
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger py-1" role="alert">
                                Data Buku GAGAL Update, error: ' . $this->db->error()["message"] . '
                            </div>'
            );
            redirect('admin/Buku');
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
            redirect('admin/Buku');
            // $this->index();
            // return;
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger py-1" role="alert">
                            Data Buku GAGAL Dihapus, error: ' . $this->db->error() . '
                        </div>'
            );
            redirect('admin/Buku');
        }
    }

    public function openfupdpic($id)
    {

        $data["judul"] = "Form Update";
        $data["page"] = "form_update_gambar";
        $sql = " 
        SELECT * FROM tb_buku where id = $id
            ";
        $data["buku"] =  $this->db->query($sql)->row_array();

        // $sql_kateg = " SELECT * FROM `tb_kategori`
        //         ";
        // $data["kategs"] =  $this->db->query($sql_kateg)->result();

        $this->load->view('admin/VBuku', $data);
    }

    public function deleteProses($id)
    {

        // $id = $this->input->get('id');
        // echo $id;
        // return;
        $ret = $this->db->delete('tb_penulis', array('id' => $id));
        if ($ret > 0) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success py-1" role="alert">
                            Data PENULIS berhasil Dihapus
                        </div>'
            );
            // redirect('appv/C_mstTagihan');
            $this->index();
            // return;
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger py-1" role="alert">
                            Data PENULIS GAGAL Dihapus, error: ' . $this->db->error() . '
                        </div>'
            );
            $this->index();
        }
    }
    public function updpicproses()
    {
        // jika gambar ada 
        if ($_FILES['file_gambar']['name']) {



            // $this->load->library('upload', $config);
            // $this->upload->do_upload('file_gambar');
            // $file = str_replace(" ", "_", $_FILES['file_gambar']['name']);
            // $file_gambar =  $file;



            $upload_path = './assets/image/buku/';
            $gambar_sebelum = $upload_path . $this->input->post("file_gambar_old");
            if (file_exists($gambar_sebelum)) {
                // echo $upload_path . $gambar_sebelum;
                // echo $gambar_sebelum;
                // echo "ada";
                unlink($gambar_sebelum);
            }


            $config['upload_path'] = './assets/image/buku/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = true;
            // $config['max_size']  = '2048'; //maksimal 2 MB

            $this->load->library('upload', $config);
            $this->upload->do_upload('file_gambar');
            $file = str_replace(" ", "_", $_FILES['file_gambar']['name']);
            $file_gambar =  $file;
        } else {
            $file_gambar = $this->input->post("file_gambar_old");
        }




        $id = $this->input->post('id');
        $data = [
            "gambar" => $file_gambar
        ];

        $where = [
            "id" => $id
        ];


        // print_r($_FILES);
        // return;


        $this->db->where($where);
        $ret = $this->db->update('tb_buku', $data);
        // print_r($ret);
        // return;
        if ($ret > 0) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success py-1" role="alert">
                                Data Buku berhasil Update
                            </div>'
            );
            redirect('admin/Buku');
            return;
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger py-1" role="alert">
                                Data Buku GAGAL Update, error: ' . $this->db->error()["message"] . '
                            </div>'
            );
            redirect('admin/Buku');
            return;
        }
    }
}
    
    /* End of file Login.php */
