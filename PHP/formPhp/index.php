<?php
require_once 'controllers/controller.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Chasse et Pêche</title>
</head>

<body>

    <div class="container">
        <?php if ($showForm) { ?>
            <main>
                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="/logo-removebg-preview.png" alt="" width="72">
                    <h2>Formulaire d'inscription</h2>
                    <p class="lead">Nous ne transférons pas de données personnelles à des tiers. Ils restent au sein de l'entreprise. Vos données personnelles ne seront ni vendues ni transférées de quelque manière que ce soit à des tiers pour quelque raison que ce soit, à l'exception des données nécessaires pour compléter une demande ou une transaction.</p>
                </div>

                <div class="row g-5">

                    <div class="col">
                        <form class="needs-validation" method="POST" action="" novalidate>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Prénom :</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" value="<?= htmlspecialchars($_POST['firstName'] ?? '')  ?>" required>
                                    <span class="ms-2 text-danger fs-6"><?= $errors['firstName'] ?? '' ?></span>
                                </div>

                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">NOM :</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?= htmlspecialchars($_POST['lastName'] ?? '')  ?>" required> 
                                    <span class="ms-2 text-danger fs-6"><?= $errors['lastName'] ?? '' ?></span>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email :</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?= htmlspecialchars($_POST['email'] ?? '')  ?>" required>
                                    <span class="ms-2 text-danger fs-6"><?= $errors['email'] ?? '' ?></span>
                                </div>

                                <h4 class="mb-3">Abonnement</h4>

                                <div class="my-3">
                                    <div class="form-check">
                                        <input id="classic" name="abonnement" value="Classique" type="radio" class="form-check-input" checked required>
                                        <label class="form-check-label" for="classic">Classique</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="family" name="abonnement" value="Famille" type="radio" class="form-check-input" required>
                                        <label class="form-check-label" for="family">Famille</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="premium" name="abonnement" value="Premium" type="radio" class="form-check-input" required>
                                        <label class="form-check-label" for="premium">Premium</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label">Mot de passe :</label>
                                    <input type="password" class="form-control" id="password" required>
                                    <div class="invalid-feedback">
                                        Mot de passe
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="password2" class="form-label">Répéter le mot de passe :</label>
                                    <input type="password" class="form-control" id="password2" required>
                                    <div class="invalid-feedback">
                                        Répéter le mot de passe
                                    </div>
                                </div>

                                <div class="form-check my-4">
                                    <input type="checkbox" class="form-check-input" id="save-info">
                                    <label class="form-check-label" for="save-info">J'accepte les <a href="https://www.afpa.fr/actualites/cgu">CGU</a></label>
                                </div>
                                <div class="text-center">
                                    <button class="w-sm-25 btn btn-primary btn-lg" type="submit">Enregistrer</button>
                                </div>
                        </form>
                    </div>
                </div>
            </main>

        <?php } else { ?>

            <main>
                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="/logo-removebg-preview.png" alt="" width="72">
                </div>
                <div class="row g-5">
                    <div class="col">
                        <p>Prénom : <?= htmlspecialchars($_POST['firstName'] ?? '')  ?></p>
                        <p>NOM : <?= htmlspecialchars($_POST['lastName'] ?? '') ?></p>
                        <a href="index.php" class="d-block mt-3 mx-auto btn btn-secondary">Retour</a>
                    </div>
                </div>
            </main>

        <?php } ?>

        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
            <p class="mb-1">&copy; 2023 Afpa</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://www.afpa.fr/actualites/mentions-legal-1">Mentions légales</a></li>
                <li class="list-inline-item"><a href="https://www.afpa.fr/actualites/cgu">Conditions Générales d'Utilisation</a></li>
            </ul>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>