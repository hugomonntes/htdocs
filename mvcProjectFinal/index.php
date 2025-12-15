<?php
require_once "modelos/model.php";

if (
    isset($_POST['nombre'], $_POST['anio_creacion'], $_POST['titulos'], $_FILES['logo']) &&
    $_POST['nombre'] != '' && $_POST['anio_creacion'] != '' && $_POST['titulos'] != '' &&
    $_FILES['logo']['name'] != ''
) {
    $directorio = "img/";
    $nombre_logo = basename($_FILES['logo']['name']);
    $ruta_final = $directorio . $nombre_logo;

    if (move_uploaded_file($_FILES['logo']['tmp_name'], $ruta_final)) {
        $equipo = new Equipo();
        $equipo->setEquipo($_POST['nombre'], $_POST['anio_creacion'], $_POST['titulos'], $nombre_logo);
        $mensaje = "<p class='success'>El equipo se ha añadido correctamente</p>";
    } else {
        $mensaje = "<p class='error'>Error al subir el logo</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario inscripción equipo</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }

        form {
            background: #fff;
            width: 400px;
            margin: 30px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        input[type="text"], input[type="number"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .success {
            color: green;
            text-align: center;
            font-weight: bold;
        }

        .error {
            color: red;
            text-align: center;
            font-weight: bold;
        }

        .listar-btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<h1>Formulario inscripción equipo</h1>

<?php if(isset($mensaje)) echo $mensaje; ?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="nombre" placeholder="Nombre del equipo" required>
    <input type="number" name="anio_creacion" placeholder="Año de creación" required>
    <input type="number" name="titulos" placeholder="Número de títulos" required>
    <input type="file" name="logo" required>
    <button type="submit">Crear equipo</button>
</form>

<form action="controladores/controlador.php" method="get" class="listar-btn">
    <button type="submit">Listar equipos</button>
</form>
</body>
</html>
