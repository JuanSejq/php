<?php

$producto1 = $_POST["producto1"];
$precio1 = $_POST["precio1"];

$producto2 = $_POST["producto2"];
$precio2 = $_POST["precio2"];

$producto3 = $_POST["producto3"];
$precio3 = $_POST["precio3"];

$total = $precio1 + $precio2 + $precio3;

$descuento = $total * 0.16;

$totalPagar = $total - $descuento;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 40px;
        }

        .resultado {
            width: 450px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h1 {
            text-align: center;
        }

        .dato {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .total {
            margin-top: 20px;
            padding: 15px;
            background: #eee;
        }

        .pagar {
            margin-top: 15px;
            padding: 15px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="resultado">

    <h1>Resultado de la compra</h1>

    <div class="dato">
        Producto 1: <?php echo $producto1; ?><br>
        Precio: $<?php echo number_format($precio1, 2); ?>
    </div>

    <div class="dato">
        Producto 2: <?php echo $producto2; ?><br>
        Precio: $<?php echo number_format($precio2, 2); ?>
    </div>

    <div class="dato">
        Producto 3: <?php echo $producto3; ?><br>
        Precio: $<?php echo number_format($precio3, 2); ?>
    </div>

    <div class="total">
        <p>Suma de los productos:
            $<?php echo number_format($total, 2); ?>
        </p>

        <p>Descuento del 16%:
            $<?php echo number_format($descuento, 2); ?>
        </p>
    </div>

    <div class="pagar">
        Total a pagar:
        $<?php echo number_format($totalPagar, 2); ?>
    </div>

    <a href="index.php">Volver</a>

</div>

</body>
</html>
