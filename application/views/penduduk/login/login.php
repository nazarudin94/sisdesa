<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>template/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url()?>template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>template/dist/css/adminlte.min.css">

</head>

<body class="hold-transition login-page">
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <h1 ><b>Login</b>Page</h1>
      </div>
      <div class="card-body">
          <p class="login-box-msg">Silahkan Login</p>
          <?= $this->session->flashdata('message');?>
          <form method="POST" action="<?=base_url('penduduk/auth');?>">
            <div class="input-group mb-3">
             <input type="text" class="form-control "
             id="nama" name="nama" 
             placeholder="username" value="<?= set_value('nama'); ?>">
             <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
             <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
              </div>
          </div>
      </div>
      <div class="input-group mb-3">
          <input type="password" class="form-control "
          id="password" name="password" placeholder="Password">
          <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
          </div>
      </div>
  </div>
  <div class="row">
          <div class="col-8">
           <a href="<?php echo  base_url() ?>home" class="btn btn-danger  btn-block">
                                            Kembali
                                        </a>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
    </div>
</form>


<!-- /.social-auth-links -->

<!--       <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
    </p> -->
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.login-box -->
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url()?>template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>
<script type="text/javascript">

</script>
</body>

</html>