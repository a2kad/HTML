<?php
class ToolsWord {
    public static function nbrWord($input) {
        if (preg_match("/^[a-zA-Z\s.,?!;:]+$/i", $input)){
            return str_word_count($input);
        }else{
            return '<b>Error :</b> Mauvais format de chaîne de caractères';
        }
    }
    public static function nbrLettre($input){
        if (preg_match("/^[a-zA-Z\s.,?!;:]+$/i", $input)){
            preg_match_all("/[a-z]/ui",$input, $arrLtr);
            //var_dump($arrLtr);
            return count($arrLtr[0]);
        }else{
            return '<b>Error :</b> Mauvais format de chaîne de caractères';
        }
    }
}