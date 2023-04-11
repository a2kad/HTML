<?php 
include 'connect.php';
if(isset($_GET['deleteid'])){
    echo'start';
    $id = $_GET['deleteid'];
    $sql = "delete from user WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if ($result){
        echo'Ligne effacée';
        header('location: affichage.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>