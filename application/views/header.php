<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <script src="<?php  echo base_url();?>assets/jquery/jquery-2.1.4.min.js"></script>  
  <link rel="stylesheet" href="<?php   echo base_url();?>assets/bootstrap/css/bootstrap.min.css">    
  <script src="<?php  echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>  
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
   
  <style>
    body {
      padding-top: 60px;
      padding-bottom: 40px;
    }
  </style>
  
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/main.css">
  <h1><center> Energy Monitor</center></h1>
  <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> <!--   CHECK -->
  <nav class="navbar navbar-default">
    <div class="navbar-inner">
      <div class="container-fluid">
        
          <ul   class="nav navbar-nav">
            <li><a href = "<?php echo site_url('Kseb'); ?>" > <i class="icon-home"></i> <button> Main</button> </a></li>
			 
			<!-- <li> <a href = "http://localhost/kseb/index.php/Pagedisplay/example1"><button>Pages</button></a></li> -->
			 <li><a href = "<?php echo site_url('Pagedisplay/example1'); ?>" ><button>  Pages</button></a></li>
			<li><a href = "<?php echo site_url('Kseb/start_id'); ?>" ><button> Start_id</button></a></li>
			 
	        <li><a href ="<?php echo site_url('Kseb/viewslab');?>"> <button>SLAB</button></a> </li>
            <li><a href ="<?php echo site_url('Kseb/calculate');?>"> <button>Calc</button></a> </li>
          </ul>
          <div class="btn-group pull-right">
             
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-wrench"></i> admin	<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a data-toggle="modal" href="#myModal"><i class="icon-user"></i> New User</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url('user_guide'); ?>"><i class="icon-share"></i>  userguide</a></li>
            </ul>
            
              <a class="btn" href="<?php echo base_url('user_guide'); ?> "><i class="icon-share"></i> userguide</a>
            
          </div>
      </div>
      <!--/.container-fluid -->
    </div>
    <!--/.navbar-inner -->
 </nav>
  <!--/.navbar -->
<!--
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
   <link rel="stylesheet" href="http://localhost/kseb/assets/bootstrap/css/bootstrap.min.css"> 
-->
</head>
<body>
