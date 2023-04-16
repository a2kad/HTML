<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afichage de db</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="wrapper">
        <div class="main">

    <ul>
        <li>
            <a href="index.php">Créer un utilisateur</a>
        </li>
        <li>
            <a href="affichage.php">Afficher tous les utilisateurs</a>
        </li>
    </ul>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mobile</th>
                <th>Secteur</th>
                <th>Description</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
    <?php
    include 'connect.php';
    $sql = "select * from users";
    $result = mysqli_query($con,$sql);
    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $mobile = $row['mobile'];
            $secteur = $row['secteur'];
            $description = $row['desc'];
            $password = $row['password'];
            echo '<tbody>
                    <tr>
                        <th>'.$id.'</th>
                        <td>'.$nom.'</td>
                        <td>'.$prenom.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$secteur.'</td>
                        <td>'.$description.'</td>
                        <td>'.$password.'</td>
                        <td>
                            <button value="submit" name="submit" class="btn submit" type="submit"><a href="update.php?updateid='.$id.'">Update</a></button>
                            <button  class="btn reset" type="reset" name="reset"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                        </td>
                    </tr>
                </tbody>';
        }
    }
    ?>
</table>
</div>
</div>
</body>
</html>