<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Comparison Operators Exercise</title>
    
    <link rel="stylesheet" href="/PHP & MySQL/Week-1 Basics/stylesheet.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    
</head>
<!-- 12/20/24 -->
<body>
    <div class="container py-5">
        <div class="card custom-card">
            <div class="card-body">
                <h1 class="text-center">Using PHP Comparison Operators</h1>
                
                <div class="custom-code">
                    <?php
                        /***************************************************
                         * IMPORTANT NOTE:
                         * The tool used to practice will change the
                         * look of some of the operators (such as the not
                         * equal or the identical operators). The exercise
                         * will still work properly.
                         ****************************************************/
                        
                        //Create two variables that contain different data types
                        $varOne = 666; 
                        $varTwo = "The dark one shall return again";

                        // 1. Equality
                        echo "The value of $varOne is equal to $varTwo: <br>";
                        var_dump($varOne ==  $varTwo);
                        echo "<br><br>";

                        // 2. Not equal
                        echo "The value of $varOne is not equal to $varTwo: <br>";
                        var_dump($varOne !== $varTwo);
                        echo "<br><br>";

                        // 3. Identical
                        echo "$varOne is identical to $varTwo: <br>";
                        var_dump($varOne === $varTwo);
                        echo "<br><br>";

                        // 4. Not identical
                        echo "$varOne is not identical to $varTwo: <br>";
                        var_dump($varOne !== $varTwo);
                        echo "<br><br>";

                        // 5. Greater than
                        echo "$varOne is greater than $varTwo: <br>";
                        var_dump($varOne > $varTwo);
                        echo "<br><br>";

                        // 6. Less than
                        echo "$varOne is less than $varTwo: <br>";
                        var_dump($varOne < $varTwo);
                        echo "<br><br>";

                        // 7. Greater than or equal to
                        echo "$varOne is greater than or equal to $varTwo: <br>";
                        var_dump($varOne >= $varTwo);
                        echo "<br><br>";

                        // 8. Less than or equal to
                        echo "$varOne is less than or equal to $varTwo: <br>";
                        var_dump($varOne <= $varTwo);
                        echo "<br><br>";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, for advanced components) -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>
</body>
</html>