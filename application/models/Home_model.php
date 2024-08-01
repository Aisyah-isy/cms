<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
    public function konten(){
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();
        return $konten;
    }
	public function konfig(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        return $konfig;
	}
    public function kate(){
        $this->db->from('kategori');
        $kate = $this->db->get()->result_array();
        return $kate;
	}
    public function cara(){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        return $caraousel;
    }
    public function kate_konten($id){
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();
        return $konten;
    }
    public function galeri(){
        $galeri = $this->db->select('*')->from('galeri')->get()->result_array();
        return $galeri;
    }
    public function late_post(){
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(5);
        return $this->db->get()->result_array();
    }
    public function getkonten($keyword = null){
        if($keyword){
            $this->db->like('judul', $keyword);
            $this->db->or_like('keterangan',$keyword);
        }

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();

        return $konten;
    }
    public function saran(){
        $this->db->from('saran');
        $this->db->order_by('nama', 'ASC');
        $saran = $this->db->get()->result_array();
        return $saran;
    }
    public function kategori2(){
        $this->db->from('kategori');
        $this->db->order_by('kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
        return $kategori;
    }
}
