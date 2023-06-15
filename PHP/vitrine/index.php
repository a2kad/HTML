<?php
if(!empty($_GET['page'])){
    switch($_GET['page']){
        case 'sea' :
            header("Location: controllers/controller-sea.php");
            break;
        case 'mountains' :
            header("Location: controllers/controller-mountains.php");
            break;
    }
    
} else {
    header("Location: controllers/controller-main.php");
    exit;
}
