
<a href="index.php">Home</a>        
<a style="padding-left: 60px;" href="index.php?content=hallo_wereld">Hallo wereld.</a>






<?php
if (isset($_SESSION['userrole'])){
echo "	<a style='padding-left: 60px;' href='index.php?content=faq'>Faq</a>";
}
?>            
   
<?php
if (isset($_SESSION['userrole'])){
echo "	<a style='padding-left: 60px;' href='index.php?content=downloadpage'>Download</a>";
}
?>     

<a style="padding-left: 60px;" href='index.php?content=register_form'>Register</a>          



<?php
if (isset($_SESSION['userrole']))
{          
echo "<a style='padding-left: 60px;' href='index.php?content=music'>GameMusic</a>";
}
?>





	<?php 
		if (isset($_SESSION['userrole']))
		{
			switch ($_SESSION['userrole'])
			{
				case 'customer':
				echo "
				<a style='padding-left: 60px;' href='index.php?content=customer_homepage'>Customerhome</a>";
				break;
				case 'admin':
				echo "
				<a style='padding-left: 60px;' href='index.php?content=admin_homepage'>Adminhome</a>";
				break;
				case 'root':
				echo" 
				<a style='padding-left: 60px;' href='index.php?content=Root_homepage'>Roothome</a>";
				break;
			}
		}
		else
		{
			echo "	<a style='padding-left: 60px;' href='index.php?content=login_form'>
			Login</a>";
		}
	?>	

<?php
if (isset($_SESSION['userrole']))
{
	echo "	<a style='padding-left: 60px;' href='index.php?content=logout'>
			Logout</a>";
}

?>
	



<a style="padding-left: 60px;" href="index.php?content=contact">Contact</a>

