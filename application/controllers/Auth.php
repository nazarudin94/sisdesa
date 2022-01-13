<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

public function __construct (){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function logout (){
		// $this->session->unset_userdata('email');
		// $this->session->unset_userdata('role_id');
		$this->session->sess_destroy();
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">You Have been logged out!</div>');
		redirect('home');
	} 
}