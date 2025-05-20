<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope</title>
</head>
<body>
    <?php

    // Vaariable outside function can only be accesed outside
    $name = "I am outside";

    function print_name(){
    $name = "I am inside";
    echo $name;
    }

    print_name();


    // Use global keyword instead

    ?>
</body>
</html>