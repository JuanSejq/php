<?php

$producto1 = $_POST["producto1"];
$precio1 = floatval($_POST["precio1"]);

$producto2 = $_POST["producto2"];
$precio2 = floatval($_POST["precio2"]);

$producto3 = $_POST["producto3"];
$precio3 = floatval($_POST["precio3"]);

$total = $precio1 + $precio2 + $precio3;

$descuento = $total * 0.16;

$totalPagar = $total - $descuento;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado de la compra</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .resultado {
            width: 450px;
            margin: 60px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .producto {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .total {
            margin-top: 20px;
            font-size: 18px;
        }

        .final {
            margin-top: 15px;
            padding: 15px;
            background-color: #eee;
            font-size: 22px;
            font-weight: bold;
            text-align: center;
        }

        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #333;
        }
    </style>
</head>

<body>

<div class="resultado">

    <h1>Resultado de la compra</h1>

    <div class="producto">
        <strong>Producto 1:</strong>
        <?php echo htmlspecialchars($producto1); ?>
        <br>
        Precio: $<?php echo number_format($precio1, 2); ?>
    </div>

    <div class="producto">
        <strong>Producto 2:</strong>
        <?php echo htmlspecialchars($producto2); ?>
        <br>
        Precio: $<?php echo number_format($precio2, 2); ?>
    </div>

    <div class="producto">
        <strong>Producto 3:</strong>
        <?php echo htmlspecialchars($producto3); ?>
        <br>
        Precio: $<?php echo number_format($precio3, 2); ?>
    </div>

    <div class="total">
        <p>Subtotal: $<?php echo number_format($total, 2); ?></p>

        <p>Descuento del 16%: $<?php echo number_format($descuento, 2); ?></p>
    </div>

    <div class="final">
        Total a pagar: $<?php echo number_format($totalPagar, 2); ?>
    </div>

    <a href="index.html">Volver al formulario</a>

</div>

</body>
</html>
