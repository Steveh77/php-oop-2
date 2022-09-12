<?php

include_once __DIR__ . '/models/product.php';
include_once __DIR__ . '/models/games.php';

$gioco1 = new Games("Pallina", "Games", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ", 5, "blue", "20g");
$gioco2 = new Games("Pupazzo", "Games", "Proin ac efficitur orci, nec viverra augue. Donec diam magna", 7, "red", "40g");
$games = [$gioco1, $gioco2]
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        display: flex;
    }

    ul {
        list-style-type: none;
    }
</style>

<body>
    <div>
        <h2>Games</h2>
        <?php foreach ($games as $game) { ?>
            <ul>
                <li>
                    <h2><?php echo $game->getName() ?></h2>
                </li>
                <li>
                    <h3>Categoria: <?php echo $game->getCategory() ?></h3>
                </li>
                <li><strong>Descrizione: </strong>
                    <?php echo $game->getDescription() ?>
                </li>
                <li><strong>prezzo: </strong>
                    €<?php echo $game->getPrice() ?>
                </li>
            </ul>
        <?php } ?>
    </div>
    <div>
        <h2>Games</h2>
        <?php foreach ($games as $game) { ?>
            <ul>
                <li>
                    <h2><?php echo $game->getName() ?></h2>
                </li>
                <li>
                    <h3><?php echo $game->getCategory() ?></h3>
                </li>
                <li>
                    <?php echo $game->getDescription() ?>
                </li>
                <li>
                    <?php echo $game->getPrice() ?>
                </li>
            </ul>
        <?php } ?>

    </div>
</body>

</html>