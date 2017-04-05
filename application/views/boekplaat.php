<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<body>
	<div id="container">

		<div id="header">
			<h1>Boekplaat</h1>

			<img src="<?php echo base_url()?>assets/images/rocfriesepoort.png">
		</div>

		<div id="navbar">
		<a href=http://localhost/Boekplaat>Home</a>
		<a href="<?php echo base_url().index_page();?>/welcome/boeken">Boeken</a>
		<a href="<?php echo base_url().index_page();?>/welcome/account">Account</a>
		<a href="<?php echo base_url().index_page();?>/welcome/contact">Contact</a>
		</div>

		<div id="imageSlider">
			<button id="buttonLeft" onclick="plusDivs(-1)">&#10094;</button>
			<img class="mySlides" src="./assets/images/boek.png">
			<img class="mySlides" src="./assets/images/boekkasteel.jpg" style="display:none;">
			<img class="mySlides" src="./assets/images/book.png" style="display:none;">
			<img class="mySlides" src="./assets/images/ButtonBoeken.jpg" style="display:none;">
			<button id="buttonRight" onclick="plusDivs(+1)">&#10095;</button>
		</div>

	</div>
</body>
</html>