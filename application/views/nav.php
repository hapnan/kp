<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kantor Penjaminan Mutu</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/mdb/css/mdb.min.css') ?>">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/mdb/css//style.css') ?>"> -->

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/mdb/js/jquery-3.4.1.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/mdb/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/mdb/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/mdb/js/mdb.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/style.js') ?>"></script>
    
</head>
<body>  
    <!-- Navigation BAR : |AMI Bima| AMI Diploma Sarjana | Data Isian| -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark unique-color">
        <a class="navbar-brand" href="home"><strong>
            <img src="<?php echo base_url('assets/img/logo.png') ?>" height="30px" alt="kpm-pict">
        </strong></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-6"
        aria-controls="navbarSupportedContent-6" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent-6">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item">
                <a class="nav-link" href="#">AMI Bima</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" href="#">AMI Diploma Sarjana</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-6" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Data Isian </a>
                    <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-6">
                        <a class="dropdown-item" href="#">Journal</a>
                        <a class="dropdown-item" href="#">Proceeding</a>     
                </div>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto nav-item">
                <li class="nav-item ">
                    <a class="nav-link " href="login" >Console</a>
                </li>
            </ul>            
        </div>
    </nav> 
    <!-- ... Navigation -->
