<?php
$nombre = "Pau";
$apellido = "Pascual";
$apellido1 = "Gasent";
$email = "paugasent7@gmail.com";
$any = "1998";
$telefon = "644774859";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla dades.</title>
</head>
<body>
<table class = "default">
    <tr>
        <th>Nombre</th>
        <td><?= $nombre ?></td>
    </tr>
    <tr>
        <th>Apellido</th>
        <td><?= $apellido ?></td>
    </tr>
    <tr>
        <th>2o Apellido</th>
        <td><?= $apellido1 ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= $email ?></td>
    </tr>
    <tr>
        <th>Año Nacimiento</th>
        <td><?= $any ?></td>
    </tr>
    <tr>
        <th>Telefono</th>
        <td><?= $telefon ?></td>
    </tr>
</table>

</body>
</html>

