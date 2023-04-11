
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<?php

//  Connecter le fichier 'connect.php'.

include 'connect.php';

//   S'il y a une demande GET

if(isset($_GET['updateid'])){

//   Requête SQL

    $id = $_GET['updateid'];
    $sql = "select * from user WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

//   Écriture du résultat dans des variables 

        $nom = $row['nom'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
}

//   Si le bouton "Enregistrer" est enfoncé

    if (isset ($_POST['submit'])) {

//   Obtenir des données à l'aide de la méthode POST  

        $nom = secure ($_POST['nom']);
        $email = secure ($_POST['email']);
        $mobile = secure ($_POST['mobile']);
        $password = MD5(secure ($_POST['password']));  //   Cryptage du mot de passe (MD5)

//   Requête SQL

        $sql2 = "update user set id = '$id', nom = '$nom', email = '$email', mobile = '$mobile', password = '$password' where id = '$id'";
        $result2 = mysqli_query($con,$sql2);

//   Vérifiez si la requête SQL a été exécutée avec succès

        if ($result2){
            echo'Update Ok';
            header('location: affichage.php');
            }
        else {
            die(mysqli_error($con));
        }
        
    }
    
//Fonction pour une requête SQL sécurisée

    function secure($data){
        return  (trim (htmlentities(strip_tags($data))));
    }
?>

<!-- Form -->

    <form action="" method="post">
        <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>"><br>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>"><br>
        <input type="text" name="mobile" id="mobile" value="<?php echo $mobile; ?>"><br>
        <input type="text" name="password" id="password" value="<?php echo $password; ?>"><br>
        <button type="submit" value="submit" name="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</body>
</html>