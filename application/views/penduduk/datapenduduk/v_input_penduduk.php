<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

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
  <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_dots.min.css" rel="stylesheet" type="text/css" />
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Tambahn Data</button>
          </div> </div> <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi Data</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              </div>
              <div class="modal-body">
                <div id="smartwizard">
                  <ul>
                    <li><a href="#step-1">Step 1<br /><small>Kepala Keluarga</small></a></li>
                    <li><a href="#step-2">Step 2<br /><small>Hubungan Keluarga</small></a></li>
                    <li><a href="#step-3">Step 3<br /><small>Kondisi Rumah</small></a></li>
                    <li><a href="#step-4">Step 4<br /><small>Kons.Rumah Tangga</small></a></li>
                    <li><a href="#step-5">Step 5<br /><small>Kepemilikan Lahan</small></a></li>
                    <li><a href="#step-6">Step 6<br /><small>UMKM</small></a></li>
                    <li><a href="#step-7">Step 7<br /><small>Konfirmasi</small></a></li>
                  </ul>
                  <div>
                    <div id="step-1">
                      <form>
                        
                     <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Nama Kepala Keluarga</label>
                          <input type="text" class="form-control-sm form-control" placeholder="Enter ..." required>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>No.KK</label>
                          <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>NIK</label>
                          <input type="text" class="form-control-sm form-control" placeholder="Enter ..." >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input type="text" class="form-control-sm form-control" placeholder="Enter ..." required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                       <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div class="input-group date "  data-target-input="nearest">
                          <input type="text" class="form-control-sm form-control datetimepicker-input" data-target="#reservationdatex"/>
                          <div class="input-group-append" data-target="#reservationdatex" data-toggle="datetimepicker">
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
                        <input type="text" class="form-control-sm form-control" placeholder="Enter ..." required>
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class=" form-group ">
                        <label>Golongan Darah</label>
                        <select class=" form-control-sm form-control">
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
              <div id="step-2">
                     <div class="row "> 
          <div class="col-md-12 d-flex justify-content-end">
            <button type="button" class="btn btn-danger"> Tambahn Data</button>
          </div> </div>
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
                   <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <div class="input-group date reservationdatex" data-target-input="nearest">
                      <input type="text" class="form-control-sm form-control datetimepicker-input" data-target="#reservationdatex"/>
                      <div class="input-group-append" data-target="#reservationdatex" data-toggle="datetimepicker">
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
                   <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <div class="input-group date reservationdatex"  data-target-input="nearest">
                      <input type="text" class="form-control-sm form-control datetimepicker-input" data-target="#reservationdatex"/>
                      <div class="input-group-append" data-target="#reservationdatex" data-toggle="datetimepicker">
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
                      </form>
          <div id="step-3" class="">
            <div class="row">
              <div class="col-md-6"> <input type="text" class="form-control" placeholder="Card Number" required> </div>
              <div class="col-md-6"> <input type="text" class="form-control" placeholder="Card Holder Name" required> </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6"> <input type="text" class="form-control" placeholder="CVV" required> </div>
              <div class="col-md-6"> <input type="text" class="form-control" placeholder="Mobile Number" required> </div>
            </div>
          </div>
          <div id="step-4" class="">
            <div class="row">
              <div class="col-md-12"> <span>Thanks For submitting your details with BBBootstrap.com. we will send you a confirmation email. We will review your details and revert back.</span> </div>
            </div>
          </div>
        </div>
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

<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>
<!-- Page specific script -->


<script type="text/javascript">
  $(document).ready(function(){

    $('#smartwizard').smartWizard({
      selected: 0,
      theme: 'dots',
      autoAdjustHeight:true,
      transitionEffect:'fade',
      showStepURLhash: false,

    });

  });

  function tambahform(){
    
  }

  $(function () {

    //Date and time picker
    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });
    $('.reservationdatex').datetimepicker({
      format: 'L'
    });

  })
</script>
</body>
</html>

