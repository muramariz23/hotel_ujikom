<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	function __construct(){
	parent::__construct();
	if ($this->session->userdata('status') != 'pengguna') {
            redirect(site_url('Login'));
        }
	$this->load->model('pengguna/Reservasi_model');
	}

	function index()
	{

		$data['GetKamar'] = $this->Reservasi_model->GetAllKamar();
		$this->load->view('pengguna/V_Cari_kamar',$data);
		}


	function AddPemesanan()
	{		
			 $add['id_pegawai']= 4;
		 	 $add['id_pengguna']=$this->input->post('txt_id_pengguna');
		 	 $add['id_kamar']=$this->input->post('txt_id_kamar');
		 	 $add['jml_kmr_dipesan']=$this->input->post('txt_jml_kmr_dipesan');
         	 $add['tgl_check_in']= $this->input->post('txt_tgl_check_in');
         	 $add['tgl_check_out']= $this->input->post('txt_tgl_check_out');  
         	 $add['nama_tamu']= $this->input->post('txt_nama_tamu');
         	 $add['stat_pemesanan']= 'dipesan';
         	 $add['keterangan']= $this->input->post('txt_keterangan');

         	
        	 $this->Reservasi_model->AddData('reservasi',$add);
        	 redirect(site_url('pengguna/Pemesanan/BuktiPemesanan'));
	}



	function EditKamar()
	{
		 $id_kamar=$this->input->post('txt_id_kamar');
		 $update['no_kamar']=$this->input->post('txt_no_kamar');
         $update['tipe_kasur']= $this->input->post('txt_tipe_kasur');
         $update['tipe_kamar']= $this->input->post('txt_tipe_kamar');  
         $update['id_fasilitas']= $this->input->post('txt_id_fasilitas');  
         $update['gambar_kamar']= $this->input->post('txt_gambar_kamar');
         $this->Kamar_model->UpdateData('kamar','id_kamar',$id_kamar,$update);
		 redirect(site_url('admin/Kamar'));
	}


	function DeleteKamar()
	{
		 $id_kamar=$this->uri->segment(4);
		 $gambar_kamar=$this->uri->segment(5);
		
		 $var1 = $this->Kamar_model->DeleteData('kamar','id_kamar',$id_kamar);
		 
		 if ($var1 == NULL) {
		 	 unlink('./assets/img/' . $gambar_kamar);
        	 
		 }
		 redirect(site_url('admin/Kamar'));
        	
	}


	function DataDetail()
	{
		if ($this->uri->segment(5) == 'view') {
				$data['GetFasilitas'] = $this->Kamar_model->GetData('fasilitas');
				

				$id_kamar = $this->uri->segment(4);
				$onjoin = "kamar.id_fasilitas = fasilitas.id_fasilitas";
				$tampil = $this->Kamar_model->GetDataJoinWhere('kamar', 'fasilitas', $onjoin, 'id_kamar', $id_kamar)->row();
				$data['detail']['id_kamar']= $tampil->id_kamar;
				$data['detail']['no_kamar']= $tampil->no_kamar;
            	$data['detail']['tipe_kasur']= $tampil->tipe_kasur;
            	$data['detail']['tipe_kamar']= $tampil->tipe_kamar;
            	$data['detail']['id_fasilitas']= $tampil->id_fasilitas;
            	$data['detail']['gambar_kamar']= $tampil->gambar_kamar;
				$this->load->view('admin/V_edit_kamar', $data);

			}

		}


	function DetailKamarReservasi()
	{
		if ($this->uri->segment(5) == 'view') {
				$id_login = $this->session->userdata('id_login');
				$data['GetFasilitas'] = $this->Reservasi_model->GetData('fasilitas');

				$id_kamar = $this->uri->segment(4);
				$onjoin = "kamar.id_fasilitas = fasilitas.id_fasilitas";
				$tampil = $this->Reservasi_model->GetDataJoinWhere('kamar', 'fasilitas', $onjoin, 'id_kamar', $id_kamar)->row();
				$pengguna = $this->Reservasi_model->AmbilDataPengguna($id_login)->row();
				$data['GetReservasi']= $this->Reservasi_model->GetDataReservasiKamar($id_kamar);
				$data['detail']['id_pengguna']= $pengguna->id_pengguna;
				$data['detail']['nama_pengguna']= $pengguna->nama_pengguna;
				$data['detail']['id_kamar']= $tampil->id_kamar;
				$data['detail']['jml_kamar']= $tampil->jml_kamar;
            	$data['detail']['tipe_kasur']= $tampil->tipe_kasur;
            	$data['detail']['tipe_kamar']= $tampil->tipe_kamar;
            	$data['detail']['isi_fasilitas']= $tampil->isi_fasilitas;
            	$data['detail']['gambar_kamar']= $tampil->gambar_kamar;
				$this->load->view('pengguna/V_detail_kamar', $data);

			}

	}

	function BuktiPemesanan()
	{
		$id_login = $this->session->userdata('id_login');
		$pengguna = $this->Reservasi_model->AmbilDataPengguna($id_login)->row();

		$onjoin = "reservasi.id_pengguna=pengguna.id_pengguna";
		$tampil = $this->Reservasi_model->GetPesananBaru($pengguna->id_pengguna)->row();

		// $tampiljoin = $tampil = $this->Reservasi_model->GetDataJoinWhere('kamar', 'fasilitas', $onjoin, 'id_kamar', $id_kamar)->row();
		$data['detail']['id_reservasi']= $tampil->id_reservasi;
		$data['detail']['nama_pengguna']= $tampil->nama_pengguna;
		$data['detail']['jml_kmr_dipesan']= $tampil->jml_kmr_dipesan;
		$data['detail']['tgl_check_in']= $tampil->tgl_check_in;
		$data['detail']['tgl_check_out']= $tampil->tgl_check_out;
		$data['detail']['nama_tamu']= $tampil->nama_tamu;
		$data['detail']['keterangan']= $tampil->keterangan;
		$this->load->view('pengguna/V_bukti_pemesanan', $data);
	}

	function DataBuktiPesanan()
	{
		$id_pengguna = $this->uri->segment(4);
		$tampil = $this->Reservasi_model->GetDetailPesanan($id_pengguna)->row();

		// $tampiljoin = $tampil = $this->Reservasi_model->GetDataJoinWhere('kamar', 'fasilitas', $onjoin, 'id_kamar', $id_kamar)->row();
		$data['detail']['id_reservasi']= $tampil->id_reservasi;
		$data['detail']['nama_pengguna']= $tampil->nama_pengguna;
		$data['detail']['no_kamar']= $tampil->no_kamar;
		$data['detail']['tgl_check_in']= $tampil->tgl_check_in;
		$data['detail']['tgl_check_out']= $tampil->tgl_check_out;
		$data['detail']['nama_tamu']= $tampil->nama_tamu;
		$data['detail']['keterangan']= $tampil->keterangan;
		$this->load->view('pengguna/V_bukti_pemesanan', $data);
	}

	function dataPesanan()
		{
			$id_riwayat=$this->uri->segment(4);
			$data['GetRiwayat']= $this->Reservasi_model->GetRiwayat($id_riwayat);
		
		$this->load->view('pengguna/V_riwayat_reservasi', $data);
		}

}