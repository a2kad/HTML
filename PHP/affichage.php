<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afichage de db</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
    <p><a href="/PHP/user.php">Créer un utilisateur =></a></p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    <?php
    include 'connect.php';
    $sql = "select * from user";
    $result = mysqli_query($con,$sql);
    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $nom = $row['nom'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];
            echo '<tbody>
                    <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$nom.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                        <td>
                        
                            <button type="button" class="btn btn-warning"><a href="update.php?updateid='.$id.'">Update</a></button>
                            <button type="button" class="btn btn-danger"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                        
                        </td>
                    </tr>
                </tbody>';
        }
    }
    ?>
</table>
</body>
</html>