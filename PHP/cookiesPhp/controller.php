<?php

var_dump($_POST);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['send'])){
        if(isset($_POST['cookies'])){
            if (empty($_POST['cookies'])){
            $error['cookies'] = 'Cookies empty';
        } else {
            $cookies = $_POST['cookies'];
            setcookie('testCookies', $cookies, time()+3600);
            $message = 'Cookies created';
        }

    }
    else if(isset($_POST['del'])){
        setcookie('testCookies', '', time()-3600);
        $message = 'Cookies deleted';
    }
}
}