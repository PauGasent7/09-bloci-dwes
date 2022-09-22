<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operacions matematiques</title>
</head>
<body>
    <?php

        $x = 166;
        $y = 999;

        $product = $x * $y;
        $sum = $x + $y;
        $division = $x / $y;
        $subtraction = $x - $y;
    ?>

    <p><?= $x ?> + <?= $y ?> = <?= $sum ?></p>
    <p><?= $x ?> - <?= $y ?> = <?= $subtraction ?></p>
    <p><?= $x ?> * <?= $y ?> = <?= $product ?></p>
    <p><?= $x ?> / <?= $y ?> = <?= $division ?></p>

</body>
</html>