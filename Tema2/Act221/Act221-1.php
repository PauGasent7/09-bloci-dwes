<?php
$resultatFinal = 0;
    for($i = 1; $i <= 10; $i++){
            $resultatFinal = $resultatFinal + $i;
        }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suma primers 10.</title>
</head>
<body>
    <?php
        echo " El resultat es " .$resultatFinal;
    ?>
</body>
</html>

