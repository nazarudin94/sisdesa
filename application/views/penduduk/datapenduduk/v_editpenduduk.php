 
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
              <h3><?= $title_web ?></h3>
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

        <div class="card mt-2">
          <div class="card-body">
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
                      <td > <input type="text" class="form-control-sm form-control" value="<?= $value['nama_kepala_keluarga']  ?>" placeholder="Nama Kepala Keluarga" name="namakk"></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><strong>No.Kartu Keluarga</strong></td>
                      <td>:</td>
                      <td ><input type="text" class="form-control-sm form-control" placeholder="No Kartu Keluarga"  name="nokk" data-inputmask="'mask': '9999 9999 9999 9999'" value="<?= $value['kk']  ?>" disabled></td>
                      <td></td>
                    </tr>
                    <tr >
                      <td><strong>NIK</strong></td>
                      <td>:</td>
                      <td > <input type="text" id="nik" class="form-control-sm form-control" placeholder="No Induk Kependudukan" name="nik" value="<?= $value['nik']  ?>" disabled></td>
                      <td></td>
                    </tr>
                    <tr ng-show="resume.pendaftaran.bisaPilih" class="">
                      <td><strong>Tempat Lahir</strong></td>
                      <td>:</td>
                      <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : Garut" name="tempatlahir" value="<?= $value['tempat_lahir']  ?>">
                      </td>
                      <td></td>
                    </tr>
                    <tr ng-show="resume.pendaftaran.bisaPilih" class="">
                      <td><strong>Tanggal Lahir</strong></td>
                      <td>:</td>
                      <td ><input type="text" id="tanggal" class="form-control-sm form-control" placeholder="dd/mm/yyyy" name="tanggal_lahir"  value="<?= $value['tanggal_lahir']  ?>" /></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><strong>Alamat Keluarga</strong></td>
                      <td>:</td>
                      <td  >
                       <input type="text" class="form-control-sm form-control" placeholder="Contoh : Kp.Situgitrang" name="alamatkel" value="<?= $value['alamat']  ?>">
                     </td>
                   </tr>
                   <tr>
                    <td><strong>RT</strong></td>
                    <td>:</td>
                    <td  >
                     <input type="text" id="rt" class="form-control-sm form-control" placeholder="Contoh : 06" name="rtrw" value="<?= $value['rt']  ?>">
                   </td>
                 </tr>
                 <tr>
                    <td><strong>RW</strong></td>
                    <td>:</td>
                    <td  >
                     <input type="text" id="rW" class="form-control-sm form-control" placeholder="Contoh : 06" name="rw" value="<?= $value['rw']  ?>">
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
                <td >    <select class=" form-control-sm form-control" name="goldarah">
                  <option value="<?= $value['gol_darah']  ?>"><?= $value['gol_darah']  ?></option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="O">O</option>
                  <option value="AB">AB</option>
                </select> </td>
                <td></td>
              </tr>
              <tr>
                <td><strong>Pendidikan Terakhir</strong></td>
                <td>:</td>
                <td > <select class=" form-control-sm form-control" name="pendterakhir" >
                  <option value="<?= $value['pendidikan_terakhir']  ?>"><?= $value['pendidikan_terakhir']  ?></option>
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
                </select></td>
              </tr>
              <tr >
                <td><strong>Pekerjaan</strong></td>
                <td>:</td>
                <td >  <select class=" form-control-sm form-control" name="pekerjaan" id="pekerjaan" onchange="funcpekerjaan()" >
                  <option value="<?= $value['pekerjaan']  ?>"><?= $value['pekerjaan']  ?></option>
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
                  <option value="Lain-lain">Lain-lain</option>
                </select></td>
              </tr>
              <tr ng-show="resume.pendaftaran.bisaPilih" class="">
                <td><strong>Tlp/Wa</strong></td>
                <td>:</td>
                <td ><input type="text" value="<?= $value['telp']  ?>" id="phone" class="form-control-sm form-control "  placeholder="Contoh : 081224207149" name="tlp">
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <br>

      </div>
    </div>

    <div class="row">
      <?php foreach ($data_hubungan as $key => $row) {
  // echo"<pre>";print_r($row);
        ?>

        <div class="col-md-6">
         <table>
          <tbody>

           <tr>
            <td><strong>Nama</strong></td>
            <td>:</td>
            <td> <input type="text" class="form-control-sm form-control" value="<?= $row['nama'] ?>"></td>
          </tr>
          <tr>
            <td><strong>NIK</strong></td>
            <td>:</td>
            <td > <input type="text" class="form-control-sm form-control" placeholder="No Induk Kependudukan" name="nik_hk[]" value="<?= $row['nik'] ?>" disabled></td>
          </tr>
          <tr>
            <td><strong>Hubungan Keluarga</strong></td>
            <td>:</td>
            <td > <input type="text" class="form-control-sm form-control" placeholder="Enter ..." name="hubngankel[]" value="<?= $row['jenis_hub'] ?>"></td>
          </tr>
          <tr>
            <td><strong>Tempat Lahir</strong></td>
            <td>:</td>
            <td><input type="text" class="form-control-sm form-control" placeholder="Enter ..." name="tempat_lahir_hk[]" value="<?= $row['tempat_lahir'] ?>"></td>
          </tr>
          <tr>
            <td><strong>Tanggal Lahir</strong></td>
            <td>:</td>
            <td > <input type="text" class="form-control-sm form-control  tgl" placeholder="dd-mm-yyyy" data-target="#datetimepicker1" name="tanggal_lahir_hk[]" value="<?=$row['tanggal_lahir']?>" /> </td>
          </tr>
          <tr>
            <td><strong>Golongan Darah</strong></td>
            <td>:</td>
            <td > <select class="form-control-sm form-control">
              <option value="<?= $row['gol_darah'] ?>"><?= $row['gol_darah'] ?></option>
              <option>A</option>
              <option>B</option>
              <option>O</option>
              <option>AB</option>
            </select></td>
          </tr>
          <tr ng-show="state.pendidikanKuliah==true &amp;&amp; resume.pendaftaran.jenisPengadaan.id == '2'" class="">
            <td><strong>Pendidikan Terakhir</strong></td>
            <td>:</td>
            <td ><select class=" form-control-sm form-control" name="pendterakhir" >
              <option value="     <?= $row['pend_terakhir'] ?>">     <?= $row['pend_terakhir'] ?></option>
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
            </select>

          </td>

        </tr>
        <tr>
          <td><strong>Pekerjaan</strong></td>
          <td>:</td>
          <td >  <select class=" form-control-sm form-control" name="pekerjaan" id="pekerjaan" onchange="funcpekerjaan()" >
            <option value="  <?= $row['pekerjaan'] ?>">  <?= $row['pekerjaan'] ?></option>
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
            <option value="Lain-lain">Lain-lain</option>
          </select></td>

        </tr>
        <tr ng-show="state.pendidikanKuliah==true &amp;&amp; resume.pendaftaran.jenisPengadaan.id == '2'" class="">
          <td><strong>Tlp</strong></td>
          <td>:</td>
          <td ng-show="resume.pendaftaran.akreditasiProdiOtomatis != null" class="ng-binding ng-hide">
            <input type="text" value=" <?= $row['telp'] ?>" id="phone" class="form-control-sm form-control "  placeholder="Contoh : 081224207149" name="tlp" >
          </td>
          <td></td>
        </tr>


      </tbody>
    </table>
  </div>
<?php } ?>
</div>
<div class="row">
  <div class="col-md-6">
   <table>
    <tbody>
      <?php foreach ($data_lain as $key => $value) { 
        // echo"<pre>";print_r($value);
        ?>
        <tr>
          <td><strong>Jenis Bantuan</strong></td>
          <td>:</td>
          <td><input type="text"  id="jenisbntuan" class="form-control-sm form-control "  placeholder="Contoh : PKH" name="jenisbntuan" value="<?= $value['jenis_bantuan'] ?>"></td>
          <td></td>
        </tr>
        <tr>
          <td><strong>Kepemilikan Rumah</strong></td>
          <td>:</td>
          <td > <select class="form-control-sm form-control" name="kepemilikanrumah">
            <option value="<?= $value['kepemilikan_rumah'] ?>"><?= $value['kepemilikan_rumah'] ?></option>
            <option value="Milik Sendiri">Milik Sendiri</option>
            <option value="Turut Orang Tua">Turut Orang Tua</option>
            <option value="Kontrak/Sewa">Kontrak/Sewa</option>
          </select></td>
          <td></td>
        </tr>
        <tr>
          <td><strong>Jenis Rumah</strong></td>
          <td>:</td>
          <td >  <select class="form-control-sm form-control" name="jenisrumah">
            <option value="<?=$value['jenis_rumah']?>"><?=$value['jenis_rumah']?></option>
            <option value="Permanen">Permanen</option>
            <option value="Semi permanen">Semi permanen</option>
            <option value="Bilik">Bilik</option>
            <option value="Lainnya">Lainnya</option>
          </select></td>
          <td></td>
        </tr>
        <tr>
          <td><strong>Bukti Kepemilikan</strong></td>
          <td>:</td>
          <td > <select class="form-control-sm form-control" name="kepemilikan_rumah">
           <option value="<?=$value['kepemilikan_rumah']?>" ><?=$value['kepemilikan_rumah']?></option>
           <option value="Sertifikat Rumah">Sertifikat Rumah</option>
           <option value="Akta Jual Beli">Akta Jual Beli</option>
           <option value="Lain-lain">Lain-lain</option>
         </select></td>
         <td></td>
       </tr>
       <tr>
        <td><strong>Pekarangan Ruman</strong></td>
        <td>:</td>
        <td > <select class="form-control-sm form-control" name="pekaranganrumah" id="pekarangan">
         <option value="<?=$value['pekarangan_rumah']?>"><?=$value['pekarangan_rumah']?></option>
         <option value="ada">Ada</option>
         <option value="tidak">Tidak</option>
       </select></td>
     </tr>
     <tr>
      <td><strong>Luas Pekarangan</strong></td>
      <td>:</td>
      <td ><input type="text" placeholder="Contoh : 40" name="luas_pekarangan" class="form-control-sm form-control" value="<?=$value['luas_pekarangan']?>"></td>
    </tr>
    <tr>
      <td><strong>Tanaman di pekarangan</strong></td>
      <td>:</td>
      <td>
        <input type="text" name="tanmndipekarangan" placeholder="Contoh : ada" class="form-control-sm form-control " value="<?=$value['tanaman_pekarangan']?>"> 
      </td>

    </tr>
    <tr>
      <td><strong>Jenis Tanaman</strong></td>
      <td>:</td>
      <td > <input type="text" name="jenis_tanaman" placeholder="Contoh : Mawar" class="form-control-sm form-control " value="<?=$value['jenis_tanaman']?>"></td>
    </tr>
    <tr>
      <td><strong>Listrik</strong></td>
      <td>:</td>
      <td ><select class="form-control-sm form-control" name="listrik">
       <option value="<?=$value['listrik']?>" ><?=$value['listrik']?></option>
       <option value="ada">Token</option>
       <option value="tidak">KWH</option>
       <option value="tidak">Lain-lain</option>
     </select> </td>
   </tr>
   <tr>
    <td><strong>Besar KWH</strong></td>
    <td>:</td>
    <td ><select class="form-control-sm form-control" name="besar_kwh">
     <option value="<?=$value['besar_kwh']?>" ><?=$value['besar_kwh']?></option>
     <option value="450W">450W</option>
     <option value="900W">900W</option>
     <option value="1300W">1300W</option>
     <option value="2200W">2200W</option>
   </select></td>
   <td></td>
 </tr>
 <tr>
  <td><strong>Biaya Listrik</strong></td>
  <td>:</td>
  <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 300000" name="biaya_listrik" value="<?=$value['biaya_listrik']?>"></td>
  <td></td>
</tr>
<tr>
  <td><strong>Kuota/Pulsa Keluarga /Bulan</strong></td>
  <td>:</td>
  <td > <input type="number" class="form-control-sm form-control" placeholder="Contoh : 500000" name="kuotapulsa" value="<?=$value['kuotapulsa']?>"></td>
  <td></td>
</tr>
<tr>
  <td><strong>Sumber Air</strong></td>
  <td>:</td>
  <td ><select class="form-control-sm form-control"  id="pdamid" name="sumber_air">
    <option value="<?=$value['sumber_air'] ?>"><?=$value['sumber_air'] ?></option>
    <option value="PDAM">PDAM</option>
    <option value="Sumur">Sumur</option>
    <option value="MCK Umum">MCK Umum</option>
    <option value="Sumber Air Lain">Sumber Air Lain</option>
  </select></td>
  <td></td>
</tr>
<tr>
  <td><strong>Bayar PDAM/Bulan</strong></td>
  <td>:</td>
  <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : 20000" name="bayarpdam" value="<?=$value['bayarpdam'] ?>"></td>
  <td></td>
</tr>


</tbody>
</table>
</div>
<div class="col-md-6">
 <table>
  <tbody>
    <tr>
    <td><strong>Konsumsi Beras /Bulan</strong></td>
    <td>:</td>

    <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 20" name="beras" value="<?=$value['beras']?>">
    </td>
    <td><small>Stok Beras</small></td>
    <td>:</td>
    <td><select class="form-control-sm form-control" name="stok_beras">
      <option value="<?=$value['stok_beras']?>"><?=$value['stok_beras']?></option>
      <option value="ada">Ada</option>
      <option value="tidak">Tidak</option>
    </select></td>
  </tr>
  <tr>
    <td><strong>Konsumsi Minyak Goreng /Bulan</strong></td>
    <td>:</td>
    <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 30" name="minyak"value="<?=$value['minyak_goreng']?>"></td>
    <td> <small>Stok Minyak</small></td>
    <td>:</td>
    <td><select class="form-control-sm form-control" name="stok_minyak">
       <option value="<?=$value['stok_minyak']?>"><?=$value['stok_minyak']?></option>
      <option value="ada">Ada</option>
      <option value="tidak">Tidak</option>
    </select></td>
  </tr>
  <tr>
    <td><strong>Konsumsi Gula Pasir /Bulan</strong></td>
    <td>:</td>
    <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 4" name="gula" value="<?=$value['gula_pasir']?>"> </td>
    <td> <small>Stok Gula</small></td>
    <td>:</td>
    <td> <select class="form-control-sm form-control" name="stok_gula">
      <option value="<?=$value['stok_gula']?>"><?=$value['stok_gula']?></option>
      <option value="ada">Ada</option>
      <option value="tidak">Tidak</option>
    </select></td>
  </tr>
  <tr>
    <td><strong>Konsumsi Telur /Bulan</strong></td>
    <td>:</td>
    <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 5" name="telur" value="<?=$value['telur']?>"> </td>
    <td><small>Stok Telur</small></td>
    <td>:</td>
    <td> <select class="form-control-sm form-control" name="stok_telur">
        <option value="<?=$value['stok_telur']?>"><?=$value['stok_telur']?></option>
      <option value="ada">Ada</option>
      <option value="tidak">Tidak</option>
    </select></td>
  </tr>
  <tr>
    <td><strong>Konsumsi Daging /Bulan</strong></td>
    <td>:</td>
    <td ><input type="number" class="form-control-sm form-control" placeholder="Contoh : 6" name="daging" value="<?=$value['daging_ayam']?>"><td>
      <small>Stok Daging</small>
    </td> 
    <td>:</td>

    <td> <select class="form-control-sm form-control" name="stok_daging">
       <option value="<?=$value['stok_daging']?>"><?=$value['stok_daging']?></option>
      <option value="ada">Ada</option>
      <option value="tidak">Tidak</option>
    </select></td>
  </tr>
  <tr >
    <td><strong>Sawah</strong></td>
    <td>:</td>
    <td > <input type="text" class="form-control-sm form-control" placeholder="Contoh : " name="sawah" value="<?=$value['sawah']?>"></td>
    <td></td>
  </tr>
  <tr >
    <td><strong>Ladang</strong></td>
    <td>:</td>
    <td >
      <input type="text" class="form-control-sm form-control" placeholder="Contoh : 12" name="Ladang" value="<?=$value['ladang']?>">
    </td>

  </tr>
  <tr>
    <td><strong>Tegalan</strong></td> 
    <td>:</td>
    <td > <input type="text" class="form-control-sm form-control" placeholder="Contoh : 12" name="tegalan" value="<?=$value['tegalan']?>"></td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Kolam Ikan</strong></td>
    <td>:</td>
    <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : 12" name="kolamikan" value="<?=$value['kolam_ikan']?>"></td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Jenis Tanaman yang dibudidayakan</strong></td>
    <td>:</td>
    <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : Ubi" name="tanaman_budidaya" 
      value="<?=$value['tanaman_budidaya']?>"></td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Jenis Ternak yang dibudidayakan</strong></td>
    <td>:</td>
    <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : Kambing" name="ternak_budidaya" value="<?=$value['ternak_budidaya']?>"></td>
    <td></td>
  </tr>
  <tr>
    <td><strong>UMKM/Industri Kreatif</strong></td>
    <td>:</td>
    <td > <select class="form-control-sm form-control" id="tokoid" name="umkm" value="<?=$value['umkm']?>">
      <option value="ada">Ada</option>
      <option value="tidak">Tidak</option>
    </select></td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Jenis</strong></td>
    <td>:</td>
    <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : Toko" name="jenisumkm" value="<?=$value['jenis_umkm']?>"></td></td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Omset Perbulan</strong></td>
    <td>:</td>
    <td ><input type="text" class="form-control-sm form-control" placeholder="Contoh : Kambing" name="omset"  value="<?=$value['omset']?>"></td>
    <td></td>
  </tr>
<?php } ?>
</tbody>
</table>

</div>
<input name="status" value="sudah_diakhiri" type="hidden" autocomplete="off">
</div>
<hr>
<!-- <a href="<?php echo base_url() ?>penduduk/penduduk/pdf" class="btn btn-sm btn-primary">Export PDF</a> -->
<!-- <a href="#" class="btn btn-sm btn-warning">Edit</a> -->
</div>
</div>
</div>
</div>

</div>






</div>
<!-- </div> -->
</div>
<!-- /.content-wrapper -->

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
    $("#nik").inputmask({"mask": "9999 9999 9999 9999"});
    $("#phone").inputmask({"mask": "9999 99 999 999"});
    $("#rt").inputmask({"mask": "99"});
    $("#rw").inputmask({"mask": "99"});

    $.validator.addMethod('date', function(value, element, param) {
      return (value != 0) && (value <= 31) && (value == parseInt(value, 10));
    }, 'Please enter a valid date!');
    $.validator.addMethod('month', function(value, element, param) {
      return (value != 0) && (value <= 12) && (value == parseInt(value, 10));
    }, 'Please enter a valid month!');
    $.validator.addMethod('year', function(value, element, param) {
      return (value != 0) && (value >= 1900) && (value == parseInt(value, 10));
    }, 'Please enter a valid year not less than 1900!');
    $.validator.addMethod('username', function(value, element, param) {
      var nameRegex = /^[a-zA-Z0-9]+$/;
      return value.match(nameRegex);
    }, 'Only a-z, A-Z, 0-9 characters are allowed');

    var val = {
          // Specify validation rules
          rules: {
            namakk: "required",
            nokk: "required",
            tempatlahir:"required",
            tanggal:"required",
            alamatkel:"required",
            goldarah:"required",
            pendterakhir:"required",
            pekerjaan:"required",
            rt:"required",
            rw:"required",
            agama:"required",
            tlp:{
             required:true,
           },
           nik:{
            required:true,

          },
          email: {
            required: true,
            email: true
          },
          phone: {
            required:true,
            minlength:12,
            maxlength:12,
            digits:true
          },
          date:{
            date:true,
            required:true,
            minlength:2,
            maxlength:2,
            digits:true
          },
          month:{
            month:true,
            required:true,
            minlength:2,
            maxlength:2,
            digits:true
          },
          year:{
            year:true,
            required:true,
            minlength:4,
            maxlength:4,
            digits:true
          },
          username:{
            username:true,
            required:true,
            minlength:4,
            maxlength:16,
          },
          password:{
            required:true,
            minlength:8,
            maxlength:16,
          }
        },


          // Specify validation error messages
          messages: {
            namakk:    "Wajib di isi !",
            nokk:    "Wajib di isi !",
            tempatlahir:"Wajib di isi !",
            tanggal:"Wajib di isi !",
            alamatkel:"Wajib di isi !",
            goldarah:"Wajib di isi !",
            pendterakhir:"Wajib di isi !",
            pekerjaan:"Wajib di isi !",
            rt:"Wajib di isi !",
            rw:"Wajib di isi !",
            agama:"Wajib di isi !",
            
            nik:{
              required:   "Wajib diisi!",
              minlength:  "masukan minimal 16 nomor",
              maxlength:  "masukan maks 16 nomor",
              digits:   "hanya masukan nomor"
            },
            tlp:{
              required:   "Wajib diisi!",
              // minlength:  "masukan maks 12 nomor",
              // maxlength:  "masukan maks 12 nomor",
              // digits:   "Only numbers are allowed in this field"
            },
            date:{
              required:   "Date is required",
              minlength:  "Date should be a 2 digit number, e.i., 01 or 20",
              maxlength:  "Date should be a 2 digit number, e.i., 01 or 20",
              digits:   "Date should be a number"
            },
            month:{
              required:   "Month is required",
              minlength:  "Month should be a 2 digit number, e.i., 01 or 12",
              maxlength:  "Month should be a 2 digit number, e.i., 01 or 12",
              digits:   "Only numbers are allowed in this field"
            },
            year:{
              required:   "Year is required",
              minlength:  "Year should be a 4 digit number, e.i., 2018 or 1990",
              maxlength:  "Year should be a 4 digit number, e.i., 2018 or 1990",
              digits:   "Only numbers are allowed in this field"
            },
            username:{
              required:   "Username is required",
              minlength:  "Username should be minimum 4 characters",
              maxlength:  "Username should be maximum 16 characters",
            },
            password:{
              required:   "Password is required",
              minlength:  "Password should be minimum 8 characters",
              maxlength:  "Password should be maximum 16 characters",
            }
          }
        }

        $("#myForm").multiStepForm(
        {
        // defaultStep:0,
        beforeSubmit : function(form, submit){
          console.log("called before submiting the form");
          console.log(form);
          console.log(submit);
        },
        validations:val,
      }
      ).navigateTo(0);
      });
    </script>

    <script type="text/javascript">

      function tambahform(){

      }

      var e = document.getElementById("pekarangan");
      function show(){
        var as = document.forms[0].pekarangan.value;
        var strUser = e.options[e.selectedIndex].value;
        console.log(strUser);
        var element = document.getElementById("demo");
        var element2 = document.getElementById("demo2");
        if (as=="ada") {
          element.classList.remove("d-none");
          element2.classList.remove("d-none");
          document.getElementById("demo").innerHTML = `<div class="form-group">
          <label>Luas Pekarangan</label>
          <input type="text" class="form-control-sm form-control" placeholder="Enter ...">
          </div>` ;
          document.getElementById("demo2").innerHTML = `
          <!-- text input -->
          <div class="form-group">
          <label>Tanaman di Pekarangan</label>
          <select class="form-control-sm form-control" onchange="tanaman()" id="select_id">
          <option>Pilih..</option>
          <option value="ada" >Ada</option>
          <option value="tidak" >Tidak</option>
          </select>
          </div>` ;
        }else if (as=="tidak"){

          element.classList.add("d-none");
          element2.classList.add("d-none");
        }
      }
      e.onchange=show;
      show();


      

      function tanaman(){
       let val=document.getElementById('select_id').value;
       var clas = document.getElementById("jenstnman");
       if (val == "ada") {
         clas.classList.remove("d-none");
         document.getElementById("jenstnman").innerHTML = `
         <!-- text input -->
         <div class="form-group">
         <label>Jenis Tanaman</label>
         <input type="text" class="form-control-sm form-control" placeholder="Enter ...">
         </div>` ;
       }else{
         clas.classList.add("d-none");
       }



     }

     function pdam(){
      let idpdam =document.getElementById('pdamid').value;
      var xx = document.getElementById("byarpdam");
      if (idpdam =="PDAM") {
        xx.classList.remove("d-none");
        document.getElementById("byarpdam").innerHTML = ` <div class="form-group">
        <label><small>Bayar PDAM/Bulan</small></label>
        <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
        </div>` ;
      }else if(idpdam != "PDAM"){
        xx.classList.add("d-none");
      }

      console.log(idpdam);
    }

    function toko(){
      let idtoko =document.getElementById('tokoid').value;
      var xxs = document.getElementById("idjenistoko");
      if (idtoko =="ada") {
        xxs.classList.remove("d-none");
        document.getElementById("idjenistoko").innerHTML = `  <div class="col-sm-6"> <div class="form-group">
        <label>Jenis</label>
        <input type="text" class="form-control-sm form-control" placeholder="Contoh : Rajut" >
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
        <label>Omset Perbulan</label>
        <input type="text" class="form-control-sm form-control" placeholder="Contoh : 10000000" >
        </div>
        </div>` ;
      }else if(idtoko != "PDAM"){
        xxs.classList.add("d-none");
      }

      console.log(idtoko);
    }


    function funcpekerjaan(){
      let idpekerjaan =document.getElementById('pekerjaan').value;
      var xxs = document.getElementById("idjenispekerjaan");
      if (idpekerjaan =="Lain-lain") {
        xxs.classList.remove("d-none");
        document.getElementById("idjenispekerjaan").innerHTML = ` <div class="form-group">
        <label><small>Masukan Nama Pekerjaan Anda</small></label>
        <input type="text" class="form-control-sm form-control Phone"  placeholder="Contoh : Supir Angkot" name="pekerjaan">
        </div>` ;
      }else if(idpekerjaan != "Lain-lain"){
        xxs.classList.add("d-none");
      }

      console.log(idpekerjaan);
    }

    $(function () {

     var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

     $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });


     $('.select2').select2()

     $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

     $('#example1').DataTable({
      // "paging": true,
      // "lengthChange": false,
      // "searching": false,
      // "ordering": true,
      // "info": true,
      // "autoWidth": false,
      // "responsive": true,
    });
     $('#datetimepicker1').datetimepicker({
      format: 'L'
    });

     $('#datetimepicker2').datetimepicker({
      format: 'L'
    });

   })
 </script>
</body>
</html>

