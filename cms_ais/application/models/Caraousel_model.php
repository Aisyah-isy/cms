<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caraousel_model extends CI_Model {
	public function simpan(){
        $data = array(
            'judul' => $this->input->post('judul'),
            'foto' => $this->input->post('foto'),
        );
        $this->db->insert('caraousel', $data);
	}
    // public function edit(){
    //     $where = array(
    //         'id_user'   =>  $this->input->post('id_user')
    //     );
    //     $data = array(
    //         'nama'      =>  $this->input->post('nama')
    //     );
    //     $this->db->update('user',$data,$where);
    // }
}
