<!--?php 
	if(FALSE == $this->session->userdata('username')){
		die("请登陆！");
	}
?-->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<!--title>Mechine Compound</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/bootstrap.min.css'?>" rel="stylesheet"-->
	<script src='<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/jquery-1.11.1.min.js'?>'></script>
	<!--script src='<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>'></script-->
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mechine Compound</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/plugins/metisMenu/metisMenu.min.css'?>" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/plugins/timeline.css'?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/sb-admin-2.css'?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/plugins/morris.css'?>" rel="stylesheet">

	<!-- Slider CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/slider.css'?>" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/font-awesome-4.2.0/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/select2-3.5.1/select2.css'?>" rel="stylesheet" type="text/css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
