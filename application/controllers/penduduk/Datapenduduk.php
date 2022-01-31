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
	public function exportall()
	{
		$data['penduduk']=$this->M_penduduk->get_detail_pendudukall();
		$data['hubungan_kel']=$this->M_penduduk->get_detail_hubunganall();
		$data['lain']=$this->M_penduduk->get_detail_lainall();

		
		


		// $data['penduduk']=$this->M_penduduk->get_exportall();
		$x = 1;
		$html = '';
		$html = '<style>.str{ mso-number-format:\@; } </style>';
		$html .= '<table border="1">';
		$html .= '<thead>';

		$html .= '</thead>';

		$html .= '<tr>'  ;
		// $html.="<th style='background-color:black; color:white;'>No</th>";
		$html.="<th style='background-color:black; color:white;'>No.Kepala Keluarga</th>";
		$html.="<th style='background-color:black; color:white;'>Nama Kepala Keluarga</th>";
		$html.="<th style='background-color:black; color:white;'>NIK</th>";
		$html.="<th style='background-color:black; color:white;'>Tempat lahir</th>"; 
		$html.="<th style='background-color:black; color:white;'>Tanggal Lahir</th>"; 
		$html.="<th style='background-color:black; color:white;'>Alamat Keluarga</th>"; 
		$html.="<th style='background-color:black; color:white;'>RT/RW</th>"; 
		$html.="<th style='background-color:black; color:white;'>Golongan Darah</th>"; 
		$html.="<th style='background-color:black; color:white;'>Agama</th>"; 
		$html.="<th style='background-color:black; color:white;'>Pendidikan Terakhir</th>"; 
		$html.="<th style='background-color:black; color:white;'>Pekerjaan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Tlp/WA</th>"; 

		$result=[];
		foreach ($data['hubungan_kel'] as $key => $value) {
			$result['hubungan'][$key]=$value['nama'];
		}
		$vals=[];
		
		for ($i=0; $i<count($result['hubungan']); $i++) { 
			
			$html.="<th style='background-color:black; color:white;'>Nama</th> 
			<th style='background-color:black; color:white;'>NIK</th> 
			<th style='background-color:black; color:white;'>Hub.Keluarga</th> 
			<th style='background-color:black; color:white;'>Tempat lahir</th> 
			<th style='background-color:black; color:white;'>Tanggal Lahir</th> 
			<th style='background-color:black; color:white;'>Golongan Darah</th> 
			<th style='background-color:black; color:white;'>Pendidikan Terakhir</th> 
			<th style='background-color:black; color:white;'>Agama</th> 
			<th style='background-color:black; color:white;'>Pekerjaan</th> 
			<th style='background-color:black; color:white;'>Telp/WA</th> 
			<th style='background-color:black; color:white;'>Akta Lahir</th> ";
		}
		$html.="<th style='background-color:black; color:white;'>Jenis Bantuan</th>";
		$html.="<th style='background-color:black; color:white;'>Kepemilikan Rumah</th>";
		$html.="<th style='background-color:black; color:white;'>Jenis Rumah</th>";
		$html.="<th style='background-color:black; color:white;'>Bukti Kepemilikan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Pekarangan Ruman</th>"; 
		$html.="<th style='background-color:black; color:white;'>Luas Pekarangan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Tanaman di pekarangan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Jenis Tanaman</th>"; 
		$html.="<th style='background-color:black; color:white;'>Listrik</th>"; 
		$html.="<th style='background-color:black; color:white;'>Besar KWH</th>"; 
		$html.="<th style='background-color:black; color:white;'>Biaya Listrik</th>"; 
		$html.="<th style='background-color:black; color:white;'>Kuota/Pulsa Keluarga /Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Sumber Air</th>"; 
		$html.="<th style='background-color:black; color:white;'>Bayar PDAM/Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Beras /Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Stok Beras /Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Minyak Goreng /Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Stok Minyak/Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Gula Pasir /Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Stok Gula/Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Telur /Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Stok Telur/Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Daging /Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Stok Daging/Bulan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Sawah</th>"; 
		$html.="<th style='background-color:black; color:white;'>Ladang</th>"; 
		$html.="<th style='background-color:black; color:white;'>Tegalan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Kolam Ikan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Jenis Tanaman yang dibudidayanakan</th>"; 
		$html.="<th style='background-color:black; color:white;'>Jenis Ternak yang dibudidayanakan</th>"; 
		$html.="<th style='background-color:black; color:white;'>UMKM/Industri</th>"; 
		$html.="<th style='background-color:black; color:white;'>Jenis</th>"; 
		$html.="<th style='background-color:black; color:white;'>Omset</th>"; 
		$html .= '</tr>';
		$html .= '</thead>';
		$html .= '<tbody>';
		$arr3 = [];
		foreach ($data['penduduk'] as $k0 => $row) {
			
			$arr3[$k0] = $row;
			foreach ($data['hubungan_kel'] as $k1 => $row1) {
				$arr3[$k1] = $row1;
			}
			$html .= '</tr>';
		}
		echo"<pre>";print_r($arr3);
		

		// foreach ($data['penduduk'] as $k0 => $row) {
		// $html .= '<tr>';
		// 	$html.='<td>'. $x++ .'</td>';
		// 	$html.='<td>'. $row["kk"] .'</td>';  
		// 	$html.='<td>'. $row["nama_kepala_keluarga"] .'</td>';  
		// 	$html.='<td>'. $row["nik"] .'</td>';  
		// 	$html.='<td>'. $row["tempat_lahir"] .'</td>';  
		// 	$html.='<td>'. $row["tanggal_lahir"] .'</td>'; 
		// 	$html.='<td>'. $row["alamat"] .'</td>';  
		// 	$html.='<td>'. $row["rt_rw"] .'</td>';   
		// 	$html.='<td>'. $row["gol_darah"] .'</td>'; 
		// 	$html.='<td>'. $row["agama"] .'</td>';  
		// 	$html.='<td>'. $row["pendidikan_terakhir"] .'</td>';  
		// 	$html.='<td>'. $row["pekerjaan"] .'</td>';
		// 	$html.='<td>'. $row["telp"] .'</td>'; 
		// 	$html.='</tr>';   
		// }
		// foreach ($data['hubungan_kel'] as $k1 => $row) {
		// 	$html.='<td>'. $row["nama"] .'</td>';  
		// 	$html.='<td>'. $row["nik"] .'</td>';

		// 	$html.='<td>'. $row["jenis_hub"] .'</td>';  
		// 	$html.='<td>'. $row["tempat_lahir"] .'</td>'; 
		// 	$html.='<td>'. $row["tanggal_lahir"] .'</td>';  
		// 	$html.='<td>'. $row["gol_darah"] .'</td>';   
		// 	$html.='<td>'. $row["pend_terakhir"] .'</td>';  
		// 	$html.='<td>'. $row["agama"] .'</td>';  
		// 	$html.='<td>'. $row["pekerjaan"] .'</td>'; 
		// 	$html.='<td>'. $row["telp"] .'</td>';  
		// 	$html.='<td>'. $row["akta_kelahiran"] .'</td>';   

		// }
		// foreach ($data['lain'] as $k1 => $row) {
		// 	$html.='<td>'. "PKH" . '</td>';  
		// 	$html.='<td>'. $row['kepemilikan_rumah'].'</td>'; 
		// 	$html.='<td>'. $row['jenis_rumah'].'</td>';  
		// 	$html.='<td>'. $row['bukti_kepemilikan_rumah'].'</td>'; 
		// 	$html.='<td>'. $row['pekarangan_rumah'].'</td>'; 
		// 	$html.='<td>'. $row['luas_pekarangan'].'</td>'; 
		// 	$html.='<td>'. $row['tanaman_pekaranngan'].'</td>'; 
		// 	$html.='<td>'. $row['jenis_tanaman'].'</td>'; 
		// 	$html.='<td>'. $row['listrik'].'</td>'; 
		// 	$html.='<td>'. $row['besar_kwh'].'</td>'; 
		// 	$html.='<td>'. $row['biaya_listrik'].'</td>'; 
		// 	$html.='<td>'. $row['pulsa_keluarga'].'</td>'; 
		// 	$html.='<td>'. $row['sumber_air'].'</td>'; 
		// 	$html.='<td>'. $row['biaya_air'].'</td>'; 
		// 	$html.='<td>'. $row['beras'].'</td>'; 
		// 	$html.='<td>'. $row['stok_beras'].'</td>'; 
		// 	$html.='<td>'. $row['minyak_goreng'].'</td>'; 
		// 	$html.='<td>'. $row['stok_minyak'].'</td>'; 
		// 	$html.='<td>'. $row['gula_pasir'].'</td>'; 
		// 	$html.='<td>'. $row['stok_gula'].'</td>'; 
		// 	$html.='<td>'. $row['telur'].'</td>'; 
		// 	$html.='<td>'. $row['stok_telur'].'</td>'; 
		// 	$html.='<td>'. $row['daging_ayam'].'</td>'; 
		// 	$html.='<td>'. $row['stok_daging'].'</td>'; 
		// 	$html.='<td>'. $row['sawah'].'</td>';  
		// 	$html.='<td>'. $row['ladang'].'</td>';  
		// 	$html.='<td>'. $row['tegalan'].'</td>';
		// 	$html.='<td>'. $row['kolam_ikan'].'</td>'; 
		// 	$html.='<td>'. $row['tanaman_budidaya'].'</td>';  
		// 	$html.='<td>'. $row['ternak_budidaya'].'</td>';  
		// 	$html.='<td>'. $row['umkm'].'</td>'; 
		// 	$html.='<td>'. $row['jenis_umkm'].'</td>'; 
		// 	$html.='<td>'. $row['omset'].'</td>'; 

		// }
		// die();
		$html .= '</tbody>';
		// header("Content-Type: application/xls");
		// header("Content-Disposition: attachment; filename= Report_data_all.xls");
		// header("Pragma: no-cache");
		// header("Expires: 0");
		echo $html;
		die();
	}
}
