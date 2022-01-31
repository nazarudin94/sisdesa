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
		
		$this->data['title_web'] = 'Dashboard';
		$this->load->view('penduduk/index.php',$this->data);
	}

	public function detail()
	{
		// die('xx');
		
		$this->data['title_web'] = 'Detail Penduduk';
		$this->data['data_penduduk']=$this->M_penduduk->get_detail_penduduk();
		$this->data['data_lain']=$this->M_penduduk->get_detail_lain();
		$this->data['data_hubungan']=$this->M_penduduk->get_detail_hubungan();
		// echo "<pre>";print_r($data['data']);die();
		$this->load->view('penduduk/datapenduduk/v_detailpenduduk.php',$this->data);
	}

	public function pdf(){
		$this->load->library('dompdf_gen'); 
		// $data['detail']=$this->M_penduduk->get_penduduk();

		// $this->load->view('penduduk/pdf');
		$paper_size ='legal';
		$orientation='potrait';
		// $html=$this->output->get_output();
		$html = '';
		$html = '<style>.str{ mso-number-format:\@; } </style>';
		$html .= '<html>';
		$html .= '<body>';
		$html .= '<h1><center>Data Penduduk</center></h1><hr>';
		$html .= '<table border="0">';
		$html .='<tr>
		<td><strong>Kepala Keluarga</strong></td>
		<td>:</td>
		<td >Nazarudin Latif</td>
		<td><strong>Golongan Darah</strong></td>
		<td>:</td>
		<td>O</td>
		</tr>
		<tr>
		<td><strong>No.Kartu Keluarga</strong></td>
		<td>:</td>
		<td>3564785909847589</td>
		<td><strong>Pendidikan Terakhir</strong></td>
		<td>:</td>
		<td>S1</td>
		</tr>
		<tr >
		<td><strong>NIK</strong></td>
		<td>:</td>
		<td >3767847656746464</td>
		<td></td>
		</tr>
		<tr>
		<td><strong>Tempat Lahir</strong></td>
		<td>:</td>
		<td >Garut
		</td>
		<td><strong>Pekerjaan</strong></td>
		<td>:</td>
		<td>Karyawan Swasta</td>
		</tr>
		<tr>
		<td><strong>Tanggal Lahir</strong></td>
		<td>:</td>
		<td>17/01/1994</td>
		<td><strong>Tlp/Wa</strong></td>
		<td>:</td>
		<td>081224207102</td>
		</tr>
		<tr>
		<td><strong>Alamat Keluarga</strong></td>
		<td>:</td>
		<td ng-show="resume.pendaftaran.lokasiTest != null" >
		Jl.Ciganitri Desa Cipagalo Kec.Bojongsoang Kab.Bandung 
		</td>
		</tr>
		<tr>
		<td><strong>RT/RW</strong></td>
		<td>:</td>
		<td ng-show="resume.pendaftaran.lokasiTest != null" >
		06/02
		</td>
		</tr>
		<tr>
		<td><strong>Nama</strong></td>
		<td>:</td>
		<td >Nur Irma Juliani</td>
		<td></td>
		</tr>
		<tr>
		<td><strong>NIK</strong></td>
		<td>:</td>
		<td >8765656787656765</td>
		<td></td>
		</tr>
		<tr>
		<td><strong>Hubungan Keluarga</strong></td>
		<td>:</td>
		<td >Istri</td>
		<td></td>
		</tr>
		<tr>
		<td><strong>Tempat Lahir</strong></td>
		<td>:</td>
		<td >CIAMIS</td>
		<td></td>
		</tr>
		<tr>
		<td><strong>Tanggal Lahir</strong></td>
		<td>:</td>
		<td >10-07-1995</td>
		<td></td>
		</tr>
		<tr>
		<td><strong>Golongan Darah</strong></td>
		<td>:</td>
		<td >O</td>
		<td></td>
		</tr>
		<tr >
		<td><strong>Pendidikan Terakhir</strong></td>
		<td>:</td>
		<td>
		S1
		</td>
		<td></td>
		</tr>
		<tr>
		<td><strong>Pekerjaan</strong></td>
		<td>:</td>
		<td >Ibu Rumah Tangga</td>
		<td></td>
		</tr>
		<tr >
		<td><strong>Tlp</strong></td>
		<td>:</td>
		<td ng-show="resume.pendaftaran.akreditasiProdiOtomatis != null" class="ng-binding ng-hide">
		08122738474
		</td>
		<td></td>
		</tr><tr>
		<td><strong>Jenis Bantuan</strong></td>
		<td>:</td>
		<td>PKH</td>
		<td><strong>Konsumsi Beras /Bulan</strong></td>
		<td>:</td>
		<td>20Kg</td>
		<td><strong>Stok Beras</strong></td>
		<td>:</td>
		<td>Ada</td>
		</tr>
		<tr>
		<td><strong>Kepemilikan Rumah</strong></td>
		<td>:</td>
		<td >Milik Sendiri</td>
		<td><strong>Kepemilikan Rumah</strong></td>
		<td>:</td>
		<td >20L</td>
		<td><strong>Stok Minyak Goreng</strong></td>
		<td>:</td>
		<td >Ada</td>
		</tr>
		<tr>
		<td><strong>Jenis Rumah</strong></td>
		<td>:</td>
		<td >Permanen</td>
		<td><strong>Konsumsi Gula Pasir /Bulan</strong></td>
		<td>:</td>
		<td >1Kg</td>
		<td><strong>Stok Gula</strong></td>
		<td>:</td>
		<td >Ada</td>
		</tr>
		<tr>
		<td><strong>Bukti Kepemilikan</strong></td>
		<td>:</td>
		<td >Sertifikat Rumah</td>
		<td><strong>Konsumsi Telur /Bulan</strong></td>
		<td>:</td>
		<td >5Kg</td>
		<td><strong>Stok Telur</strong></td>
		<td>:</td>
		<td >Ada</td>
		</tr>
		<tr>
		<td><strong>Pekarangan Rumah</strong></td>
		<td>:</td>
		<td >Ada</td>
		<td><strong>Konsumsi Daging /Bulan</strong></td>
		<td>:</td>
		<td >5Kg</td>
		<td><strong>Stok Daging</strong></td>
		<td>:</td>
		<td >Ada</td>

		</tr>
		<tr>
		<td><strong>Luas Pekarangan</strong></td>
		<td>:</td>
		<td >500 M2</td>
		<td><strong>Sawah</strong></td>
		<td>:</td>
		<td >500 M2</td>
		</tr>
		<tr>
		<td><strong>Tanaman di pekarangan</strong></td>
		<td>:</td>
		<td >
		Ada
		</td>
		<td><strong>Ladang</strong></td>
		<td>:</td>
		<td>
		40ha
		</td>
		</tr>
		<tr>
		<td><strong>Jenis Tanaman</strong></td>
		<td>:</td>
		<td >Tanaman Hias</td>
		<td></td>
		</tr>
		<tr>
		<td><strong>Listrik</strong></td>
		<td>:</td>
		<td >KWH</td>
		<td><strong>Tegalan	</strong></td>
		<td>:</td>
		<td >30ha</td>
		</tr>
		<tr>
		<td><strong>Besar KWH</strong></td>
		<td>:</td>
		<td >1300W</td>
		<td><strong>Kolam Ikan</strong></td>
		<td>:</td>
		<td >20ha</td>
		</tr>
		<tr>
		<td><strong>Biaya Listrik</strong></td>
		<td>:</td>
		<td >RP.130.000</td>
		<td><strong>Jenis Tanaman yang dibudidayakan</strong></td>
		<td>:</td>
		<td >Hias</td>
		</tr>
		<tr>
		<td><strong>Kuota/Pulsa Keluarga /Bulan</strong></td>
		<td>:</td>
		<td >Rp.500.000</td>
		<td><strong>Jenis Ternak yang dibudidayakan</strong></td>
		<td>:</td>
		<td >Kambing</td>
		</tr>
		<tr>
		<td><strong>Sumber Air</strong></td>
		<td>:</td>
		<td > PDAM</td>
		<td><strong>UMKM/Industri Kreatif</strong></td>
		<td>:</td>
		<td > Rp.500.000</td>
		</tr>
		<tr>
		<td><strong>Bayar PDAM/Bulan</strong></td>
		<td>:</td>
		<td >Rp.200.000</td>
		<td><strong>Jenis</strong></td>
		<td>:</td>
		<td >Rajut</td>
		</tr>
		<tr>
		<td><strong>Omset Perbulan</strong></td>
		<td>:</td>
		<td >Rp.200.000</td>
		</tr>
		';
		$html .= '</table>';
		$html .= '</body>';
		$html .= '</html>';
// echo"<pre>";print_r($html);die();
		$this->dompdf->set_paper($paper_size,$orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("data_penduduk.pdf");
				// die('xx');
	}
}
