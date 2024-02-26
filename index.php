<?php
    require 'data/data.php';

    $rating = $_GET['rating'] ?? '';

    $checked = '';
    if(isset($_GET['parking'])){
        $checked = 'checked';

        $filtered_hotels = [];
        foreach ($hotels as $hotel) {
            if ($hotel['parking']) $filtered_hotels[] = $hotel;
            
        }
        $hotels = $filtered_hotels;
    }

    if ($rating) {
        $filtered_hotels= [];
        foreach ($hotels as $hotel){
            if($hotel['vote'] >= $rating) $filtered_hotels[] = $hotel;
        } 
        
        $hotels = $filtered_hotels; 
    }



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
                <label for="yes">Con parcheggio</label>
                <input type="checkbox" name="parking" id="yes" <?= $checked ?? '' ?>>
            </div>
            <input class="number" type="number" min="1" max="5" step="1" name="rating" value=" <?= $vote ?? 1 ?>">
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