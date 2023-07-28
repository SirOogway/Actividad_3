<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Trabajo 3</title>
</head>

<body>
    <?php
    // Hago accesible el codigo de biblioteca.php
    include("biblioteca.php");
    ?>
    <div class="container">
        <div class="tarjeta tarjeta-beauty">
            <h1>Trabajo 3</h1>

            <?php
            // Declaro las variables y realizo la operacion
            $num1 = 5;
            $num2 = 4;
            $operacion = 'M';
            $resultado = operaciones(operacion: $operacion, num1: $num1, num2: $num2);

            ?>
            <!-- Lista desordenada que muestra los valores al usuario -->
            <ul>
                <h3>Valores</h3>
                <li><?php echo $num1; ?></li>
                <li><?php echo $num2; ?></li>
            </ul>
            <!-- Se le muestra la operacion a realizar al usuario -->
            <h3>Operación <?php echo $operacion ?></h3>
            <!-- Se imprime el resultado -->
            <h2 class="resultado"><?php echo $resultado ?></h2>
            <h3>Resultado<h3>
        </div>
    </div>

</body>

</html>