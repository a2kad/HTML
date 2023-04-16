<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-md">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Créer un utilisateur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="affichage.php">Afficher tous les utilisateurs</a>
                </li>
            </ul>
    <?php include 'connect.php'; ?>

            <div class="header">
                <h1 class="display-4">Contacts</h1>
            </div>
            <div class="form">
                <form action="" method="post">
                    <label class="form-label" for="nom">Nom :</label><br>
                    <input class="form-control" type="text" name="nom" id="nom">
                    <br>
                    <label class="form-label" for="prenom">Prenom :</label><br>
                    <input class="form-control" type="text" name="prenom" id="prenom">
                    <br>
                    <label class="form-label" for="mobile">Tél. mobile :</label><br>
                    <input class="form-control" type="tel" name="mobile" id="mobile">
                    <br>
                    <fieldset>
                        <legend>Secteurs d'activité</legend>
                        <div class="secteurs">
                            <input class="form-check-input" type="radio" name="secteur" id="agro" value="Agroalimentaire" checked>
                            <label class="form-check-label" for="agro">Agroalimentaire</label>
                            <br>
                            <input class="form-check-input" type="radio" name="secteur" id="banque" value="Banque / Assurance">
                            <label class="form-check-label" for="banque">Banque / Assurance</label>
                            <br>
                            <input class="form-check-input" type="radio" name="secteur" id="btp" value="BTP / Matériaux de construction">
                            <label class="form-check-label" for="btp">BTP / Matériaux de construction</label>
                            <br>
                            <input class="form-check-input" type="radio" name="secteur" id="commerce" value="Commerce / Négoce / Distribution">
                            <label class="form-check-label" for="commerce">Commerce / Négoce / Distribution</label>
                            <br>
                            <input class="form-check-input" type="radio" name="secteur" id="electro" value="Électronique / Électricité">
                            <label class="form-check-label" for="electro">Électronique / Électricité </label>
                            <br>
                            <input class="form-check-input" type="radio" name="secteur" id="banque" value="Informatique / Télécoms">
                            <label class="form-check-label" for="telecom">Informatique / Télécoms</label>
                            <br>
                            <input class="form-check-input" type="radio" name="secteur" id="auto" value="Machines et équipements / Automobile">
                            <label class="form-check-label" for="auto">Machines et équipements / Automobile</label>
                            <br>
                            <input class="form-check-input" type="radio" name="secteur" id="textil" value="Textile / Habillement / Chaussure">
                            <label class="form-check-label" for="textil">Textile / Habillement / Chaussure</label>
                            <br>
                            <input class="form-check-input" type="radio" name="secteur" id="transport" value="Transports / Logistique">
                            <label class="form-check-label" for="transport">Transports / Logistique</label>
                            <br>
                        </div>
                    </fieldset>
                    <p></p>
                    <label for="desc" class="form-label">Description :</label>
                    <textarea class="form-control" name="description" id="desc" cols="30" rows="10"></textarea>
                    <br>
                    <label class="col-sm-2 col-form-label" for="password">Mot de passe :</label><br>
                    <input class="form-control" type="password" name="password" id="password">
                    <br>
                    <button value="submit" name="submit" class="btn btn-primary" type="submit">Validé</button>
                    <button class="btn btn-danger" type="reset">Annulé</button>
                </form>
        </div>
    </div>
    <?php

    if (isset ($_POST['submit'])) {
        $nom = secure ($_POST['nom']);
        $prenom = secure ($_POST['prenom']);
        $mobile = secure ($_POST['mobile']);
        $secteur  = secure ($_POST['secteur']);
        $description  = secure ($_POST['description']);
        $password = MD5(secure ($_POST['password']));
        $sql = "INSERT INTO `users` (`id`, `nom`, `prenom`, `mobile`, `secteur`, `desc`, `password`) VALUES (NULL, '$nom', '$prenom', '$mobile', '$secteur', '$description','$password')";
        $result = mysqli_query($con, $sql);
        if ($result){
            echo '<br><div class="container-sm">
            <div class="alert alert-success" role="alert">
                Le nouvel enregistrement a été inséré avec succès dans la base de données!
            </div>
        </div>';
        }
        else{
            echo 'Error DB';
        }
    }
    function secure($data){
        return  (trim (htmlentities(strip_tags($data))));
    }
    ?>
</body>
</html>