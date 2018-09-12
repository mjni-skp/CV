<?php
$name = "fiskepind";



$cards = array("2", "4", "4");




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?= $name ?> </title>
</head>
<body>
    <?php foreach($cards as $card) { ?>
        <h1> <?= $card ?> </h1>
    <?php } ?>
</body>
</html>