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
        <form action="" method="GET">
            <div>
                <label for="no">Senza parcheggio</label>
                <input type="checkbox" name="parking" id="no">
            </div>
            <button class="btn" type="submit">Filtra</button>
        </form>
        </div>
    </header>
    <div class="container">
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Parking</th>
                <th>Vote</th>
                <th>Distance</th>
                    
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

                    <?= $hotel['parking'] ? 'Yes' : 'No' ?>
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