<?php require 'ToolsWord.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Tools Word</title>
</head>

<body>
    <div class="container text-center my-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-4">
                <form method="post">
                    <div class="mb-3">
                        <label for="chain" class="form-label">Chaîne de caractère</label>
                        <input type="text" class="form-control" id="chain" name="inputStr">
                    </div>
                    
                    <button type="submit" name="lettre" class="btn btn-primary">Lettres</button>
                    <button type="submit" name="mot" class="btn btn-primary">Mots</button>
                </form>
            </div>
        </div>
        <div class="row align-items-center justify-content-center"><div class="col-4"></div></div></div>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['lettre'])){
            if (empty($_POST['inputStr'])){
                echo '<div class="row align-items-center justify-content-center"><div class="col-4">Attention letter vide!</div></div></div>';
            }else{
                echo '<div class="row align-items-center justify-content-center"><div class="col-4">Letters :'.ToolsWord::nbrLettre($_POST['inputStr']).'</div></div></div>';
            }
        }else if (isset($_POST['mot'])){
            if (empty($_POST['inputStr'])){
                echo '<div class="row align-items-center justify-content-center"><div class="col-4">Attention mot vide!</div></div></div>';
            }else{
                echo '<div class="row align-items-center justify-content-center"><div class="col-4">Mots : '.ToolsWord::nbrWord($_POST['inputStr']).'</div></div></div>';
            }
        }
    }
    ?>
</body>

</html>