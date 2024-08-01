<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        if($this->session->userdata('level')!='Admin'){
            redirect('auth');
        }
    }
    public function index(){
        
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user' => $this->User_model->user()
        );
        $this->template->load('template_admin', 'admin/user_index', $data);
    }
    public function tambah(){
        $data = array(
            'judul_halaman' => 'Data Pengguna'
        );
        $this->template->load('template_admin', 'admin/user_tambah', $data);
    }
    public function simpan()
    {
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-warning alert-dismissible" role="alert ">
            Username Sudah Tersedia!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/user');
        }
        $this->User_model->simpan();
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert id="alert_demo_1">
        Berhasil menambahkan User!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/user');
    }
    public function hapus($id){
        $id = array(
            'id_user' => $id
        );
        $this->db->delete('user',$id);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-warning alert-dismissible" role="alert id="alert_demo_1">
        Berhasil Menghapus User!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/user');
    }
    public function edit(){
        $this->User_model->edit();
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert id="alert_demo_1">
        Berhasil Mengupdate User!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/user');
	}

}