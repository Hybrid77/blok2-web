
<!DOCTYPE html>
	<html>
	
	<body background="images/wallpaper.jpg">
		<head>
			<title>
				Succes
			</title>
			<link rel='stylesheet' type='text/css' href ='./css/style.css'/>
		</head>
		<body>
		
		<div class="content">		
			<div class="tekst1">
				<img src="images/banner.png" alt="Banner" width="1080" height="150">
			</div>
			
		

			<div class="succes">
				<h1> Gefeliciteerd!</h1>
				
				U bent met succes geregistreerd.
				U wordt automatisch doorverwezen naar de login pagina.
				
				<?php
				header("refresh:5; url=index.php?content=login_form");
				?>
				
			</div>
			
			<div class="footer">
			</div>
		</div>
		</body>
	</html>





<?php
	//hier wordt contact gemaakt met de mysql server
	$db = mysql_connect("localhost", "root", "");
	
	//Hier wordt er een database gekozen op de mysql server
	mysql_select_db("klas", $db) or die ("Database niet gevonden");
	
	$sql = "INSERT INTO `users` ( `id`, 
								`firstname`,
								`infix`,
								`surname`,
								`street`,
								`digit`,
								`place`,
								`bstate`,
								`gender`,
								`dob`,
								`mail`,
								`postalcode`,
								`pass`,
								`userrole`
								
								)
					VALUES		( NULL,
								'".$_POST['firstname']."',
								'".$_POST['infix']."',
								'".$_POST['surname']."',
								'".$_POST['street']."',
								'".$_POST['digit']."',
								'".$_POST['place']."',
								'".$_POST['bstate']."',
								'".$_POST['gender']."',
								'".$_POST['dob']."',
								'".$_POST['mail']."',
								'".$_POST['postalcode']."',
								'".$_POST['pass']."',
								'customer'
								
								)";
	//hier wordt de sql query op de database afgevuurd en uitgevoerd/
	mysql_query($sql, $db) or die ("De sql-query is niet goed uitgevoerd");
	
	//straat + huisnummer//
	//woonplaats//
	//postcode//
	//geboortedatum input type date//
	//geslacht	radiobuttons//
	//burgerlijke staat	radiobuttons
	//emailadress//
	//favorite gamesoorten   select uitklapmenu
	//favorite spel			
	//password
?>

