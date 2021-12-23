<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bharat NFT | Dashboard</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- AOS CSS file  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website1/css/aos.css">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website1/css/all.css">
        <!-- Bootstrap CSS file  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website1/css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website1/css/adminlte.min.css">
        <!-- Custom Css  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website1/css/main.css">

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="<?php echo base_url(); ?>assest/website1/js/jquery.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assest/parsley.min.js"></script>

        <script src="<?php echo base_url(); ?>assest/toastr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assest/toastr.min.css">

        <style type="text/css">
            .parsley-errors-list{
                color: red;
                list-style-type: none;
                padding: 0;
                margin: 0;
            }
        </style>
        <style>
            .stack-box span.fr{
            float: right;
            font-size: 12px !important;
            }
            .stack-box .connect{
            float: right;
            border-radius: 20px;
            padding: 7px 20px;
            background-color: #27B5E7;
            color: #fff !important;
            }
            .stack-box .connect1{
            float: right;
            border-radius: 20px;
            padding: 7px 20px;
            background-color: #5dc2e7;
            color: #fff !important;
            }
            h2{
            color:#27B5E7 !important ;
            }
            .stack-box label{
            font-size: 12px !important;
            font-weight: bold !important;
            }
            p{
            color: rgb(39, 38, 38) !important;
            line-height: 0px !important;
            font-size: 12px !important;
            }
            .mtt-3{
            color: #666 !important;
            margin-top: -12px !important;
            }
            .home-box div {
            line-height: 2 !important;
            }
            .connect:hover{
            color: #27B5E7 !important;
            background-color: #b3e4f5;
            }
            .connect1:hover{
            color: #27B5E7 !important;
            background-color: #b3e4f5;
            }
        </style>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="javascript:;" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="javascript:;" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url(); ?>assest/website1/images/bharat-nft1.png" class="img-circle " alt="User Image">
                    </div>
                </div>
                <!-- SidebarSearch Form -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="https://rinkeby.etherscan.io/address/0xbeac042e394a9e073e6837ae36ae8e4f142b5f64" class="nav-link" target="_blank">
                                <img class="nav-icon" src="<?php echo base_url(); ?>assest/website1/images/home.png" alt="">
                                <p>
                                    View Etherscan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="home.html" class="nav-link">
                                <img class="nav-icon" src="<?php echo base_url(); ?>assest/website1/images/home.png" alt="">
                                <p>
                                    Staking
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->