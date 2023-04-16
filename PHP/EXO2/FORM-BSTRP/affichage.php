<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher tous les utilisateurs</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<div class="container-md">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Créer un utilisateur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="affichage.php">Afficher tous les utilisateurs</a>
                </li>
            </ul>



    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Mobile</th>
                <th scope="col">Secteur</th>
                <th scope="col">Description</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
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
                        <th scope="row">'.$id.'</th>
                        <td>'.$nom.'</td>
                        <td>'.$prenom.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$secteur.'</td>
                        <td>'.$description.'</td>
                        <td>'.$password.'</td>
                        <td align="center">
                            <a class="btn btn-primary" role="button" href="update.php?updateid='.$id.'">Mise à jour</a><br><br>
                            <a class="btn btn-danger" role="button" href="delete.php?deleteid='.$id.'">Supprimer</a>
                        </td>
                    </tr>
                </tbody>';
        }
    }
    ?>
    </table>
    </div>
</body>
</html>