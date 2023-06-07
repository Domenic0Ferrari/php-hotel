<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary">Ricerca Hotel</h1>
        <form action="" method="get">
            <select class="form-select" aria-label="Default select example" name="park">
                <option value="0" selected>Tutti gli hotel</option>
                <option value="1">With Parking</option>
                <option value="2">Withouth Parking</option>
            </select>
            <input type="submit">
        </form>
        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">NAME</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">PARKING</th>
                    <th scope="col">VOTE</th>
                    <th scope="col">DISTANCE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (!isset($_GET['park']) || $_GET['park'] == 0){
                        foreach($hotels as $hotel){
                            if ($hotel['parking'] == true) {
                                 echo "<tr>" . "<td>" . $hotel['name'] . "</td>" .
                                 "<td>" . $hotel['description'] . "</td>" . 
                                 "<td>" . 'Yes' . "</td>" . 
                                 "<td>" . $hotel['vote'] . "</td>" . 
                                 "<td>" . $hotel['distance_to_center'] . "</td>" . "</tr>";
                            }else{
                                 echo "<tr>" . "<td>" . $hotel['name'] . "</td>" .
                                 "<td>" . $hotel['description'] . "</td>" . 
                                 "<td>" . 'No' . "</td>" . 
                                 "<td>" . $hotel['vote'] . "</td>" . 
                                 "<td>" . $hotel['distance_to_center'] . "</td>" . "</tr>";
                            };
                       }
                    }
                    elseif($_GET['park'] == 1){
                        foreach($hotels as $hotel){
                            if ($hotel['parking'] == true) {
                                 echo "<tr>" . "<td>" . $hotel['name'] . "</td>" .
                                 "<td>" . $hotel['description'] . "</td>" . 
                                 "<td>" . 'Yes' . "</td>" . 
                                 "<td>" . $hotel['vote'] . "</td>" . 
                                 "<td>" . $hotel['distance_to_center'] . "</td>" . "</tr>";
                            }
                       }
                    }
                    elseif($_GET['park'] == 2){
                        foreach($hotels as $hotel){
                            if ($hotel['parking'] == false) {
                                 echo "<tr>" . "<td>" . $hotel['name'] . "</td>" .
                                 "<td>" . $hotel['description'] . "</td>" . 
                                 "<td>" . 'NO' . "</td>" . 
                                 "<td>" . $hotel['vote'] . "</td>" . 
                                 "<td>" . $hotel['distance_to_center'] . "</td>" . "</tr>";
                            }
                       }
                    }
                    ?>
                </tbody>
            </table>
    </div>
</body>
</html>