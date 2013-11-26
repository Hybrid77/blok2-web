<?php 


if ($_POST['resetpass']){
	// get pass from db
	$pass = $_POST['pass'];
	$newpass = $_POST['newpass'];
	$checkpass = $_POST['checkpass'];



//moet er voor zorgen dat alles ingevult is

			if($pass){

				if ($newpass) {
						if ($checkpass){
							if ($newpass === $checkpass) {
								   $sql = mysql_query("UPDATE user SET pass='$pass' WHERE id =$id");
       								  // checken of de password is verandert
       								if ($sql){
       							  echo"Gefeliciteerd! je wachtwoord is verandert! ";


         }
         else{
          echo"Error deze functie faalt";

         }

									}
								}
								else{
									echo "De wachtwoord is niet goed ingevoert";
								}


								mysql_close();
							}
							else{
								echo "De wachtwoorden kom en niet over een voer het opniew in.";
							}



						}
					else{
						echo"Je moet het nieuwe wachtwoord nog een keer invoeren.";
					}


	
				}
				else{

					echo"Je moet je nieuwe wachtwoord invoeren. ";

				}

			}
	else {

		echo "Je moet je huideige wachtwoord invoeren. ";

	}	


}


?>