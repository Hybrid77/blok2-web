<?php 
        $userrole = array('customer', 'root', 'admin');
        include("security.php"); 
?>
<p>Plaats een opdracht</p>


<form action='' method='post' >
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
                
                
                
                
        </table>
        
        
        
</form>