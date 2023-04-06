<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afichage de db</title>
</head>
<body>
    <?php
    include 'connect.php';
    $sql = "select * from user";
    $result = mysqli_query($con,$sql);
    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $nom = $row['nom'];
            $email = $row['email'];
            $password = $row['password'];
        }
        echo '<tr>
                <th>'.$id.'</th>
                <td>'.$nom.'</td>
                <td>'.$email.'</td>
                <td>'.$password.'</td>
                <td></td>
            </tr>';
    }
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>