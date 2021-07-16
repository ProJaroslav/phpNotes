<?php
        # Math operators
          $num_1 = 5;
          $num_2 = 5;
          echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . "<br>";
          echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br>";
          echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br>";
          echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br>";
          echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br>";
 
          # Integer Division
          echo "$num_1 / $num_2 = " . (intdiv($num_1, $num_2)) . "<br>";
 
          # Shortcut ways of incrementing and decrementing
          echo "Increment $num_1 = " . ($num_1++) . "<br>";
          echo "Decrement $num_1 = " . ($num_1--) . "<br>";
 
          # The following use the format of turning i = i + 1 into
          # i += 1
          $num_1 += 1;
          $num_1 -= 1;
          $num_1 *= 1;
          $num_1 /= 1;
          $num_1 %= 1;
 
          # Built in math functions
          echo "abs(-5) = " . abs(-5) . "<br>";
          echo "ceil(4.45) = " . ceil(4.45) . "<br>";
          echo "floor(4.45) = " . floor(4.45) . "<br>";
          echo "round(4.45) = " . round(4.45) . "<br>";
          echo "max(4,5) = " . max(4,5) . "<br>";
          echo "min(4,5) = " . min(4,5) . "<br>";
          echo "pow(4,2) = " . pow(4,2) . "<br>"; # 4 raised to the power of 2
          echo "sqrt(16) = " . sqrt(16) . "<br>"; # Square Root
          echo "exp(1) = " . exp(1) . "<br>"; # Exponent of e
          echo "log(e) = " . log(exp(1)) . "<br>"; # Logarithm
          echo "log10(10) = " . log10(exp(10)) . "<br>"; # Base 10 Logarithm
          echo "PI = " . pi() . "<br>"; # PI
          echo "hypot(10,10) = " . hypot(10,10) . "<br>"; # Hypotenuse
          echo "deg2rad(90) = " . deg2rad(90) . "<br>"; # Degrees to radians
          echo "rad2deg(1.57) = " . rad2deg(1.57) . "<br>";
          echo "mt_rand(1,50) = " . mt_rand(1,50) . "<br>"; # Fast random num
          echo "rand(1,50) = " . rand(1,50) . "<br>"; # Original random num
          echo "Max Random = " . mt_getrandmax() . "<br>"; # Max random num
          echo "is_finite(10) = " . is_finite(10) . "<br>";
          echo "is_infinite(log(0)) = " . is_infinite(log(0)) . "<br>";
          echo "is_numeric(\"10\") = " . is_numeric("10") . "<br>";
 
          # Trig functions
          # sin, cos, tan, asin, acos, atan, asinh, acosh, atanh, atan2
          echo "sin(0) = " . sin(0) . "<br>";
 
          # Format with decimals and defined decimal places
          echo number_format(12345.6789, 2) . "<br>";
?>