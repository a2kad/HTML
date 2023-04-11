<?php

//   Se connecter à la base de données

$con = new mysqli('localhost', 'root', 'azer', 'afpa_test');

//   Vérifier la connexion à la base de données

if (!$con){
    die (mysqli_error($con));
}
else{
    echo'Connection Ok <br>';
}
?>