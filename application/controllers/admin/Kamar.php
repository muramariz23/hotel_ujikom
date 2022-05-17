
<!-- setelah pakai stored procedure -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	function __construct(){
	parent::__construct();
	if ($this->session->userdata('status') != 'admin') {
            redirect(site_url('Login'));
        }
	$this->load->model('admin/Kamar_model');
	}

	function index()
	{
		$data['GetKamar']= $this->Kamar_model->GetAll();
		$this->load->view('admin/V_kamar', $data);
		}

	function Add()
	{
		$data['GetFasilitas']= $this->Kamar_model->GetDatFas();
		$this->load->view('admin/V_add_kamar', $data);
	}

	function AddKamar()
	{
		 	$no_kam=$this->input->post('txt_no_kamar');
         	 $tipe_kas= $this->input->post('txt_tipe_kasur');
         	 $tipe_kam= $this->input->post('txt_tipe_kamar');  
         	 $id_fas= $this->input->post('txt_id_fasilitas');

			$upload_gambar = $_FILES['txt_gambar_kamar']['name'];

			if($upload_gambar) {
				$config['upload_path'] = './assets/img/';
				$config['allowed_types'] = 'png|jpg|jpeg';
				// $config['file_name'] = 'image-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

				$config['file_name'] = 'img-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

				$config['max_size'] = 7084;

				$this->load->library('upload');

				 $this->upload->initialize($config);

				 if ($this->upload->do_upload('txt_gambar_kamar')) {
					$Image = $this->upload->data('file_name');
					$this->db->set('gambar_kamar', $Image);
				}
			}


        	 $this->Kamar_model->AddData($no_kam,$tipe_kas,$tipe_kam,$id_fas,$Image);
        	 redirect(site_url('admin/Kamar'));
	}



	function EditKamar()
	{
		 $id_kam=$this->input->post('txt_id_kamar');
		 $no_kam=$this->input->post('txt_no_kamar');
         $tipe_kas= $this->input->post('txt_tipe_kasur');
         $tipe_kam= $this->input->post('txt_tipe_kamar');  
         $id_fas= $this->input->post('txt_id_fasilitas');  

         $upload_gambar = $_FILES['txt_gambar_kamar']['name'];

			if($upload_gambar) {
				$config['upload_path'] = './assets/img/';
				$config['allowed_types'] = 'png|jpg|jpeg';
				// $config['file_name'] = 'image-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

				$config['file_name'] = 'img-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

				$config['max_size'] = 7084;

				$this->load->library('upload');

				 $this->upload->initialize($config);

				 if ($this->upload->do_upload('txt_gambar_kamar')) {
				 	$gam_lam = $this->input->post('gam_lam');
				 	if ($gam_lam != $this->input->post('txt_gambar_kamar')) {
				 		unlink(FCPATH . '/assets/img/' . $gam_lam);
				 	}
					$Image = $this->upload->data('file_name');
					$this->db->set('gambar_kamar', $Image);
				}
			}
         $this->Kamar_model->UpdateData($id_kam,$no_kam,$tipe_kas,$tipe_kam,$id_fas,$Image);
		 redirect(site_url('admin/Kamar'));
	}


	function DeleteKamar()
	{
		 $id_kamar=$this->uri->segment(4);
		 $gambar_kamar=$this->uri->segment(5);
		
		 $var1 = $this->Kamar_model->DeleteData($id_kamar);
		 
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
				$tampil = $this->Kamar_model->GetDataJoinWhere($id_kamar);
					$data['detail']['id_kamar']= $tampil->id_kamar;
					$data['detail']['no_kamar']= $tampil->no_kamar;
	            	$data['detail']['tipe_kasur']= $tampil->tipe_kasur;
	            	$data['detail']['tipe_kamar']= $tampil->tipe_kamar;
	            	$data['detail']['id_fasilitas']= $tampil->id_fasilitas;
	            	$data['detail']['no_fasilitas']= $tampil->no_fasilitas;
	            	$data['detail']['gambar_kamar']= $tampil->gambar_kamar;
				$this->load->view('admin/V_edit_kamar', $data);

			}

		}


} ?>