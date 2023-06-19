<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Menu :: Accueil</title>
</head>

<body>
    <div class="container">
        <form action="menu.php" method="get">
            <div class="my-1">
                <label for="lastname" class="form-label">NOM :</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="my-1">
                <label for="firstname" class="form-label">Prénom :</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="my-1">
                <label for="mail" class="form-label">Courriel :</label>
                <input type="email" class="form-control" id="mail" name="mail">
            </div>
            <div class="my-1">
                <label for="choix" class="form-label">Choix du menu :</label>
                <select class="form-select" id="choix" name="menu">
                    <option selected disabled>Choix du menu</option>
                    <option value="Vegan">Vegan</option>
                    <option value="Classique">Classique</option>
                    <option value="Big Moh">Big Moh</option>
                </select>
            </div>
            <p class="my-1">Moyen de paiement :</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payer" value="PayPal" id="paypal">
                <label class="form-check-label" for="paypal">
                    PayPal
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payer" value="Visa / Mastercard" id="cb">
                <label class="form-check-label" for="cb">
                    Visa / Mastercard
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payer" value="A la réception" id="reseption">
                <label class="form-check-label" for="reseption">
                    A la réception
                </label>
            </div>
            <div class="form-floating my-1">
                <textarea class="form-control" placeholder="Commentar ici" id="comments" name="comments"></textarea>
                <label for="comments">Comments</label>
            </div>
            <button type="submit" class="btn btn-primary my-1">Validee la commande</button>
        </form>
    </div>
</body>

</html>