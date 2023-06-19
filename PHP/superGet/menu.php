<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Menu :: Votre choix</title>
</head>

<body>
    <div class="container">
        <div class="alert alert-warning my-2" role="alert">
            <p><b>NOM : </b><?= isset($_GET["lastname"]) ? $_GET["lastname"] : "Error"?></p>
            <p><b>Prénom : </b><?= isset($_GET["firstname"]) ? $_GET["firstname"] : "Error"?></p>
            <p><b>Courriel : </b><?= isset($_GET["mail"]) ? $_GET["mail"] : "Error" ?></p>
            <p><b>Choix du menu : </b><?= isset($_GET["menu"]) ?  $_GET["menu"] : "Error" ?></p>
            <p><b>Moyen de paiement : </b><?= isset($_GET["payer"]) ?  $_GET["payer"] : "Error" ?></p>
            <p><b>Comments : </b><?= isset($_GET["comments"]) ?  $_GET["comments"] : "Error" ?></p>
        </div>
        <a href="index.php"><button type="submit" class="btn btn-warning my-1">Return</button></a>
    </div>
</body>

</html>