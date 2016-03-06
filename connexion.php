<?php

session_start();

$BDD = mysql_connect("localhost","root","");
mysql_select_db("database");

?>

<html>

    <head>
    
        <title>Création d'un formulaire d'inscription en HTML</title>
    
    </head>
    
    <body>
    
        <form action="index.php" method="post">
        
            <table>
            
            <tr>
            
            <td><label for="login"><strong>Nom de compte :</strong></label></td>
            <td><input type="text" name="login" id="login"/></td>
            
            </tr>
            
            <tr>
            
            <td><label for="pass"><strong>password :</strong></label></td>
            <td><input type="password" name="pass" id="pass"/></td>
            
            </tr>
            
            </table>
        
        <input type="submit" name="register" value="S'inscrire"/>
        
        </form>
    
    </body>

</html>