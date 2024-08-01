<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }
    public function index()
    {
        $data = array(
            'judul' => "Beranda | AIS",
            'konfig' => $this->Home_model->konfig(),
            'kate' => $this->Home_model->kate(),
            'cara' => $this->Home_model->cara(),
            'konten' => $this->Home_model->konten()
        );
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }
        $this->db->like('judul', $data['keyword']);
        $this->db->or_like('keterangan', $data['keyword']);
        $this->db->from('konten');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $data['konten'] = $this->Home_model->getkonten($data['keyword']);

        $this->template->load('template', 'layout/dashboard', $data);
    }
    public function kategori($id)
    {

        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();

        $this->db->from('kategori');
        $this->db->where('id_kategori', $id);
        $kategori = $this->db->get()->row()->kategori;

        $data = array(
            'judul' => $kategori . " | AIS",
            'konfig' => $this->Home_model->konfig(),
            'kate' => $this->Home_model->kate(),
            'cara' => $this->Home_model->cara(),
            'kategorii' => $kategori,
            'konten' => $konten
        );
        $this->load->view('_kategori', $data);
    }
    public function artikel($id)
    {

        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row();

        $data = array(
            'judul' => $konten->judul . " | AIS",
            'konfig' => $this->Home_model->konfig(),
            'kate' => $this->Home_model->kate(),
            'konten' => $konten
        );
        $this->load->view('_detail', $data);
    }
    public function galeri()
    {
        $data = array(
            'judul' => "Galeri | AIS",
            'konfig' => $this->Home_model->konfig(),
            'kate' => $this->Home_model->kate(),
            'galeri' => $this->Home_model->galeri()
        );
        $this->load->view('galeri', $data);
    }
    public function saran()
    {
        if ($this->input->post()) {
            $where = array(
                'isi_saran' => $this->input->post('pesan'),
                'email' => $this->input->post('email'),
                'nama' => $this->input->post('nama'),
                'tanggal' => date('Y-m-d')
            );
            $this->db->insert('saran', $where);
        }

        $data = array(
            'judul' => "Saran- | AIS",
            'konfig' => $this->Home_model->konfig(),
            'kate' => $this->Home_model->kate()
        );
        $this->load->view('saran', $data);
    }
    public function about_me(){
        $data = array(
            'judul' => "About me- | AIS",
            'konfig' => $this->Home_model->konfig(),
            'kate' => $this->Home_model->kate()
        );
        $this->load->view('about_me', $data);
    }
}
