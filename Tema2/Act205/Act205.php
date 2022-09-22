<?php
$edad = $_GET["edad"];
$any = 2022;
$anyMenos= $any - 10;
$anyMes = $any + 10;
$edadMenos = $edad - 10;
$edadMes = $edad + 10;
$anyJubi = (67 - $edad) + $any;
$edadJubi = 67 - $edad;

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

        <form action = "Act205.php">
            <p>Edad: <input type="number" name="edad" id="edad"></p>
            <button type="submit">Envia</button>
        </form>

        <?php
            echo "- Te " .$edad. " anys";
            echo "<br>";
            echo "- En 10 anys tindra " .$edadMes. " anys i sera el any " .$anyMes;
            echo "<br>";
            echo "- Fa 10 anys tenia " .$edadMenos. " anys i era el any " .$anyMenos;
            echo "<br>";
            echo "- L'any de jubilacio es el  " .$anyJubi. " li queden " .$edadJubi. " anys";
        ?>

</body>
</html>
