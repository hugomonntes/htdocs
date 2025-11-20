<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="">Nombre: </label><input type="text" name="nombre"><br><br>
        <label for="">Apellidos: </label><input type="text" name="apellidos"><br><br>
        <label for="">Email: </label><input type="text" name="email"><br><br>
        <label for="">Edad: </label><input type="number" name="edad"><br><br>
        <label for="">Hombre</label><input type="radio" name="genero" value="hombre">
        <label for="">Mujer</label><input type="radio" name="genero" value="mujer"><br><br>
        <select name="idiomas">
            <option name="idiomas[]" value="aleman" selected>Aleman</option>
            <option name="idiomas[]" value="español">Español</option>
            <option name="idiomas[]" value="ingles">Ingles</option>
        </select><br><br>
        <label for="">Publicidad</label><input type="checkbox" name="publi" value="si" checked><br><br>
        <input type="submit" name="submit">
    </form>
    <?php
    require_once "./Persona.php";
    $flag = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $campos = ["nombre", "apellidos", "edad", "genero", "idiomas", "email"];
        foreach ($campos as $campo) {
            if (isset($_POST[$campo]) && !empty($_POST[$campo]) && $flag) {
                echo "<span style='color:green;'>El campo $campo es válido</span><br>";
            } else {
                echo "<span style='color:red;'>El campo $campo NO es válido</span><br>";
                $flag = false;
            }
        }
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && $flag) {
            echo "<span style='color:red;'>El FORMATO del email NO es válido</span><br>";
            $flag = false;
        }
        if ($_POST["publi"] != "si" && $flag) {
            echo "<span style='color:red;'>No vas a recibir publi</span><br>";
            $flag = false;
        }
        if ($flag) {
            $Persona = new Persona($_POST["nombre"], $_POST["apellidos"], $_POST["email"], $_POST["edad"], $_POST["genero"], $_POST["idiomas"], $_POST["publi"]);
            $Persona->mostrarDatos();
        }
    }
    ?>
</body>

</html>