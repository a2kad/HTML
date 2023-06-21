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
    <?php if (!isset($_COOKIE['testCookies'])) { ?>
        <form action="" method="post">
            <label for="cookies">J'aime <br>
                <input type="text" name="cookies" id="cookies"></label>
            <br>
            <input type="submit" value="ok">
        </form>
    <?php } else if (isset($_COOKIE['testCookies'])) { ?>
        <p>Vous aimez <?= $_COOKIE['testCookies'] ?></p>
        <form action="" method="post">
            <input type="submit" name="del" value="del">
        </form>

    <?php } ?>
</body>

</html>