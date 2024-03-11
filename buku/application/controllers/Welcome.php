<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		// $data["judul"] = "home";
		// $data["page"] = "open_index";
		// $data['brgs'] = $this->M_barang->tampil_data()->result();

		// print_r($_SESSION);
		// echo "dari welcome";
		// return;
		// if (!$this->session->userdata('username')) {
		// 	$this->load->view('v_login');
		// } else {
		// 	if ($this->session->userdata('role_id') == "1") {
		// 		redirect("admin/Home");
		// 		// } else if ($this->session->userdata('jabatan') == "2") {
		// 		// 	redirect("appv/home");
		// 		// } else if ($this->session->userdata('jabatan') == "3") {
		// 		// 	redirect("pic/home");
		// 		// } else if ($this->session->userdata('jabatan') == "4") {
		// 		// 	redirect("mkr/home");
		// 	} else {
		// 		session_destroy();
		// 	}
		// }

		redirect('Home');
		// echo "tes";
	}
}
