<?php 
        $userrole = array('customer', 'root', 'admin');
        include("security.php"); 


		if ( isset($_POST['submit']))
		{
				
			OrderClass :: insert_into_order($_POST);
			//var_dump($_POST);
			
			echo "Uw geplaatste opdracht is correct ontvangen. U krijgt een<br>
				 bevestigingsemail toegestuurd. U word binne 8 seconde terug gestuurd";
				 header("refresh:6;indext.php?content=customer_homepage");
		}
		
		else
		{
				
		
?>



<p>Plaats een opdracht</p>


<form action='index.php?content=opdracht' method='post' >
        <table>
                <tr>
                        <td>Korte omschrijving</td>
                        <td>
                                <textarea cols="60"
                                                  rows="5"
                                                  name='order_short'
                                                  placeholder='Geef een korte omschrijving'></textarea>
                        </td>
                </tr>
                <tr>
                        <td>Uitgebreide omschrijving</td>
                        <td>
                                <textarea cols="60"
                                                  rows="5"
                                                  name='order_long'
                                                  placeholder='Geef een uitgebreide omschrijving'></textarea>
                        </td>
                </tr>
                <tr>
                        <td>
                                Geef de opleveringsdatum
                        </td>
                        <td>
                                <input type='date' name='deliverydate' placeholder='dd-mm-yyyy' />
                        </td>                        
                </tr>
                <tr>
                        <td>
                                Geef de datum van het evenement
                        </td>
                        <td>
                                <input type='date' name='eventdate' placeholder='dd-mm-yyyy' />
                        </td>                        
                </tr>
                <tr>
                	<td>Zwart/wit of kleur.</td>
                	<td>
                		
                			kleur <input type='radio' 
                						 name='color' 
                						 value='color'
                						 checked='checked'/>
                			Zwart/Wit <input type='radio' 
                							 name='color' 
                							 value='black-white'/>
                		
                	</td>
                 </tr>
                 
                 <tr>
                 	<td>Aantal foto's</td>
                 	<td>
                 		<input type='number' name='number_of_pictures' min='5' value='5'/>
                 	</td>
                 </tr>
                <tr>
                	<td>&nbsp</td>
                	<td>
                		<input type='submit' name='submit' value='verstuur' />
                	</td>
                </tr>
                
                
                
        </table>
        
        
        
</form>

<?php
}
?>