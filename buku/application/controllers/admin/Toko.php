<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_akses();
    }

    public function opnListBuku()
    {

        $data["judul"] = "Update Link Buku";
        $data["page"] = "index";
        // return;
        $sql = " SELECT * FROM `tb_buku`
                ";
        $data["buks"] =  $this->db->query($sql)->result();

        $this->load->view('admin/Vupd_link_toko', $data);
    }

    public function tambahlink($id)
    {
        $id_buku = htmlspecialchars($id);
        $data["judul"] = "Form Tambah Buku";
        $data["page"] = "form_tambah";
        $sql = " SELECT * FROM `tb_buku` where id = $id_buku ";
        $data["buku"] =  $this->db->query($sql)->result()[0];
        $this->load->view('admin/Vupd_link_toko', $data);
    }


    public function updatelinkproses()
    {



        $id = $this->input->post('id_buku');
        $data = [

            "link_shopee" => $this->input->post('link_shopee'),
            "link_tokopedia" => $this->input->post('link_toped'),
            "link_bukalapak" => $this->input->post('link_bukalapak')
        ];

        $where = [
            "id" => $id
        ];

        $this->db->where($where);
        $ret = $this->db->update('tb_buku', $data);
        if ($ret > 0) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success py-1" role="alert">
                                Data Team berhasil Update
                            </div>'
            );
            redirect('admin/Toko/opnListBuku');
            return;
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger py-1" role="alert">
                                Data Team GAGAL Update, error: ' . $this->db->error()["message"] . '
                            </div>'
            );
            redirect('admin/Toko/opnListBuku');
            return;
        }
        $this->load->view('admin/VBuku', $data);
    }
}
    
    /* End of file Login.php */
