<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $campos = ["nombre", "primerApellido", "segundoApellido"];

    function checkCampo($campos)
    {
        foreach ($campos as $campo) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty(trim($_POST[$campo]))) {
                    echo "<span style='color:red'>El campo " . $campo . " es obligatorio</span><br>";
                }
            }
        }
    }

    function checkCorreo($nombre)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = trim($_POST[$nombre]);
            if (empty($correo)) {
                echo "<span style='color:red;'>El correo es obligatorio</span><br>";
            } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                echo "<span style='color:red;'>Correo no válido</span>";
            }
        }
    }

    ?>
</head>

<body>
    <h1>Formulario de subscripción</h1>
    <form action="" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label>Primer Apellido:</label>
        <input type="text" name="primerApellido"><br><br>

        <label>Segundo Apellido:</label>
        <input type="text" name="segundoApellido"><br><br>

        <label>Correo Electrónico:</label>
        <input type="text" name="correo"><br><br>

        <label>¿Deseas recibir información?</label><br>
        <input type="radio" name="info" value="Si"> Sí, estoy interesado<br>
        <input type="radio" name="info" value="No"> No, gracias<br><br>

        <label>Publicaciones disponibles:</label><br>
        <input type="checkbox" name="publicaciones[]" value="National Geographic"> National Geographic<br>
        <input type="checkbox" name="publicaciones[]" value="Electronic Letters"> Electronic Letters<br>
        <input type="checkbox" name="publicaciones[]" value="Conocer"> Conocer<br>
        <input type="checkbox" name="publicaciones[]" value="Science"> Science<br>
        <input type="checkbox" name="publicaciones[]" value="Marca"> Marca<br><br>

        <label>Formas de subscripción:</label>
        <select name="subs">
            <option value="">Selecciona...</option>
            <option value="semanal">Semanal</option>
            <option value="mensual">Mensual</option>
            <option value="anual">Anual</option>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form> 

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        checkCampo($campos);
        checkCorreo("correo");
    }
    if (
        !empty($_POST["nombre"]) &&
        !empty($_POST["primerApellido"]) &&
        !empty($_POST["segundoApellido"]) &&
        !empty($_POST["correo"]) &&
        filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL) &&
        !empty($_POST["info"]) &&
        !empty($_POST["publicaciones"]) &&
        !empty($_POST["subs"])
    ) {
        echo "<h2>Datos del subscriptor:</h2>";
        echo "<p><b>Nombre:</b> ".$_POST['nombre']."</p>";
        echo "<p><b>Primer Apellido:</b>". $_POST['primerApellido']. "</p>";
        echo "<p><b>Segundo Apellido:</b>".$_POST['segundoApellido']."</p>";

        if ($_POST['info'] == "Si") {
            echo "<p>Le enviaremos información al correo <b>".$_POST['correo']."</b></p>";
        } else {
            echo "<p>No recibirá información al correo <b>".$_POST['correo']."</b></p>";
        }

        echo "<h3>Datos de la subscripción:</h3>";
        echo "<p>Señor/a <b>".$_POST['primerApellido']."</b>. Estas las subscripciones:</p>";

        foreach ($_POST['publicaciones'] as $pub) {
            echo "<p><b>$pub</b></p>";
        }

        if ($_POST['subs'] == "semanal") {
            echo "<p>Su tarifa semanal es de 7 euros</p>";
        } elseif ($_POST['subs'] == "mensual") {
            echo "<p>Su tarifa mensual es de 60 euros</p>";
        } else {
            echo "<p>Su tarifa anual es de 120 euros</p>";
        }
    }
    ?>
</body>

</html>