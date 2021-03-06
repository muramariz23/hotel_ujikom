

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
                        
            $data['GetReservasi'] = $this->Reservasi_model->getAll();
            $this->load->view('resepsionis/V_cetak_laporan', $data);

    		}

    		function AddPemesananResepsionis()
    		{
    			$id_login = $this->session->userdata('id_login');
				$tampil = $this->Reservasi_model->AmbilDataPegawai($id_login)->row();
				$resepsionis = $this->Reservasi_model->AmbilDataResepsionis()->row();

    			$data['detail']['id_pengguna']= $resepsionis->id_pengguna;
    			$data['GetKamar']= $this->Reservasi_model->GetData('kamar');
    			$data['detail']['id_pegawai']= $tampil->id_pegawai;
    			$this->load->view('resepsionis/V_tambah_reservasi', $data);
    		}

    		function AddPemesanan()
			{		
			 $add['id_pegawai']= $this->input->post('txt_id_pegawai');;
		 	 $add['id_pengguna']=$this->input->post('txt_id_pengguna');
		 	 $add['id_kamar']=$this->input->post('txt_id_kamar');
         	 $add['tgl_check_in']= $this->input->post('txt_tgl_check_in');
         	 $add['tgl_check_out']= $this->input->post('txt_tgl_check_out');  
         	 $add['nama_tamu']= $this->input->post('txt_nama_tamu');
         	 $add['stat_pemesanan']= 'dipesan';
         	 $add['keterangan']= $this->input->post('txt_keterangan');

         	
        	 $this->Reservasi_model->AddData('reservasi',$add);
        	 redirect(site_url('resepsionis/Reservasi'));
			}

}

?>

