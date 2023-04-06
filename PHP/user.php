<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
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
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $sql = "insert into user (nom, email, mobile, password) value ('$nom', '$email', '$mobile','$password')";
        $result = mysqli_query($con,$sql);
        if ($result){
            echo "Isertion OK dans le table";
        }
        else{
            echo 'Error DB';
        }
    }
    
    ?>

</body>
</html>