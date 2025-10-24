<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Inscripción Empleado</title>
</head>

<body>
    <h1>Register Empleado</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <table>
            <tr>
                <td>Nombre: </td>
                <input type="text" name="nombre" id="nombre">
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
</body>

</html>