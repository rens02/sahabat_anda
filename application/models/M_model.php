<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model extends CI_Model {

    public function read($kode = FALSE){
        if ( $kode === FALSE ) {
            // return all posts 
            return $this->db->get( 'sahabat_anda' )->result_array();
        } else {
            $query = $this->db->get_where('sahabat_anda', ['kode' => $kode]);
            return $query->row();
        }
    }

    public function create($filename){
        $data = [
            'nama' => $this->input->post('nama', TRUE),
            'harga' => $this->input->post('harga', TRUE),
            'stock' => $this->input->post('stock', TRUE),
            'jenis' => $this->input->post('jenis', TRUE),
            'perusahaan' => $this->input->post('perusahaan', TRUE),
            'gambar' => $filename
        ];

        $this->db->insert('sahabat_anda', $data);
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

    public function delete($kode){
        $this->db->where('kode', $kode);
        $this->db->delete('sahabat_anda');
    }

    // public function deleteAll(){
    //     $this->db->empty_table('post');
    // }
}
