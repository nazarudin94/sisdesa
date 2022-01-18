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
  <!-- <div class="wrapper"> -->
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Tambah Data</button>
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
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td>1.8</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td>1.8</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td>1.7</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td>1.7</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.1</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.2</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.3</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.4</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.5</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.6</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.7</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.8</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
                    <td>1.8</td>
                    
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td>125.5</td>
                    
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>
                    <td>312.8</td>
                    
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>
                    <td>419.3</td>
                    
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>
                    <td>522.1</td>
                    
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>
                    <td>420</td>
                    
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>iPod Touch / iPhone</td>
                    <td>iPod</td>
                    <td>420.1</td>
                    
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>
                    <td>413</td>
                    
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.0</td>
                    <td>Win 95+ / OSX.3+</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.2</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.5</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera for Wii</td>
                    <td>Wii</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Nokia N800</td>
                    <td>N800</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>
                    <td>8.5</td>
                    <td>C/A<sup>1</sup></td>
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>
                    <td>3.1</td>
                    
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.3</td>
                    <td>KDE 3.3</td>
                    <td>3.3</td>
                    
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>
                    <td>3.5</td>
                    
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>
                    <td>1</td>
                    
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>
                    <td>1</td>
                    
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>NetFront 3.4</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td>-</td>
                    
                  </tr>
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nomor & tanggal surat</th>
                    <th>Jenis Surat</th>
                    <th>NIK & Nama</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
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
                          <input type="text" class="form-control-sm form-control" placeholder="No Kartu Keluarga" name="nokk" >
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>NIK</label>
                          <input type="text" class="form-control-sm form-control" placeholder="No Induk Kependudukan" name="nik" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input type="text" class="form-control-sm form-control" placeholder="Tempat Lahir" name="tempatlahir">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group ">
                         <label>Tnggal Lahir</label>
                         <div class="input-group date  " id="datetimepicker1" data-target-input="nearest">
                          <input type="text" class="form-control-sm form-control datetimepicker-input" data-target="#datetimepicker1"/>
                          <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class=" form-group ">
                        <label>Alamat Keluarga</label>
                        <input type="text" class="form-control-sm form-control" placeholder="Alamat Keluarga" name="alamatkel">
                      </div>
                    </div>
                    <div class="col-sm-6">
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
                   <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Pendidikan Terakhir</label>
                      <input type="text" class="form-control-sm form-control" placeholder="Pendidikan Terakhir" name="pendterakhir">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Pekerjaan</label>
                      <input type="text" class="form-control-sm form-control" placeholder="Pekerjaan" name="pekerjaan">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Tlp.WA</label>
                      <input type="text" class="form-control-sm form-control Phone"  placeholder="Nomor tlp/wa" name="tlp">
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
                      <input type="text" class="form-control-sm form-control datetimepicker-input" data-target=".datetimepicker2"/>
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
                  <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
                </div>
              </div>

            </div>
          </div>
          <div class="tab">

            <div class="row">
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
            <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Listrik/Bulan</label>
            <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label><small>Kuota/pulsa keluarga / bulan</small></label>
            <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
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
          <input type="text" class="form-control-sm form-control" placeholder="Nama Kepala Keluarga" name="namakk">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Stok Beras</label>
          <select class="form-control-sm form-control">
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
        <input type="text" class="form-control-sm form-control" placeholder="No Induk Kependudukan" name="nik" >
      </div>
    </div>
    <div class="col-sm-6">
      <!-- text input -->
      <div class="form-group">
        <label>Jenis Minyak</label>
        <select class="form-control-sm form-control">
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
        <input type="text" class="form-control-sm form-control" placeholder="No Kartu Keluarga" name="nokk" >
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Stok Gula</label>
        <select class="form-control-sm form-control">
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
        <input type="text" class="form-control-sm form-control" placeholder="No Kartu Keluarga" name="nokk" >
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Stok Gula</label>
        <select class="form-control-sm form-control">
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
        <input type="text" class="form-control-sm form-control" placeholder="No Kartu Keluarga" name="nokk" >
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Stok Daging<small></label>
          <select class="form-control-sm form-control">
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
          <input type="text" class="form-control-sm form-control" placeholder="No Kartu Keluarga" name="nokk" >
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Stok Daging</label>
          <select class="form-control-sm form-control">
            <option >Pilih..</option>
            <option value="PDAM">Ada</option>
            <option value="Sumur">Tidak</option>
          </select>
        </div>
      </div>
      
    </div>
  </div>
  <div class="tab">
    <div class="row">
      <div class="col-sm-3">
        <div class="form-group">
          <label>Jenis Lahan</label>
          <select class="form-control-sm form-control">
            <option >Pilih..</option>
            <option value="PDAM">Sawah</option>
            <option value="PDAM">Tegalan</option>
            <option value="Sumur">Ladang</option>
            <option value="Sumur">Kolam Ikan</option>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Jenis Tanaman yang dibudidayakan</label>
          <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Jenis Ternak yang dibudidayakan</label>
          <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
        </div>
      </div>
    </div>
    <label>Data UMKM</label>
    <div class="row">
      <div class="col-sm-3">
        <div class="form-group">
          <label>Kepemilikan Warung / Toko</label>
          <select class="form-control-sm form-control" onchange="toko()" id="tokoid">
            <option >Pilih..</option>
            <option value="ada">Ada</option>
            <option value="tidak">Tidak</option>
          </select>
        </div>
      </div>
      <div class="row" id="idjenistoko">
      
    </div>
     
      <div class="col-sm-3">
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
      </div>
    </div>
  </div>
  <div style="overflow:auto;">
    <div style="float:right; margin-top: 5px;">
      <button type="button" class="previous">Previous</button>
      <button type="button" class="next">Next</button>
      <button type="button" class="submit">Submit</button>
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
<!-- </div> -->
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
<script src="<?php echo base_url() ?>template/dist/js/demo.js"></script>

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
            // tlp:"required",
            // nik:{
            //   required:true,
            //   minlength:16,
            //   maxlength:16,
            //   digits:true

            // },
            email: {
              required: true,
              email: true
            },
            phone: {
              required:true,
              minlength:10,
              maxlength:10,
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
            tlp:"Wajib di isi !",
            nik:{
              required:"Wajib di isi !",
            },
            phone:{
              required:   "Phone number is requied",
              minlength:  "Please enter 10 digit mobile number",
              maxlength:  "Please enter 10 digit mobile number",
              digits:   "Only numbers are allowed in this field"
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
          <label>Jenis Warung/Toko</label>
          <select class="form-control-sm form-control">
            <option >Pilih..</option>
            <option value="PDAM">Sembako</option>
            <option value="PDAM">Warung Kopi</option>
            <option value="PDAM">Gorengan</option>
            <option value="PDAM">Pulsa</option>
            <option value="PDAM">Toko Bangunan</option>
            <option value="PDAM">Kuliner</option>
            <option value="PDAM">Bengkel</option>
            <option value="PDAM">Gas</option>
            <option value="PDAM">Gas</option>
            <option value="PDAM">BBM</option>
            <option value="PDAM">Rumah Makan</option>
            <option value="PDAM">Lain-lain</option>
          </select>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Omset Perbulan</label>
          <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
        </div>
      </div>` ;
      }else if(idtoko != "PDAM"){
        xxs.classList.add("d-none");
      }

      console.log(idtoko);
    }

    $(function () {

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

