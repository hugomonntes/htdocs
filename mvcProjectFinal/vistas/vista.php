<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de equipos</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            border-radius: 5px;
        }

        a {
            text-decoration: none;
            color: #fff;
            padding: 6px 12px;
            border-radius: 5px;
            background-color: #2196F3;
            margin: 0 5px;
            font-size: 14px;
        }

        a:hover {
            background-color: #0b7dda;
        }

        .delete {
            background-color: #f44336;
        }

        .delete:hover {
            background-color: #da190b;
        }

        .back-btn {
            display: block;
            width: 150px;
            margin: 20px auto;
            text-align: center;
            background-color: #777;
        }

        .back-btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<h1>Listado de equipos</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Año creación</th>
        <th>Títulos</th>
        <th>Logo</th>
        <th>Acciones</th>
    </tr>
    <?php if ($equipos): ?>
        <?php foreach ($equipos as $e): ?>
            <tr>
                <td><?= $e['id'] ?></td>
                <td><?= $e['nombre'] ?></td>
                <td><?= $e['anio_creacion'] ?></td>
                <td><?= $e['numero_titulos'] ?></td>
                <td><img src="../img/<?= $e['logo'] ?>" width="50"></td>
                <td>
                    <a href="controladorEditar.php?id=<?= $e['id'] ?>">Editar</a>
                    <a class="delete" href="controladorBorrar.php?id=<?= $e['id'] ?>">Borrar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">No hay equipos</td>
        </tr>
    <?php endif; ?>
</table>

<a href="../index.php" class="back-btn">Volver al formulario</a>
</body>
</html>
