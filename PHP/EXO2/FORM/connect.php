<?php
$con = new mysqli('localhost', 'root', 'azer', 'form');
if (!$con){
    die (mysqli_error($con));
}
else{
    echo'Connection Ok <br>';
}
?>