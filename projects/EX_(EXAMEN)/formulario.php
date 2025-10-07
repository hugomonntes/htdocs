<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $campos = ["nombre", "primerApellido", "segundoApellido", "correo", "info", "National", "Electronic", "Conocer", "Science", "Marca", "Subs"];

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        foreach($campos as $campo){
            if($campo == ""){
                
            }
        }
    }

    ?>
</head>
<body>
    <h1>Formulario de subscripción</h1>
    <form action="" method="post">
        <label for="">Nombre:</label>
        <input type="text" name="nombre"><br><br>
        <label for="">Primer Apellido</label>
        <input type="text" name="primerApellido"><br><br>
        <label for="">Segundo Apellido</label>
        <input type="text" name="segundoApellido"><br><br>
        <label for="">Correo Electrónico</label>
        <input type="email" name="correo"><br><br>
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
    </form>
</body>
</html>