<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $campos = ["nombre", "primerApellido", "segundoApellido", "correo", "info", "National", "Electronic", "Conocer", "Science", "Marca", "Subs"];

    function checkNombre($campos)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            foreach ($campos as $campo) {
                if ($campo == "nombre") {
                    if (isset($_POST[$campo]) || empty(trim($_POST[$campo]))) {
                        echo "<span style=\"color:red;\">Error " . $campo . "</span><br>";
                    } else {
                        $texto = filter_var($_POST[$campo], FILTER_SANITIZE_EMAIL);
                        echo "<span style=\"color:green;\">$texto</span><br>";
                    }
                }
            }
        }
    }

    // if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //     foreach ($campos as $campo) {
    //         if (isset($_POST[$campo]) || empty(trim($_POST[$campo]))) {
    //             if ($campo == "correo") {
    //                 $email = filter_var($_POST[$campo], FILTER_SANITIZE_EMAIL);
    //                 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //                     echo "<span style=\"color:red;\">El correo " . $email . " no es válido</span><br>";
    //                 } else {
    //                     echo "<span style=\"color:green;\">El correo " . $email . " es válido</span><br>";
    //                 }
    //             } else {
    //                 $texto = filter_var($_POST[$campo], FILTER_SANITIZE_EMAIL);
    //                 echo "<span style=\"color:green;\">$texto</span><br>";
    //             }
    //         }
    //     }
    // }

    ?>
</head>

<body>
    <h1>Formulario de subscripción</h1>
    <form action="" method="post">
        <label for="">Nombre:</label>
        <input type="text" name="nombre"> <?php checkNombre($campos) ?> <br><br>
        <label for="">Primer Apellido</label>
        <input type="text" name="primerApellido"><br><br>
        <label for="">Segundo Apellido</label>
        <input type="text" name="segundoApellido"><br><br>
        <label for="">Correo Electrónico</label>
        <input type="text" name="correo"><br><br>
        <label for="">Deseas recibir información?</label><br>
        <input type="radio" name="info" value="Si"><label>Si, estoy interesado</label><br>
        <input type="radio" name="info" value="No"><label>No, gracias</label><br><br>
        <label>Publicaciones disponibles</label><br>
        <input type="checkbox" name="National"><label>National Geographic</label><br>
        <input type="checkbox" name="Electronic"><label>Electronic Letters</label><br>
        <input type="checkbox" name="Conocer"><label>Conocer</label><br>
        <input type="checkbox" name="Science"><label>Science</label><br>
        <input type="checkbox" name="Marca"><label>Marca</label><br><br>
        <label>Formas de subscripción</label>
        <select name="Subs">
            <option value="semanal">Semanal</option> <!-- 4, 7 -->
            <option value="mensual">Mensual</option> <!-- 7, 12 -->
            <option value="anual">Anual</option> <!-- 80, 120 -->
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>