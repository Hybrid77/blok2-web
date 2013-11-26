<?php 
	$userrole = array('admin','customer');
	include ("security.php"); 
?>

<h3> Rootpage <h3/>

<?php
if (isset($_SESSION['userrole']))
{
echo "<a href='index.php?content=change_passwordform'>Change pasword.</a>";

}
?>