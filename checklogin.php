<?php
	if ( !empty ($_POST['mail']) && !empty($_POST['pass']))
	{
		include('./connect_db.php');
		$query = "SELECT * 
						FROM `users` 
						WHERE `mail` = '".$_POST['mail']."' 
						AND `pass` = '".$_POST['pass']."'";
		$result = mysql_query($query, $db);
		if (mysql_num_rows($result) > 0)
		{
			$record = mysql_fetch_array($result);
			$_SESSION['id'] = $record['id'];
			$_SESSION['userrole'] = $record['userrole'];
			//header("location:index.php?content=downloadpage");
			
			switch ($record['userrole'])
			{
				case 'root';
				header("location:index.php?content=root_homepage");
				
				break;
				
				case 'admin';
				header("location:index.php?content=admin_homepage");
				
				
				break;
				
				case 'customer';
				header("location:index.php?content=customer_homepage");
				
				break;
			}
		}
		else
		{
			echo 'Het email adres en/of wachtwoord is niet bekend, u wordt doorgestuurd naar de login pagina';
			header("refresh:5; url=index.php?content=login_form");
		}
	}
	else
	{
		echo 'U heeft beide of een van beide velden niet ingevuld, U wordt doorgestuurd naar de inlogpagina';
		header("refresh:4;url=index.php?content=login_form");
	}
?>