<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
    // Variable starts with $ sign eg
    $x = 5;
    $y = "John";


    // Use dots to concatenate strings

    // You can use dot for concatenation or use $x and string as shown below
    echo "$y is $x years old";

    // To get data type of a variable use var_dump
    echo var_dump($y);

    ?>
</body>
</html>