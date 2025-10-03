<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión del formulario</title>
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
    <?php
    if (!$error) {
        echo "<h1 class=\"display-5\">Datos introducidos en la inscripcion</h1>";
        if ($genero == "hombre") {
            ?>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Nombre y Apellidos</div>

                        <?php
                        echo "Bienvenido señor $nombre $apellidos";
        } else if ($genero == "mujer") {
            ?>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Nombre y Apellidos</div>
                                        <?php
                                        echo "Bienvenida señora $nombre $apellidos ";
        }
        ?>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Correo</div>
                                <?php echo $correo ?>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">estudios</div>
                                <?php echo $estudios ?>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Estado civil</div>
                                <?php echo $estado ?>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">idiomas que habla</div>
                                <?php
                                for ($i = 0; $i < count($idiomas); $i++) {
                                    echo $idiomas[$i] . "</br>";
                                }

                                ?>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Informacion relevante</div>
                                <?php echo $informacion ?>
                            </div>
                        </li>
                    </ol>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                        crossorigin="anonymous"></script>

    </body>
<?php } ?>

</html>