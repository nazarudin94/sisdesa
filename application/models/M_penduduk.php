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

	function insert_penduduk($data_kepla,$resultxx,$datalain){
	// echo"<pre>";print_r(count($resultxx['nik_hk']));die();
// print_r($data_kepla);die();
		$this->db->insert('penduduk',$data_kepla);
		die();


		$jmldta = count($resultxx['nik_hk']);
		for ($i=0; $i < $jmldta ; $i++) { 

			$this->db->insert('hubungan_kel_tes', [
				'kk'=>$resultxx['kk'],
				'jenis_hub'=>$resultxx['jenis_hub_hk'][$i],
				'nama'=>$resultxx['nama_hk'][$i],
				'nik'=>$resultxx['nik_hk'][$i],
				'tempat_lahir'=>$resultxx['tempat_lahir_hk'][$i],
				'tanggal_lahir'=>$resultxx['tanggal_lahir_hk'][$i],
				'gol_darah'=>$resultxx['gol_darah_hk'][$i],
				'pend_terakhir'=>$resultxx['pend_terakhir_hk'][$i],
				'agama'=>$resultxx['agama_hk'][0],
				'pekerjaan'=>$resultxx['pekerjaan_hk'][$i],
				'telp'=>$resultxx['telp_hk'][$i],
				'akta_kelahiran'=>$resultxx['akta_kelahiran_hk'][0]
			]);

			// echo"<pre>";print_r($result);
		};
		// die();
		// $sql ="INSERT INTO `hubungan_kel_tes` (`kk`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `gol_darah`, `pend_terakhir`, `agama`, `pekerjaan`, `telp`, `akta_kelahiran`) VALUES ('1232 3334 4556 5666', 'abang', '5473764737477474', 'garut', '02/15/2022', 'A', 'S2', 'islam', 'Tukang Banguna', '09289334343', 'ada')";
		

		// return $result->result_array();

	}




}
