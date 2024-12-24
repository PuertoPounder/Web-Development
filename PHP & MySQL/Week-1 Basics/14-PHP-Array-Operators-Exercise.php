<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Array Operators Exercise</title>
</head>

<body>
    <?php
        /*********************************************
         * Use the following arrays to explore the 
         * array operators
         *********************************************/
        $array1 = [
            "A" => 1,
            "B" => 2,
            "C" => 3,
            "D" => 4,
            "E" => 5
        ];

        $array2 = [
            "A" => "1",
            "B" => "2",
            "C" => "3",
            "D" => "4",
            "E" => "5"
        ];

        $array3 = [
            "E" => 5,
            "F" => 6,
            "G" => 7,
            "H" => 8,
            "I" => 9,
            "J" => 10
        ];

        /*********************************************
         * 1. Echo a var_dump that shows the results 
         *    of testing if $array1 and $array2 are equal
         * 2. Add a line break.
         *********************************************/
        echo "is array1 equal to array2: ";
        echo var_dump($array1 == $array2);
        echo "<br>";
        // == operator checks for equality of values in both arrays
        /*********************************************
         * 1. Echo a var_dump that shows the results 
         *    of testing if $array1 and $array2 are identical
         * 2. Add a line break.
         *********************************************/
        echo "is array1 identical to array2: ";
        echo var_dump($array1 === $array2);
        echo "<br>";
        // === is used to check if the arrays are identical, not just equal.
        /*********************************************
         * 1. Echo a var_dump that shows the results 
         *    of testing if $array1 and $array2 are not equal
         * 2. Add a line break.
         *********************************************/
        echo "is array1 not equal to array2: ";
        echo var_dump($array1 != $array2);
        echo "<br>";
        // != operator checks for inequality of values in both arrays
        /*********************************************
         * 1. Echo a var_dump that shows the results 
         *    of testing if $array1 and $array2 are not identical
         * 2. Add a line break.
         *********************************************/
        echo "is array1 not identical to array2: ";
        echo var_dump($array1 !== $array2);
        echo "<br>";
        // !== operator checks for inequality of values in both arrays
        /*********************************************
         * 1. Create an echo statement that sends the 
         *    opening <pre> HTML tag 
         * 2. Create a print_r statement that shows the 
         *    union of $array1 and $array3
         * 3. Create an echo statement that sends the 
         *    closing </pre> HTML tag
         * 
         * NOTICE: The key "E" is duplicated in both 
         *         arrays but only shows up once
         *********************************************/
        echo "<pre>";
        print_r($array1 + $array3);
        echo "</pre>";
        echo "<br>";

        echo "<pre>";
        print_r($array2 + $array3);
        echo "</pre>";
        echo "<br>";
        // The + operator is used to merge the arrays, but it does not remove duplicate keys.
    ?>
</body>

</html>