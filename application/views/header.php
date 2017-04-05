<head>
	<meta charset="utf-8">
	<title>Welkom op Boekplaat!</title>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/slider.js"></script>
	<link rel="icon" href="<?php echo base_url()?>assets/images/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon"/>
	<?php
		echo link_tag('/assets/css/boekplaat.css');
	?>
</head>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<body>
	<div id="container">

		<div id="header">
			<h1>Boekplaat</h1>

			<img src="<?php echo base_url()?>assets/images/rocfriesepoort.png">

			<form action="" method="get">
				<input id="searchBar" type="text" name="search" placeholder="Zoeken">
			</form>

			<a href="#login">login</a>
		</div>

		<div id="navbar">
		<a href=http://localhost/Boekplaat>Home</a>
		<a href="<?php echo base_url().index_page();?>/welcome/boeken">Boeken</a>
		<a href="<?php echo base_url().index_page();?>/welcome/account">Account</a>
		<a href="<?php echo base_url().index_page();?>/welcome/contact">Contact</a>
		</div>