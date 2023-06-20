<?php
var_dump($_POST);
$showForm = true;

$regexName = '/^[a-zA-Z]+$/';
$errors = [];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['lastName'])) {
        $lastName = $_POST['lastName'];
        if (empty($lastName)) {
            $errors['lastName'] = 'Champs obligatoire';
        } else if (!preg_match($regexName, $lastName)) {
            $errors['lastName'] = 'Mauvais format';
        }
    }
    var_dump($errors);
    if (count($errors) == 0) {
        $showForm = false;
    }
}
?>