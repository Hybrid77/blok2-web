<form action="./index.php?content=register" method="post">
	<table>
		<tr>
			<td>voornaam:</td>
		</tr>
		<tr>
			<td><input type="text" name="firstname" /></td>
		</tr>
		<tr>
			<td>tussenvoegsel</td>
		</tr>
		<tr>
			<td><input type="text" name="infix" /></td>
		</tr>
		<tr>
			<td>achternaam</td>
		</tr>
		<tr>
			<td><input type="text" name="surname" /></td>
		</tr>
		<tr>
			<td>straat + huisnummer</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="street" />
				<input type="number" min="0" max="18923" name="house_number"/>
			</td>
		</tr>
		<tr>
			<td>Stad: </td>
		</tr>
		<tr>
			<td>
				<input type="text" name="city" />
			</td>
		</tr>
		<tr>
			<td>Postcode: </td>
		</tr>
		<tr>
			<td>
				<input type="text" name="zip_code" />
			</td>
		</tr>
		<tr>
			<td>Geboortedatum: </td>
		</tr>
		<tr>
			<td>
			  <input type="date"
					 name="birthday" 
					 min="1887-01-01" 
					 max="<?php echo Date('Y-m-d'); ?>" required/>
			</td>
		</tr>
		<tr>
			<td>Geslacht: </td>
		</tr>
		<tr>
			<td>
			  <input type="radio" name="sex" value="male" required>Man<br>
			  <input type="radio" name="sex" value="female" required>Vrouw
			</td>
		</tr>
		<tr>
			<td>Burgerlijke staat: </td>
		</tr>
		<tr>
			<td>
			  <input type="radio" name="marital_status" value="married" required>Getrouwd<br>
			  <input type="radio" name="marital_status" value="single" required>Niet getrouwd
			</td>
		</tr>
		<tr>
			<td>Favoriete game genre: </td>
		</tr>
		<tr>
			<td>
				<select name="favo_genre">
					<option value='not_selected'>---</option>
					<option value='rpg'>rpg</option>
					<option value='adventure'>adventure</option>
					<option value='horror'>horror</option>
					<option value='shooter'>shooter</option>
					<option value='mmorpg'>mmorpg</option>
					<option value='casual'>casual</option>
					<option value='educational'>educational</option>
					<option value='sport'>sport</option>
					<option value='simulation'>simulation</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Favoriete game</td>
		</tr>
		<tr>				
			<td>
				<input type='text' name='favo_game' />
			</td>
		</tr>
		<tr>
			<td>email</td>
		</tr>
		<tr>				
			<td>
				<input type='email' name='email' />
			</td>
		</tr>
		<tr>
			<td>password</td>
		</tr>
		<tr>				
			<td>
				<input type='password' name='password' />
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="verstuur" /></td>
		</tr>
	</table>
</form>		