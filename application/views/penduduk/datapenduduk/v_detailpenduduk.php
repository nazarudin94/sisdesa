
<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title_web?></title>  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/multi-form.css?v2">
</head><div class="container">
  <div class="row justify-content-center align-items-center">
   <div class="card mt-2">
    <div class="card-body">
     <div class="col-md-12 ">
      <center>
       <h3>DATA PENDUDUK</h3><br>
     </center>
     <div class="row">
       <div class="col-md-12">
        <div class="row">
         <div class="col-md-6" style="border-bottom: 1px">
          <table>
           <tbody>
            <?php foreach ($data_penduduk as $key => $value) { ?>



              <tr>
                <td><strong>Kepala Keluarga</strong></td>
                <td>:</td>
                <td ><?= $value['nama_kepala_keluarga']  ?></td>
                <td></td>
              </tr>
              <tr>
                <td><strong>No.Kartu Keluarga</strong></td>
                <td>:</td>
                <td ><?= $value['kk']  ?></td>
                <td></td>
              </tr>
              <tr >
                <td><strong>NIK</strong></td>
                <td>:</td>
                <td ><?= $value['nik']  ?></td>
                <td></td>
              </tr>
              <tr ng-show="resume.pendaftaran.bisaPilih" class="">
                <td><strong>Tempat Lahir</strong></td>
                <td>:</td>
                <td ><?= $value['tempat_lahir']  ?>
              </td>
              <td></td>
            </tr>
            <tr ng-show="resume.pendaftaran.bisaPilih" class="">
              <td><strong>Tanggal Lahir</strong></td>
              <td>:</td>
              <td ><?= $value['tanggal_lahir']  ?></td>
              <td></td>
            </tr>
            <tr ng-show="resume.pendaftaran.bisaPilih" class="">
              <td><strong>Alamat Keluarga</strong></td>
              <td>:</td>
              <td ng-show="resume.pendaftaran.lokasiTest != null" >
               <?= $value['alamat']  ?>
             </td>
           </tr>
           <tr ng-show="resume.pendaftaran.bisaPilih" class="">
            <td><strong>RT/RW</strong></td>
            <td>:</td>
            <td ng-show="resume.pendaftaran.lokasiTest != null" >
              <?= $value['rt_rw']  ?>
            </td>
          </tr>
        </tbody></table>
        <br>

      </div>
      <div class="col-md-6" style="border-bottom: 1px">
        <table>
         <tbody><tr>
          <td><strong>Golongan Darah</strong></td>
          <td>:</td>
          <td >  <?= $value['gol_darah']  ?></td>
          <td></td>
        </tr>
        <tr>
          <td><strong>Pendidikan Terakhir</strong></td>
          <td>:</td>
          <td ><?= $value['pendidikan_terakhir']  ?></td>
          <td></td>
        </tr>
        <tr >
          <td><strong>Pekerjaan</strong></td>
          <td>:</td>
          <td ><?= $value['pekerjaan']  ?></td>
          <td></td>
        </tr>
        <tr ng-show="resume.pendaftaran.bisaPilih" class="">
          <td><strong>Tlp/Wa</strong></td>
          <td>:</td>
          <td ><?= $value['telp']  ?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<br>

</div>
</div>

<div class="row">
  <?php foreach ($data_hubungan as $key => $row) {?>

    <div class="col-md-6">
     <table>
      <tbody>

       <tr>
        <td><strong>Nama</strong></td>
        <td>:</td>
        <td><?= $row['nama'] ?></td>
      </tr>
      <tr>
        <td><strong>NIK</strong></td>
        <td>:</td>
        <td ><?= $row['nik'] ?></td>
      </tr>
      <tr>
        <td><strong>Hubungan Keluarga</strong></td>
        <td>:</td>
        <td ><?= $row['jenis_hub'] ?></td>
      </tr>
      <tr>
        <td><strong>Tempat Lahir</strong></td>
        <td>:</td>
        <td><?= $row['tempat_lahir'] ?></td>
      </tr>
      <tr>
        <td><strong>Tanggal Lahir</strong></td>
        <td>:</td>
        <td ><?= $row['tanggal_lahir'] ?></td>
      </tr>
      <tr>
        <td><strong>Golongan Darah</strong></td>
        <td>:</td>
        <td ><?= $row['gol_darah'] ?></td>
      </tr>
      <tr ng-show="state.pendidikanKuliah==true &amp;&amp; resume.pendaftaran.jenisPengadaan.id == '2'" class="">
        <td><strong>Pendidikan Terakhir</strong></td>
        <td>:</td>
        <td >
         <?= $row['pend_terakhir'] ?>
       </td>

     </tr>
     <tr>
      <td><strong>Pekerjaan</strong></td>
      <td>:</td>
      <td >   <?= $row['pekerjaan'] ?></td>

    </tr>
    <tr ng-show="state.pendidikanKuliah==true &amp;&amp; resume.pendaftaran.jenisPengadaan.id == '2'" class="">
      <td><strong>Tlp</strong></td>
      <td>:</td>
      <td ng-show="resume.pendaftaran.akreditasiProdiOtomatis != null" class="ng-binding ng-hide">
       <?= $row['telp'] ?>
     </td>
     <td></td>
   </tr>


 </tbody>
</table>
</div>
<?php } ?>
</div>
<div class="row">
  <div class="col-md-5">
   <table>
    <tbody>
      <?php foreach ($data_lain as $key => $value) {     ?>
      <tr>
        <td><strong>Jenis Bantuan</strong></td>
        <td>:</td>
        <td>PKH</td>
        <td></td>
      </tr>
      <tr>
        <td><strong>Kepemilikan Rumah</strong></td>
        <td>:</td>
        <td ><?= $value['kepemilikan_rumah'] ?></td>
        <td></td>
      </tr>
      <tr>
        <td><strong>Jenis Rumah</strong></td>
        <td>:</td>
        <td ><?= $value['jenis_rumah'] ?></td>
        <td></td>
      </tr>
      <tr>
        <td><strong>Bukti Kepemilikan</strong></td>
        <td>:</td>
        <td ><?= $value['bukti_kepemilikan_rumah'] ?></td>
        <td></td>
      </tr>
      <tr>
        <td><strong>Pekarangan Ruman</strong></td>
        <td>:</td>
        <td ><?= $value['pekarangan_rumah'] ?></td>
      </tr>
      <tr ng-show="resume.pendaftaran.lokasiKerja.keteranganPendidikan != null" class="ng-hide">
        <td><strong>Luas Pekarangan</strong></td>
        <td>:</td>
        <td ><?= $value['luas_pekarangan'] ?></td>
      </tr>
      <tr ng-show="resume.pendaftaran.jenisPengadaan.id == '1'" class="ng-hide">
        <td><strong>Tanaman di pekarangan</strong></td>
        <td>:</td>
        <td ng-show="resume.pendaftaran.dapodik.kodeBidangStudiSertifikasi != null " class="ng-binding ng-hide">
         <?= $value['tanaman_pekaranngan'] ?>
       </td>

     </tr>
     <tr>
      <td><strong>Jenis Tanaman</strong></td>
      <td>:</td>
      <td > <?= $value['jenis_tanaman'] ?></td>
    </tr>
    <tr>
      <td><strong>Listrik</strong></td>
      <td>:</td>
      <td ><?= $value['listrik'] ?></td>
    </tr>
    <tr>
      <td><strong>Besar KWH</strong></td>
      <td>:</td>
      <td ><?= $value['besar_kwh'] ?></td>
      <td></td>
    </tr>
    <tr>
      <td><strong>Biaya Listrik</strong></td>
      <td>:</td>
      <td >RP.<?= $value['biaya_listrik'] ?></td>
      <td></td>
    </tr>
    <tr>
      <td><strong>Kuota/Pulsa Keluarga /Bulan</strong></td>
      <td>:</td>
      <td >Rp.<?= $value['pulsa_keluarga'] ?></td>
      <td></td>
    </tr>
    <tr>
      <td><strong>Sumber Air</strong></td>
      <td>:</td>
      <td > <?= $value['sumber_air'] ?></td>
      <td></td>
    </tr>
    <tr>
      <td><strong>Bayar PDAM/Bulan</strong></td>
      <td>:</td>
      <td >Rp.<?= $value['biaya_air'] ?></td>
      <td></td>
    </tr>


  </tbody>
</table>
</div>
<div class="col-md-7">
 <table>
  <tbody>
   <tr>
    <td><strong>Konsumsi Beras /Bulan</strong></td>
    <td>:</td>
    <td ><?=$value['beras']?>, <strong>Stok Beras</strong> <?=$value['stok_beras']?></td>
    <td></td>
  </tr	>
  <tr>
    <td><strong>Konsumsi Minyak Goreng /Bulan</strong></td>
    <td>:</td>
    <td ><?=$value['minyak_goreng']?>, <strong>Stok Minyak</strong> <?=$value['stok_minyak']?></td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Konsumsi Gula Pasir /Bulan</strong></td>
    <td>:</td>
    <td ><?=$value['gula_pasir']?>, <strong>Stok Gula</strong> <?=$value['stok_gula']?></td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Konsumsi Telur /Bulan</strong></td>
    <td>:</td>
    <td ><?=$value['telur']?>, <strong>Stok Telur</strong> <?=$value['stok_telur']?></td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Konsumsi Daging /Bulan</strong></td>
    <td>:</td>
    <td ><?=$value['daging_ayam']?>, <strong>Stok Daging</strong> <?=$value['stok_daging']?></td>
    <td></td>
  </tr>
  <tr ng-show="resume.pendaftaran.lokasiKerja.keteranganPendidikan != null" class="ng-hide">
    <td><strong>Sawah</strong></td>
    <td>:</td>
    <td ><?=$value['sawah']?></td>
    <td></td>
  </tr>
  <tr ng-show="resume.pendaftaran.jenisPengadaan.id == '1'" class="ng-hide">
    <td><strong>Ladang</strong></td>
    <td>:</td>
    <td ng-show="resume.pendaftaran.dapodik.kodeBidangStudiSertifikasi != null " class="ng-binding ng-hide">
     <?=$value['ladang']?>
   </td>

 </tr>
 <tr>
  <td><strong>Tegalan</strong></td>
  <td>:</td>
  <td ><?=$value['tegalan']?></td>
  <td></td>
</tr>
<tr>
  <td><strong>Kolam Ikan</strong></td>
  <td>:</td>
  <td ><?=$value['kolam_ikan']?></td>
  <td></td>
</tr>
<tr>
  <td><strong>Jenis Tanaman yang dibudidayakan</strong></td>
  <td>:</td>
  <td ><?=$value['tanaman_budidaya']?></td>
  <td></td>
</tr>
<tr>
  <td><strong>Jenis Ternak yang dibudidayakan</strong></td>
  <td>:</td>
  <td ><?=$value['ternak_budidaya']?></td>
  <td></td>
</tr>
<tr>
  <td><strong>UMKM/Industri Kreatif</strong></td>
  <td>:</td>
  <td >Rp.<?=$value['umkm']?></td>
  <td></td>
</tr>
<tr>
  <td><strong>Jenis</strong></td>
  <td>:</td>
  <td ><?=$value['jenis_umkm']?></td>
  <td></td>
</tr>
<tr>
  <td><strong>Omset Perbulan</strong></td>
  <td>:</td>
  <td >Rp.<?=$value['omset']?></td>
  <td></td>
</tr>
<?php } ?>
</tbody>
</table>

</div>
<input name="status" value="sudah_diakhiri" type="hidden" autocomplete="off">
</div>
<hr>
<a href="<?php echo base_url() ?>penduduk/penduduk/pdf" class="btn btn-sm btn-primary">Export PDF</a>
<!-- <a href="#" class="btn btn-sm btn-warning">Edit</a> -->
</div>
</div>
</div>   
</div>
</div>
</div>  
</div>
<?php $this->load->view('template/templatejs'); ?>