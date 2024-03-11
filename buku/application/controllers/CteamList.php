<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CteamList extends CI_Controller
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

        $data["judul"] = "Team";
        $data["page"] = "index";
        // return;
        $sql = " SELECT * FROM tb_team order by urutan 
                ";
        // echo $sql;
        // return;
        $teams =  $this->db->query($sql)->result_array();
        echo json_encode($teams);
        // $this->load->view('admin/Vteam', $data);
    }
    public function img($id)
    {

        $data["judul"] = "Team";
        $data["page"] = "index";
        // return;
        $sql = " SELECT gambar FROM tb_team where id = $id
                ";
        // echo $sql;
        // return;
        $team =  $this->db->query($sql)->result_array();

        // echo '<img src="' . base_url("assets/image/team/") . $team[0]["gambar"] . '" class="img-fluid" alt="" />';
        echo json_encode($team[0]["gambar"]);
        // $this->load->view('admin/Vteam', $data);
    }
}
    
    /* End of file Login.php */
