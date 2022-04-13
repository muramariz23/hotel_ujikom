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
		$data['GetKamar']= $this->Kamar_model->GetAll('kamar');
		$this->load->view('admin/V_kamar', $data);
		}

	function Add()
	{
		$data['GetFasilitas']= $this->Kamar_model->GetData('fasilitas');
		$this->load->view('admin/V_add_kamar', $data);
	}

	function AddKamar()
	{
		 	$add['no_kamar']=$this->input->post('txt_no_kamar');
         	 $add['tipe_kasur']= $this->input->post('txt_tipe_kasur');
         	 $add['tipe_kamar']= $this->input->post('txt_tipe_kamar');  
         	 $add['id_fasilitas']= $this->input->post('txt_id_fasilitas');  
         	 

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


        	 $this->Kamar_model->AddData('kamar',$add);
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


}