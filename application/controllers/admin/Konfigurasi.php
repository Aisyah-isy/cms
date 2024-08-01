<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Home_model');
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
	public function index(){
        $data = array(
            'judul_halaman' => 'Konfigurasi',
            'konfig'    => $this->Home_model->konfig()
        );
		$this->template->load('template_admin', 'admin/konfigurasi',$data);
	}
    public function edit(){
        $where  = array('id'   => 1);
        $data   = array(
            'judul_website' =>$this->input->post('judul_website'),
            'profil_website' =>$this->input->post('profil_website'),
            'instagram' =>$this->input->post('instagram'),
            'facebook' =>$this->input->post('facebook'),
            'alamat' =>$this->input->post('alamat'),
            'email' =>$this->input->post('email'),
            'no_wa' =>$this->input->post('whatsapp')
        );
        $this->db->update('konfigurasi',$data,$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert id="alert_demo_1">
        Berhasil Mengupdate konfigurasi!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/konfigurasi');
	}

}
