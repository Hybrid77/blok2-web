	<?php
				//hier wordt contact gemaakt met de mysql server
				$db = mysql_connect("localhost", "root", "");
				
				//Hier wordt er een database gekozen op de mysql server
				mysql_select_db("fotosjaak", $db) or die ("Database niet gevonden");
	?>