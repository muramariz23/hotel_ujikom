<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	function __construct(){
	parent::__construct();
	if ($this->session->userdata('status') != 'admin') {
            redirect(site_url('Login'));
        }
	$this->load->model('admin/Fasilitas_model');		
	}

	function index()
	{
		$data['GetFasilitas']= $this->Fasilitas_model->GetData();
		$this->load->view('admin/V_fasilitas', $data);
		}

	function Add()
	{
		
		$this->load->view('admin/V_add_fasilitas');
	}
	function AddFasilitas()
	{
		 	$no_fas=$this->input->post('txt_no_fasilitas');
         	 $j_fas= $this->input->post('txt_j_fasilitas');
         	 $isi_fas= $this->input->post('txt_isi_fasilitas');  
        	 $this->Fasilitas_model->AddData($no_fas,$j_fas,$isi_fas);
        	 redirect(site_url('admin/Fasilitas '));
	}

	function EditFasilitas()
	{
		 $id_fas=$this->input->post('txt_id_fasilitas');
		 $no_fas= $this->input->post('txt_no_fasilitas');
         $j_fas= $this->input->post('txt_j_fasilitas');
         $isi_fas= $this->input->post('txt_isi_fasilitas');
         $this->Fasilitas_model->UpdateData($id_fas,$no_fas,$j_fas,$isi_fas);
		 redirect(site_url('admin/Fasilitas'));
	}


	function DeleteFasilitas()
	{
		 $id_fasilitas=$this->uri->segment(4);
        	 $this->Fasilitas_model->DeleteData($id_fasilitas);
        	 redirect(site_url('admin/Fasilitas'));
	}


	function DataDetail()
	{

		if($this->uri->segment(5)=='view')
		{
			$id_fasilitas=$this->uri->segment(4);
			$tampil=$this->Fasilitas_model->GetDataWhere($id_fasilitas);
			$data['detail']['id_fasilitas']= $tampil->id_fasilitas;
			$data['detail']['no_fasilitas']= $tampil->no_fasilitas;
            $data['detail']['j_fasilitas']= $tampil->j_fasilitas;
            $data['detail']['isi_fasilitas']= $tampil->isi_fasilitas;
			$this->load->view('admin/V_edit_fasilitas',$data);
		}
	}


	
	function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
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