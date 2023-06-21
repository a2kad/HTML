<?php

var_dump($_POST);

if(isset($_POST['cookies'])){
    $cookies = $_POST['cookies'];
    setcookie('testCookies', $cookies, time()+3600);
} else if(isset($_POST['del'])){
    setcookie('testCookies', '', time()-3600);
}

?>