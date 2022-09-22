<?php

$a = $_GET["NumeroA"];
$b = $_GET["NumeroB"];
$c = $_GET["NumeroC"];


    echo "NumeroA: " .$a;
    echo "<br>";
    echo " NumeroB: " .$b;
    echo "<br>";
    echo " NumeroC: " .$c;
    echo "<br>";

    if($a > $b)
        if($a > $c)
            echo " El mes gran es el numero ".$a. " que es el A";
    if($b > $a)
        if($b > $c)
            echo " El mes gran es el numero ".$b. " que es el B";
    if($c > $a)
        if($c > $b)
            echo " El mes gran es el numero ".$c. " que es el C";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numero major.</title>
    <h1>Nombre Major</h1>
</head>
<body>
<form action="Act208.php" method="get">
    <br/>
    <p>
        <label for="NumeroA">Numero A:</label>
        <input type="number" id="NumeroA" name="NumeroA">
    </p>
    <p>
        <label for="NumeroB">Numero B:</label>
        <input type="number" id="NumeroB" name="NumeroB">
    </p>
    <p>
        <label for="NumeroC">Numero C:</label>
        <input type="number" id="NumeroC" name="NumeroC">
    </p>
    <button type="submit">Envia</button>
</form>
</body>
</html>