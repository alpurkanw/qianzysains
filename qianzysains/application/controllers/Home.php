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
        // $sql_buku = " SELECT * FROM `tb_buku`
        //         ";
        // $data["buks"] =  $this->db->query($sql_buku)->result();

        $sql_team = " SELECT * FROM `tb_team`
                ";
        $data["teams"] =  $this->db->query($sql_team)->result_array();
        // print_r($data["teams"]);
        // return;
        $this->load->view('compro/index', $data);
    }
    public function toko()
    {

        $data["judul"] = "Wellcome to Qianzy";
        // return;
        $sql = " SELECT * FROM `tb_buku`
                ";
        // echo $sql;
        // return;
        $data["buks"] =  $this->db->query($sql)->result();
        // $data["ktgs"] = $this->db->get('tbl_kateg')->result();
        // $data["loks"] = $this->db->get('tbl_lok')->result();
        $this->load->view('vtoko', $data);
    }

    public function detailProd($id)
    {

        $data["judul"] = "Detail Produk";
        // return;
        $sql = " SELECT * FROM `tb_buku` where id = $id
                ";
        // echo $sql;
        // return;
        $data["buku"] =  $this->db->query($sql)->row_array();
        // $data["ktgs"] = $this->db->get('tbl_kateg')->result();
        // $data["loks"] = $this->db->get('tbl_lok')->result();
        $this->load->view('VdetailProd', $data);
    }
    public function teamDetail($id)
    {

        $data["judul"] = "Detail Produk";
        // return;
        $sql = " SELECT * FROM tb_team where id = $id
                ";
        // echo $sql;
        // return;
        $data["team"] =  $this->db->query($sql)->row_array();
        // $data["ktgs"] = $this->db->get('tbl_kateg')->result();
        // $data["loks"] = $this->db->get('tbl_lok')->result();
        $this->load->view('VteamDetail', $data);
    }
}
    
    /* End of file Login.php */
