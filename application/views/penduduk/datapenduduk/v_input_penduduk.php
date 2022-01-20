<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Input Data Penduduk</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
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
<!--   <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_dots.min.css" rel="stylesheet" type="text/css" /> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/multi-form.css?v2">
  <style type="text/css">

  </style>
</head>
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
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?= $title_page ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- <div class="content-wrapper"> -->



       <div class="container-fluid">
        <div class="row "> 
          <div class="col-md-12 d-flex justify-content-end">
            <button type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#exampleModal"> Tambah Data</button>
          </div> </div> <!-- Modal -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama Kepala Keluarga</th>
                  <th>Nomor KK</th>
                  <th>NIK</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Nazarudin Latif</td>
                  <td>4235678198273562
                  </td><td>3205171701940002</td>
                  <td><a href="#" class="btn btn-sm btn-success">Detail</a> <a href="#" class="btn btn-sm btn-warning">Edit</a> </td>

                </tr>
                <tr>
                  <td>Nazarudin Latif</td>
                  <td>4235678198273562
                  </td><td>3205171701940002</td>
                  <td> <a href="#" class="btn btn-sm btn-success">Detail</a> <a href="#" class="btn btn-sm btn-warning">Edit</a></td>

                </tr>
                <tr>
                  <td>Nazarudin Latif</td>
                  <td>4235678198273562
                  </td><td>3205171701940002</td>
                  <td><a href="#" class="btn btn-sm btn-success">Detail</a> <a href="#" class="btn btn-sm btn-warning">Edit</a></td>

                </tr>
               
              
             
              </tbody>
           <!--    <tfoot>
                <tr>
                  <th>Nama Kepala Keluarga</th>
                  <th>Nomor KK</th>
                  <th>NIK</th>
                  <th>Action</th>
                </tr>
              </tfoot> -->
            </table>
          </div>





          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi Data</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">

                  <form id="myForm" action="#" method="POST">
                    <!-- <h1>Registration Form</h1> -->
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                     <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Nama Kepala Keluarga</label>
                          <input type="text" class="form-control-sm form-control" placeholder="Nama Kepala Keluarga" name="namakk">
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>No.KK</label>
                          <input type="text" class="form-control-sm form-control" placeholder="No Kartu Keluarga"  name="nokk" data-inputmask="'mask': '9999 9999 9999 9999'">
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>NIK</label>
                          <input type="text" id="nik" class="form-control-sm form-control" placeholder="No Induk Kependudukan" name="nik" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input type="text" class="form-control-sm form-control" placeholder="Contoh : Garut" name="tempatlahir">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group ">
                         <label>Tnggal Lahir</label>
                         <div class="input-group date  " id="datetimepicker1" data-target-input="nearest">
                          <input type="text" class="form-control-sm form-control datetimepicker-input" placeholder="dd/mm/yyyy" data-target="#datetimepicker1"/>
                          <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-5">
                      <div class=" form-group ">
                        <label>Alamat Keluarga</label>
                        <input type="text" class="form-control-sm form-control" placeholder="Contoh : Kp.Situgitrang" name="alamatkel">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class=" form-group ">
                        <label>RT</label>
                        <input type="text" id="rt" class="form-control-sm form-control" placeholder="Contoh : 06" name="RT">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class=" form-group ">
                        <label>RW</label>
                        <input type="text" id="rw" class="form-control-sm form-control" placeholder="Contoh : 03" name="RW">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class=" form-group ">
                        <label>Golongan Darah</label>
                        <select class=" form-control-sm form-control" name="goldarah">
                          <option>Pilih Golongan Darah</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="O">O</option>
                          <option value="AB">AB</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Pendidikan Terakhir</label>
                      <select class=" form-control-sm form-control" name="pendterakhir" >
                        <option>Pilih..</option>
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
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class=" form-group ">
                      <label>Agama</label>
                      <input type="text" class="form-control-sm form-control" placeholder="Contoh : Islam" name="agama">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group" >
                      <label>Pekerjaan</label>
                      <select class=" form-control-sm form-control" name="pekerjaan" id="pekerjaan" onchange="funcpekerjaan()" >
                        <option>Pilih..</option>
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
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3 d-none" id="idjenispekerjaan">

                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Tlp.WA</label>
                      <input type="text" id="phone" class="form-control-sm form-control "  placeholder="Contoh : 081224207149" name="tlp">
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab">
                <div class="row"> 
                  <div class="col-md-12 d-flex justify-content-end">
                    <button type="button" class="btn btn-danger btn-sm"> Tambahn Data</button>
                  </div> 
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control-sm form-control" placeholder="Enter ...">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>NIK</label>
                      <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Hub.Keluarga</label>
                      <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control-sm form-control" placeholder="Enter ...">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group ">
                     <label>Tnggal Lahir</label>
                     <div class="input-group date datetimepicker2" id="datetimepicker2" data-target-input="nearest">
                      <input type="text" class="form-control-sm form-control datetimepicker-input" data-inputmask="'alias': 'datetime'" data-target=".datetimepicker2"/>
                      <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-control-sm form-group ">
                    <label>Golongan Darah</label>
                    <select class="form-control-sm form-control">
                      <option>Pilih Golongan Darah</option>
                      <option>A</option>
                      <option>B</option>
                      <option>O</option>
                      <option>AB</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
               <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Pendidikan Terakhir</label>
                  <input type="text" class="form-control-sm form-control" placeholder="Enter ...">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Tlp.WA</label>
                  <input type="text"  class="form-control-sm form-control" placeholder="Enter ..." >
                </div>
              </div>

            </div>
          </div>
          <div class="tab">

            <div class="row">
             <div class="col-sm-3">
              <div class="form-group">
                <label>Jenis Bantuan</label>
                <select class="select2" multiple="multiple" data-placeholder="Pilih.." style="width: 100%;">
                  <option value="Tidak Ada Bantuan">Tidak Ada Bantuan</option>
                  <option value="PKH">PKH</option>
                  <option value="BPNT">BPNT</option>
                  <option value="BLTDD">BLTDD</option>
                </select>
              </div>
            </div>
            <div class="col-sm-3">
              <!-- text input -->
              <div class="form-group">
                <label>Kepemilikan Rumah</label>
                <select class="form-control-sm form-control">
                  <option>Pilih..</option>
                  <option>Milik Sendiri</option>
                  <option>Turut Orang Tua</option>
                  <option>Kontrak/Sewa</option>
                </select>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label>Jenis Rumah</label>
                <select class="form-control-sm form-control">
                  <option>Pilih..</option>
                  <option>Permanen</option>
                  <option>Semi permanen</option>
                  <option>Bilik</option>
                  <option>Lainnya</option>
                </select>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label>Bukti Kepemilikan</label>
                <select class="form-control-sm form-control">
                 <option >Pilih..</option>
                 <option value="ada">Sertifikat Rumah</option>
                 <option value="tidak">Akta Jual Beli</option>
                 <option value="tidak">Lain-lain</option>
               </select>
             </div>
           </div>
           <div class="col-sm-3">
            <div class="form-group">
              <label>Pekarangan Rumah</label>
              <select class="form-control-sm form-control" id="pekarangan">
               <option >Pilih..</option>
               <option value="ada">Ada</option>
               <option value="tidak">Tidak</option>
             </select>
           </div>
         </div>
         <div class="col-sm-3 d-none" id="demo">

         </div>
         <div class="col-sm-3 d-none"  id="demo2">
         </div>
         <div class="col-sm-3 d-none" id="jenstnman">
          <!-- text input -->

        </div>
          <!--   <div class="col-sm-3">
              <div class="form-group">
                <label>Bukti Kepemilikan</label>
                <select class="form-control-sm form-control">
                 <option >Pilih..</option>
                 <option value="ada">Sertifikat Rumah</option>
                 <option value="tidak">Akta Jual Beli</option>
                 <option value="tidak">Lain-lain</option>
               </select>
             </div>
           </div> -->
           <div class="col-sm-3">
            <div class="form-group">
              <label>Listrik dan Telepon</label>
              <select class="form-control-sm form-control">
               <option >Pilih..</option>
               <option value="ada">Token</option>
               <option value="tidak">KWH</option>
               <option value="tidak">Lain-lain</option>
             </select>
           </div>
         </div>
         <div class="col-sm-3">
          <div class="form-group">
            <label>Besar KWH</label>
            <select class="form-control-sm form-control">
             <option >Pilih..</option>
             <option value="450W">450W</option>
             <option value="900W">900W</option>
             <option value="1300W">1300W</option>
             <option value="2200W">2200W</option>
           </select>
         </div>
       </div>
       <div class="col-sm-3">
        <div class="form-group">
          <label>Biaya Listrik/Bulan</label>
          <input type="number" class="form-control-sm form-control" placeholder="Contoh : 300000" >
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label><small>Kuota/pulsa keluarga / bulan</small></label>
          <input type="number" class="form-control-sm form-control" placeholder="Contoh : 500000" >
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label><small>Sumber Air Bersih</small></label>
          <select class="form-control-sm form-control"  onchange="pdam()" id="pdamid">
            <option >Pilih..</option>
            <option value="PDAM">PDAM</option>
            <option value="Sumur">Sumur</option>
            <option value="MCK Umum">MCK Umum</option>
            <option value="Sumber Air Lain">Sumber Air Lain</option>
          </select>
        </div>
      </div>
      <div class="col-sm-3" id="byarpdam">

      </div>
    </div>



  </div>
  <div class="tab">
   <div class="row">
    <div class="col-sm-6">
      <!-- text input -->
      <div class="form-group">
        <label>Rata-rata Konsumsi Beras / Bulan</label>
        <input type="number" class="form-control-sm form-control" placeholder="Contoh : 20" name="beras">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Stok Beras</label>
        <select class="form-control-sm form-control" name="stok_beras">
          <option >Pilih..</option>
          <option value="PDAM">Ada</option>
          <option value="Sumur">Tidak</option>
        </select>
      </div>
    </div>

  </div>
  <div class="row">
   <div class="col-sm-6">
    <div class="form-group">
      <label>Rata-rata Minyak Goreng / Bulan</label>
      <input type="number" class="form-control-sm form-control" placeholder="Contoh : 30" name="minyak" >
    </div>
  </div>
  <div class="col-sm-6">
    <!-- text input -->
    <div class="form-group">
      <label>Jenis Minyak</label>
      <select class="form-control-sm form-control" name="jenis_minyak">
        <option >Pilih..</option>
        <option value="PDAM">Kemasan</option>
        <option value="Sumur">Curah</option>
      </select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label>Rata-rata Gula Pasir / Bulan</label>
      <input type="number" class="form-control-sm form-control" placeholder="Contoh : 4" name="gula" >
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Stok Gula</label>
      <select class="form-control-sm form-control" name="stok_gula">
        <option >Pilih..</option>
        <option value="PDAM">Ada</option>
        <option value="Sumur">Tidak</option>
      </select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label>Rata-rata Telur / Bulan</label>
      <input type="number" class="form-control-sm form-control" placeholder="Contoh : 5" name="telur" >
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group" name>
      <label>Stok Gula</label>
      <select class="form-control-sm form-control" name="stok_telur">
        <option >Pilih..</option>
        <option value="PDAM">Ada</option>
        <option value="Sumur">Tidak</option>
      </select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label>Rata-rata Daging/ Bulan</label>
      <input type="number" class="form-control-sm form-control" placeholder="Contoh : 6" name="daging" >
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Stok Daging<small></label>
        <select class="form-control-sm form-control" name="stok_daging">
          <option >Pilih..</option>
          <option value="PDAM">Ada</option>
          <option value="Sumur">Tidak</option>
        </select>
      </div>
    </div>

  </div>
</div>
<div class="tab">
   <label>Jenis Lahan</label>
 <div class="row">
 <div class="col-sm-3">
  <div class="form-group">
    <label>Sawah</label>
    <input type="text" class="form-control-sm form-control" placeholder="Contoh : " name="sawah">
  </div>
</div>
 <div class="col-sm-3">
  <div class="form-group">
    <label>Ladang</label>
    <input type="text" class="form-control-sm form-control" placeholder="Contoh : " >
  </div>
</div>
 <div class="col-sm-3">
  <div class="form-group">
    <label>Tegalan</label>
    <input type="text" class="form-control-sm form-control" placeholder="Contoh : " >
  </div>
</div>
    <div class="col-sm-3">
  <div class="form-group">
    <label>Kolam Ikan</label>
    <input type="text" class="form-control-sm form-control" placeholder="Contoh : " >
  </div>
</div>
 </div>
 <div class="row">
   
      <div class="col-sm-4">
        <div class="form-group">
          <label>Jenis Tanaman yang dibudidayakan</label>
          <input type="text" class="form-control-sm form-control" placeholder="Contoh : Ubi" >
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Jenis Ternak yang dibudidayakan</label>
          <input type="text" class="form-control-sm form-control" placeholder="Contoh : Kambing" >
        </div>
      </div>
 </div>

      <label>Data UMKM/Industri Kreatif</label>
      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <label>UMKM/Industri Kreatif</label>
            <select class="form-control-sm form-control" onchange="toko()" id="tokoid">
              <option >Pilih..</option>
              <option value="ada">Ada</option>
              <option value="tidak">Tidak</option>
            </select>
          </div>
        </div>
        <div class="row" id="idjenistoko">

        </div>

    <!--   <div class="col-sm-3">
        <div class="form-group">
          <label>Jenis Produksi Rumahan</label>
          <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label>Omset Produksi</label>
          <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
        </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group">
          <label>Bahan Baku Produksi</label>
          <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
        </div>
      </div> -->
    </div>
  </div>
  <div style="overflow:auto;">
    <div style="float:right; margin-top: 5px;">
      <button type="button" class="previous">Kembali</button>
      <button type="button" class="next">Selanjutnya</button>
      <button type="button" class="submit">Selesai</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step">1</span>
    <span class="step">2</span>
    <span class="step">3</span>
    <span class="step">4</span>
    <span class="step">5</span>
  </div>
</form>
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
<script src="<?php echo base_url() ?>template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>template/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url() ?>template/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url() ?>template/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url() ?>template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url() ?>template/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url() ?>template/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url() ?>template/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo base_url() ?>template/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url() ?>template/dist/js/demo.js"></script> -->

<script src="<?php echo base_url() ?>template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
<script src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/multi-form.js?v2"></script>
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
            // namakk: "required",
            // nokk: "required",
            // tempatlahir:"required",
            // tanggal:"required",
            // alamatkel:"required",
            // goldarah:"required",
            // pendterakhir:"required",
            // pekerjaan:"required",
            // tlp:{
            //    required:true,
            // },
            // nik:{
            //   required:true,

            // },
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

