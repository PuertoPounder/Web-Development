<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Increment and Decrement operators Exercise</title>
</head>

<body>
    <?php
        /*****************************************************
         * NOTE:
         * Notice the effect of the order of operation.
         * As the values are modified, the code following
         * the modification uses the new value.
         *****************************************************/
        //Create a variable that is assigned the integer 1
        
        $varOne = 1;

        /*****************************************************
         * 1. Create an echo statement that will display the 
         *    current value of the variable and then increment 
         *    it up by one
         * 2. Add a line break
         * 3. Create an echo statement to show the new value 
         *    of the variable
         * 4. Add another line break
         *****************************************************/
        echo $varOne++ . "<br>" . $varOne;  
        echo "<br>";

        //$++ is a post increment operator, it first returns the value of the variable and then increments it by one
        /*****************************************************
         * 1. Create an echo statement that will display the 
         *    value of the variable after it has been incremented 
         *    up by one
         * 2. Add a line break
         *****************************************************/
        echo ++$varOne . "<br>";
        echo "<br>";

        // The ++$ operator is a pre increment operator, it first increments the variable by one and then returns the variable
        /*****************************************************
         * 1. Create an echo statement that will display the 
         *    current value of the variable and then decrement 
         *    it down by one
         * 2. Add a line break
         * 3. Create an echo statement to show the new value 
         *    of the variable
         * 4. Add another line break
         *****************************************************/
        echo --$varOne . "<br>";
        echo "<br>";

        //The --$ operator is a post decrement operator, it first returns the value of the variable and then decrements it by
        /*****************************************************
         * 1. Create an echo statement that will display the 
         *    value of the variable after it has been 
         *    decremented down by one
         * 2. Add a line break
         *****************************************************/
        echo $varOne-- . "<br>" . $varOne;
        echo "<br>";
    
        //The $-- operator is a post decrement operator, it first returns the value of the variable and then decrements it
    ?>
</body>

</html>