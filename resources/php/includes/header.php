<!DOCTYPE html>

<head>
	<title>UMAT</title>
	<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	
	<link rel="stylesheet" type="text/css" href="/umat/resources/vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/umat/resources/vendor/DataTables-1.10.13/media/css/dataTables.bootstrap.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="/umat/resources/css/main-style.css">
	<link rel="stylesheet" type="text/css" href="/umat/resources/css/temes.css">
</head>

<body>

	<div class="container">
		<div id="lang" class="row">
			<div class="langHolder">
				<a href="#" class="active">Català</a><span>|</span>
				<a href="#">English</a><span>|</span>
				<a href="#">Español</a>
			</div>
		</div> <!-- END lang -->
	</div>

	<div class="container warp">
		<div id="logo" class="row">
			<a href="#">
				<img src="/umat/resources/img/logoUMAT.gif">
				<!--<embed type="/application/x-shockwave-flash" src="/umat/resources/swf/top.swf" width="509" height="82" id="div2061149059" name="div2061149059" bgcolor="#FFFFFF" quality="high" wmode="opaque">-->
			</a>
		</div> <!-- END logo -->

		<?php require_once("nav.php"); ?>

		<?php if(isset($headerViews)) require_once("headerViews.php"); ?>