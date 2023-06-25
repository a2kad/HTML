<?php
require('Voiture.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$maVoiture = new Voiture('308SW', 'Gris',950, 25, 70, 4);
echo $maVoiture->getMessage().'<br>';
var_dump($maVoiture);
?>
</body>
</html>