<?php

require_once('controller.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>

<body>


    <?php
    if (!isset($message)) { ?>
        <?php if (isset($_COOKIE['cookies'])) { ?>
            <p>Vous, vous aimez déja</p>
            <form action="" method="POST">
                <p><?= $_COOKIE['cookies'] ?? '' ?></p>
                <input name="del" type="submit" value="Supprimer mon Cookie !"></input>
            </form>
            <a href="index.php">Recharger la page</a>
        <?php } else { ?>
            <form action="" method="post">
                <label for="cookies">J'aime <br>
                    <input type="text" name="cookies" id="cookies"></label>
                <br>
                <input type="submit" name="send" value="ok">
            </form>
        <?php } ?>
    <?php } else { ?>
        <p><?= $message ?></p>
        <a href="index.php"> Back </a>
    <?php } ?>



    
</body>

</html>