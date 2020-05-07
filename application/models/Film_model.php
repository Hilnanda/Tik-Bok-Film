<?php defined('BASEPATH') or exit('No direct script access allowed');

class Film_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('film');

        // $this->db->select('*'); //untuk menampilkan semua data kedua tabel
        // $this->db->from('acara');
        // $this->db->join('bilal', 'bilal.ID_BILAL = acara.ID_BILAL'); //join untuk menggabungkan tabel
        // $query = $this->db->get();
        // return $query;
    }
    public function tampil_inner()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('film', 'film.ID_FILM = transaksi.ID_FILM');
        $this->db->join('kursi', 'kursi.NO = transaksi.NO_KURSI');

        $query = $this->db->get();
        return $query;

        // $this->db->select('*'); //untuk menampilkan semua data kedua tabel
        // $this->db->from('acara');
        // $this->db->join('bilal', 'bilal.ID_BILAL = acara.ID_BILAL'); //join untuk menggabungkan tabel
        // $query = $this->db->get();
        // return $query;
    }


    public function tampil_1kursi($where)
    {
        $this->db->select('NO_KURSI');
        $this->db->from('transaksi');
        $this->db->where($where);
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
