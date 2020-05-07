<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function tampil_data(){
        $this->db->select('JUDUL_FILM,POSTER_FILM'); //untuk menampilkan semua data kedua tabel
        $this->db->from('film');
        $this->db->limit(3);
        $this->db->distinct();
        $this->db->group_by('JUDUL_FILM');

        $query = $this->db->get();
        return $query;

        // $this->db->select('*'); //untuk menampilkan semua data kedua tabel
        // $this->db->from('acara');
        // $this->db->join('bilal', 'bilal.ID_BILAL = acara.ID_BILAL'); //join untuk menggabungkan tabel
        // $query = $this->db->get();
        // return $query;
    }
    
}
