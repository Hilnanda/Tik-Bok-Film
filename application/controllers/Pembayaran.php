<?php
    class Pembayaran extends CI_Controller{
        
        public function index(){
            $data['transaksi'] = $this->Pesan_model->tampil_1data()->
            result(); // m_penceramah : nama model penceramah, tampil_data = u/mengambil data

            
            $this->load->view('pembayaran', $data);
            
        }

        public function sendKursi($id_film,$nama,$jadwal_nonton,$no,$id_kursi)
    {
        $data = array(
            'ID_FILM' =>  $id_film,
            'NAMA' =>  $nama,
            'HARGA' =>  25000,
            'JUMLAH_TIKET' =>  1,
            'JADWAL_NONTON' =>  $jadwal_nonton,
            'NO_KURSI' =>  $no,
            'ID_KURSI' =>  $id_kursi
            // 'RANDOM' => $rand
        );

        // $data['pembayaran'] = $data;
        // $this->Pesan_model->input_data($data, 'transaksi');
        // $this->Pesan_model->input_data($data, 'transaksi');
        $this->load->view('pembayaran', $data);
        // redirect('Home_page');
    }
        public function tambah()
    {
        $ID_FILM = $this->input->post('ID_FILM');
        $NAMA = $this->input->post('NAMA');
        $HARGA = $this->input->post('HARGA') ;
        $JUMLAH_TIKET = $this->input->post('JUMLAH_TIKET');
        $JADWAL_NONTON = $this->input->post('JADWAL_NONTON');
        $NO_KURSI = $this->input->post('NO_KURSI');
        $RANDOM = $this->input->post('RANDOM');
        
        
        $data = array(
            'ID_FILM' =>  $ID_FILM,
            'NAMA' =>  $NAMA,
            'HARGA' =>  $HARGA,
            'JUMLAH_TIKET' =>  $JUMLAH_TIKET,
            'JADWAL_NONTON' =>  $JADWAL_NONTON,
            'NO_KURSI' =>  $NO_KURSI,
            'RANDOM' =>  $RANDOM
        );

        $this->Film_model->input_data($data,'transaksi');
		redirect('home_page');
    }


    }
