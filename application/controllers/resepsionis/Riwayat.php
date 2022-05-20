

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	function __construct(){
	parent::__construct();
	if ($this->session->userdata('status') != 'pegawai') {
            redirect(site_url('Login'));
        }
    
	$this->load->model('resepsionis/Riwayat_model');
	}


	function index()
	{	

		$data['GetReservasi']= $this->Riwayat_model->getAll();
		$date = $this->input->post('txt_filter_tanggal');
		if ($date) {
			$data['GetReservasi']= $this->Reservasi_model->GetFilterWhere($date);
		}
		$this->load->view('resepsionis/V_riwayat_reservasi', $data);
		}
		

			function CetakLaporan() {
            $data['GetRiwayat'] = $this->Riwayat_model->getAll();
            $this->load->view('resepsionis/V_cetak_laporan_Riwayat', $data);

    		}

}

?>

