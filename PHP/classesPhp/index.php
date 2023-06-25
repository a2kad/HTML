<?php
require('Voiture.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Voiture :: Afichage</title>
</head>
<body>
<?php
$maVoiture = new Voiture('308SW', 'Gris',950, 25, 70, 4);
echo $maVoiture->getMessage().'<br><br>';
var_dump($maVoiture);
echo '<br><br>';
$maVoiture->setAssure(true);
echo $maVoiture->getMessage().'<br>';
$maVoiture->Repeindre('red');
echo $maVoiture->getMessage().'<br>';
$maVoiture->Mettre_essense(30);
echo $maVoiture->getMessage().'<br>';
?>
</body>
</html>