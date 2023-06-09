<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container"></div>
    <h1>Boucles</h1>
    <div class="row">
        <div class="col ms-2">
            <h2>Exo 1</h2>
            <?php
            $i = 0;
            while ($i <= 10) {
                echo ($i . '<br>');
                $i++;
            }
            ?>
        </div>
        <div class="col">
            <h2>Exo 2</h2>
            <?php
            $var1 = 0;
            $var2 = 15;
            while ($var1 <= 20) {
                $var1Copy = $var1;
                echo ($var1Copy * $var2) . '<br>';
                $var1++;
            }
            ?>
        </div>
        <div class="col">
            <h2>Exo 3</h2>
            <?php
            $var12 = 100;
            $var22 = 15;
            while ($var12 >= 10) {
                $var12Copy = $var12;
                echo ($var12Copy * $var22) . '<br>';
                $var12--;
            }
            ?>
        </div>
        <div class="col">
            <h2>Exo 4</h2>
            <?php
            $newVar = 1;
            while ($newVar <= 10) {
                echo ($newVar) . '<br>';
                $halfNewVar = $newVar / 2;
                $newVar += $halfNewVar;
            }
            ?>
        </div>
        <div class="col">
            <h2>Exo 5</h2>
            <?php
            for ($j = 1; $j <= 15; $j++) {
                echo "On y arrive presque $j <br>";
            }
            echo "Nous sommes arrivés!"
            ?>
        </div>
        <div class="col">
            <h2>Exo 6</h2>
            <?php
            for ($k = 20; $k >= 0; $k--) {
                if ($k == 0) {
                    echo "C'est bon !";
                } else {
                    echo "C'est presque bon $k <br>";
                }
            }
            ?>
        </div>
        <div class="col">
            <h2>Exo 7</h2>
            <?php
            for ($m = 1; $m <= 100; $m += 15) {
                echo "On tient le bon bout $m <br>";
            }
            echo "Tâches accomplies";
            ?>
        </div>
        <div class="col">
            <h2>Exo 8</h2>
            <?php
            for ($z = 200; $z >= 0; $z -= 12) {
                echo "Encore plus $z <br>";
            }
            echo "C'est bon, j'en peux plus";
            ?>
        </div>
    </div>
    </div>
</body>

</html>