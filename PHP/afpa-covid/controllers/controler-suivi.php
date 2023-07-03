<?php

require_once "../models/Covid.php";

$covid_object = new Covid();
$covid_object->getAllVactinations();

include '../views/suivi.php';
?>