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

	function get_detail_penduduk($param){
		$sql="select
		*
		from
		penduduk p
		where
		p.kk = '$param'";
		// var_dump($sql);die();

		$result =  $this->db->query($sql);
		return $result->result_array();

	}

	

	function get_detail_lain($param){
		$sql="	select
		*
		from
		KEPEMILIKAN_LAHAN KL
		inner join KONSUMSI K2 on
		KL.KK = K2.KK
		where
		kl.kk = '$param'";

		$result =  $this->db->query($sql);
		return $result->result_array();

	}

	function get_detail_hubungan($param){
		$sql="select nama,jenis_hub,nik,tempat_lahir,tanggal_lahir,gol_darah,agama,telp,pend_terakhir,pekerjaan,agama,telp,akta_kelahiran from hubungan_kel_tes hkt where kk = '$param'";

		$result =  $this->db->query($sql);
		return $result->result_array();

	}

	function get_detail_pendudukall(){
		$sql="select
		*
		from
		penduduk p";

		$result =  $this->db->query($sql);
		return $result->result_array();

	}

	function get_detail_lainall(){
		$sql="	select
		*
		from
		KEPEMILIKAN_LAHAN KL
		inner join KONSUMSI K2 on
		KL.KK = K2.KK
		";

		$result =  $this->db->query($sql);
		return $result->result_array();

	}

	function get_detail_hubunganall(){
		$sql="select * from hubungan_kel_tes hkt";

		$result =  $this->db->query($sql);
		return $result->result_array();

	}



}
