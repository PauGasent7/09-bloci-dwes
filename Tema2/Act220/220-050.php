<?php
$resultat = "";
    for($i = 0; $i <= 50; $i++){
        if($i % 2 == 0){
            $resultat .= "<li>" . $i . "</li>";
            }
    }
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numeros pars.</title>
</head>
<body>
    <ul>
        <?= $resultat ?>
    </ul>
</body>
</html>


