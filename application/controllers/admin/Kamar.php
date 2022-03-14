<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('admin/Kamar_model');
	}

	function index()
	{
		$data['GetKamar']= $this->Kamar_model->GetAll('kamar');
		$this->load->view('admin/V_kamar', $data);
		}

	function Add()
	{
		$data['GetKamar']= $this->Kamar_model->GetData('kamar');
		$this->load->view('admin/V_add_kamar');
	}
	function AddKamar()
	{
		 	$add['no_kamar']=$this->input->post('txt_no_kamar');
         	 $add['tipe_kasur']= $this->input->post('txt_tipe_kasur');
         	 $add['tipe_kamar']= $this->input->post('txt_tipe_kamar');  
         	 $add['id_fasilitas']= $this->input->post('txt_id_fasilitas');  
         	 $add['gambar_kamar']= $this->input->post('txt_gambar_kamar');  
        	 $this->Fasilitas_model->AddData('kamar',$add);
        	 redirect(site_url('admin/Kamar'));
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
        	 $this->Kamar_model->DeleteData('kamar','id_kamar',$id_kamar);
        	 redirect(site_url('admin/Kamar'));
	}


	function DataDetail()
	{

		if($this->uri->segment(5)=='view')
		{
			$id_kamar=$this->uri->segment(4);
			$tampil=$this->Kamar_model->GetDataWhere('kamar','id_kamar',$id_kamar)->row();
			$data['detail']['id_kamar']= $tampil->id_kamar;
			$data['detail']['no_kamar']= $tampil->no_kamar;
            $data['detail']['tipe_kasur']= $tampil->tipe_kasur;
            $data['detail']['tipe_kamar']= $tampil->tipe_kamar;
            $data['detail']['id_fasilitas']= $tampil->id_fasilitas;
            $data['detail']['gambar_kamar']= $tampil->gambar_kamar;
			$this->load->view('admin/V_edit_kamar',$data);
		}
	}


	
	function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}