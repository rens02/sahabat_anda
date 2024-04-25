<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_welcome extends CI_Model {

    // public function create($id, $filename){
    //     $data = [
    //         'id' => $id, 
    //         'name' => $this->input->post('name', TRUE),//liat dari views create
    //         'description' => $this->input->post('description', TRUE),
    //         'filename'=> $filename
    //     ];

    //     $this->db->insert('post', $data);
    // }

    public function read($kode = FALSE){
        if ( $kode === FALSE ) {
            // return all posts 
            return $this->db->get( 'sahabat_anda' )->result_array();
        } else {
            $query = $this->db->get_where('sahabat_anda', ['kode' => $kode]);
            return $query->row();
        }
    }

    public function update($kode){
        $data = [
            'nama' => $this->input->post('nama', TRUE),
            'harga' => $this->input->post('harga', TRUE),
            'stock' => $this->input->post('stock', TRUE),
            'jenis' => $this->input->post('jenis', TRUE),
            'perusahaan' => $this->input->post('perusahaan', TRUE),
        ];

        $this->db->where('kode', $kode);
        $this->db->update('sahabat_anda', $data);
    }

    // public function delete($id){
    //     $this->db->where('id', $id);
    //     $this->db->delete('post');
    // }

    // public function deleteAll(){
    //     $this->db->empty_table('post');
    // }
}
