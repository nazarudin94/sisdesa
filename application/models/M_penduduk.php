<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');

class M_penduduk extends CI_Model {
	function __construct()
	{
		parent::__construct();
	 //validasi jika user belum login
	}

	function get_penduduk(){

		$query = $this->db->get('penduduk');
		return $query->result_array();


	}

}
