<?php 

//  Connecter le fichier 'connect.php'.

include 'connect.php';

//   S'il y a une demande GET

if(isset($_GET['deleteid'])){

//   Requête SQL

    $id = $_GET['deleteid'];
    $sql = "delete from users WHERE id = '$id'";
    $result = mysqli_query($con, $sql);

//   Vérifiez si la requête SQL a été exécutée avec succès

    if ($result){
        echo'Ligne effacée';
        header('location: affichage.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>