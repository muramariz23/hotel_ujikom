<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct(){
	parent::__construct();
	
	$this->load->model('pengguna/Pengguna_model');
	}

	function index()
	{
		if ($this->session->userdata('status') != 'pengguna') {
            redirect(site_url('Login'));
        }
		$id_login = $this->session->userdata('id_login');
		$cek = $this->Pengguna_model->CekData($id_login);

		if(!$cek){
			$tampil=$this->Pengguna_model->GetDataWhere('login','id_login',$id_login)->row();
			$data['detail']['id_login']= $tampil->id_login;
			$this->load->view('pengguna/V_profil', $data);
		}else{

		$tampil= $this->Pengguna_model->AmbilDataWhere($id_login)->row();
		$data['detail']['id_pengguna']= $tampil->id_pengguna;
		$data['detail']['nama_pengguna']= $tampil->nama_pengguna;
		$this->load->view('pengguna/V_awal', $data);

			}
		}

	function Profile()
	{
		$id_login = $this->session->userdata('id_login');
		$cek = $this->Pengguna_model->CekData($id_login);
		

		if(!$cek){
			$tampil=$this->Pengguna_model->GetDataWhere('login','id_login',$id_login)->row();
			$data['detail']['id_login']= $tampil->id_login;
			$this->load->view('pengguna/V_profil', $data);
		}
		$id_pengguna = $this->uri->segment(4);
		$tampil= $this->Pengguna_model->GetDataWhere('pengguna','id_pengguna',$id_pengguna)->row();
		$data['detail']['id_pengguna']= $tampil->id_pengguna;
		$data['detail']['nama_pengguna']= $tampil->nama_pengguna;
		$data['detail']['nik']= $tampil->nik;
        $data['detail']['email']= $tampil->email;
        $data['detail']['no_telepon']= $tampil->no_telepon;
		$this->load->view('pengguna/V_pengguna', $data);
		}
	

	function AddUser()
		{
			$this->load->view('pengguna/V_registrasi');
		}

	function Tambah()
	{
         	 $add['username']= $this->input->post('txt_username');
         	 $add['password']= $this->input->post('txt_password');  
         	 $add['status']= $this->input->post('txt_status');
         	 
        	 $this->Pengguna_model->AddData('login',$add);

        	 redirect(site_url('pengguna/Pengguna/Berhasil'));
	}

	function Berhasil()
	{
		// $id_login = $this->Pengguna_model->GetDataBaru('login', 'id_login');
		// $data['GetPengguna']= $this->Pengguna_model->GetDataWhere('login', 'id_login', $id_login);
		$data['GetPengguna']= $this->Pengguna_model->GetDataBaru('login', 'id_login');

        	 $this->session->set_flashdata('success', 'Registrasi Akun Berhasil');
		$this->load->view('pengguna/V_berhasil', $data);
	}

	function LengkapiData(){
		if($this->uri->segment(5)=='view')
		{
			$id_login=$this->uri->segment(4);
			$tampil=$this->Pengguna_model->GetDataWhere('login','id_login',$id_login)->row();
			$data['detail']['id_login']= $tampil->id_login;
			$this->load->view('pengguna/V_profil',$data);
		}
	}

	function Registrasi()
	{
		 	$add['id_login']=$this->input->post('txt_id_login');
         	 $add['nama_pengguna']= $this->input->post('txt_nama_pengguna');
         	 $add['nik']= $this->input->post('txt_nik');
         	 $add['email']= $this->input->post('txt_email');  
         	 $add['no_telepon']= $this->input->post('txt_no_telepon');  
         	 

        	 $this->Pengguna_model->AddData('pengguna',$add);

        	 redirect(site_url('login'));
	}



	function EditProfile()
	{
		 $id_pengguna=$this->input->post('txt_id_pengguna');
		 $update['id_login']=$this->input->post('txt_id_login');
         $update['nama_pengguna']= $this->input->post('txt_nama_pengguna');
         $update['email']= $this->input->post('txt_email');  
         $update['no_telepon']= $this->input->post('txt_no_telepon');
         $this->Pengguna_model->UpdateData('pengguna','id_pengguna',$id_pengguna,$update);

        	 $this->session->set_flashdata('success', 'Data Profile Anda Berhasil Diubah');
		 redirect(site_url('pengguna/Pengguna'));
	}


	function DataProfil()
	{
		if ($this->uri->segment(5) == 'view') {				

				$id_pengguna = $this->uri->segment(4);
				$onjoin = "pengguna.id_login = login.id_login";
				$tampil = $this->Pengguna_model->GetDataJoinWhere('pengguna', 'login', $onjoin, 'id_pengguna', $id_pengguna)->row();
				$data['detail']['id_pengguna']= $tampil->id_pengguna;
				$data['detail']['id_login']= $tampil->id_login;
            	$data['detail']['nama_pengguna']= $tampil->nama_pengguna;
            	$data['detail']['email']= $tampil->email;
            	$data['detail']['no_telepon']= $tampil->no_telepon;
				$this->load->view('pengguna/V_detail_profile', $data);

			}

		}

		function UbahData()
	{
		if ($this->uri->segment(5) == 'view') {
				$data['GetLogin'] = $this->Pengguna_model->GetData('login');
				
				$id_pengguna = $this->uri->segment(4);
				$onjoin = "pengguna.id_login = login.id_login";
				$tampil = $this->Pengguna_model->GetDataJoinWhere('pengguna', 'login', $onjoin, 'id_pengguna', $id_pengguna)->row();
				$data['detail']['id_pengguna']= $tampil->id_pengguna;
				$data['detail']['id_login']= $tampil->id_login;
            	$data['detail']['nama_pengguna']= $tampil->nama_pengguna;
            	$data['detail']['email']= $tampil->email;
            	$data['detail']['no_telepon']= $tampil->no_telepon;
				$this->load->view('pengguna/V_edit_pengguna', $data);

			}

		}


}