<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="gestion.php" method="post">
        <label for="">Nombre: </label><input type="text" name="nombre"><br><br>
        <label for="">Apellidos: </label><input type="text" name="apellidos"><br><br>
        <label for="">Email: </label><input type="text" name="email"><br><br>
        <label for="">Edad: </label><input type="number" name="edad"><br><br>
        <label for="">Hombre</label><input type="radio" name="genero" value="hombre">
        <label for="">Mujer</label><input type="radio" name="genero" value="mujer"><br><br>
        <select name="idiomas[]">
            <option name="idiomas[]" value="aleman">Aleman</option>
            <option name="idiomas[]" value="español">Español</option>
            <option name="idiomas[]" value="ingles">Ingles</option>
        </select><br><br>
        <label for="">Publicidad</label><input type="checkbox" name="publi" value="si" checked><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>