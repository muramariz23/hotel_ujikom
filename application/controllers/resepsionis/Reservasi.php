

<!-- sebelum pakai stored procedure -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	function __construct(){
	parent::__construct();
	if ($this->session->userdata('status') != 'pegawai') {
            redirect(site_url('Login'));
        }
    
	$this->load->model('resepsionis/Reservasi_model');
	}

	function index()
	{			
		
		$data['GetReservasi']= $this->Reservasi_model->GetAll('reservasi');
		$date = $this->input->post('txt_filter_tanggal');
		if ($date) {
			$data['GetReservasi']= $this->Reservasi_model->GetFilterWhere($date);
		}
		$this->load->view('resepsionis/V_reservasi', $data);
		}

		function CheckIn()
		{
			$id_reservasi=$this->uri->segment(4);
			$id_login = $this->session->userdata('id_login');
			$pegawai = $this->Reservasi_model->AmbilDataPegawai($id_login)->row();
			$Checkin = $this->Reservasi_model->CekIn($id_reservasi,$pegawai->id_pegawai);
			redirect(site_url('resepsionis/Reservasi'));
		}

		function CheckOut()
		{
		 	 $id_reservasi=$this->uri->segment(4);
        	 $this->Reservasi_model->DeleteData('reservasi','id_reservasi',$id_reservasi);

        	 redirect(site_url('resepsionis/Reservasi'));
		}

		function batalkan()
			{
				$id_reservasi=$this->uri->segment(4);
				$id_login = $this->session->userdata('id_login');
				$pegawai = $this->Reservasi_model->AmbilDataPegawai($id_login)->row();
				$Checkin = $this->Reservasi_model->Batal($id_reservasi,$pegawai->id_pegawai);
				$this->Reservasi_model->DeleteData('reservasi','id_reservasi',$id_reservasi);
				redirect(site_url('resepsionis/Reservasi'));
			}

			function CetakLaporan() {
            // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
            $this->load->library('pdfgenerator');

            // title dari pdf
                $data['title_pdf'] = 'Reservasi ';
            

            // filename dari pdf ketika didownload
                
                $file_pdf = 'laporan_reservasi-';
            
            
            // setting paper
            $paper = 'A4';
            //orientasi paper potrait / landscape
            $orientation = "potrait";

            $data['GetReservasi'] = $this->Reservasi_model->getAll();
            $html = $this->load->view('resepsionis/V_cetak_laporan', $data, true);

            // // run dompdf
             $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);

    		}

}

?>

