<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
<p><a href="/PHP/affichage.php"><= Afficher tous les utilisateurs</a></p>

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
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    include 'connect.php';

    if (isset ($_POST['submit'])) {
        $nom = secure ($_POST['nom']);
        $email = secure ($_POST['email']);
        $mobile = secure ($_POST['mobile']);
        $password = MD5(secure ($_POST['password']));
        $sql = "insert into user (nom, email, mobile, password) value ('$nom', '$email', '$mobile','$password')";
        $result = mysqli_query($con,$sql);
        if ($result){
            echo "Isertion OK dans le table";
        }
        else{
            echo 'Error DB';
        }
    }
    function secure($data){
        return  (trim (htmlentities(strip_tags($data))));
    }
    ?>

</body>
</html>