<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Assignment Operators Exercise</title>
</head>

<body>
    <?php
        /**
         * Create at least two variables 
         * and assign them an integer or float
         **/ 
            $a = 133;
            $b = 666.6;
        
        /**
         * 1. Create an echo statement to show the results
         *    of assigning the value of the second variable 
         *    to the first
         * 2. Create an echo statement that sends a line 
         *    break to the screen.
         **/
            echo $a = $b; 
            echo "<br>";
            
        /** 
         * 1. Create an echo statement to show the results 
         *    of adding the value of the second variable 
         *    to the first
         * 2. Create an echo statement that sends a line 
         *    break to the screen.
         **/
            echo $a += $b;
            echo "<br>";
            //same as a = a + b 
            //"+=" is shorthand for $a = $a + $b called compound assigment operator

        /**
         * 1. Create an echo statement to show the results
         *    of subtracting the value of the second variable 
         *    to the first
         * 2. Create an echo statement that sends a line break 
         *    to the screen.
         **/echo $a -= $b;
            echo "<br>";
            //same as a = a - b
        
        /**
         * 1. Create an echo statement to show the results
         *    of multiplying the value of the second variable 
         *    to the first
         * 2. Create an echo statement that sends a line break 
         *    to the screen.
         **/
            echo $a *= $b;
            echo "<br>";
            // same as a = a * b
        
        /**
         * 1. Create an echo statement to show the results
         *    of dividing the value of the second variable 
         *    to the first
         * 2. Create an echo statement that sends a line break 
         *    to the screen.
         **/
        
        /**
         * 1. Create an echo statement to show the
         *    modulus (remainder) between the second 
         *    variable to the first
         * 2. Create an echo statement that sends a 
         *    line break to the screen.
         **/

    ?>
</body>

</html>