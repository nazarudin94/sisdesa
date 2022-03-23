<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapenduduk extends CI_Controller { 


	function __construct(){
		parent::__construct();	
		// $this->load->database();
		// $this->data['CI'] =& get_instance();
		// $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
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


		//gabungkan semua data ke dalam 1 array berdasar id_penduduk
		$data_penduduk = array();
		$data_pendudukx = array();
		foreach ($data['penduduk'] as $key => $value) {
			$data_penduduk[$value['kk']]['nama_kepala_keluarga'] = $value;
		}
		foreach ($data['hubungan_kel'] as $key => $value) {
			$data_pendudukx[$value['kk']]['jenis_hub'] = $value;
		}

		foreach ($data['lain'] as $key => $value) {
			$data_penduduk[$value['kk']]['lain'] = $value;
		}

		echo"<pre>";print_r($data_pendudukx);
		

		


		


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

		foreach ($data['penduduk'] as $k0 => $row) {
			

		}
		foreach ($data['hubungan_kel'] as $k1 => $row1) {
			
		}
		// echo"<pre>";print_r();
		

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

	public function simpanData()
	{

		$data['title_web'] = 'INPUT DATA PENDUDUK';
		
		// echo"<pre>";print_r($_POST);die();

		// if ($_POST['pekaranganrumah']=="tidak") {
		// 	$luaspekrngan = "-";
		// 	$tanmndipekarangan = "-";
		// 	$jenistanaman = "-";
		// }else{
		// 	$luaspekrngan = "-";
		// 	$tanmndipekarangan = "-";
		// 	$jenistanaman = "-";
		// }

		// echo"<pre>";print_r(count($jmldta));die();
		// echo"<pre>";print_r($_POST);die();


		$this->form_validation->set_rules('namakk','Nama','required');
		$this->form_validation->set_rules('jenis_kelamin','jenis kelamin','required');
		$this->form_validation->set_rules('nokk','No.KK','required');
		$this->form_validation->set_rules('nik','NIK','required');
		$this->form_validation->set_rules('tempatlahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('alamatkel','Alamat Keluarga','required');
		$this->form_validation->set_rules('agama','Agama','required');
		$this->form_validation->set_rules('goldarah','Golongan Darah','required');
		$this->form_validation->set_rules('rt','RT','required');
		$this->form_validation->set_rules('rw','RW','required');
		$this->form_validation->set_rules('pendterakhir','Pendidikan Terakhir','required');
		$this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
		$this->form_validation->set_rules('tlp','Telp/WA','required');

		if ($this->input->post('nama_hk[]') != '') {
		$this->form_validation->set_rules('nama_hk[]','Nama Istri','required');
		$this->form_validation->set_rules('tanggal_lahir_hk[]','tanggal lahir hk','required');
		$this->form_validation->set_rules('tlp_hk[]','tlp_hk','required');
		$this->form_validation->set_rules('pekerjaan_hk[]','pekerjaan_hk','required');
		$this->form_validation->set_rules('pendterakhir_hk[]','pendterakhir_hk','required');
		$this->form_validation->set_rules('goldarah_hk[]','goldarah_hk','required');
		$this->form_validation->set_rules('agama_hk[]','agama_hk','required');
		$this->form_validation->set_rules('tempat_lahir_hk[]','tempat_lahir_hk','required');
		$this->form_validation->set_rules('nik_hk[]','nik_hk','required');	
		}

		if ( $this->input->post('akta_lahir[]') != '' && $this->input->post('jenis_kelamin_hk[]')!='' ) {
		$this->form_validation->set_rules('akta_lahir[]','akta_lahir','required');	
		$this->form_validation->set_rules('jenis_kelamin_hk[]','jenis_kelamin','required');	
		
		}
		$this->form_validation->set_rules('gas','gas','required');
		$this->form_validation->set_rules('jenis_ternak_budidaya','jenis ternak budidaya','required');

		$this->form_validation->set_rules('umkm','UMKM','required');
		if ($_POST['umkm']!= 'tidak') {
		$this->form_validation->set_rules('jenisumkm','Jenis UMKM','required');
		$this->form_validation->set_rules('omset','Omset Usaha','required');
		}

		$this->form_validation->set_rules('kolamikan','kolam ikan','required');
		$this->form_validation->set_rules('tegalan','tegalan','required');
		$this->form_validation->set_rules('ladang','ladang','required');
		$this->form_validation->set_rules('sawah','sawah','required');
		$this->form_validation->set_rules('daging','daging','required');
		$this->form_validation->set_rules('telur','telur','required');
		$this->form_validation->set_rules('gula','gula','required');
		$this->form_validation->set_rules('minyak','minyak','required');
		$this->form_validation->set_rules('jenisbntuan','jenis bantuan','required');
		$this->form_validation->set_rules('beras','beras','required');
		$this->form_validation->set_rules('sumber_air','sumber air','required');

		if ($_POST['sumber_air']=='PDAM') {
		$this->form_validation->set_rules('bayarpdam','bayar pdam','required');
		}
		$this->form_validation->set_rules('kuotapulsa','kuotapulsa','required');
		$this->form_validation->set_rules('biayalistrik','biayar listrik','required');
		$this->form_validation->set_rules('besar_kwh','besar kwh','required');
		$this->form_validation->set_rules('listrik','listrik','required');

		$this->form_validation->set_rules('pekaranganrumah','pekarangan rumah','required');		
		if ($_POST['pekaranganrumah']!='tidak') {
		$this->form_validation->set_rules('luaspekrngan','luas pekarangan','required');
		$this->form_validation->set_rules('jenistanaman','jenis tanaman','required');
		$this->form_validation->set_rules('tanmndipekarangan','Tanaman dipekarangan','required');
		}

		$this->form_validation->set_rules('buktikepemilikanrumah','bukti kepemilikan rumah rumah','required');
		$this->form_validation->set_rules('jenisrumah','jenis rumah','required');
		$this->form_validation->set_rules('kepemilikanrumah','kepemilikan rumah','required');		

		if ($this->form_validation->run() != false) {
		// die('xx');


			$kk =$this->input->post('nokk');	
		// lain-lain
			$jenisbntuan = $this->input->post('jenisbntuan');
			$jenisrumah = $this->input->post('jenisrumah');
			$luaspekrngan = $this->input->post('luaspekrngan');
			$tanmndipekarangan = $this->input->post('tanmndipekarangan');
			$jenistanaman = $this->input->post('jenistanaman');
			$biayalistrik = $this->input->post('biayalistrik');
			$kuotapulsa = $this->input->post('kuotapulsa');
			$bayarpdam = $this->input->post('bayarpdam');
			$jenis_rumah = $this->input->post('jenisrumah');
			$buktikepemilikanrumah = $this->input->post('buktikepemilikanrumah');
			$kepemilikanrumah = $this->input->post('kepemilikanrumah');
			$pekaranganrumah = $this->input->post('pekaranganrumah');
			$jenis_tanaman_budidaya = $this->input->post('jenis_tanaman_budidaya');
			$jenis_ternak_budidaya = $this->input->post('jenis_ternak_budidaya');
			$beras = $this->input->post('beras');
			$minyak = $this->input->post('minyak');
			$gula = $this->input->post('gula');
			$telur = $this->input->post('telur');
			$daging = $this->input->post('daging');
			$sawah = $this->input->post('sawah');
			$Ladang = $this->input->post('ladang');
			$tegalan = $this->input->post('tegalan');
			$kolamikan = $this->input->post('kolamikan');
			// $jenisternak = $this->input->post('jenisternak');
			$jenisumkm = $this->input->post('jenisumkm');
			$umkm = $this->input->post('umkm');
			$omset = $this->input->post('omset');
			$sumber_air = $this->input->post('sumber_air');
			$besar_kwh = $this->input->post('besar_kwh');
			$listrik = $this->input->post('listrik');
			// $stok_minyak = $this->input->post('stok_minyak');


			$datalain =[
				'kk'=>str_replace(' ', '',$kk),
				'jenis_bantuan'=>$jenisbntuan,
				'luas_pekarangan'=>$luaspekrngan,
				'umkm'=>$umkm,
				'tanaman_pekarangan'=>$tanmndipekarangan,
				'jenis_tanaman'=>$jenistanaman,
				'biaya_listrik'=>$biayalistrik,
				'kuotapulsa'=>$kuotapulsa,
				'bayarpdam'=>$bayarpdam,
			// 'bayarpdam'=>$bayarpdam,
				'beras'=>$beras,
				// 'stok_beras'=>$stok_beras,
				'minyak_goreng'=>$minyak,
			// 'jenis_minyak'=>$_POST['jenis_minyak'],
				'jenis_rumah'=>$jenis_rumah,
				'bukti_kepemilikan_rumah'=>$buktikepemilikanrumah,
				'kepemilikan_rumah'=>$kepemilikanrumah,
				'gula_pasir'=>$gula,
				// 'stok_gula'=>$stok_gula,
				'telur'=>$telur,
				// 'stok_telur'=>$stok_telur,
				'daging_ayam'=>$daging,
				// 'stok_daging'=>$stok_daging,
				'sawah'=>$sawah,
				'ladang'=>$Ladang,
				'tegalan'=>$tegalan,
				'kolam_ikan'=>$kolamikan,
				// 'jenisternak'=>$jenisternak,
				'jenis_umkm'=>$jenisumkm,
				'omset'=>$omset,
				'sumber_air'=>$sumber_air,
				'besar_kwh'=>$besar_kwh,
				'listrik'=>$listrik,
				// 'stok_minyak'=>$stok_minyak,
				'pekarangan_rumah'=>$pekaranganrumah,
				// 'tanaman_budidaya'=>$jenis_tanaman_budidaya,
				'ternak_budidaya'=>$jenis_ternak_budidaya
			];
			// echo"<pre>";print_r($datalain);die();
		//hubungan keluarga
			$hubngankel = $this->input->post('jenis_hub');
			$nama_hk = $this->input->post('nama_hk');
			$nik_hk = $this->input->post('nik_hk');
			$tempat_lahir_hk = $this->input->post('tempat_lahir_hk');
			$tanggal_lahir_hk = $this->input->post('tanggal_lahir_hk');
			$goldarah_hk = $this->input->post('goldarah_hk');
			$pendterakhir_hk = $this->input->post('pendterakhir_hk');
			$agama_hk = $this->input->post('agama_hk');
			$pekerjaan_hk = $this->input->post('pekerjaan_hk');
			$tlp_hk = $this->input->post('tlp_hk');
			$akta_kelahiran_hk = $this->input->post('akta_lahir');
			$jk = $this->input->post('jenis_kelamin');


			$datahubungan =[
				'kk'=>str_replace(' ', '',$kk),
				'jenis_hub_hk'=>$hubngankel,
				'nama_hk'=>$nama_hk,
				'nik_hk'=>str_replace(' ', '',$nik_hk),
				'tempat_lahir_hk'=>$tempat_lahir_hk,
				'tanggal_lahir_hk'=>$tanggal_lahir_hk,
				'goldarah_hk'=>$goldarah_hk,
				'pend_terakhir_hk'=>$pendterakhir_hk,
				'agama_hk'=>$agama_hk,
				'pekerjaan_hk'=>$pekerjaan_hk,
				'telp_hk'=>str_replace(' ', '',$tlp_hk),
				'akta_kelahiran'=>$akta_kelahiran_hk,
				'jk'=>$jk
			];
// echo"<pre>";print_r($datahubungan);

			$namakk = $this->input->post('namakk');
			$nikkk = $this->input->post('nik');
			$tempatlahir = $this->input->post('tempatlahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$alamatkel = $this->input->post('alamatkel');
			$rt = $this->input->post('rt');
			$rw = $this->input->post('rw');
			$goldarah = $this->input->post('goldarah');
			$agama = $this->input->post('agama');
			$tlp = $this->input->post('tlp');
			$pendterakhir = $this->input->post('pendterakhir');
			$pekerjaan = $this->input->post('pekerjaan');



			$data_kepla = [
				'kk'=>str_replace(' ', '',$kk),
				'nama_kepala_keluarga'=>$namakk,
				'nik'=>str_replace(' ', '',$nikkk),
				'tempat_lahir'=>$tempatlahir,
				'tanggal_lahir'=>$tanggal_lahir,
				'alamat'=>$alamatkel,
				'rt'=>$rt,
				'rw'=>$rw,
				'gol_darah'=>$goldarah,
				'agama'=>$agama,
				'telp'=>str_replace(' ', '',$tlp),
				'pendidikan_terakhir'=>$pendterakhir,
				'pekerjaan'=>$pekerjaan
			// 'jenis_hub_hk'=>$_POST['jenis_hub_hk']
			];
// echo"<pre>";print_r($_POST);
// die('xx');
		// die('yy');
// echo"<pre>";print_r($data_kepla);die();
			$data['penduduk']=$this->M_penduduk->insert_penduduk($data_kepla,$datahubungan,$datalain);
			$this->session->set_flashdata('message','Berhasil Menambahkan data penduduk');
			$this->load->view('penduduk/datapenduduk/v_input_penduduk',$data);
		}else{
// die('xx');
			// echo"<pre>";print_r($_POST);
			$this->load->view('penduduk/datapenduduk/v_input_penduduk',$data);
		}

		// die();
	}
}
