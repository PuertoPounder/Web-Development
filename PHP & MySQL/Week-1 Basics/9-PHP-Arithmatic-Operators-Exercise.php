<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Arithmetic Operators Exercise</title>
</head>
<!-- 12/18/24 done -->
<body>
    <?php

        //Create two variables and assign them an integer or a float
        $a = 13;
        $b = 7;
        /******************************************************
         * 1. Create a variables that adds the earlier two
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $c = $a + $b; 

        echo "$a + $b = $c"; 

        echo "<br>";

        
        /******************************************************
         * 1. Create a variables that subtracts the earlier two
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $d = $a - $b;

        echo "$a - $b = $d";

        echo "<br>";

        
        /******************************************************
         * 1. Create a variables that calculates the 
         *    modulus (remainder) the earlier two
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $e = $a % $b;

        echo "$a % $b = $e";

        echo "<br>";

        
        /******************************************************
         * 1. Create a variables that divides the earlier two
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $f = $a / $b;

        echo "$a / $b = $f";

        echo "<br>";

        
        /******************************************************
         * 1. Create a variables that multiplies the earlier two
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $g = $a * $b;

        echo "$a * $b = $g";

        echo "<br>";
        
        
        /******************************************************
         * 1. Create a variables that calculates the first 
         *    to the power of the second.
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $h = $a ** $b;

        echo "$a ** $b = $h";
        
        echo "<br>";

    ?>
</body>

</html>