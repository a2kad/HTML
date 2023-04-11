
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    
</head>
<body>

<?php
include 'connect.php';
if(isset($_GET['updateid'])){
    echo ' -GET- ';
    $id = $_GET['updateid'];
    $sql = "select * from user WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
        $nom = $row['nom'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];







}
    if (isset ($_POST['submit'])) {
        echo ' -POST- ';
        $nom = secure ($_POST['nom']);
        $email = secure ($_POST['email']);
        $mobile = secure ($_POST['mobile']);
        $password = MD5(secure ($_POST['password']));
        $sql2 = "update user set id = '$id', nom = '$nom', email = '$email', mobile = '$mobile', password = '$password' where id = '$id'";
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
        <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>">
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <input type="text" name="mobile" id="mobile" value="<?php echo $mobile; ?>">
        <input type="text" name="password" id="password" value="<?php echo $password; ?>">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>