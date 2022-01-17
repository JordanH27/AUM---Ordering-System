<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>AUM Health Hub</title>
	<link rel="shortcut icon" href="img/icon.png">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- JS -->
	<script src="js/index.js"></script>
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
	<?php
	require('functions.php');
	?>

	<!-- Top Bar -->
<div class="top-bar">
		<div class="container">
			<div class="col-12 text-right">
				<p><a href="tel:+12947584736273">Call us at 074 295 9999</a></p>
			</div>
		</div>
	</div>
<!-- End Top Bar -->
</head>
<body>
<!-- Navigation -->
<nav class="navbar bg-light navbar-light navbar-expand-lg">
		<div class="container">
			<a href="index.php" class="navbar-brand"><img src="img/logo2.png" alt="Logo" title="Logo"></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav md-auto">
					<li class="nav-item"><a href="adminProducts.php" class="nav-link">Products</a></li>
					<li class="nav-item"><a href="add.php" class="nav-link">Add</a></li>
					<li class="nav-item"><a href="orders.php" class="nav-link">Orders</a></li>
					<li class="nav-item"><a href="login.php" class="nav-link">Log-In</a></li>
				</ul>
			</div>
			<a href="cart.php" class="nav-link nav-icon"><i class="fas fa-shopping-cart"></i></a>
		</div>
	</nav>
	<!-- End Navigation -->