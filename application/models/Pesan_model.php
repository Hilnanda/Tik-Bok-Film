<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pesan_model extends CI_Model
{
    public function tampil_data()
    {
        // return $this->db->get('transaksi');

        $this->db->select('*'); //untuk menampilkan semua data kedua tabel
        $this->db->from('transaksi');
        $query = $this->db->get();
        return $query;
    }
    public function tampil_judul()
    {
        // return $this->db->get('transaksi');

        $this->db->select('JUDUL_FILM,ID_FILM'); //untuk menampilkan semua data kedua tabel
        $this->db->from('film');
        $this->db->distinct();
        $this->db->group_by('JUDUL_FILM');
        $query = $this->db->get();
        return $query;
    }
    public function tampil_jadwal()
    {
        // return $this->db->get('transaksi');

        $this->db->select('JUDUL_FILM,ID_FILM,JADWAL_TAYANG'); //untuk menampilkan semua data kedua tabel
        $this->db->from('film');
        $this->db->distinct();
        // $this->db->group_by('JUDUL_FILM');
        $query = $this->db->get();
        return $query;
    }
    public function tampil_1data()
    {
        // return $this->db->get('transaksi');

        $this->db->select("*");
        $this->db->from("transaksi");
        $this->db->join("kursi","kursi.NO = transaksi.NO_KURSI");
        $this->db->limit(1);
        $this->db->order_by('ID_TRANSAKSI', "DESC");
        $query = $this->db->get();
        return $query;
    }
    public function tampil_kursi()
    {
        // return $this->db->get('transaksi');

        $this->db->select('*'); //untuk menampilkan semua data kedua tabel
        $this->db->from('kursi');
        $query = $this->db->get();
        return $query;
    }

    
    public function tampil_distinc($id,$jn)
    {
        // return $this->db->get('transaksi');



        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('ID_FILM', $id);
        $this->db->where('JADWAL_NONTON', $jn);

        $query = $this->db->get();
        return $query;
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
