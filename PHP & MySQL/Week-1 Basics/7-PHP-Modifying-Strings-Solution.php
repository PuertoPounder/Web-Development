<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifying strings using built in PHP functions Solution</title>
</head>
<!-- done 12/17/24 -->
<body>
    <?php
        /*****************************************************
         * Remove the comments before each echo statement
         * and run the code to see the results.
         * Try writing your own strings to see what happens.
         *****************************************************/

        /*****************************************************
         * Finding the length of a string
        *****************************************************/
        echo strlen('Finding the length of this string!'); echo "<br>";
        echo strlen('One ring to rule them all, one ring to bind them.'); echo "<br>";
        echo strlen('Strlen will tell you the length of the string that is being typed within these brackets.'); echo "<br";

        /*****************************************************
         * Finding the number of words in a string
        *****************************************************/
        echo str_word_count('Finding the number of words in this string!'); echo '<br><br>';
        echo str_word_count('This will tell you the number of words withen these brackets.'); echo '<br><br>';
        echo str_word_count('This is a test string with 10 words. 1, 2,'); echo '<br><br>';
        /*****************************************************
         * Reversing the the characters of a string
        *****************************************************/
        echo strrev('Reversing this string!'); echo "<br>";
        echo strrev('We sould our soul for rock n roll'); echo '<br>';
        echo strrev('This is the secret code to the universe.'); echo '<br>';
        /*****************************************************
         * Finding the position of a character or word in 
         * a string
        *****************************************************/
        echo strpos('Finding the position of a word in this string!', 'position'); echo '<br>';
        echo strpos('Finding the square root of piss', 'piss'); echo '<br>';
        echo strpos('THis will find the postion of a word that is quoted efter this sentence', 'quoted'); echo '<br>';
        /*****************************************************
         * Replace a word in a string
        *****************************************************/
        echo str_replace('this', 'the', 'Replacing a word in this string!'); echo "<br>";
        echo str_replace('bitch', 'lover', 'Replace the bitch.'); echo '<br>';
        echo str_replace('destroyer', 'builder', 'I fear am become death destroyer of worlds.');
        ?>

</body>

</html>