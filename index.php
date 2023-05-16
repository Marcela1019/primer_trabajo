<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     // 1. String Serie de caracteres 
     $customer = "Falcao";
    echo "The customer {$customer} <br>";

    $favorite_food = "panzarotti and Pizza";
    echo "a {$favorite_food} <br>";

    $price = 5000;
    echo "that cost {$price}";

    // Floating 
    $goal_game = 4.5;
    echo "<br>and now he is celebraty his goal rate per futbol game of {$goal_game}";

    
    // Booleano

    $state = true;
    echo "<br>Falcao es el mejor {$state}";

    // Acceder al tipo de dato

    $type_data = gettype($state);
    echo "<br> Tipo de dato: $type_data";


    ?>
</body>
</html>

