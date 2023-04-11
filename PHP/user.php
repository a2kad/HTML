<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<!--  Menu  BOOTSTRAP  -->

<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="/PHP/user.php">Créer un utilisateur</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/PHP/affichage.php">Afficher tous les utilisateurs</a>
    </li>
</ul>

<!-- Form -->

    <form action="" method="POST">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom">
        <br>
        <label for="Email">Email : </label>
        <input type="text" name="email" id="email">
        <br>
        <label for="mobile">Mob : </label>
        <input type="text" name="mobile" id="mobile">
        <br>
        <label for="password">Password : </label>
        <input type="text" name="password" id="password">
        <br>
        <button type="submit" value="submit" name="submit" class="btn btn-primary">Enregistrer</button>

    </form>
    <?php
    include 'connect.php';

//   Si le bouton "Enregistrer" est enfoncé

    if (isset ($_POST['submit'])) {

//   Obtenir des données à l'aide de la méthode POST  

        $nom = secure ($_POST['nom']);
        $email = secure ($_POST['email']);
        $mobile = secure ($_POST['mobile']);
        $password = MD5(secure ($_POST['password']));

//   Requête SQL

        $sql = "insert into user (nom, email, mobile, password) value ('$nom', '$email', '$mobile','$password')";
        $result = mysqli_query($con,$sql);

//   Vérifiez si la requête SQL a été exécutée avec succès

        if ($result){
            echo "Isertion OK dans le table";
        }
        else{
            echo 'Error DB';
        }
    }

//Fonction pour une requête SQL sécurisée

    function secure($data){
        return  (trim (htmlentities(strip_tags($data))));
    }
    ?>

</body>
</html>