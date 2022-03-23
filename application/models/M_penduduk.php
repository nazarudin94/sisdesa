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
		KONSUMSI
		where
		kk = '$param'";
// die($sql);
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

	// function insert_import($sheetdata){

	// 	$namakk=$sheetdata[$i][1];
	// 	$nik=$sheetdata[$i][2];
	// 	$lahir=$sheetdata[$i][3];
	// 	$tanggallahir=$sheetdata[$i][4];
	// 	$rt=$sheetdata[$i][5];
	// 	$rw=$sheetdata[$i][6];
	// 	$agama=$sheetdata[$i][7];
	// 	$pendterakhir=$sheetdata[$i][8]; 
	// 	$pekerjaan=$sheetdata[$i][9]; 
	// 	$goldarah=$sheetdata[$i][10]; 
	// 	$alamatkel=$sheetdata[$i][11]; 
	// 	$telp=$sheetdata[$i][12]; 
	// 	$jk=$sheetdata[$i][13]; 
	// 	$sheetcount=count($sheetdata);
	// 	if ($sheetcount>1) { 
	// 		for ($i=1;$i<$sheetcount;$i++){
	// 			$this->db->insert('penduduk',[
	// 				"kk"=>$sheetdata[$i][1];,
	// 				"nama_kepala_keluarga"=>$sheetdata[$i],
	// 				"nik"=>$sheetdata[$i],
	// 				"tempat_lahir"=>$sheetdata[$i],
	// 				"tanggal_lahir"=>$sheetdata[$i],
	// 				"gol_darah"=>$sheetdata[$i],
	// 				"alamat"=>$sheetdata[$i],
	// 				"agama"=>$sheetdata[$i],
	// 				"telp"=>$sheetdata[$i],
	// 				"pendidikan_terakhir"=>$pendterakhir,
	// 				"pekerjaan"=>$pekerjaan,
	// 				"rt"=>$rt,
	// 				"rw"=>$rw,
	// 				"jk"=>$jk
	// 			]);
	// 		}
	// 	}
	// 	echo"<pre>";print_r($kk);die();
	// }

	function insert_penduduk($data_kepla,$resultxx,$datalain){
				// echo"<pre>";print_r($resultxx);die();
		$this->db->insert('konsumsi',$datalain);
		$this->db->insert('penduduk',$data_kepla);
		if (!empty($resultxx['nik_hk'])) {
			$jmldta = count($resultxx['nik_hk']);
			$akta =1;
			for ($i=0; $i < $jmldta ; $i++) { 
				$aktaa=$akta-1;
				$this->db->insert('hubungan_kel_tes', [
					'kk'=>$resultxx['kk'],
					'jenis_hub'=>$resultxx['jenis_hub_hk'][$i],
					'nama'=>$resultxx['nama_hk'][$i],
					'nik'=>$resultxx['nik_hk'][$i],
					'tempat_lahir'=>$resultxx['tempat_lahir_hk'][$i],
					'tanggal_lahir'=>$resultxx['tanggal_lahir_hk'][$i],
					'gol_darah'=>$resultxx['goldarah_hk'][$i],
					'pend_terakhir'=>$resultxx['pend_terakhir_hk'][$i],
					'agama'=>$resultxx['agama_hk'][$i],
					'pekerjaan'=>$resultxx['pekerjaan_hk'][$i],
					'telp'=>$resultxx['telp_hk'][$i],
					'jk'=>$resultxx['jk'][$aktaa],
					'akta_kelahiran'=>$resultxx['akta_kelahiran'][$aktaa]
				]);
			};
		}
	}

	function count_jk_penduduk(){
		$sql1 = "select count(*) as jk from penduduk tl  where jk = 'L'";
		$sql2 = "select count(*) as jk from hubungan_kel_tes hkt   where jk = 'L'";
		$result1 =  $this->db->query($sql1);
		$result2 =  $this->db->query($sql2);
		$data = [
			"data1" =>$result1->result_array(),
			"data2" =>$result2->result_array()
		];
		return $data;
	} 


	function count_kk_penduduk(){
		$sql = "select count(kk) as jk from penduduk tl";
		$result =  $this->db->query($sql);
		return $result->row();
	} 





}
