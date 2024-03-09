<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_akses();
    }

    public function index()
    {

        $data["judul"] = "Welcome Home";
        // return;

        $this->load->view('admin/Vhome', $data);
    }
}
    
    /* End of file Login.php */
