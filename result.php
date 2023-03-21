<?php 
    $array = [];
    function Verif($name, $min, $max,$message, $array) {
        if ($name < $min || $name > $max) {
            array_push($array, $message);
        }
        return $array;
    }



    echo $_GET['nom'];

?>