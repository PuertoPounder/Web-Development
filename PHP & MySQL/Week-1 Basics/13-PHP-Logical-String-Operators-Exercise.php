<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Logical & String Operators Exercise</title>
</head>
<!--  done 12/23/24-->
<body>
    <?php
        /*****************************************************
         * 1. Create four variables
         * 2. Assign a boolean value (true or false) to the 
         *    first two
         * 3. Assign strings to the last two
         *****************************************************/
            $var1 = true; 
            $var2 = false;
            $var3 = "Today will rue my existence.";
            $var4 = "Tomorrow shall fear my coming.";
        /*****************************************************
         * 1. Create an echo statement that writes 
         *    'The variables (first variable name) and 
         *    (second variable name) are true: ' 
         *    (NOTE: Use single quotation marks so the name of 
         *     the variable is sent to the screen, not the value)
         * 2. Echo an var_dump statement that tests two variables 
         *    using the And (&&) operator
         * 3. Add a line break
         *****************************************************/
            echo 'The variable "$var1" and the variable "$var2" are true: ';
            echo var_dump($var1 && $var2); //&& equals and
            echo " '&& operator equals and'";
            echo "<br>";
        /*****************************************************
         * 1. Create an echo statement that writes 
         *    'Either the variable (first variable name) or 
         *    (second variable name) is true: ' 
         *    (NOTE: Use single quotation marks so the name of 
         *     the variable is sent to the screen, not the value)
         * 2. Echo an var_dump statement that tests two 
         *    variables using the OR (||) operator
         * 3. Add a line break
         *****************************************************/
            echo 'Either the variable "$var1" or the variable "$var2" is true: ';
            echo var_dump($var1 ||  $var2); // || equals or
            echo " '|| operator equals or'";
            echo "<br>";
        /*****************************************************
         * 1. Create an echo statement that writes 
         *    'The variables (first variable name) is not true: ' 
         *    (NOTE: Use single quotation marks so the name 
         *     of the variable is sent to the screen, not the value)
         * 2. Echo an var_dump statement that tests the variable 
         *    using the NOT (!) operator
         * 3. Add a line break
         *****************************************************/
            echo 'The variable "$var1" is not true: ';
            echo var_dump(!$var1); // ! equals not
            echo " '! operator equals not'";
            echo "<br>";
        
        /*****************************************************
         * 1. Create an echo statement that writes 
         *    'Either the variable (first variable name) or 
         *    (second variable name) is true, but not both: ' 
         *    (NOTE: Use single quotation marks so the name of 
         *     the variable is sent to the screen, not the value)
         * 2. Echo an var_dump statement that tests the 
         *    variables using the XOR (xor) operator
         * 3. Add a line break
         *****************************************************/
            echo 'Either the variable "$var1" or the variable "$var2" is true, but not both: ';
            echo var_dump($var1 xor $var2); // xor equals either or but not both
            echo " 'xor operator equals either or but not both'";
            echo "<br>";

        /*****************************************************
         * 1. Create an echo statement that will concatenate 
         *    the value of the third and fourth variables with 
         *    a space between
         * 2. Add a line break
         *****************************************************/
        
        echo $var3 . " " . $var4 . "<br>";
        echo "<br>";
        
        //concatenate means joinging two or more strings together
        /*****************************************************
         * 1. Append the third variable to the fourth using 
         *    the append operator (.=)
         * 2. Create an eco statement that send the content 
         *    of the third variable to the screen
         * 2. Add a line break
         *****************************************************/
        
        $var3 .= $var4;
        echo $var3;

    ?>
</body>

</html>