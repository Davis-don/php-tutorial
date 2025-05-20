<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo and print</title>
</head>
<body>
    <?php
    // Perfom same purpose but 
    echo "helooo <br/>";  //has no return value
    print "heloo <br/>";  //has return value


    // This doesnt produce same output
    $name = 'Linus';
echo '<h1>Hello $name</h1>';
echo "<h1>Hello $name</h1>";
    ?>
</body>
</html>