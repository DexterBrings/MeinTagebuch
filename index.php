<?php

    if(array_key_exists("submit", $_POST)){

        $link = mysqli_connect("localhost", "mein_tagebuch", "root", "");

        if(mysqli_connect_error()){
            die ("Die Verbindung zur Datenbank konnte nicht hergestellt werden!");
        }

        $error = "";

        if(!$_POST['email']){
            $error .= "Die Emailadresse fehlt! <br>";
        }

        if(!$_POST['password']){
            $error .= "Das Passwort fehlt! <br>";
        }

        if($error > ""){
            $error = "Es sind Fehler aufgetreten: <br>".$error;
            echo $error;
        }

    }
?>

<form method = "post">

    <input type = "email" name = "email" placeholder = "Emailadresse">

    <input type = "password" name = "password" placeholder = "Passwort">

    <input type = "checkbox" name = "stayLoggedIn">

    <input type = "submit" name = "submit" value = "Anmelden">

</form>