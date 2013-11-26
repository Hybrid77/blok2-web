
<?php
<?php
	SESSION_START();
	$userrole = array('');
	include ("security.php"); 
?>
	$userrole = array('');
	include ("security.php"); 
?>


<div class="changepassword">
<form action="./index.php?content=resetpass">

<table border="0.8px">

 <tr > 
 	<td >

 	<b>Weizig wachtwoord</b>

 	</td> 

 	</tr>


<tr> 

		<td>
	 		 Oude wachtwoord:
		</td> 


		<td>

			<input type="text" name="pass">

		</td>

</tr>


<tr> 

		<td>

			Nieuw wachtwoord: 

		</td> 

		<td>

			<input type="password" name="newpass">

		</td>

</tr>

<tr> 

		<td>

		Herhaal nieuwe wachtwoord:  
		
		</td> 

		<td>

			<input type="password" name="checkpass">	
		
		</td>

</tr>

<tr> 

		<td>	
				
		</td>

		<td>

			<input type="submit" value="Change Password">

			

		</td>

</tr>



</table>

</form>

</div>