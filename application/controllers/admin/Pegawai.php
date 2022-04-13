<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('admin/Pegawai_model');
	}

	function index()
	{
		$data['GetPegawai']= $this->Pegawai_model->GetAll('pegawai');
		$this->load->view('admin/V_pegawai', $data);
		}

	function AddUser()
		{
			$this->load->view('admin/V_add_user');
		}

	function Tambah()
	{
         	 $add['username']= $this->input->post('txt_username');
         	 $add['password']= $this->input->post('txt_password');  
         	 $add['status']= $this->input->post('txt_status');  
         	 
        	 $this->Pegawai_model->AddData('login',$add);
        	 redirect(site_url('admin/Pegawai/DetailUser'));
	}

	function DetailUser()
	{
		$data['GetUser']= $this->Pegawai_model->GetData('login');
		$this->load->view('admin/V_User', $data);
	}

	function Add()
	{
		if ($this->uri->segment(5) == 'view') {	
				$id_login = $this->uri->segment(4);
				$tampil = $this->Pegawai_model->GetDataWhere('login', 'id_login', $id_login)->row();
				$data['detail']['id_login']= $tampil->id_login;
            	$this->load->view('admin/V_add_pegawai', $data);

			}

	}

	function AddPegawai()
	{
		 	$add['id_login']=$this->input->post('txt_id_login');
         	 $add['nama_pegawai']= $this->input->post('txt_nama_pegawai');
         	 $add['alamat']= $this->input->post('txt_alamat');  
         	 $add['stat_pegawai']= $this->input->post('txt_stat_pegawai');  
         	 

        	 $this->Pegawai_model->AddData('pegawai',$add);
        	 redirect(site_url('admin/Pegawai'));
	}



	function EditPegawai()
	{
		 $id_pegawai=$this->input->post('txt_id_pegawai');
		 $update['id_login']=$this->input->post('txt_id_login');
         $update['nama_pegawai']= $this->input->post('txt_nama_pegawai');
         $update['alamat']= $this->input->post('txt_alamat');  
         $update['stat_pegawai']= $this->input->post('txt_stat_pegawai');
         $this->Pegawai_model->UpdateData('pegawai','id_pegawai',$id_pegawai,$update);
		 redirect(site_url('admin/Pegawai'));
	}


	function DeletePegawai()
	{
		 $id_pegawai=$this->uri->segment(4);
		 $id_login=$this->uri->segment(5);
        	 $this->Pegawai_model->DeleteData('pegawai','id_pegawai',$id_pegawai);
        	 $this->Pegawai_model->DeleteData('login','id_login',$id_login);

        	 redirect(site_url('admin/Pegawai'));
	}


	function DataDetail()
	{
		if ($this->uri->segment(5) == 'view') {
				$data['GetLogin'] = $this->Pegawai_model->GetData('login');
				

				$id_pegawai = $this->uri->segment(4);
				$onjoin = "pegawai.id_login = login.id_login";
				$tampil = $this->Pegawai_model->GetDataJoinWhere('pegawai', 'login', $onjoin, 'id_pegawai', $id_pegawai)->row();
				$data['detail']['id_pegawai']= $tampil->id_pegawai;
				$data['detail']['id_login']= $tampil->id_login;
            	$data['detail']['nama_pegawai']= $tampil->nama_pegawai;
            	$data['detail']['alamat']= $tampil->alamat;
            	$data['detail']['stat_pegawai']= $tampil->stat_pegawai;
				$this->load->view('admin/V_edit_pegawai', $data);

			}

		}


}