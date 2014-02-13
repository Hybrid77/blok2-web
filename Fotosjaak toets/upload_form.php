<?php 
	$userrole = array('root', 'photographer');
	include("security.php"); 

	if (isset($_POST['submit']))
	{
		$dir = "fotos/".$_POST['user_id']."/".$_POST['order_id']."/";

		if (!file_exists($dir))
		{	
			mkdir($dir, 0777, true);
			mkdir($dir."thumbnail/", 0777, true);
		}	

		if(is_uploaded_file($_FILESp['photo']['tmp_name']))
		{
			//verplaatst het bestand van de tijdelijke dir_temp
			//naar de map genaamd: fotos/
			move_uploaded_file($_FILES['photo']['tmp_name'],
			$dir.$_FILES['photo']['name']);
		}
		
		//thumbnail: (de hoogte bij een portret moet 80 px zijn
		//en bij een land scape moet de breedte 80px zijn).
		define('THUMB_SIZE', 80);
		
		//dit defineert het pad naar de grote foto
		$path_foto = $dir."thumbnail/tn_".$_FILESp['photo']['name'];
		
		//dit vraagt met de php functie get_image() 
		//de pixel grote van het bestand op.
		$specs_image = getimagesize($path_foto);
		
		
	}
	else 
	{
?>
Kies een foto
<table>
	<form action='' method='post' enctype="multipart/form-data">
		<tr>
			<td>Kies een foto</td>
			<td><input type='file' multiple="" name='photo' />
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