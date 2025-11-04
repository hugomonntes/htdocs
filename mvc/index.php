<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Inscripción Empleado</title>
    <?php
        $campos = ["nombre", "apellidos", "telefono","departamento"];
        foreach ($campos as $campo => $value) {
            if (isset($_POST[$value]) && !empty($_POST[$value])) {
                // Llamada al modelo lógico
                require_once 'modelos/model.php';
                $empleado = new Empleado();
                $result = $empleado->setEmpleado($_POST['nombre'],$_POST['apellidos'],$_POST['telefono'],$_POST['departamento']);
                if ($result) {
                    echo "<p style='color:green;'>Usuario introducido correctamente<\p>";
                } else {
                    echo "<p style='color:red;'>Error al introducir los datos en la base de datos<\p>";
                }
            }
        }
    ?>
</head>

<body>
    <h1>Register Empleado</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <table>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" name="nombre" id="nombre"></td>
            </tr>
            <tr>
                <td>Apellidos:</td>
                <td><input type="text" name="apellidos" id="apellidos"></td>
            </tr>
            <tr>
                <td>Telefono: </td>
                <td><input type="tel" name="telefono" id="telefono"></td>
            </tr>
            <tr>
                <td>Departamento:</td>
                <td><input type="text" name="departamento" id="departamento"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Crear Empleado"></td>
            </tr>
        </table>
    </form>
    <a href="/controladores/controlador.php">Lista Empleados</a>
</body>

</html>