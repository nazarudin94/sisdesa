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

	function get_detail_penduduk(){
		$sql="select
		*
		from
		penduduk p
		where
		p.kk = '1234567812345678'";

		$result =  $this->db->query($sql);
		return $result->result_array();

	}

	function get_detail_lain(){
		$sql="	select
		*
		from
		KEPEMILIKAN_LAHAN KL
		inner join KONSUMSI K2 on
		KL.KK = K2.KK
		where
		kl.kk = '1234567812345678'";

		$result =  $this->db->query($sql);
		return $result->result_array();

	}

	function get_detail_hubungan(){
		$sql="select nama,jenis_hub,nik,tempat_lahir,tanggal_lahir,gol_darah,agama,telp,pend_terakhir,pekerjaan,agama,telp,akta_kelahiran from hubungan_kel_tes hkt where kk = '1234567812345678'";

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
