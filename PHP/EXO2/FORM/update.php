
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
include 'connect.php';
if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $mobile = $row['mobile'];
        $secteur = $row['secteur'];
        $description = $row['desc'];
        $password = $row['password'];
}
    if (isset ($_POST['submit'])) {
        $nom = secure($_POST['nom']);
        $prenom = secure($_POST['prenom']);
        $mobile = secure($_POST['mobile']);
        $secteur = secure($_POST['secteur']);
        $description = secure($_POST['description']);
        $password = MD5(secure($_POST['password'])); 
        $sql2 = "UPDATE `users` SET `nom` = '$nom', `prenom` = '$prenom', `mobile` = '$mobile', `secteur` = '$secteur', `desc` = '$description', `password` = '$password' WHERE `users`.`id` = '$id'";
        
        $result2 = mysqli_query($con,$sql2);
        if ($result2){
            echo'Update Ok';
            header('location: affichage.php');
            }
        else {
            die(mysqli_error($con));
        }
        
    }
    function secure($data){
        return  (trim (htmlentities(strip_tags($data))));
    }
?>
    <form action="" method="post">
        <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>"><br>
        <input type="text" name="prenom" id="prenom" value="<?php echo $prenom; ?>"><br>
        <input type="text" name="mobile" id="mobile" value="<?php echo $mobile; ?>"><br>
        <input type="text" name="secteur" id="secteur" value="<?php echo $secteur; ?>"><br>
        <input type="text" name="description" id="description" value="<?php echo $description; ?>"><br>
        <input type="text" name="password" id="password" value="<?php echo $password; ?>"><br>
        <button type="submit" value="submit" name="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</body>
</html>