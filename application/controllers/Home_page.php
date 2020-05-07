<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_page extends CI_Controller {
	

	public function index()
    {
        $data['film'] = $this->Home_model->tampil_data()->result(); // m_acara : nama model acara, tampil_data = u/mengambil data

        
        // $this->load->view('head_link', $data); //u/ngeload view dari folder template
        // $this->load->view('template/sidebar');
        $this->load->view('index',$data);
        // $this->load->view('template/footer');
	}
	
}
?>
