<?php
    require 'data/data.php'

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <div>
            <h1>Hotels</h1>
        </div>
    </header>
    <div class="container">
        <table>
            <tr>
                <?php foreach ($hotels as $hotel) : ?>
                    <?php foreach ($hotel as $key => $building) :?>
                        <th>
                            <?= $key ?>
                        </th>
                    <?php endforeach ?>
                <?php endforeach ?>
            </tr>
            <tr>
            <?php foreach ($hotels as $hotel) :?>
                <td>
                    <?= $hotel['name'] ?>
                </td>
                <td>
                    <?= $hotel['description'] ?>
                </td>
                <td>
                    <?= $hotel['parking'] ?>
                </td>
                <td>
                    <?= $hotel['vote'] ?>
                </td>
                <td>
                    <?= $hotel['distance_to_center'] ?>
                </td>
            </tr>
            <?php endforeach ?>
            
        </table>  
    </div>
</body>
</html>    