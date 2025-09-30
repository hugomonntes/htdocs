<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php
    function formato($dato)
    {
        $dato = trim($dato);
        $dato = htmlspecialchars($dato);
        $dato = stripslashes($dato);
        return $dato;
    }

    $error = false;
    $campos = ["nombre", "apellido", "email", "estudios", "estadoCivil", "genero"];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        foreach ($campos as $campo) {
            if (!isset($_POST[$campo]) || empty($_SERVER[$campo])) {
                $error = true;
                echo "<span style=\"color:red;\">El campo" . $campo . "es obligatorio</span><br>";
            } else {
                if ($campo == "email") {
                    $email = filter_var($_POST[$campo], FILTER_SANITIZE_EMAIL);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "<span style=\"color:red;\">El campo" . $email . "no es válido</span><br>";
                    }
                } else {
                    $todosCampos = filter_var($_POST[$campo], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                }
            }
        }
    }
    ?>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>