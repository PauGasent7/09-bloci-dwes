<?php
    $numero = (int)$_GET['numero'];

        if($numero > 0) {
            echo "El numero " .$numero. " es positiu";
        }
        else if($numero < 0){
            echo "El numero " .$numero. " es negatiu";
        }
        else{
            echo "El numero " .$numero. " es zero";
        }
?>