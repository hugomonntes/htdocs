<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de subscripción</h1>
    <label for="">Nombre:</label>
    <input type="text" name="nombre"><br><br>
    <label for="">Primer Apellido</label>
    <input type="text" name="primerApellido"><br><br>
    <label for="">Segundo Apellido</label>
    <input type="text" name="segundoApellido"><br><br>
    <label for="">Correo Electrónico</label>
    <input type="email" name="correo"><br><br>
    <label for="">Deseas recibir información?</label><br>
    <input type="radio" name="info"><label>Si, estoy interesado</label><br>
    <input type="radio" name="info"><label>No, gracias</label><br><br>
    <label>Publicaciones disponibles</label><br>
    <input type="checkbox"><label>National Geographic</label><br>
    <input type="checkbox"><label>Electronic Letters</label><br>
    <input type="checkbox"><label>Conocer</label><br>
    <input type="checkbox"><label>Science</label><br>
    <input type="checkbox"><label>Marca</label><br><br>
    <label>Formas de subscripción</label>
    <select name="subs">
        <option value="semanal">Semanal</option> <!-- 4, 7 -->
        <option value="mensual">Mensual</option> <!-- 7, 12 -->
        <option value="anual">Anual</option> <!-- 80, 120 -->
    </select>

</body>
</html>