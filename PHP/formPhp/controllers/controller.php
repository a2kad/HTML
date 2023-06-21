<?php
var_dump($_POST);
$showForm = true;

$regexName = '/^[a-zA-Z]+$/';
$errors = [];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['firstName'])) {
        $firstName = $_POST['firstName'];
        if (empty($firstName)) {
            $errors['firstName'] = 'Champs obligatoire';
        } else if (!preg_match($regexName, $firstName)) {
            $errors['firstName'] = 'Mauvais format';
        }
    }

    if (isset($_POST['lastName'])) {
        $lastName = $_POST['lastName'];
        if (empty($lastName)) {
            $errors['lastName'] = 'Champs obligatoire';
        } else if (!preg_match($regexName, $lastName)) {
            $errors['lastName'] = 'Mauvais format';
        }
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (empty($email)) {
            $errors['email'] = 'Champs obligatoire';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Mauvais format';
        }
    }


    var_dump($errors);
    if (count($errors) == 0) {
        $showForm = false;
    }
}
?>