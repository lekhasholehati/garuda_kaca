<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Garuda Kaca</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/my.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body style="background-color: lightblue;">

<div class="container" >
  <div class="col-lg">
  <div class="row mx-auto">
    <div class="box box-info">
    <div class="box-header with-border">
      <div>
      <img src="<?=base_url()?>assets/img/logo/logo.png" style="width: 150px;">
      </div>
      <h1 class="box-title"><strong>Sistem Pendukung Keputusan</strong></h1><br>
      <h1 class="box-title"><strong>CV.Garuda Kaca Bekasi</strong></h1>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <?= form_open('auth/check_login', 'class="form-horizontal"');?>
    
      <div class="box-body">
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Username</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="username">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>

          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-info center">Sign in</button>
      </div>
      <!-- /.box-footer -->
      <?= form_close(); ?>
  </div>
    
  </div>
    
  </div>
  
</div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/AdminLTE/dist/js/demo.js"></script>
</body>
</html>
