<?php

include_once __DIR__ . '/models/product.php';
include_once __DIR__ . '/models/game.php';
include_once __DIR__ . '/models/food.php';
include_once __DIR__ . '/models/accessorie.php';

// giochi
$gioco1 = new Game("Pallina", "Games", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ", 5, "blue", "20g");
$gioco2 = new Game("Pupazzo", "Games", "Proin ac efficitur orci, nec viverra augue. Donec diam magna", 7, "red", "40g");
$games = [$gioco1, $gioco2];
// cibo
$cibo1 = new Food("Croccantini", "Food", "Sed viverra consequat finibus. Donec et elit vestib.", 4, "Secco", "100g", "taglia piccola");
$cibo2 = new Food("Scatoletta", "Food", "Curabitur gravida velit eu lorem semper, tris", 4, "Umido", "200g", "taglia grande");
$foods = [$cibo1, $cibo2];
// accessori
$accessorio1 = new Accessorie("Cuccia", "Accessori", "quis hendrerit neque", 20, "Altro", "Verde", "300g");
$accessorio2 = new Accessorie("Spazzola", "Accessori", "quis hendrerit neque", 7, "Altro", "nero", "200g");
$accessories = [$accessorio1, $accessorio2]
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
        <h2>Foods</h2>
        <?php foreach ($foods as $food) { ?>
            <ul>
                <li>
                    <h2><?php echo $food->getName() ?></h2>
                </li>
                <li>
                    <h3>Categoria:
                        <?php echo $food->getCategory() ?></h3>
                </li>
                <li><strong>Descrizione: </strong>
                    <?php echo $food->getDescription() ?>
                </li>
                <li><strong>Prezzo: </strong>
                    €<?php echo $food->getPrice() ?>
                </li>
                <li><strong>tipo: </strong>
                    <?php echo $food->getType() ?>
                </li>
                <li><strong>Quantità: </strong>
                    <?php echo $food->getWeight() ?>
                </li>
                <li><strong>Taglia: </strong>
                    <?php echo $food->getDogSize() ?>
                </li>
            </ul>
        <?php } ?>
    </div>
    <div>
        <h2>Accessories</h2>
        <?php foreach ($accessories as $accessorie) { ?>
            <ul>
                <li>
                    <h2><?php echo $accessorie->getName() ?></h2>
                </li>
                <li>
                    <h3>Categoria:
                        <?php echo $accessorie->getCategory() ?></h3>
                </li>
                <li><strong>Descrizione: </strong>
                    <?php echo $accessorie->getDescription() ?>
                </li>
                <li><strong>Prezzo: </strong>
                    €<?php echo $accessorie->getPrice() ?>
                </li>
                <li><strong>tipo: </strong>
                    <?php echo $accessorie->getType() ?>
                </li>
                <li><strong>Quantità: </strong>
                    <?php echo $accessorie->getWeight() ?>
                </li>
                <li><strong>Colore: </strong>
                    <?php echo $accessorie->getColor() ?>
                </li>
            </ul>
        <?php } ?>
    </div>
</body>

</html>