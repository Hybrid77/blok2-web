<?php 
$userrole = array('root','admin');
include ("security.php"); 
?>

<h3> Customerpage <h3/>

<?php
if (isset($_SESSION['userrole']))
{
echo "<a href='index.php?content=change_passwordform'>Change pasword.</a>";

}
?>