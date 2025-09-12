<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
</head>
<body>
    <?php
        $asignaturas=["SGE", "Acceso a datos", "Afondamento"];
        echo "<ol>";
        for ($i=0; $i < count($asignaturas); $i++) { 
            echo "<li>".$asignaturas[$i]."</li>";
        }
        echo "</ol>";
    ?>
</body>
</html>