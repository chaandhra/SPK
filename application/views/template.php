<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
	  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>"/>
	  <link rel="stylesheet" href="<?php echo base_url('bootstrap/font-awesome-4.7.0/css/font-awesome.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/dataTables.bootstrap.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/dataTables.bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/dataTables.bootstrap.css') ?>"/>

</head>
<body class="body">
<div class="">
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SPK Pemilihan Jurusan</a>
    </div>
    <ul class="nav navbar-nav navbar-right">


      <?php
      if ($this->session->userdata('id_adm')) { ?>
        <li><a href="<?php echo base_url('adm/Databanksoal') ?>">Soal</a></li>
        <li><a href="<?php echo base_url('adm/Dashboard/peminatan') ?>">Peminatan</a></li>
        <li><a href="<?php echo base_url('adm/UserManagement/Siswa') ?>">mahasiswabaru Baru</a></li>
      	<li><a href="<?php echo base_url('adm/UserManagement') ?>">User</a></li>
                <li><a href="<?php echo base_url('adm/UserManagement/Admin') ?>">Admin</a></li>
       	<li><a href="<?php echo base_url('Login/out/id_adm');?>"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
       <?php } 
      ?>


      <?php
      if ($this->session->userdata('id')) { ?>
       	<li><a href="<?php echo base_url('Login/out/id');?>"><span class="glyphicon glyphicon-log-in"></span>Sign Out</a></li>
       <?php } 
      ?>


    </ul>
  </div>
</nav>
</div>
<div class="container">
    <div id="contents"><?php echo $contents; ?></div>
    
</div>
<div class="footer"></div>

    <script src="<?php echo base_url() ?>bootstrap/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>bootstrap/js/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
                responsive: true,"order": [[ 0, "desc" ]]
        });
    });
    </script>
</body>
</html>