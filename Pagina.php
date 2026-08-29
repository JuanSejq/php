<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la compra</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
        }

        .contenedor {
            width: 450px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        .resultado {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .total {
            margin-top: 20px;
            padding: 15px;
            background-color: #eee;
        }

        .pagar {
            font-size: 22px;
            font-weight: bold;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #222;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Resultado</h1>

    <?php

    $producto1 = $_POST["producto1"];
    $precio1 = floatval($_POST["precio1"]);

    $producto2 = $_POST["producto2"];
    $precio2 = floatval($_POST["precio2"]);

    $producto3 = $_POST["producto3"];
    $precio3 = floatval($_POST["precio3"]);

    $suma = $precio1 + $precio2 + $precio3;

    $descuento = $suma * 0.16;

    $total = $suma - $descuento;

    ?>

    <div class="resultado">
        <?php echo $producto1; ?>:
        $<?php echo number_format($precio1, 2); ?>
    </div>

    <div class="resultado">
        <?php echo $producto2; ?>:
        $<?php echo number_format($precio2, 2); ?>
    </div>

    <div class="resultado">
        <?php echo $producto3; ?>:
        $<?php echo number_format($precio3, 2); ?>
    </div>

    <div class="total">

        <p>
            Suma de los 3 productos:
            $<?php echo number_format($suma, 2); ?>
        </p>

        <p>
            Descuento del 16%:
            $<?php echo number_format($descuento, 2); ?>
        </p>

        <p class="pagar">
            Total a pagar:
            $<?php echo number_format($total, 2); ?>
        </p>

    </div>

    <a href="index.html">Volver</a>

</div>

</body>
</html>
