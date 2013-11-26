<h2>Registreer</h2>

<form action="register.php" method="post">
			<table border="0.5">
				<tr>
					<td>
						voornaam:
					</td>
					<td>
						<input type="text" size="28" name="firstname"/>
					</td>
				</tr>
				
				<tr>
					<td>
						tussenvoegsel:
					</td>
					<td>
						<input type="text" size="28" name="infix"/>
					</td>
				</tr>		
				
				<tr>
					<td>
						achternaam:
					</td>
					<td>
						<input type="text" size="28" name="surname"/>
					</td>
				</tr>
				
				<tr>
					<td>
						geboortedatum:
					</td>
					
					<td>
						<input type="date" name="dob"/> 
					</td>
				</tr>
				
				<tr>
				<tr>
					<td>
						adres:
					</td>
					
					<td>
						<input type="text" size="20" name="street"/> 
						<input type="text" size="1" name="digit"/> 
					</td>
				</tr>
				<tr>
					<td>
						woonplaats:
					</td>
					
					<td>
						<input type="text" size="17" name="place"/> 
						<input type="text" size="4" name="postalcode"/> 
					</td>
				</tr>
				
				<tr>
					<td>
						burgerlijke staat:
					</td>
					
					<td>
					<input type="hidden" name="bstate" value="null">
						<input type="radio" name="bstate" value="alone">alleen
						<input type="radio" name="bstate" value="livingtogether">samenwonend
						<br>
						<input type="radio" name="bstate" value="married">getrouwd
						<input type="radio" name="bstate" value="widow">weduwe
					</td>
				</tr>
				
				<tr>
					<td>
						geslacht:
					</td>
					
					<td>
					<input type="hidden" name="gender" value="false">
						<input type="radio" name="gender" value="male">man
						<input type="radio" name="gender" value="female">vrouw
					</td>
				</tr>
				
				<tr>
					<td>
						e-mail adres:
					</td>
					
					<td>
						<input type="email"  size="28" name="mail"/> 
					
					</td>
				</tr>
				
				<tr>
					<td>
						wachtwoord:
					</td>
					
					<td>
						<input type="password" size="28" name="pass"/> 
					</td>
				</tr>
				
					<td>


					</td>
					<td>
						<input type="submit" name="submit" value="verstuur"/>
					</td>
				</tr>		
			</table>