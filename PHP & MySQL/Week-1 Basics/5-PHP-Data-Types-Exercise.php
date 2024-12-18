<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most Common PHP Data Types Exercise</title>
</head>
<!-- Done 12/17/24 -->
<body>
    <!--Follow the instructions below to create variables with different data types-->
    <?php
    //Create a variable that contains an integer
    //An integer is a non-decimal number between -2,147,483,648 and 2,147,483,648

    $integer = "122,000";

    //Create a variable that contains a float
    //A float is a number with a decimal point or a number in exponential form.

    $float = "666.666";

    //Create a variable that contains a string
    //A string is a sequence of characters like "Hello World".

    $string = "This is a string.";

    //Create a variable that contains a Boolean value
    //A Boolean represents true or false

    $boolean = "false";


    //Create a variable that contains an array
    //An array is a collection of values that can be of any data type, including strings,

    $ww2arms = array("Kar 98", "M1 Garand", "MG-42", "BAR", "STG-44", "MP-44", "Thompson SMG", "M14", "Colt 1911");

    //Create an echo statement top send each variable back to the screen to see the content

echo $integer . "<br>"; 

echo $float . "<br>";

echo $string . "<br>";

echo $boolean . "<br>";

print_r ($ww2arms) . "<br>"; 

?>
</body>

</html>