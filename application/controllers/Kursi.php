<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kursi extends CI_Controller
{
    var $data_kursi;
    // var $ID_FILM;
    // var $NAMA;
    // var $HARGA = 25000;
    // var $JADWAL_NONTON;
    function __construct()
    {
        parent::__construct();
        $ID_FILM = $this->input->post('ID_FILM');
        $NAMA = $this->input->post('NAMA');
        $HARGA = 25000;
        // $JUMLAH_TIKET = $this->input->post('JUMLAH_TIKET');
        $JADWAL_NONTON = $this->input->post('JADWAL_NONTON');
        // $TGL_NONTON = $this->input->post('TGL_NONTON');
        // // $baris = $this->input->post('baris');
        // // $nomor = $this->input->post('nomor');

        // $this->data_kursi = array(
        //     'ID_FILM' =>  $ID_FILM,
        //     'NAMA' =>  $NAMA,
        //     'HARGA' =>  $HARGA,
        //     // 'JUMLAH_TIKET' =>  $JUMLAH_TIKET,
        //     'JADWAL_NONTON' =>  $JADWAL_NONTON
        //     // 'NO_KURSI' =>  $baris . $nomor
        // );
        // $data = array();
        $postData = $this->input->post();

        $data['pesan_kursi'] = $postData;
        $data['film'] = $this->Film_model->tampil_data()->result(); // m_acara : nama model acara, tampil_data = u/mengambil data
        $data['transaksi'] = $this->Pesan_model->tampil_distinc(substr($ID_FILM,2,2), $JADWAL_NONTON)->result(); // m_acara : nama model acara, tampil_data = u/mengambil data
        $data['kursi'] = $this->Pesan_model->tampil_kursi()->result(); // m_acara : nama model acara, tampil_data = u/mengambil data
        $data['jumlah'] = count($data['transaksi']);

        // $this->load->view('head_link', $data); //u/ngeload view dari folder template
        // $this->load->view('template/sidebar');
        $this->load->view('kursi', $data);
        // $this->load->view('pembayaran', $data);
    }

    public function sendKursi($id_film,$nama,$jadwal_nonton,$no)
    {
        $data = array(
            'ID_FILM' =>  $id_film,
            'NAMA' =>  $nama,
            'HARGA' =>  25000,
            'JUMLAH_TIKET' =>  1,
            'JADWAL_NONTON' =>  $jadwal_nonton,
            'NO_KURSI' =>  $no
        );

        $this->Pesan_model->input_data($data, 'transaksi');
        // $this->Pesan_model->input_data($data, 'transaksi');
        redirect('pembayaran/index');
    }

    public function index()
    {
        // $ID_FILM = $this->input->post('ID_FILM');
        // $NAMA = $this->input->post('NAMA');
        // $HARGA = ($this->input->post('JUMLAH_TIKET') * 25000);
        // $JUMLAH_TIKET = $this->input->post('JUMLAH_TIKET');
        // $JADWAL_NONTON = $this->input->post('JADWAL_NONTON');
        // $TGL_NONTON = $this->input->post('TGL_NONTON');
        // // $baris = $this->input->post('baris');
        // // $nomor = $this->input->post('nomor');

        // $data = array(
        //     'ID_FILM' =>  $ID_FILM,
        //     'NAMA' =>  $NAMA,
        //     'HARGA' =>  $HARGA,
        //     'JUMLAH_TIKET' =>  $JUMLAH_TIKET,
        //     'JADWAL_NONTON' =>  $JADWAL_NONTON . " " . $TGL_NONTON,
        //     // 'NO_KURSI' =>  $baris . $nomor
        // );
        // $data['film'] = $this->Film_model->tampil_data()->result(); // m_acara : nama model acara, tampil_data = u/mengambil data
        // $data['transaksi'] = $this->Pesan_model->tampil_data()->result(); // m_acara : nama model acara, tampil_data = u/mengambil data
        // $data['kursi'] = $this->Pesan_model->tampil_kursi()->result(); // m_acara : nama model acara, tampil_data = u/mengambil data


        // // $this->load->view('head_link', $data); //u/ngeload view dari folder template
        // // $this->load->view('template/sidebar');
        // $this->load->view('kursi', $data);
        // // $this->load->view('kursi', $data);
        // // $this->load->view('template/footer');
    }
    public function kursi()
    {
        $data['film'] = $this->Film_model->tampil_data()->result(); // m_acara : nama model acara, tampil_data = u/mengambil data
        $data['transaksi'] = $this->Pesan_model->tampil_data()->result(); // m_acara : nama model acara, tampil_data = u/mengambil data
        $data['kursi'] = $this->Pesan_model->tampil_kursi()->result(); // m_acara : nama model acara, tampil_data = u/mengambil data


        // $this->load->view('head_link', $data); //u/ngeload view dari folder template
        // $this->load->view('template/sidebar');
        // $this->load->view('pesan', $data);
        $this->load->view('kursi', $data);
        // $this->load->view('template/footer');
    }


    public function tambah_aksi()
    {
        $ID_FILM = $this->input->post('ID_FILM');
        $NAMA = $this->input->post('NAMA');
        $HARGA = ($this->input->post('JUMLAH_TIKET') * 25000);
        $JUMLAH_TIKET = $this->input->post('JUMLAH_TIKET');
        $JADWAL_NONTON = $this->input->post('JADWAL_NONTON');
        $TGL_NONTON = $this->input->post('TGL_NONTON');
        $baris = $this->input->post('baris');
        $nomor = $this->input->post('nomor');

        $data = array(
            'ID_FILM' =>  $ID_FILM,
            'NAMA' =>  $NAMA,
            'HARGA' =>  $HARGA,
            'JUMLAH_TIKET' =>  $JUMLAH_TIKET,
            'JADWAL_NONTON' =>  $JADWAL_NONTON . " " . $TGL_NONTON,
            'NO_KURSI' =>  $baris . $nomor
        );
        $where_id = array(
            'STATUS' => 'B'
        ); //id yg ada di tabel penceramah dijadikan array

        $where = array('ID_KURSI' => $baris . $nomor);
        $this->Pesan_model->update_data($where, $where_id, 'kursi');
        //membuat function yg digunakan dimodal
        //m_penceramah = nama modalnya, masukkan nma function edit_data
        $this->Pesan_model->input_data($data, 'transaksi');
        redirect('pembayaran/index');
    }

    public function hapus($id_film)
    {
        $where = array('ID_FILM' => $id_film);

        $this->Film_model->hapus_data($where, 'film');
        redirect('film/index');
    }

    public function edit($id_kursi)
    {
        $where = array('ID_kursi' => $id_kursi); //id yg ada di tabel penceramah dijadikan array

        //membuat function yg digunakan dimodal
        $data['penceramah'] = $this->m_penceramah->edit_data($where, 'PENCERAMAH')->result(); //m_penceramah = nama modalnya, masukkan nma function edit_data


        $this->load->view('template/header'); //u/ngeload view dari folder template
        $this->load->view('template/sidebar');
        $this->load->view('edit_penceramah', $data);
        $this->load->view('template/footer');
    }
}
