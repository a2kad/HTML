<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
</head>

<body>
    <h1>Tableaux</h1>

    <?php
    $month = [
        "janvier",
        "février",
        "mars",
        "avril",
        "mai",
        "juin",
        "juillet",
        "aout",
        "septembre",
        "octobre",
        "novembre",
        "décembre"
    ];
    ?>
    <h3>Exo 2</h3>
    <?php
    echo $month[2];
    ?>
    <h3>Exo 3</h3>
    <?php
    echo $month[5];
    ?>
    <h3>Exo 4</h3>
    <?php
    $month[7] = "août";
    echo $month[7];
    ?>
    <h3>Exo 5</h3>
    <?php
    $departaments = [
        76 => "Seine-Maritime",
        61 => "Orne",
        50 => "Manche",
        27 => "Eure",
        14 => "Calvados"
    ];
    ?>
    <h3>Exo 6</h3>
    <?php
    echo $departaments[76];
    ?>
    <h3>Exo 7</h3>
    <?php
    $departaments[35] = "la ville de Rennes";
    echo $departaments[35];
    ?>
    <h3>Exo 8</h3>
    <?php
    $numMonth = count($month);
    for ($i = 0; $i < $numMonth; $i++) {
        echo $month[$i] . "<br>";
    }
    ?>
    <h3>Exo 9</h3>
    <?php
    foreach ($departaments as $element) {
        echo "$element<br>";
    }
    ?>
    <h3>Exo 10</h3>
    <?php
    foreach ($departaments as $key => $value) {
        echo "Le département $value a le numéro $key<br>";
    }
    ?>
    <h3>Other</h3>
    
</body>

</html>