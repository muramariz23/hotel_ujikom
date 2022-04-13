<?php 

class Login extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('login_model');
	}
	function index(){		
		$this->load->view('login_view');

	}
	function auth(){
		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$auth = $this->login_model->auth($username,$password);
		if($auth->num_rows() > 0){
			$data = $auth->row_array();
			$username = $data['username'];
			$status = $data['status'];
			$sesdata = array(
				'username'=> $username,
				'status' => $status,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			if($status == 'admin'){
				$this->session->set_userdata('akses','admin');
				redirect('admin/Dashboard');
				}
			elseif($status == 'pegawai'){
				$this->session->set_userdata('akses','pegawai');
				redirect('admin/pegawai');
				}
			elseif ($status == 'pengguna') {
				$this->session->set_userdata('akses', 'pengguna');
				redirect('admin/pengguna');
				}
			}
			else
				$this->session->set_flashdata('msg', 'Username or Passord is Wrong');
				redirect('login');
	}
	function logout(){
		$this->session->sess_destroy();
		$url=base_url('');
		redirect($url);
	}
				
}
?>
 