<?php
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num_oranges = 4;
    $num_bananas = 36;
    if(($num_oranges > 25) && ($num_bananas > 30)) {
        echo "25% discount <br>";
    }
    elseif(($num_bananas > 30) || ($num_bananas > 35)) {
        echo "15% discount <br>";
    }
    elseif(!(($num_oranges < 5 ) || ($num_bananas < 5))) {
        echo "5% Discount <br>";
    }
    else {
        echo "No Discount<br>";
    }

    $request = "Coke";
    switch($request) {
        case "Coke":
            echo "Here is your Coke <br>";
            break;
        case "Pepsi":
            echo "Here is your Pepsi <br>";
            break;
        default: 
            echo "Here is your water <br>";
            break;
    }

    $age = 12;
    switch(true) {
        case ($age < 5):
            echo "Stay Home<br>";
            break;
        case ($age == 5):
            echo "Go to kindergarten<br>";
            break;
        case in_array($age, range(6,17)):
            $grade = $age - 5;
            echo "go to grade $grade<br>";
            break;
        default: 
            echo "Go to college<br>";
            break;
    }

    $age2 = 12;
    $can_vote = ($age2 >= 18) ? "Can vote" : "Cant";
    echo "Vote? : $can_vote<br>";
    ?>
</body>
</html>