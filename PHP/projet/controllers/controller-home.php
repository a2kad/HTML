<?php

require "../models/data.php";

//var_dump($data);

include "../views/home.php";

function generatePeople($data, $nb = 20)
{
    for ($i = 0; $i < $nb; $i++) {

        echo '<div class="col">
            <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="../assets/img/profilPic/' . $data[$i]["photo"] . '" alt="">
                <div class="card-body">
                    <p class="card-text"><b>Name : </b>' . $data[$i]["name"] . '</p>
                    <p class="card-text"><b>Phone : </b>' . $data[$i]["phone"] . '</p>
                    <p class="card-text"><b>Email : </b>' . $data[$i]["email"] . '</p>
                    <p class="card-text"><b>Region : </b>' . $data[$i]["region"] . '</p>
                </div>
            </div>
        </div>';
    }

    // foreach($data as $value){
    //     echo '<img class="photo" src="../assets/img/profilPic/'.$value["photo"].'">';

    // }
}
