<?php
include("biblioteca.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Trabajo 3</title>
</head>

<body>
    <div class="container">
        <div class="tarjeta tarjeta-beauty">
            <h1>Trabajo 3</h1>
            <?php
            $num1 = 5;
            $num2 = 2;
            ?>
            <?php
            echo '<h2>El resultado es: ', operaciones('M', num1: $num1, num2: $num2), '</h2>';
            ?>
        </div>
    </div>

</body>

</html>