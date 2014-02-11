<?php 
	$userrole = array('root', 'photographer');
	include("security.php"); 
	
	if (isset($_POST['submit']))
	{
		echo $_POST['description'];
		
		
	}
	else 
	{
?>
Kies een foto
<table>
	<form action='' method='post' enctype="multipart/form-data">
		<tr>
			<td>Kies een foto</td>
			<td><input type='file' name='photo' />
		</tr>
		<tr>
			<td>Beschrijving foto</td>
			<td><textarea name='description' 
						  cols='50' 
						  rows='5'></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input type='submit' name='submit' />
				<input type='hidden' 
					   name='user_id' 
					   value='<?php echo $_GET['user_id']; ?>' />
				<input type='hidden'
					   name='order_id' 
					   value='<?php echo $_GET['order_id']; ?>' />
			</td>
		</tr>
	</form>	
</table>
<?php
	}
?>