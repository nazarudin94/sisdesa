 
<?php $this->load->view('template/templatecss'); ?>


<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php $this->load->view('template/header'); ?>
    <!-- /.navbar --> 

    <?php $this->load->view('template/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1><?= $title_web ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Penduduk</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- <div class="content-wrapper"> -->
       <div class="container-fluid">


        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message');?>"></div>
        <div class="card mt-2">
          <div class="card-body">
            <div class="row" style="margin-top: 30px;">
              <form method="post" action="<?php base_url() ?>ImportController/export" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="file" name="upload_file" class="form-control" id="upload_file">
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary">
                </div>
              </form>
              <form action="<?php echo base_url().'penduduk/datapenduduk/simpanData'; ?>" method="POST" id="myForm">
               <div class="row">
                <div class="col-md-6">
                  <table>
                   <tr>

                    <td><strong>Kepala Keluarga</strong></td>
                    <td>:</td>
                    <td > <input type="text" class="form-control-sm form-control" placeholder="Nama Kepala Keluarga" name="namakk" value="<?= set_value('namakk'); ?>"><?= form_error('namakk','<small class="text-danger pl-3">','</small>');?>
                  </td>
                </tr>
                <tr>
                  <td><strong>No.Kartu Keluarga</strong></td>
                  <td>:</td>
                  <td ><input type="text" id="kk" class="form-control-sm form-control kk" placeholder="No Kartu Keluarga"  value="<?= set_value('nokk'); ?>" name="nokk" data-inputmask="'mask': '9999 9999 9999 9999'" ><?= form_error('nokk','<small class="text-danger pl-3">','</small>');?></td>

                </tr>
                <tr>
                  <td><strong>NIK</strong></td>
                  <td>:</td>
                  <td > <input type="text" id="nik" class="form-control-sm form-control nik" placeholder="No Induk Kependudukan" value="<?= set_value('nik'); ?>" name="nik" value=""><?= form_error('nik','<small class="text-danger pl-3">','</small>');?></td>
                  <td></td>
                </tr>
                <tr ng-show="resume.pendaftaran.bisaPilih" class="">
                  <td><strong>Tempat Lahir</strong></td>
                  <td>:</td>
                  <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : Garut" value="<?= set_value('tempatlahir'); ?>" name="tempatlahir" value="">
                    <?= form_error('tempatlahir','<small class="text-danger pl-3">','</small>');?>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td><strong>Tanggal Lahir</strong></td>
                  <td>:</td>
                  <td ><input value="<?= set_value('tanggal_lahir'); ?>" name="tanggal_lahir" type="text" id="tgl" class="form-control-sm form-control tgl" placeholder="dd/mm/yyyy" /> <?= form_error('tanggal_lahir','<small class="text-danger pl-3">','</small>');?></td>
                  <td></td>
                </tr>
                <tr>
                  <td><strong>Alamat Keluarga</strong></td>
                  <td>:</td>
                  <td  >
                   <input type="text" class="form-control-sm form-control" placeholder="Contoh : Kp.Situgitrang" value="<?= set_value('alamatkel'); ?>" name="alamatkel" value="">
                   <?= form_error('alamatkel','<small class="text-danger pl-3">','</small>');?></td>
                 </tr>
                 <tr>
                  <td><strong>Agama</strong></td>
                  <td>:</td>
                  <td>
                    <select class=" form-control-sm form-control" value="<?= set_value('agama'); ?>" name="agama">
                      <option value="">Pilih</option>
                      <option value="Islam">Islam</option>
                      <option value="Protestan">Protestan</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Konghucu">Konghucu</option>
                    </select>

                    <?= form_error('agama','<small class="text-danger pl-3">','</small>');?>
                  </td>
                </tr>

              </table>
            </div>
            <div class="col-md-6">
             <table>
               <tr>
                <td><strong>RT</strong></td>
                <td>:</td>
                <td  >
                 <input type="text" id="rt" class="form-control-sm form-control rt" placeholder="Contoh : 06" value="<?= set_value('rt'); ?>" name="rt">
                 <?= form_error('rt','<small class="text-danger pl-3">','</small>');?>
               </td>
             </tr>
             <tr>
              <td><strong>RW</strong></td>
              <td>:</td>
              <td  >
               <input type="text" id="rw" class="form-control-sm form-control rw" placeholder="Contoh : 06" value="<?= set_value('rw'); ?>" name="rw">
               <?= form_error('rw','<small class="text-danger pl-3">','</small>');?>
             </td>
           </tr>
           <tr>
            <td><strong>Golongan Darah</strong></td>
            <td>:</td>
            <td><select class=" form-control-sm form-control" value="<?= set_value('goldarah'); ?>" name="goldarah">
              <option value="">Pilih</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="O">O</option>
              <option value="AB">AB</option>
              <option value="Tidak Tahu">Tidak Tahu</option>
            </select>  <?= form_error('goldarah','<small class="text-danger pl-3">','</small>');?></td>

            <td></td>
          </tr>
          <tr>
            <td><strong>Pendidikan Terakhir</strong></td>
            <td>:</td>
            <td > <select class=" form-control-sm form-control" value="<?= set_value('pendterakhir'); ?>" name="pendterakhir" >
              <option value="">Pilih</option>
              <option value="Tidak Sekolah">Tidak Sekolah</option>
              <option value="SD">SD</option>
              <option value="SMP/Sederajat">SMP/Sederajat</option>
              <option value="SMA/Sederajat">SMA/Sederajat</option>
              <option value="D1">D1</option>
              <option value="D2">D2</option>
              <option value="D3">D3</option>
              <option value="S1">S1</option>
              <option value="S2">S2</option>
              <option value="S3">S3</option>
            </select><?= form_error('pendterakhir','<small class="text-danger pl-3">','</small>');?></td>
          </tr>
          <tr >
            <td><strong>Pekerjaan</strong></td>
            <td>:</td>
            <td>  <select class=" form-control-sm form-control" value="<?= set_value('pekerjaan'); ?>" name="pekerjaan" id="pekerjaan" >
              <option value="">Pilih</option>
              <option value="Tidak Bekerja">Tidak Bekerja</option>
              <option value="PNS">PNS</option>
              <option value="TNI/POLRI">TNI/POLRI</option>
              <option value="Pensiunan">Pensiunan</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Wiraswasta">Wiraswasta</option>
              <option value="Petani">Petani</option>
              <option value="Sopir">Sopir</option>
              <option value="Buruh Harian Lepas">Buruh Harian Lepas</option>
              <option value="Buruh Tani">Buruh Tani</option>
              <option value="Tukang Banguna">Tukang Banguna</option>
              <option value="Pedagang">Pedagang</option>
              <option value="Pelajar">Pelajar</option>
              <option value="Ibu Rumah tangga">Ibu Rumah tangga</option>
              <option value="Dosen">Dosen</option>
              <option value="Guru">Guru</option>
              <option value="Lain-lain">Lain-lain</option>
            </select><?= form_error('pekerjaan','<small class="text-danger pl-3">','</small>');?></td>
          </tr>
          <tr ng-show="resume.pendaftaran.bisaPilih" class="">
            <td><strong>Tlp/Wa</strong></td>
            <td>:</td>
            <td ><input type="text"id="phone" class="form-control-sm form-control"  placeholder="Contoh : 081224207149" value="<?= set_value('tlp'); ?>" name="tlp"><?= form_error('tlp','<small class="text-danger pl-3">','</small>');?>
          </td>
        </tr>
        <tr>
          <td><strong>Jenis Kelamin</strong></td>
          <td>:</td>
          <td > <select class="form-control-sm form-control" value="<?= set_value('jenis_kelamin'); ?>" name="jenis_kelamin">
            <option value="">Pilih</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select> <?= form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>');?></td>
          <td></td>
        </tr>
      </table>
    </div>
  </div>
  <hr>

  <!-- hubungan keluarga -->
  <div class="row"> 
    <div class="col-md-12 d-flex justify-content-end">
      <div class="btn-group btn-warning mb-2">
        <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          Tambah Data Hub. Keluarga
        </button>
        <div class="dropdown-menu dropdown-menu-right" id="dropdownJenHubKel">
          <button class="dropdown-item btn-sm" type="button" id="addDataIstri">Istri</button>
          <button class="dropdown-item btn-sm" type="button" id="addDataAnak">Anak</button>
          <button class="dropdown-item btn-sm" type="button" id="addDataKl">Keluarga Lain</button>
        </div>
      </div>
    </div> 
  </div>
  <div class="row" id="formHubKel">

  </div>
  <hr>
  <div class="row">
    <div class="col-md-5">
      <table id="example1">
        <tr>
          <td><strong>Jenis Bantuan</strong></td>
          <td>:</td>
          <td>
           <select class="form-control-sm form-control select2" multiple="multiple" value="<?= set_value('jenisbntuan'); ?>" name="jenisbntuan">
            <option value="BLT">BLT</option>
            <option value="BPNT">BPNT</option>
            <option value="PKH">PKH</option>
            <option value="KIS">KIS</option>
            <option value="KIP">KIP</option>
            <option value="Tidak Ada">Tidak Ada</option>
          </select>  <?= form_error('jenisbntuan','<small class="text-danger pl-3">','</small>');?></td>
          <td></td>
        </tr>
        <tr>
          <td><strong>Kepemilikan Rumah</strong></td>
          <td>:</td>
          <td > <select class="form-control-sm form-control" value="<?= set_value('kepemilikanrumah'); ?>" name="kepemilikanrumah">
            <option value="">Pilih</option>
            <option value="Milik Sendiri">Milik Sendiri</option>
            <option value="Turut Orang Tua">Turut Orang Tua</option>
            <option value="Kontrak/Sewa">Kontrak/Sewa</option>
          </select> <?= form_error('kepemilikanrumah','<small class="text-danger pl-3">','</small>');?></td>
          <td></td>
        </tr>
        <tr>
          <td><strong>Jenis Rumah</strong></td>
          <td>:</td>
          <td >  <select class="form-control-sm form-control" value="<?= set_value('jenisrumah'); ?>" name="jenisrumah">
            <option value="">Pilih</option>
            <option value="Permanen">Permanen</option>
            <option value="Semi permanen">Semi permanen</option>
            <option value="Bilik">Bilik</option>
            <option value="Lainnya">Lainnya</option>
          </select> <?= form_error('jenisrumah','<small class="text-danger pl-3">','</small>');?></td>
          <td></td>
        </tr>
        <tr>
          <td><strong>Bukti Kepemilikan</strong></td>
          <td>:</td>
          <td > <select class="form-control-sm form-control" value="<?= set_value('buktikepemilikanrumah'); ?>" name="buktikepemilikanrumah">
           <option value="" >Pilih</option>
           <option value="Sertifikat Rumah">Sertifikat Rumah</option>
           <option value="Akta Jual Beli">Akta Jual Beli</option>
           <option value="Tidak ada">Tidak Ada</option>
           <option value="Lain-lain">Lain-lain</option>
         </select> <?= form_error('buktikepemilikanrumah','<small class="text-danger pl-3">','</small>');?></td>
         <td></td>
       </tr>
       <tr>
        <td><strong>Pekarangan Ruman</strong></td>
        <td>:</td>
        <td > <select class="form-control-sm form-control" value="<?= set_value('pekaranganrumah'); ?>" name="pekaranganrumah" id="pekarangan">
         <option value="">Pilih</option>
         <option value="ada">Ada</option>
         <option value="tidak">Tidak</option>
       </select> <?= form_error('pekaranganrumah','<small class="text-danger pl-3">','</small>');?></td>
     </tr>
     <tr id="pkrngn"></tr>
     <tr id="pkrngn2"></tr>
     <tr id="pkrngn3">
     
    </tr>
    <tr>
      <td><strong>Listrik</strong></td>
      <td>:</td>
      <td ><select class="form-control-sm form-control" value="<?= set_value('listrik'); ?>" name="listrik">
       <option value="" >Pilih</option>
       <option value="Token">Token</option>
       <option value="KWH">KWH</option>
       <option value="Lain-lain">Lain-lain</option>
     </select> <?= form_error('listrik','<small class="text-danger pl-3">','</small>');?> </td>
   </tr>
   <tr>
    <td><strong>Besar KWH</strong></td>
    <td>:</td>
    <td ><select class="form-control-sm form-control" value="<?= set_value('besar_kwh'); ?>" name="besar_kwh">
     <option value="" >Pilih</option>
     <option value="450W">450W</option>
     <option value="900W">900W</option>
     <option value="1300W">1300W</option>
     <option value="2200W">2200W</option>
   </select> <?= form_error('besar_kwh','<small class="text-danger pl-3">','</small>');?></td>
   <td></td>
 </tr>
 <tr>
  <td><strong>Biaya Listrik</strong></td>
  <td>:</td>
  <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 300000" value="<?= set_value('biayalistrik'); ?>" name="biayalistrik"> <?= form_error('biayalistrik','<small class="text-danger pl-3">','</small>');?></td>
  <td></td>
</tr>
<tr>
  <td><strong>Kuota/Pulsa Keluarga /Bulan</strong></td>
  <td>:</td>
  <td > <input type="number" class="form-control-sm form-control" placeholder="Contoh : 500000" value="<?= set_value('kuotapulsa'); ?>" name="kuotapulsa"> <?= form_error('kuotapulsa','<small class="text-danger pl-3">','</small>');?></td>
  <td></td>
</tr>
<tr>
  <td><strong>Sumber Air</strong></td>
  <td>:</td>
  <td ><select class="form-control-sm form-control"  id="pdamid" value="<?= set_value('sumber_air'); ?>" name="sumber_air">
    <option value="">Pilih</option>
    <option value="PDAM">PDAM</option>
    <option value="Sumur">Sumur</option>
    <option value="MCK Umum">MCK Umum</option>
    <option value="Sumber Air Lain">Sumber Air Lain</option>
  </select> <?= form_error('sumber_air','<small class="text-danger pl-3">','</small>');?></td>
  <td></td>
</tr>
<tr id="bayarpdam">


</tr> 

</table>
</div>
<div class="col-md-7">
 <table>
   <tr>
    <td><strong>Konsumsi Beras /Bulan</strong></td>
    <td>:</td>

    <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 20" value="<?= set_value('beras'); ?>" name="beras" > <?= form_error('beras','<small class="text-danger pl-3">','</small>');?>
  </td>
  <!-- <td><small>Stok Beras</small></td>
  <td>:</td>
  <td><select class="form-control-sm form-control" value="<?= set_value('stok_beras'); ?>" name="stok_beras">
   <option value="">Pilih</option>
   <option value="ada">Ada</option>
   <option value="tidak">Tidak</option>
 </select> <?= form_error('stok_beras','<small class="text-danger pl-3">','</small>');?></td> -->
</tr>
<tr>
  <td><strong>Konsumsi Minyak Goreng /Bulan</strong></td>
  <td>:</td>
  <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 30" value="<?= set_value('minyak'); ?>" name="minyak" > <?= form_error('minyak','<small class="text-danger pl-3">','</small>');?></td>
  <!-- <td> <small>Stok Minyak</small></td>
  <td>:</td>
  <td><select class="form-control-sm form-control" value="<?= set_value('stok_minyak'); ?>" name="stok_minyak">
   <option value="">Pilih</option>
   <option value="ada">Ada</option>
   <option value="tidak">Tidak</option>
 </select> <?= form_error('stok_minyak','<small class="text-danger pl-3">','</small>');?></td> -->
</tr>
<tr>
  <td><strong>Konsumsi Gula Pasir /Bulan</strong></td>
  <td>:</td>
  <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 4" value="<?= set_value('gula'); ?>" name="gula"> <?= form_error('gula','<small class="text-danger pl-3">','</small>');?> </td>
  <!-- <td> <small>Stok Gula</small></td>
  <td>:</td>
  <td> <select class="form-control-sm form-control" value="<?= set_value('stok_gula'); ?>" name="stok_gula">
   <option value="">Pilih</option>
   <option value="ada">Ada</option>
   <option value="tidak">Tidak</option>
 </select> <?= form_error('stok_gula','<small class="text-danger pl-3">','</small>');?></td> -->
</tr>
<tr>
  <td><strong>Konsumsi Gas /Bulan</strong></td>
  <td>:</td>
  <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 4" value="<?= set_value('gas'); ?>" name="gas"> <?= form_error('gas','<small class="text-danger pl-3">','</small>');?> </td>

  
</tr>
<tr>
  <td><strong>Konsumsi Telur /Bulan</strong></td>
  <td>:</td>
  <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 5" value="<?= set_value('telur'); ?>" name="telur" > <?= form_error('telur','<small class="text-danger pl-3">','</small>');?></td>
  <!-- <td><small>Stok Telur</small></td>
  <td>:</td>
  <td> <select class="form-control-sm form-control" value="<?= set_value('stok_telur'); ?>" name="stok_telur">
    <option value="" >Pilih</option>
    <option value="ada">Ada</option>
    <option value="tidak">Tidak</option>
  </select> <?= form_error('stok_telur','<small class="text-danger pl-3">','</small>');?></td> -->
</tr>
<tr>
  <td><strong>Konsumsi Daging /Bulan</strong></td>
  <td>:</td>
  <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 6" value="<?= set_value('daging'); ?>" name="daging"> <?= form_error('daging','<small class="text-danger pl-3">','</small>');?>
  <!-- <td>
    <small>Stok Daging</small>
  </td> 
  <td>:</td>

  <td> <select class="form-control-sm form-control" value="<?= set_value('stok_daging'); ?>" name="stok_daging">
    <option value="">Pilih</option>
    <option value="ada">Ada</option>
    <option value="tidak">Tidak</option>
  </select> <?= form_error('stok_daging','<small class="text-danger pl-3">','</small>');?></td> -->
</tr>
<tr >
  <td><strong>Sawah/Tumbak</strong></td>
  <td>:</td>
  <td > <input type="text" class="form-control-sm form-control" placeholder="Contoh : " value="<?= set_value('sawah'); ?>" name="sawah" value=""> <?= form_error('sawah','<small class="text-danger pl-3">','</small>');?></td>
  <td>
    <small>jenis budidaya</small>
  </td> 
  <td>:</td>

  <td> <input type="text" class="form-control-sm form-control" placeholder="Contoh : Padi"  name="jenis budidaya sawah"> </td>
</tr>
<tr >
  <td><strong>Ladang/Tumbak</strong></td>
  <td>:</td>
  <td >
    <input type="text" class="form-control-sm form-control" placeholder="Contoh : 12" value="<?= set_value('ladang'); ?>" name="ladang"> <?= form_error('ladang','<small class="text-danger pl-3">','</small>');?>
  </td>
  <td>
    <small>jenis budidaya</small>
  </td> 
  <td>:</td>

  <td> <input type="text" class="form-control-sm form-control" placeholder="Contoh : Tomat"  name="jenis budi daya ladang"> </td>
</tr>
<tr>
  <td><strong>Tegalan/Tumbak</strong></td>
  <td>:</td>
  <td > <input type="text" class="form-control-sm form-control" placeholder="Contoh : 12" value="<?= set_value('tegalan'); ?>" name="tegalan"> <?= form_error('tegalan','<small class="text-danger pl-3">','</small>');?></td>
  <td>
    <small>jenis budidaya</small>
  </td> 
  <td>:</td>

  <td> <input type="text" class="form-control-sm form-control" placeholder="Contoh : Kayu"  name="jenis budi daya tegalan"> </td>
</tr>
<tr>
  <td><strong>Kolam Ikan</strong></td>
  <td>:</td>
  <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : 12" value="<?= set_value('kolamikan'); ?>" name="kolamikan"> <?= form_error('kolamikan','<small class="text-danger pl-3">','</small>');?></td>
  <td></td>
</tr>
<!-- <tr>
  <td><strong>Jenis Tanaman yang dibudidayakan</strong></td>
  <td>:</td>
  <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : Ubi" value="<?= set_value('jenis_tanaman_budidaya'); ?>" name="jenis_tanaman_budidaya"> <?= form_error('jenis_tanaman_budidaya','<small class="text-danger pl-3">','</small>');?></td>
  <td></td>
</tr> -->
<tr>
  <td><strong>Jenis Ternak yang dibudidayakan</strong></td>
  <td>:</td>
  <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : Kambing" value="<?= set_value('jenis_ternak_budidaya'); ?>" name="jenis_ternak_budidaya"> <?= form_error('jenis_ternak_budidaya','<small class="text-danger pl-3">','</small>');?></td>
  <td></td>
</tr> 
<tr>
  <td><strong>UMKM/Industri Kreatif</strong></td>
  <td>:</td>
  <td > <select class="form-control-sm form-control" id="tokoid" value="<?= set_value('umkm'); ?>" name="umkm">
    <option value="">Pilih</option>
    <option value="ada">Ada</option>
    <option value="tidak">Tidak</option>
    </select> <?= form_error('umkm','<small class="text-danger pl-3">','</small>');?>
  </td>
</tr>
<tr id="umkm">

</tr>
<tr id="umkm1">

</tr>  
</table>
</div> 
</div>
<button type="submit">Tambah</button>

</form>
</div>

</div>

</div>
</div>




<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0-rc
  </div>
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('template/templatejs'); ?>


<script type="text/javascript">

  $(document).ready(function(){
    $(":input").inputmask();
    $("#kk").inputmask({"mask": "9999 9999 9999 9999"});
    $(".nik").inputmask({"mask": "9999 9999 9999 9999"});
    $(".phone").inputmask({"mask": "9999 99 999 999"});
    $(".rt").inputmask({"mask": "99"});
    $(".rw").inputmask({"mask": "99"});
    $(".tgl").inputmask({"mask": "99-99-9999"});

    var confirmed = false;
    $(".swa-confirm").on("submit", function(e) {
      var $this = $(this);
      if (!confirmed) {
        e.preventDefault();
        swal({
          title: $(this).data("swa-title"),
          text: $(this).data("swa-text"),
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#cc3f44",
          confirmButtonText: $(this).data("swa-btn-txt"),
          closeOnConfirm: true,
          html: false
        }, function() {
          confirmed = true;
          $this.submit();
        });
      }
    });


      // slide 2

      var x1 = 0;
      var x2 = 0;
      var x3 = 0;
      var maksFormIstri_Kl = 2;
      var maksFormAnak = 4;

      btndataistri = document.getElementById('dropdownJenHubKel').addEventListener('click', function (event) {

        var labelistri = `<div class="col-md-6"><hr><table id="example1"><input type="text" class="form-control-sm form-control"  value="Istri" placeholder="Nama" name="jenis_hub[]" hidden><tr><td><strong>Nama Istri</strong></td><td>:</td><td > <input type="text" class="form-control-sm form-control"  placeholder="Nama" name="nama_hk[]" value="<?= set_value('nama_hk[]'); ?>"><?= form_error('nama_hk[]','<small class="text-danger pl-3">','</small>');?></td><td></td> </tr>`
        var labelhublain= `<div class="col-md-6"><hr><table id="example1"><input type="text" class="form-control-sm form-control"  value="hub_lain" placeholder="Nama" name="jenis_hub[]" hidden><tr><td><strong>Nama</strong></td><td>:</td><td > <input type="text" class="form-control-sm form-control"  placeholder="Nama" name="nama_hk[]" value="<?= set_value('nama_hk[]'); ?>"><?= form_error('nama_hk[]','<small class="text-danger pl-3">','</small>');?></td><td></td> </tr>`
        var labelanak =`<div class="col-md-6"><hr><table id="example1"><input type="text" class="form-control-sm form-control"  value="Anak" hidden name="jenis_hub[]" > <tr> <td><strong>Nama</strong></td><td>:</td> <td > <input type="text" class="form-control-sm form-control"  placeholder="Nama" name="nama_hk[]" value="<?= set_value('nama_hk[]'); ?>"><?= form_error('nama_hk[]','<small class="text-danger pl-3">','</small>');?></td> <td></td></tr>`
        var formanak =`
        <tr>
        <td><strong>Jenis Kelamin</strong></td>
        <td>:</td>
        <td >    <select class=" form-control-sm form-control" value="<?= set_value('jenis_kelamin_hk[]'); ?>" name="jenis_kelamin_hk[]">
        <option value="">Pilih</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
        </select> <?= form_error('jenis_kelamin_hk[]','<small class="text-danger pl-3">','</small>');?> </td>
        <td></td>
        </tr>
        <tr>
        <td><strong>Akta Lahir</strong></td>
        <td>:</td>
        <td >    <select class=" form-control-sm form-control" value="<?= set_value('akta_lahir[]'); ?>" name="akta_lahir[]">
        <option value="">Pilih</option>
        <option value="Ada">Ada</option>
        <option value="Tidak">Tidak</option>
        </select> <?= form_error('akta_lahir[]','<small class="text-danger pl-3">','</small>');?> </td>
        <td></td>
        </tr>`

        var form = `<tr><td><strong>NIK</strong></td><td>:</td>
        <td > <input type="text" id="nik" class="form-control-sm form-control nik" placeholder="No Induk Kependudukan" value="<?= set_value('nik_hk[]'); ?>" name="nik_hk[]" value=""><?= form_error('nik_hk[]','<small class="text-danger pl-3">','</small>');?></td>
        <td></td></tr><tr ng-show="resume.pendaftaran.bisaPilih" class=""><td><strong>Tempat Lahir</strong></td>
        <td>:</td><td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : Garut" value="<?= set_value('tempat_lahir_hk[]'); ?>" name="tempat_lahir_hk[]" value="">
        <?= form_error('tempat_lahir_hk[]','<small class="text-danger pl-3">','</small>');?> </td>
        <td></td></tr><tr><td><strong>Tanggal Lahir</strong></td><td>:</td><td ><input type="text" class="form-control-sm form-control  tgl" placeholder="dd-mm-yyyy"  
        name="tanggal_lahir_hk[]" value="<?= set_value('tanggal_lahir_hk[]'); ?>" /><?= form_error('tanggal_lahir_hk[]','<small class="text-danger pl-3">','</small>');?></td></tr><tr><td><strong>Agama</strong></td><td>:</td>
        <td ><select class=" form-control-sm form-control" value="<?= set_value('agama_hk[]'); ?>" name="agama_hk[]">
        <option value="">Pilih</option>
        <option value="Islam">Islam</option>
        <option value="Protestan">Protestan</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Konghucu">Konghucu</option>
        <?= form_error('agama_hk[]','<small class="text-danger pl-3">','</small>');?></td></tr>

        </table>
        </div> 
        <div class="col-md-6"><hr>
        <table>
        
        <tr>
        <td><strong>Golongan Darah</strong></td>
        <td>:</td>
        <td >    <select class=" form-control-sm form-control" value="<?= set_value('goldarah_hk[]'); ?>" name="goldarah_hk[]">
        <option value="">Pilih</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="O">O</option>
        <option value="AB">AB</option>
        <option value="Tidak Tahu">Tidak Tahu</option>
        </select> <?= form_error('goldarah_hk[]','<small class="text-danger pl-3">','</small>');?> </td>
        <td></td>
        </tr>

        <tr>
        <td><strong>Pendidikan Terakhir</strong></td>
        <td>:</td>
        <td > <select class=" form-control-sm form-control" value="<?= set_value('pendterakhir_hk[]'); ?>" name="pendterakhir_hk[]" >
        <option value="">Pilih</option>
        <option value="Tidak Sekolah">Tidak Sekolah</option>
        <option value="SD">SD</option>
        <option value="SMP/Sederajat">SMP/Sederajat</option>
        <option value="SMA/Sederajat">SMA/Sederajat</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
        </select> <?= form_error('pendterakhir_hk[]','<small class="text-danger pl-3">','</small>');?></td>
        </tr>
        <tr >
        <td><strong>Pekerjaan</strong></td>
        <td>:</td>
        <td >  <select class=" form-control-sm form-control" value="<?= set_value('pekerjaan_hk[]'); ?>" name="pekerjaan_hk[]" id="pekerjaan" onchange="funcpekerjaan()" >
        <option value="">Pilih</option>
        <option value="Tidak Bekerja">Tidak Bekerja</option>
        <option value="PNS">PNS</option>
        <option value="TNI/POLRI">TNI/POLRI</option>
        <option value="Pensiunan">Pensiunan</option>
        <option value="Karyawan Swasta">Karyawan Swasta</option>
        <option value="Wiraswasta">Wiraswasta</option>
        <option value="Petani">Petani</option>
        <option value="Sopir">Sopir</option>
        <option value="Buruh Harian Lepas">Buruh Harian Lepas</option>
        <option value="Buruh Tani">Buruh Tani</option>
        <option value="Tukang Banguna">Tukang Banguna</option>
        <option value="Pedagang">Pedagang</option>
        <option value="Pelajar">Pelajar</option>
        <option value="Ibu Rumah tangga">Ibu Rumah tangga</option>
        <option value="Dosen">Dosen</option>
        <option value="Guru">Guru</option>
        <option value="Lain-lain">Lain-lain</option>
        </select> <?= form_error('pekerjaan_hk[]','<small class="text-danger pl-3">','</small>');?></td>
        </tr>
        <tr ng-show="resume.pendaftaran.bisaPilih" class="">
        <td><strong>Tlp/Wa</strong></td>
        <td>:</td>
        <td ><input type="text" value="" id="phone" class="form-control-sm form-control phone"  placeholder="Contoh : 081224207149" value="<?= set_value('tlp_hk[]'); ?>" name="tlp_hk[]"> <?= form_error('tlp_hk[]','<small class="text-danger pl-3">','</small>');?>
        </td>
        </tr>
        </table>
        </div>`




        var target = event.target;
        console.log(target.id);
        var table = `<table>`;
        var table2 = `</table>`;
        if (target.id === 'addDataIstri') {
          if(x1 < maksFormIstri_Kl){
            x1++;
            // document.getElementById('formHubKel').innerHTML += labelIstri + form1 + form2 + form3istri;</div>
            $('#formHubKel').append(labelistri + form);
          } else {
            Swal.fire(
              'Perhatian!',
              'Maaf telah mencapai batas input data hubungan keluarga <strong>(Istri)</strong>',
              'error'
              )
          }
        } else if (target.id === 'addDataAnak') {
          if(x2 < maksFormAnak){
            x2++;
            $('#formHubKel').append(labelanak + formanak + form);
          } else {
            Swal.fire(
              'Perhatian!',
              'Maaf telah mencapai batas input data hubungan keluarga <strong>(Anak)</strong>',
              'error'
              )
          }
        } else {
          if(x3 < maksFormIstri_Kl){
            x3++;
            $('#formHubKel').append(labelhublain + form);
          } else {
            Swal.fire(
              'Perhatian!',
              'Maaf telah mencapai batas input data hubungan keluarga <strong>(Keluarga Lain)</strong>',
              'error'
              )
          }
        }
      });

      // end slide 2
    });


 const flashdata = $(".flash-data").data('flashdata');

 if (flashdata) {
  Swal.fire({
    title: flashdata,
    icon: 'success',
    showConfirmButton: true,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      location.replace("<?= base_url('penduduk/penduduk/index')?>")
    }
  })
}
</script>

<script type="text/javascript">


  $('#pekarangan').change(function() {
    let val = $(this).val();
      // console.log(val);
      var tes =` <tr><td><strong>Luas Pekarangan</strong></td>
      <td>:</td>
      <td ><input type="text" placeholder="Contoh : 40" value="<?= set_value('luaspekrngan'); ?>" name="luaspekrngan" class="form-control-sm form-control"> <?= form_error('luaspekrngan','<small class="text-danger pl-3">','</small>');?></td></tr>`;
      var tes2 =` <tr>
      <td><strong>Tanaman di pekarangan</strong></td>
      <td>:</td>
      <td>
      <input type="text" value="<?= set_value('tanmndipekarangan'); ?>" name="tanmndipekarangan" placeholder="Contoh : ada" class="form-control-sm form-control "> <?= form_error('tanmndipekarangan','<small class="text-danger pl-3">','</small>');?>
      </td>

      </tr>`;
      var tes3 =` <td><strong>Jenis Tanaman</strong></td>
      <td>:</td>
      <td > <input type="text" value="<?= set_value('jenistanaman'); ?>" name="jenistanaman" placeholder="Contoh : Mawar" class="form-control-sm form-control "> <?= form_error('jenistanaman','<small class="text-danger pl-3">','</small>');?></td>`
      if (val=='ada') {
        var element = document.getElementById("pkrngn2");
        var element2 = document.getElementById("pkrngn3");
        var element1 = document.getElementById("pkrngn");
        element.classList.remove("d-none");
        element1.classList.remove("d-none");
        element2.classList.remove("d-none");
        document.getElementById("pkrngn").innerHTML =tes
        document.getElementById("pkrngn2").innerHTML =tes2
        document.getElementById("pkrngn3").innerHTML =tes3
      }else{
        var element = document.getElementById("pkrngn2");
        var element2 = document.getElementById("pkrngn3");
        var element1 = document.getElementById("pkrngn");
        element.classList.add("d-none");
        element1.classList.add("d-none");
        element2.classList.add("d-none");

      }
    });


  $('#pdamid').change(function() {
    let val = $(this).val();
      // console.log(val);
      var tes =`<td><strong>Bayar PDAM/Bulan</strong></td>
      <td>:</td>
      <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : 20000" value="<?= set_value('bayarpdam'); ?>" name="bayarpdam"> <?= form_error('bayarpdam','<small class="text-danger pl-3">','</small>');?></td>`;

        var element = document.getElementById("bayarpdam");
      if (val=='PDAM') {
        element.classList.remove("d-none");
        document.getElementById("bayarpdam").innerHTML =tes
      }else{
        element.classList.add("d-none");

      }
    });

  $('#tokoid').change(function() {
    let val = $(this).val();
      // console.log(val);
      var umkm =` <td><strong>Jenis umkm</strong></td>
      <td>:</td>
      <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : Kambing" value="<?= set_value('jenisumkm'); ?>" name="jenisumkm"> <?= form_error('jenisumkm','<small class="text-danger pl-3">','</small>');?></td></td>
      <td></td>`;
      var umkm1 =`  <td><strong>Omset Perbulan</strong></td>
      <td>:</td>
      <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : 2000000" value="<?= set_value('omset'); ?>" name="omset"> <?= form_error('omset','<small class="text-danger pl-3">','</small>');?></td>`;
      if (val=='ada') {
        var element = document.getElementById("umkm");
        var element1 = document.getElementById("umkm1");
        element.classList.remove("d-none");
        element1.classList.remove("d-none");
        document.getElementById("umkm").innerHTML =umkm;
        document.getElementById("umkm1").innerHTML =umkm1;
      }else{
        var element = document.getElementById("umkm");
        var element1 = document.getElementById("umkm1");
        element.classList.add("d-none");
        element1.classList.add("d-none");

      }
    });


  $(function () {
   $('.select2').select2()

   $('.select2bs4').select2({
    theme: 'bootstrap4'
  })


   $('#datetimepicker1').datetimepicker({
    format: 'L'
  });

   $('#datetimepicker2').datetimepicker({
    format: 'L'
  });

   $('#datetimepicker3').datetimepicker({
    format: 'L'
  });
 })
</script>
</body>
</html>

