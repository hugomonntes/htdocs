<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario inscripcion empleado</title>
    <?php

    if (isset($_POST['nombre']) && $_POST['nombre'] != "" && (isset($_POST['apellidos'])) && ($_POST['apellidos'] != '') && isset($_POST['telefono']) && ($_POST['telefono'] != '') && isset($_POST['departamento']) && ($_POST['departamento'] != '')) {
        //llamada al modelo
        require_once 'modelos/model.php';
        $empleado = new Empleado();
        $result = $empleado->setEmpleado($_POST['nombre'], $_POST['apellidos'], $_POST['telefono'], $_POST['departamento']);
        if ($result) {
            echo "<p style=\"color:green;\">El usuario se ha añadido correctamente</p>";
        } else {
            echo "<p style=\"color:red;\">El usuario no se ha añadido</p>";
        }
    }

    ?>
</head>

<body>
    <h1>Formulario de inscripcion</h1>
    <div id=formulario>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="formulario">
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Apellidos:</td>
                    <td><input type="text" name="apellidos"></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><input type="tel" name="telefono"></td>
                </tr>
                <tr>
                    <td>Departamento:</td>
                    <td><input type="text" name="departamento"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Crear empleado"></td>
                </tr>
            </table>
        </form>
    </div>
    <hr>
    <a href="controladores/controlador.php">Listar Empleados</a>
</body>

</html>