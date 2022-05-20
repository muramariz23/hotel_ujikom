<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct(){
	parent::__construct();
	if ($this->session->userdata('status') != 'pegawai') {
            redirect(site_url('Login'));
        }
	$this->load->model('resepsionis/Transaksi_model');		
	}

	function index()
	{

		$data['GetTransaksi']= $this->Transaksi_model->GetAll();
		$date = $this->input->post('txt_filter_tanggal');
		if ($date) {
			$data['GetTransaksi']= $this->Transaksi_model->GetFilterWhere($date);
		}
		$this->load->view('resepsionis/V_transaksi', $data);
		}


	function Pembayaran()
	{		
			 $id_reservasi = $this->input->post('txt_id_reservasi');
			 $bayar = $this->input->post('txt_jml_bayar');
			 $harga = $this->input->post('txt_harga');
			 if ($bayar > $harga) {
			 	$hasil = $bayar - $harga;
			 	$keterangan_transaksi = 'Kembalian Rp.' . $hasil;
			 	
			 }elseif ($bayar < $harga) {
			 	$hasil = $harga - $bayar;
        		$this->session->set_flashdata('danger', 'Pembayaran Kurang Rp.' . $hasil);

        	 redirect(site_url('resepsionis/Transaksi/CheckIn/' . $id_reservasi));

			 }else{
			 	$keterangan_transaksi = 'Pembayaran Pas';
			 }
			 $add['id_reservasi']= $id_reservasi;
		 	 $add['id_pengguna']=$this->input->post('txt_id_pengguna');
		 	 $add['id_pegawai']=$this->input->post('txt_id_pegawai');
         	 $add['jml_bayar']= $this->input->post('txt_jml_bayar');
         	 $add['status_pembayaran']= 'sudah dibayar';
         	 $add['keterangan_transaksi']= $keterangan_transaksi;
         	 $update['stat_pemesanan']= 'check in';
         	 $this->Transaksi_model->UpdateData('reservasi','id_reservasi',$id_reservasi,$update);
        	 $this->Transaksi_model->AddData('transaksi',$add);
        	 redirect(site_url('resepsionis/Transaksi'));
	}

	function CheckIn()
		{
			$id_reservasi=$this->uri->segment(4);
			$id_login = $this->session->userdata('id_login');
			// if ($this->Transaksi_model->cekBayaran($id_reservasi)->id_transaksi > 0) {
   //      	 redirect(site_url('resepsionis/Reservasi'));
			// }
			$pegawai = $this->Transaksi_model->AmbilDataPegawai($id_login)->row();
			$tampil = $this->Transaksi_model->GetDataReservasi($id_reservasi)->row();
			$data['detail']['id_reservasi']= $tampil->id_reservasi;
			$data['detail']['id_pengguna']= $tampil->id_pengguna;
			$data['detail']['id_pegawai']= $tampil->id_pegawai;
			$data['detail']['nama_pengguna']= $tampil->nama_pengguna;
			$data['detail']['jml_kmr_dipesan']= $tampil->jml_kmr_dipesan;
			$data['detail']['harga']= $tampil->harga;
			$data['detail']['nama_tamu']= $tampil->nama_tamu;

			$this->load->view('resepsionis/V_add_transaksi',$data);
		}

		function CetakLaporan() {
                        
            $data['GetTransaksi'] = $this->Transaksi_model->getAll();
            $date = $this->input->post('txt_filter_tanggal');
		if ($date) {
			$data['GetTransaksi']= $this->Transaksi_model->GetFilterWhere($date);
		}
            $this->load->view('resepsionis/V_cetak_laporan_transaksi', $data);

    		}

	
	


	// function EditFasilitas()
	// {
	// 	 $id_fasilitas=$this->input->post('txt_id_fasilitas');
	// 	 $update['no_fasilitas']= $this->input->post('txt_no_fasilitas');
 //         $update['j_fasilitas']= $this->input->post('txt_j_fasilitas');
 //         $update['isi_fasilitas']= $this->input->post('txt_isi_fasilitas');
 //         $this->Fasilitas_model->UpdateData('fasilitas','id_fasilitas',$id_fasilitas,$update);
	// 	 redirect(site_url('admin/Fasilitas'));
	// }
}