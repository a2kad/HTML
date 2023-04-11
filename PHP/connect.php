<?php
$con = new mysqli('localhost', 'root', 'azer', 'afpa_test');

if (!$con){
    die (mysqli_error($con));
}
else{
    echo'Connection Ok';
}
?>