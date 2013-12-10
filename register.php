<?php
	//var_dump($_POST);
	
	//Hier wordt contact gemaakt met de mysql-server
	$db = mysql_connect("localhost", "root", "");	
	
	//Hier wordt er een database gekozen op de mysql-server
	mysql_select_db("am1a", $db) or die("De database is niet gevonden");
	
	$sql = "INSERT INTO `users` ( `id`,
								 `firstname`,
								 `infix`,
								 `surname`,
								 `street`,
								 `house_number`,
								 `city`,
								 `zip_code`,
								 `birthday`,
								 `sex`,
								 `marital_status`,
								 `favo_genre`,
								 `favo_game`,
								 `email`,
								 `password`,
								 `userrole`)
					VALUES	   ( NULL,
								 '".$_POST['firstname']."',
								 '".$_POST['infix']."',
								 '".$_POST['surname']."',
								 '".$_POST['street']."',
								 '".$_POST['house_number']."',
								 '".$_POST['city']."',
								 '".$_POST['zip_code']."',
								 '".$_POST['birthday']."',
								 '".$_POST['sex']."',
								 '".$_POST['marital_status']."',
								 '".$_POST['favo_genre']."',
								 '".$_POST['favo_game']."',
								 '".$_POST['email']."',
								 '".$_POST['password']."',
								 'customer')";
	echo $sql;
	//Hier wordt de sql-query op de database afgevuurd en uitgevoerd.
	mysql_query($sql, $db) or die("De sql-query is niet goed uitgevoerd");
	
	echo "De gegevens zijn succesvol geregistreerd. U wordt doorgestuurd naar de
	registratiepagina";
	header("refresh:4; url=index.php");
?>