<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <p>Rellena el siguiente formulario para calcular el coste total del envío:</p>
        <label>Precio: </label>
        <input type="number"><br><br>
        <label>Cantidad: </label>
        <input type="number"><br><br>
        <label>Descuento: </label>
        <input type="number"><br><br>
        <label>IVA %</label>
        <input type="number"><br><br>
        <label>Método de envío: </label>
        <select name="envio"><br><br>
            <option value="Recoger en tienda">Recoger en tienda</option>
            <option value="Recoger en tienda">Correos</option>
            <option value="Recoger en tienda">Seur</option>
        </select><br><br>
        <input type="submit" value="Calcular Precio Total">
    </form>
</body>

</html>