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
      function addNumbers($num_1 = 0, $num_2 = 0) {
        return $num_1 + $num_2;
      }
      printf("5 + 4 = %d<br>", addNumbers(5,4));

      function changeMe($change) {
        $change = 10;
      }
      $change = 5;
      changeMe($change);
      echo "change: $change<br>";
    
    function getSum(...$nums) {
      $sum = 0;
      foreach($nums as $num) {
        $sum += $num;
      }
      return $sum;
    }
    printf("Sum = %d<br>", getSum(1, 2, 3, 4));

    function doMath($x, $y) {
      return array (
        $x + $y,
        $x - $y
      );
    }
    list($sum, $difference) = doMath(5,4);
    echo "Sum = $sum<br>";
    echo "Sub = $difference<br>";

    function double($x) {
      return $x * $x;
    }
    $list = [1,2,3,4];
    $dbl_list = array_map('double', $list);
    print_r($dbl_list . "<br>");

    # Reduce values in an array to a single value
    # Multiply each value times the others
    function mult($x, $y){
      $x *= $y;
      return $x;
    }
    $prod = array_reduce($list, 'mult', 1);
    print_r($prod);
    echo '<br>';

    # Filter an array with a function
    # Get only even values
    function isEven($x){
      return ($x % 2) == 0;
    }
    $even_list = array_filter($list, 'isEven');
    print_r($even_list);
    echo '<br>';

    ?>
</body>
</html>