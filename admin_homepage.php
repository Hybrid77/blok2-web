<?php
	$userrole = array('customer','root');
	include ("security.php"); 
?>

<h3> Adminpage <h3/>


<?php
if (isset($_SESSION['userrole']))
{
echo "<a href='index.php?content=change_passwordform'>Change pasword.</a>";

}

?>