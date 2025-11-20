<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['marca']) || empty($_POST['marca'])) {
        echo "<span style='color:red;'>No escribiste la marca</span>";
        $flag = false;
    } else {
        echo "<span>Escribiste bien la marca</span>";
    }

    if (!isset($_POST['modelo']) || empty($_POST['modelo'])) {
        echo "<span style='color:red;'>No escribiste la modelo</span>";
        $flag = false;
    } else {
        echo "<span>Escribiste bien el modelo</span>";
    }

    if (!isset($_POST['tiempo']) || empty($_POST['tiempo'])) {
        echo "<span style='color:red;'>No escribiste el tiempo de uso</span>";
        $flag = false;
    } else {
        echo "<span>Escribiste bien el tiempo de uso</span>";
    }

    if (!isset($_POST['color']) || empty($_POST['color']) || !filter_input($_POST['color'], FILTER_SANITIZE_STRING)) {
        echo "<span style='color:red;'>No escribiste el color</span>";

        $flag = false;
    } else {
        echo "<span>Escribiste bien el color</span>";
    }
    $idiomas = ['aleman', 'espanol', 'ingles', 'frances'];
    foreach ($idiomas as $idioma) {
        if (!isset($_POST[$idioma]) || empty($_POST[$idioma]) || !filter_input($_POST[$idioma], FILTER_SANITIZE_STRING)) {
            echo "<span style='color:red;'>No escribiste el idioma</span>";
            $flag = false;
        } else {
            echo "<span>Escribiste bien el idioma</span>";
        }
    }
    if (!isset($_POST['email']) || empty($_POST['email']) || !filter_input($_POST['email'], FILTER_SANITIZE_EMAIL)) {
        echo "<span style='color:red;'>No escribiste el email</span>";
        $flag = false;
    } else {
        echo "<span>Escribiste bien el email</span>";
    }
    if ($flag) {
        $coche = new Coche();
    }
}
?>