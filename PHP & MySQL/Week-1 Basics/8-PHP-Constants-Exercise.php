<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants Exercise</title>
</head>
<!-- done 12/18/24 -->
<body>
    <?php
        /******************************************************
         * Create a constant called GREETING and assign it a 
         * basic HTML paragraph
        ******************************************************/
        define("LASERBEAMS", "<p>Send the freaking beams!</p>");
        echo LASERBEAMS;
        define("CONSTANT", "<p>This is a constant</p>");
        echo CONSTANT;
        define("MYLORD", "Andrew Rodriquez.");
        echo MYLORD;
        define('GREETING', '<p>Hello my wonderful subjects.</p>');
        /******************************************************
         * Create an echo statement to send the content of 
         * the GREETING constant to the screen
        ******************************************************/
        echo GREETING;
        
        echo "The title MYLORD is used for: " . MYLORD . "<br>";


        
        /******************************************************
         * Create a constant called tagLine 
         * and assign it a basic HTML paragraph
         * Set it to work regardless of letter case.
        ******************************************************/
        define('tagline', "<p>This is my very short paragaraph. Why do 
        I keep writig this paragraph. Well, I need to make a short paragraph.
        I should be just about there mate.</p>");

    


        /******************************************************
         * Create an echo statement to send the content
         * of the tagLine constant to the screen
        ******************************************************/
        echo tagline;
    ?>
</body>

</html>