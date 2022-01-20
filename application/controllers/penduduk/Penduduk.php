<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller { 


		function __construct(){
		parent::__construct();	
		// $this->load->database();
		// $this->data['CI'] =& get_instance();
		// $this->load->helper(array('form', 'url'));
		// $this->load->library('form_validation');
		// $this->load->model('M_anggota');
		// $this->load->model('M_data');
		// $this->load->library(array('cart'));
		if($this->session->userdata('nama') != true){
			// var_dump($this->session->userdata('login') );
			redirect('penduduk/auth');
		}

	}
	public function index()
	{
		// die('xx');
		
		$this->data['title_web'] = 'Dashboard';
		$this->load->view('penduduk/index.php',$this->data);
	}

	public function detail()
	{
		// die('xx');
		
		$this->data['title_web'] = 'Detail Penduduk';
		$this->load->view('penduduk/datapenduduk/v_detailpenduduk.php',$this->data);
	}
}
