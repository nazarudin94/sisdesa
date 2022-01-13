<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

public function __construct (){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		// die('xx');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		if ($this->form_validation->run()==false) {
			$this->load->view("pelayanan/login/login");
		}else{
			$this->_login();
		}
	}

	private function  _login (){
		$email =	$this->input->post('email');
		$password =	$this->input->post('password');

		$user = $this->db->get_where('user',['email'=>$email])->row_array();
		//jika user ada
		if ($user != NULL) { 
			// if ($user['is_active']==1) {
			// print_r(password_verify($password, $user['password']));die();
			if (password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id'],
					'level' => $user['level'],
					'sistem' => "pelayanan",
					'id' => $user['id'],
				];
		// echo"<pre>";var_dump($data);die();
				$this->session->set_userdata($data);
				redirect('pelayanan/pelayanan');
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah!</div>');
				redirect('pelayanan/auth');
			}
			// }else{
			// 	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email belum di aktivasi!</div>');
			// redirect('auth');
			// }
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email atau Password anda salah!</div>');
			redirect('pelayanan/auth');
		}
	}

	public function logout (){
		// $this->session->unset_userdata('email');
		// $this->session->unset_userdata('role_id');
		$this->session->sess_destroy();
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">You Have been logged out!</div>');
		redirect('home');
	} 
}