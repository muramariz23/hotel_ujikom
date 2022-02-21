<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('admin/Fasilitas_model');
	}

	function index()
	{
		$data['GetFasilitas']= $this->Fasilitas_model->GetData('fasilitas');
		$this->load->view('admin/V_fasilitas', $data);
		}

	function Add()
	{
		
		$this->load->view('admin/V_add_fasilitas');
	}
	function AddFasilitas()
	{
		 	$add['no_fasilitas']=$this->input->post('txt_no_fasilitas');
         	 $add['j_fasilitas']= $this->input->post('txt_j_fasilitas');
         	 $add['isi_fasilitas']= $this->input->post('txt_isi_fasilitas');  
        	 $this->Fasilitas_model->AddData('fasilitas',$add);
        	 redirect(site_url('admin/Fasilitas '));
	}



	function UpdateFasilitas()
	{
		 $nis=$this->input->post('txt_nis');
		 $update['nama']= $this->input->post('txt_nama');
         	 $update['no_tlp']= $this->input->post('txt_no_tlp');
          	 $this->Fasilitas_model->UpdateData('tbl_siswa','nis',$nis,$update);
		 redirect(site_url('Welcome/DataSiswa'));
	}


	function DeleteFasilitas()
	{
		 $id_fasilitas=$this->uri->segment(4);
        	 $this->Fasilitas_model->DeleteData('fasilitas','id_fasilitas',$id_fasilitas);
        	 redirect(site_url('admin/Fasilitas'));
	}


	function DataDetail()
	{

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->Fasilitas_model->GetDataWhere('tbl_siswa','nis',$nis)->row();
			$data['detail']['nis']= $tampil->nis;
            $data['detail']['nama']= $tampil->nama;
            $data['detail']['no_tlp']= $tampil->no_tlp;
			$data['content']='VFormUpdateSiswa';
		}
		else
		{	
			$data['DataSiswa']=$this->Fasilitas_model->GetData('tbl_siswa');
			$data['content']='VSiswa';
		}


		$this->load->view('VBackend',$data);
	}


	
	function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}