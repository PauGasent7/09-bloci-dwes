<?php

    $base = $_GET["base"];
    $expo = $_GET["expo"];
    $numero = 1;

    for($i = 0; $i < $expo; $i++){
        $numero = $numero * $base;
    }
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Potencia.</title>
</head>
<body>
    <?php
        echo "La base es " .$base;
        echo "<br>";
        echo "L'exponent es " .$expo;
        echo "<br>";
        echo "El resutat es " .$numero;
        echo "<br>";
        echo "<br>";
        echo "Matematicament es: " .$base. " ^ " .$expo. " = " .$numero;
    ?>
</body>
</html>


