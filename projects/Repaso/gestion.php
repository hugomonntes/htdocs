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
    if (!filter_input($_POST["idiomas"], FILTER_SANITIZE_STRING) && $flag) {
        echo "<span style='color:red;'>El idioma NO es válido</span><br>";
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