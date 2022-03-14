<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
	parent::__construct();
	if ($this->session->userdata('status') != 'admin') {
            redirect(site_url('Login'));
        }
			
	}

	function index()
	{
		
		$this->load->view('admin/V_dashboard');
		}
	
	function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}