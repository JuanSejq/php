<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 40px;
        }

        .contenedor {
            width: 400px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 25px;
            background: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Registro de productos</h1>

    <form action="procesar.php" method="POST">

        <label>Nombre del producto 1:</label>
        <input type="text" name="producto1" required>

        <label>Precio del producto 1:</label>
        <input type="number" name="precio1" step="0.01" required>

        <label>Nombre del producto 2:</label>
        <input type="text" name="producto2" required>

        <label>Precio del producto 2:</label>
        <input type="number" name="precio2" step="0.01" required>

        <label>Nombre del producto 3:</label>
        <input type="text" name="producto3" required>

        <label>Precio del producto 3:</label>
        <input type="number" name="precio3" step="0.01" required>

        <button type="submit">Calcular total</button>

    </form>

</div>

</body>
</html>
