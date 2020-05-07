<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film extends CI_Controller {
	function __construct(){
		
	
			

		        parent::__construct();
		
				$this->load->helper(array('form', 'url'));
		
		        if($this->session->userdata('status') != "login"){
		
		                        redirect(base_url("login"));
		
		        }
		
		}
		
	
	public function tambahfilm()
    {
        $data['film'] = $this->Film_model->tampil_data()->result(); // m_acara : nama model acara, tampil_data = u/mengambil data
        $data['transaksi'] = $this->Film_model->tampil_inner()->result(); // m_acara : nama model acara, tampil_data = u/mengambil data

        
        // $this->load->view('head_link', $data); //u/ngeload view dari folder template
        // $this->load->view('template/sidebar');
        $this->load->view('tambahfilm',$data);
        // $this->load->view('template/footer');
	}
	
	public function tambah_aksi(){
		

		$JUDUL_FILM = $this->input->post('JUDUL_FILM');
		$TAHUN_FILM = $this->input->post('TAHUN_FILM');
		$SINOPSIS_FILM = $this->input->post('SINOPSIS_FILM');
		$JADWAL_TAYANG = $this->input->post('JADWAL_TAYANG');
		$KETERANGAN_FILM = $this->input->post('KETERANGAN_FILM');
		$POSTER_FILM = $_FILES['POSTER_FILM'];
		if ($POSTER_FILM='') {
			# code...
		}else{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('POSTER_FILM')) {
				echo "Upload Gagal";die();
			}else {
				$POSTER_FILM = $this->upload->data('file_name');
			}
		}
		

		$data = array(
			'JUDUL_FILM' =>  $JUDUL_FILM,
			'TAHUN_FILM' =>  $TAHUN_FILM,
			'SINOPSIS_FILM' =>  $SINOPSIS_FILM,
			'JADWAL_TAYANG' =>  $JADWAL_TAYANG,
			'KETERANGAN_FILM' =>  $KETERANGAN_FILM,
			'POSTER_FILM' => $POSTER_FILM
		);

		$this->Film_model->input_data($data,'film');
		redirect('film/tambahfilm');
	}

	public function hapus($id_film){
		$where = array(
			'ID_FILM' => $id_film 
		);
		

		$this->Film_model->hapus_data($where,'film');
		$this->Film_model->hapus_data($where,'transaksi');
		redirect('film/tambahfilm');
	}

	public function hapus_history($id_tran,$id_kurs){
		$where = array(
			'ID_TRANSAKSI' => $id_tran
		);
		$where_id = array(
            'STATUS' => 'A'
        ); //id yg ada di tabel penceramah dijadikan array
		
        $data = array('ID_KURSI' => $id_kurs);
        $this->Pesan_model->update_data($data, $where_id, 'kursi');

		$this->Film_model->hapus_data($where,'transaksi');
		redirect('film/tambahfilm');
	}

	
}
?>
