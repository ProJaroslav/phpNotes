<?php
// variables and data types
$f_name = "jaroslav";
$dage = 21;
$height = 175.5;
$is_cool = true;
$adress = array("street" => "123 main st,", "city" => "Habry");
$state = NULL;
define("PI", 3.1415);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Name: <?php echo $f_name . " " . $l_name; ?> </p>
    <!-- GET passes data through url into array, use in any situation which you want the user to bookmark the page -->
    <!-- POST resends data to the server -->
    <form action="index.php" method="get">
        <label for="">Your state:</label>
        <input type="text" name="state"/><br>
        <label for="">Num 1 :</label>
        <input type="text" name="num-1"/><br>
        <label for="">Num 2 :</label>
        <input type="text" name="num-2"/><br>
        <input type="submit" value="Submit"/>
    </form>
    <!-- Insecure ways of passing info -->
    <?php
    if (isset($_GET) && array_key_exists('state', $_GET)){
        $state = $_GET['state'];
        if (isset($state) && !empty($state)) {
            echo "You live in " . $state . '<br>';
            echo "$f_name lives in $state<br>";
        } 
    }
    if (count($_GET) >= 3) {
        $num1 = $_GET['num-1'];
        $num2 = $_GET['num-2'];
        echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";     
    }


    ?>
</body>
</html>