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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Tambahn Data</button>
          </div> </div> <!-- Modal -->
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
            <div class="tab">Birthday:
              <p><input placeholder="dd" name="date"></p>
              <p><input placeholder="mm" name="month"></p>
              <p><input placeholder="yyyy" name="year"></p>
            </div>
            <div class="tab">Login Info:
              <p><input placeholder="Username..." name="username"></p>
              <p><input placeholder="Password..." name="password" type="password"></p>
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

      $(function () {
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

