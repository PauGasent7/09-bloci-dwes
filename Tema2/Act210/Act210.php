<?php
$edad = $_GET['edad'];

    switch($edad){
        case  ($edad < 3):
            echo "La edad es ".$edad. " i es un nado";
            break;
        case ($edad >= 3 && $edad <= 12):
            echo "La edad es ".$edad. " i es un nen";
            break;
        case ($edad >= 13 && $edad <= 17):
            echo "La edad es ".$edad. " i es un adolescent";
            break;
        case ($edad >= 18 && $edad <= 66):
            echo "La edad es ".$edad. " i es un adult";
        break;
        case ($edad >= 67 && $edad < 105):
            echo "La edad es ".$edad. " i esta jubilat";
        break;
        default:
            echo "No te'n passes";
            break;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edad.</title>
</head>
<body>

        <form action = "Act210.php">
            <p>Edad: <input type="number" name="edad" id="edad"></p>
            <button type="submit">Envia</button>
        </form>

</body>
</html>
