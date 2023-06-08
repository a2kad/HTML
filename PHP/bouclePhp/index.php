<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle</title>
</head>
<body>
    <h1>Boucles</h1>
    <h2>Exo 1</h2>
    <?php
        $i = 0;
        while ($i <= 10){
            echo ($i.'<br>');
            $i++;
        }
    ?>
    <h2>Exo 2</h2>
    <?php
        $var1 = 0;
        $var2 = 15;
        while ($var1 <= 20){
            $var1Copy = $var1;
            echo ($var1Copy*$var2).'<br>';
            $var1++;
        }
    ?>

</body>
</html>