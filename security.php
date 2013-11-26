<?php

	if (!isset($_SESSION['id']))//de persoon is ingelogd
		{
			echo "U bent niet ingelogd";
			header("refresh:4;url=index.php?content=homepage");
			exit();
		}
	else if ( in_array($_SESSION['userrole'], $userrole))
	{
		echo "U bent wel ingelogd, maar niet bevoegd deze pagina te bekijken.
		U wordt doorgestuurd naar uw homepage";
		header("refresh:6; url=index.php?content=".$_SESSION['userrole']."_homepage");
		exit();
	}
	
	
?>