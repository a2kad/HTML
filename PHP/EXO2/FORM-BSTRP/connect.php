<?php
$con = new mysqli('localhost', 'root', 'azer', 'form');
if (!$con){
    die (mysqli_error($con));
}
else{
    echo'<br><div class="container-sm">
            <div class="alert alert-success" role="alert">
                Connexion réussie à la base de données!
            </div>
        </div>';
}
?>