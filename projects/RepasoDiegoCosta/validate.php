<?php
require_once 'Coche.php';
$flag = true;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['marca']) || empty($_POST['marca'])) {
        echo "<span style='color:red;'>No escribiste la marca</span><br>";
        $flag = false;
    } else {
        echo "<span  style='color:green;'>Escribiste bien la marca</span><br>";
    }

    if (!isset($_POST['modelo']) || empty($_POST['modelo'])) {
        echo "<span style='color:red;'>No escribiste la modelo</span><br>";
        $flag = false;
    } else {
        echo "<span  style='color:green;'>Escribiste bien el modelo</span><br>";
    }

    if (!isset($_POST['tiempo']) || empty($_POST['tiempo'])) {
        echo "<span style='color:red;'>No escribiste el tiempo de uso</span><br>";
        $flag = false;
    } else {
        echo "<span  style='color:green;'>Escribiste bien el tiempo de uso</span><br>";
    }

    if (!isset($_POST['color']) || empty($_POST['color'])) {
        echo "<span style='color:red;'>No escribiste el color</span><br>";
        $flag = false;
    } else {
        echo "<span   style='color:green;'>Escribiste bien el color</span><br>";
    }

    if (!isset($_POST['idiomas']) || empty($_POST['idiomas'])) {
        echo "<span style='color:red;'>No escribiste el idioma</span><br>";
        $flag = false;
    } else {
        echo "<span   style='color:green;'>Escribiste bien el idioma</span><br>";
    }

    if (!isset($_POST['email']) || empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<span style='color:red;'>No escribiste el email</span><br>";
        $flag = false;
    } else {
        echo "<span style='color:green;'>Escribiste bien el email</span><br>";
    }

    if ($flag) {
        $coche = new Coche($_POST['marca'], $_POST['modelo'], $_POST['tiempo'], $_POST['color'], $_POST['idiomas'], $_POST['email']);
        $coche->mostrarDatos();
    }
}
?>
