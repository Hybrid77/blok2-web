<?php session_start(); ?>
<!DOCTYPE html>
	<html>
		<body background="images/wallpaper.png">
			<head>
				<title>
					Fotosjaak&#169
				</title>
				<link rel='stylesheet' type='text/css' href ='./css/style.css'/>
				<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
			</head>
		<body link="#000000" vlink="#999999" alink="#FFFFFF">
		
		
			<div class="content">
			
				<div class="banner">
					<img src="images/banner.png" alt="Banner" width="1080" height="150">
				</div>
				
				<div class="navigation">
					<?php 
						include ("navigation.php");
					?>
				</div>
			
				<div class="form">
					<?php
						if (isset($_GET['content' ] ))
						{
							include($_GET['content'].".php");
						}
						else
						{
							include("./homepage.php");
						}
					?>
				</div>
				
				<div class="tekst">
					<?php
						include("./loremipsum.php");
					?>
				</div>
				
				<div class="footer">
						Jumbo &#169
				</div>
		</body>
	</html>