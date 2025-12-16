<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar equipo</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }

        form {
            background: #fff;
            width: 400px;
            margin: 30px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #2196F3;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #0b7dda;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #fff;
            background-color: #777;
            padding: 8px;
            border-radius: 5px;
        }

        a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<h1>Editar Equipo</h1>
<form action="../controladores/controladorActualizar.php" method="post">
    <input type="hidden" name="id" value="<?= $equipo['id'] ?>">
    <input type="text" name="nombre" value="<?= $equipo['nombre'] ?>" required>
    <input type="number" name="anio" value="<?= $equipo['año_creacion'] ?>" required>
    <input type="number" name="titulos" value="<?= $equipo['numero_titulos'] ?>" required>
    <input type="file" name="logo" value="<?= $equipo['logo'] ?>" required>
    <button type="submit">Actualizar</button>
</form>

<a href="controlador.php">Volver al listado</a>
</body>
</html>
