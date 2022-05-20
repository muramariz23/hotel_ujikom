

<!-- sebelum pakai stored procedure -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	function __construct(){
	parent::__construct();
	if ($this->session->userdata('status') != 'admin') {
            redirect(site_url('Login'));
        }
    
	$this->load->model('admin/Reservasi_model');
	}

	function index()
	{			
		
		$data['GetReservasi']= $this->Reservasi_model->GetAll('reservasi');
		$date = $this->input->post('txt_filter_tanggal');
		if ($date) {
			$data['GetReservasi']= $this->Reservasi_model->GetFilterWhere($date);
		}
		$this->load->view('admin/V_reservasi', $data);
		}

			function CetakLaporan() {
            // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
            
            $data['GetReservasi'] = $this->Reservasi_model->getAll();
            $html = $this->load->view('resepsionis/V_cetak_laporan', $data, true);

            // // run dompdf
             $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);

    		}


    		function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}

?>

