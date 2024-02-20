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
            <?php foreach ($hotel as $key => $building) :?>
               <table>
                <tr>
                    <th>
                        <?= $key ?>
                    </th>
                </tr>
                <tr>
                    <td>
                        <?= $building['name'] ?>
                    </td>
                    <td>
                        <?= $building['description'] ?>
                    </td>
                    <td>
                        <?= $building['parking'] ?>
                    </td>
                    <td>
                        <?= $building['vote'] ?>
                    </td>
                    <td>
                        <?= $building['distance_to_center'] ?>
                    </td>
                </tr>
                

               </table>  
                
                
            <?php endforeach ?>
        <?php endforeach ?>
    </ul>
</body>
</html>    