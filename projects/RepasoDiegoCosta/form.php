<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate.php" method="post">
        <label for="marca">Marca:</label><input type="text" name="marca" id="marca"><br>
        <label for="">Modelo</label><input type="text" name="modelo" id="modelo"><br>
        <label for="">Tiempo de uso</label><input type="number" name="tiempo" id="tiempo"><br>
        <label for="">Color</label>
        <select name="color" id="color">
            <option value="rojo" selected>Rojo</option>
            <option value="verde">Verde</option>
            <option value="gris">Gris</option>
            <option value="negro">Negro</option>
        </select><br>
        <label for="">Aleman</label><input type="checkbox" name="idiomas[]" value="aleman" checked><br>
        <label for="">Esapñol</label><input type="checkbox" name="idiomas[]" value="espanol"><br>
        <label for="">Ingles</label><input type="checkbox" name="idiomas[]" value ="ingles"><br>
        <label for="">Frances</label><input type="checkbox" name="idiomas[]" value="frances"><br>
        <label for="">Email</label><input type="email" name="email" id="email"><br>
        <input type="submit">
    </form>
</body>
</html>