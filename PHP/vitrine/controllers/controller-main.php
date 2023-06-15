<?php
require "../models/data.php";

//var_dump($data);

include "../views/main.php";

function showCatalog($data, $cat="all"){
    foreach($data as $element){

        echo '
        
            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="../assets/img/travel/'.$element["photo"].'" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                '.$element["country"].'
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">'.$element["date"].'</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">'.$element["price"].' &euro;</p>
                </div>
            </div>
        
        ';
    }
}

?>