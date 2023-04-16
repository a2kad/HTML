<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="main">
            <ul>
                <li>
                    <a href="index.php">Créer un utilisateur</a>
                </li>
                <li>
                    <a href="affichage.php">Afficher tous les utilisateurs</a>
                </li>
            </ul>
            <div class="header">
                <h1>Contacts</h1>
            </div>
            <div class="form">
                <form action="" method="post">
                    <label for="nom">Nom :</label><br>
                    <input class="inp" type="text" name="nom" id="nom">
                    <br>
                    <label for="prenom">Prenom :</label><br>
                    <input class="inp" type="text" name="prenom" id="prenom">
                    <br>
                    <label for="mobile">Tél. mobile :</label><br>
                    <input class="inp" type="tel" name="mobile" id="mobile">
                    <br>
                    <fieldset>
                        <legend>Secteurs d'activité</legend>
                        <div class="secteurs">
                            <input class="radio" type="radio" name="secteur" id="agro" value="agro" checked>
                            <label for="agro">Agroalimentaire</label>
                            <br>
                            <input class="radio" type="radio" name="secteur" id="banque" value="banque">
                            <label for="banque">Banque / Assurance</label>
                            <br>
                            <input class="radio" type="radio" name="secteur" id="btp" value="btp">
                            <label for="btp">BTP / Matériaux de construction</label>
                            <br>
                            <input class="radio" type="radio" name="secteur" id="commerce" value="commerce">
                            <label for="commerce">Commerce / Négoce / Distribution </label>
                            <br>
                            <input class="radio" type="radio" name="secteur" id="electro" value="electro">
                            <label for="electro">Électronique / Électricité </label>
                            <br>
                            <input class="radio" type="radio" name="secteur" id="banque" value="telecome">
                            <label for="telecom">Informatique / Télécoms </label>
                            <br>
                            <input class="radio" type="radio" name="secteur" id="auto" value="auto">
                            <label for="auto">Machines et équipements / Automobile</label>
                            <br>
                            <input class="radio" type="radio" name="secteur" id="textil" value="textil">
                            <label for="textil">Textile / Habillement / Chaussure </label>
                            <br>
                            <input class="radio" type="radio" name="secteur" id="transport" value="transport">
                            <label for="transport">Transports / Logistique</label>
                            <br>
                        </div>
                    </fieldset>
                    <p>Description :</p>
                    <textarea name="description" id="desc" cols="30" rows="10"></textarea>
                    <br>
                    <label for="password">Mot de passe :</label><br>
                    <input class="inp" type="password" name="password" id="password">
                    <br>
                    <button value="submit" name="submit" class="btn submit" type="submit">Validé</button>
                    <button  class="btn reset" type="reset" name="reset">Annulé</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include 'connect.php';
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
            echo "Isertion OK dans le table";
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