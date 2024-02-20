<?php
    require 'data/data.php'

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>
<body>
    <ul>
        <?php foreach ($hotels as $hotel) : ?>
            <?php foreach ($hotel as $building) :?>
                <li>
                <?= $building ?> 
                </li>
            <?php endforeach ?>
        <?php endforeach ?>
    </ul>
</body>
</html>    