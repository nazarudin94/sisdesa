<?php defined('BASEPATH') OR exit('No direct script access allowed');
// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class ImportController extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('M_penduduk');
    // $this->load->model('SiswaModel');
  }
  
  // public function index(){
  //   die('xx');
  //   $data['siswa'] = $this->SiswaModel->view();
  //   $this->load->view('view', $data);
  // }

  public function export(){ 
                              // die('xx');
   $upload_file=$_FILES['upload_file']['name'];
   $extension = pathinfo($upload_file,PATHINFO_EXTENSION);
   $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
   $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
   $sheetdata=$spreadsheet->getActivesheet()->toArray();


   $data['penduduk']=$this->M_penduduk->insert_import($sheetdata);

   $sheetcount=count($sheetdata);
   if ($sheetcount>1) { 
     for ($i=1;$i<$sheetcount;$i++){
      $kk=$sheetdata[$i][0];
      $namakk=$sheetdata[$i][1];
      $nik=$sheetdata[$i][2];
      $lahir=$sheetdata[$i][3];
      $tanggallahir=$sheetdata[$i][4];
      $rt=$sheetdata[$i][5];
      $rw=$sheetdata[$i][6];
      $agama=$sheetdata[$i][7];
      $pendterakhir=$sheetdata[$i][8]; 
      $pekerjaan=$sheetdata[$i][9]; 
      $goldarah=$sheetdata[$i][10]; 
      $alamatkel=$sheetdata[$i][11]; 
      $telp=$sheetdata[$i][12]; 
      $jk=$sheetdata[$i][13]; 
      // hubungan
      $istri=$sheetdata[$i][14]; 
      $nikistri=$sheetdata[$i][15]; 
      $tempat_lahir_istri=$sheetdata[$i][16]; 
      $tanggal_istri=$sheetdata[$i][17]; 
      $agama_istri=$sheetdata[$i][18]; 
      $golongan_darah_istri=$sheetdata[$i][18]; 
      $pend_terakhir_istri=$sheetdata[$i][19]; 
      $pekerjaan=$sheetdata[$i][20]; 
      $tlp_istri=$sheetdata[$i][21]; 

      $dataKK=[
        "kk"=>$kk,
        "nama_kepala_keluarga"=>$namakk,
        "nik"=>$nik,
        "tempat_lahir"=>$lahir,
        "tanggal_lahir"=>$tanggallahir,
        "gol_darah"=>$goldarah,
        "alamat"=>$alamatkel,
        "agama"=>$agama,
        "telp"=>$telp,
        "pendidikan_terakhir"=>$pendterakhir,
        "pekerjaan"=>$pekerjaan,
        "rt"=>$rt,
        "rw"=>$rw,
        "jk"=>$jk,
        // hubungan
        "nama"
      ];


    echo"<pre>";print_r($dataKK);
    }
 }



}