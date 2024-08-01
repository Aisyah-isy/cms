<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data = array(
            'judul_halaman' => "Saran",
            'saranN' => $this->Home_model->saran()
        );
        
        $this->template->load('template_admin', 'admin/saran', $data);
    }
    public function hapus($id){
        $id = array(
            'id_saran' => $id
        );
        $this->db->delete('saran',$id);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-warning alert-dismissible" role="alert id="alert_demo_1">
        Berhasil Menghapus saran!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/saran');
    }

}
