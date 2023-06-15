<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>

<body>
    <h1>Les conditions</h1>
    <h2>Exo 1</h2>
    <?php
    $age = 1;
    function showAge($age)
    {
        if ($age < 18) {
            return "vous êtes mineur";
        } else {
            return "vous êtes majeur";
        }
    }
    echo showAge($age);
    ?>
    <h2>Exo 2</h2>
    <?php
    $isEasy = false;
    if ($isEasy) {
        echo "C'est facile!!";
    } else {
        echo "C'est difficile !!!";
    };
    ?>
    <h2>Exo 3</h2>
    <?php
    $gender = "Homme";
    if ($gender == "Homme") {
        echo "Vous êtes un homme et " . showAge($age);
    } elseif ($gender == "femme") {
        echo "Vous êtes une femme et " . showAge($age);
    }
    ?>
    <h2>Exo 4</h2>
    <?php
    $magnitude = 6;
    switch ($magnitude) {
        case 1:
            echo "Micro-séisme impossible à ressentir.";
            break;
        case 2:
            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
            break;
        case 3:
            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
            break;
        case 4:
            echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
            break;
        case 5:
            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
            break;
        case 6:
            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
            break;
        case 7:
            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
            break;
        case 8:
            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
            break;
        case 9:
            echo "Séisme capable de tout détruire sur une très vaste zone.";
            break;
    }
    ?>
    <h2>Exo 5</h2>
    <?php
      if ($gender != 'Homme') {
        echo 'C\'est une développeuse !!!';
    } else {
        echo 'C\'est un développeur !!!';
    } 
    ?>
    <h2>Exo 6</h2>
    <?php
       if($age >= 18){
        echo 'Tu es majeur';
      }else{
        echo 'Tu n\'es pas majeur';
      }
    ?>
    <h2>Exo 7</h2>
    <?php
    $isOk = false;

       if($isOk == false){
        echo 'c\'est pas bon !!!';
    }else{
        echo 'c\'est ok !!';
    }
    ?>
    <h2>Exo 8</h2>
    <?php
      if($isOk){
        echo 'c\'est ok !!' ;
    }else{
        echo 'c\'est pas bon !!!';
    }
    ?>
</body>

</html>