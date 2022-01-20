<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapenduduk extends CI_Controller { 


	function __construct(){
		parent::__construct();	
		// $this->load->database();
		// $this->data['CI'] =& get_instance();
		// $this->load->helper(array('form', 'url'));
		// $this->load->library('form_validation');
		// $this->load->model('M_anggota');
		$this->load->model('M_penduduk');
		// $this->load->library(array('cart'));
		if($this->session->userdata('nama') != true){
			// var_dump($this->session->userdata('login') );
			redirect('penduduk/auth');
		}

	}
	public function index()
	{
		// die('xx');
		$data['title_web'] = 'INPUT DATA PENDUDUK';
		$data['penduduk']=$this->M_penduduk->get_penduduk();
 			// echo"<pre>";print_r($data['penduduk']);die();
		$this->load->view('penduduk/datapenduduk/v_input_penduduk',$data);
	}
}
