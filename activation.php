<?php
require_once ("class/LoginClass.php");

        if (isset($_POST['submit']))
        {
                if(!strcmp($_POST['password'], $_POST['password-check']))
                {
                        // Sla het nieuwe wachtwoord op in de database
                        LoginClass::update_password_in_login($_POST['email'], $_POST['password']);
                        echo "Uw wachtwoord is succesvol gewijzigd, u wordt doorgestuurd naar de login pagina";
                        header("refresh:5;url=index.php?content=login_form");
                }
                else 
                {
                        echo "De wachtwoorden komen niet overeen, u wordt teruggestuurd naar de wijzigingspagina";
                        header("refresh:5;url=index.php?content=activation&email=".$_POST['email']."&password=".$_POST['oldpassword']);        
                }
        }
        else 
        {
                
                if (LoginClass::check_if_email_password_exists($_GET['email'], $_GET['password']))
                {
                ?>
                        <p>Welkom op de site, uw account wordt geactiveerd nadat u een nieuw wachtwoord heeft gekozen.</p>
                        
                                <form action='index.php?content=activation' method='post'>
                                        <table>
                                                <tr>
                                                        <td>Nieuw wachtwoord(max. 12 tekens)</td>
                                                        
                                                        <td><input type="password" 
                                                                           name="password" 
                                                                           size="12" 
                                                                           maxlength="12" />
                                                        </td>
                                                </tr>
                                                
                                                <tr>
                                                        <td>Nieuw wachtwoord(check)</td>
                                                        
                                                        <td><input type="password" 
                                                                       name="password-check" 
                                                                       size="12"
                                                                       maxlength="12"/>
                                                        </td>
                                                </tr>
                                                
                                                <tr>
                                                        <td>&nbsp;</td>
                                                        
                                                        <td><input type="submit" 
                                                                       value="Verstuur"
                                                                       name="submit" />
                                                                       <input type="hidden"
                                                                                     name="email"
                                                                                         value='<?php echo $_GET['email']; ?>'
                                                                                          />
                                                                                          
                                                                       <input type="hidden"
                                                                              name="oldpassword"
                                                                              value='<?php echo $_GET['password']; ?>' 
                                                                              />                   
                                                        </td>
                                                </tr>
                                        </table>
                                        
                                </form>
                        <?php
                }
                else 
                {
                        echo "U heeft geen rechten op deze pagina, u wordt doorgestuurd naar de homepage.";        
                        header("refresh:4;url=index.php?content=homepage");
                }
        }
?>