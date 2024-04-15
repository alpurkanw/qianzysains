<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // cek_akses();
        // $this->load->library('form_validation');
        // $this->load->model('m_jns_tag', 'mtag');
    }


    public function index()
    {

        $data["judul"] = "Wellcome to Qianzy";
        // return;
        $sql = " SELECT * FROM `tb_buku` limit 100
                ";
        // echo $sql;
        // return;
        $data["buks"] =  $this->db->query($sql)->result();
        // $data["ktgs"] = $this->db->get('tbl_kateg')->result();
        // $data["loks"] = $this->db->get('tbl_lok')->result();
        $this->load->view('vtoko', $data);
    }

    public function cari_buku()
    {


        $keyw = $this->input->post('keyw');
        // $data["buks"] = "";

        if ($keyw !== "") {

            $data["judul"] = "List Buku";

            $sql = " SELECT * FROM `tb_buku` where judul like '%$keyw%'
                    ";

            $data["buks"] =  $this->db->query($sql)->result();

            $this->load->view('vtoko', $data);
        }



        // print_r($_POST); // Mencetak semua data POST
        // echo $_REQUEST["kunci"] . " - " . $this->security->get_csrf_hash(); // Mencetak semua data POST

        // if ($_REQUEST["kunci"] !== $this->security->get_csrf_hash()) {
        //     echo "tidak valid" . $this->input->post("csrf_name");
        //     // Token CSRF tidak valid, lakukan penanganan di sini
        //     // Contoh: tampilkan pesan kesalahan atau tolak permintaan
        // } else {
        //     echo "valid valid" . $this->input->post("csrf_name");
        //     // Token CSRF valid, lanjutkan dengan pemrosesan data
        // }

        // return;
        // if( )

        // echo $this->input->method("kunci_csrf");
        // return;
        // // . "-" . $this->security->get_csrf_hash();
        // if ($this->input->post('csrf_name') !== $this->security->get_csrf_hash()) {
        //     echo "tidak valid" . $this->input->post("csrf_name");
        //     // Token CSRF tidak valid, lakukan penanganan di sini
        //     // Contoh: tampilkan pesan kesalahan atau tolak permintaan
        // } else {
        //     echo "valid valid" . $this->input->post("csrf_name");
        //     // Token CSRF valid, lanjutkan dengan pemrosesan data
        // }

        // return;
        // $data["judul"] = "List Buku";

        // $keyw = $this->input->post('keyw');
        // // return;
        // $sql = " SELECT * FROM `tb_buku` where judul like '%$keyw%'
        //         ";
        // // echo $sql;
        // // return;
        // $data["buks"] =  $this->db->query($sql)->row_array();
        // // $data["ktgs"] = $this->db->get('tbl_kateg')->result();
        // // $data["loks"] = $this->db->get('tbl_lok')->result();
        // $this->load->view('vtoko', $data);
    }

    // public function detailProd($id)
    // {

    //     $data["judul"] = "Detail Produk";
    //     // return;
    //     $sql = " SELECT * FROM `tb_buku` where id = $id
    //             ";
    //     // echo $sql;
    //     // return;
    //     $data["buku"] =  $this->db->query($sql)->row_array();
    //     // $data["ktgs"] = $this->db->get('tbl_kateg')->result();
    //     // $data["loks"] = $this->db->get('tbl_lok')->result();
    //     $this->load->view('VdetailProd', $data);
    // }
    // public function teamDetail($id)
    // {

    //     $data["judul"] = "Detail Produk";
    //     // return;
    //     $sql = " SELECT * FROM tb_team where id = $id
    //             ";
    //     // echo $sql;
    //     // return;
    //     $data["team"] =  $this->db->query($sql)->row_array();
    //     // $data["ktgs"] = $this->db->get('tbl_kateg')->result();
    //     // $data["loks"] = $this->db->get('tbl_lok')->result();
    //     $this->load->view('VteamDetail', $data);
    // }
}
    
    /* End of file Login.php */
