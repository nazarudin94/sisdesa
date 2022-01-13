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
    <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/adminlte.min.css">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-dark mb-4 " >Login Page</h1>
                                    </div>
                                    <?= $this->session->flashdata('message');?>
                                    <form class="user" method="POST" action="<?=base_url('pelayanan/auth');?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control "
                                                id="email" name="email" 
                                                placeholder="Email" value="<?= set_value('email'); ?>">
                                                 <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control "
                                                id="password" name="password" placeholder="Password">
                                                <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6 form-group">
                                        <button type="submit" class="btn btn-success  btn-block">
                                            Login
                                        </button>
                                            
                                        </div>
                                        <div class="col-md-6 form-group">
                                        <a href="<?php echo  base_url() ?>home" class="btn btn-danger  btn-block">
                                            Kembali
                                        </a>
                                            
                                            </div>
                                            
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration');?>">Create an Account!</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/js/vendors.bundle.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/js/scripts.bundle.min.js" type="text/javascript"></script>
<script type="text/javascript">
 
</script>
</body>

</html>