<?php
$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$apellidoU = $_GET["apellidoU"];
$email = $_GET["email"];
$any = $_GET["any"];
$telefon = $_GET["telefon"];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla datos</title>
</head>
<body>
<table class = "default">
    <tr>
        <th>Nombre</th>
        <td><?= $nombre ?></th>
    </tr>
    <tr>
        <th>Apellido</th>
        <td><?= $apellido ?></th>
    </tr>
    <tr>
        <th>2n Apellido</th>
        <td><?= $apellidoU ?></th>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= $email ?></th>
    </tr>
    <tr>
        <th>Any</th>
        <td><?= $any ?></th>
    </tr>
    <tr>
        <th>Telefon</th>
        <td><?= $telefon ?></th>
    </tr>
</table>

</body>
</html>
