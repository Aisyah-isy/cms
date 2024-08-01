<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
    public function index(){
        $this->db->from('kategori');
        $this->db->order_by('kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Kategori Konten',
            'kategori2' => $kategori
        );
        $this->template->load('template_admin', 'admin/kategori_index', $data);
    }
    public function tambah(){
        $data = array(
            'judul_halaman' => 'Data Pengguna'
        );
        $this->template->load('template_admin', 'admin/kategori_tambah', $data);
    }
    public function simpan()
    {
        $this->db->from('kategori');
        $this->db->where('kategori',$this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-warning alert-dismissible" role="alert ">
            Nama Kategori Sudah Tersedia!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/kategori');
        }
        $data = array(
            'kategori' => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert id="alert_demo_1">
        Berhasil menambahkan Kategori!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/kategori');
    }
    public function hapus($id){
        $id = array(
            'id_kategori' => $id
        );
        $this->db->delete('kategori',$id);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-warning alert-dismissible" role="alert id="alert_demo_1">
        Berhasil Menghapus Kategori!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/kategori');
    }
    public function edit(){
        $where  = array('id_kategori'   =>  $this->input->post('id_kategori'));
        $data   = array('kategori'      =>  $this->input->post('nama_kategori'));
        $this->db->update('kategori',$data,$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert id="alert_demo_1">
        Berhasil Mengupdate Kategori!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/kategori');
	}

}