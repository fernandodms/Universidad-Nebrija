<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Profesores y Asignaturas</title>

        <link rel="stylesheet" href="../estilos/estilobase.css" type="text/css" media="screen">

    </head>
    <body>
        <h2>Listado de profesores y sus asignaturas</h2>
        <hr>
        <table style="padding:5px;">
            <th>Profesor</th>
            <th>Asignatura</th>
        <?php

        $profesores_asignaturas = json_decode($lista_profesores_asignaturas, true);
        for($i=0;$i<count($profesores_asignaturas);$i++){
            echo "<tr>";
            echo "<td>" . $profesores_asignaturas[$i]["profesor"] . "</td><td>" . $profesores_asignaturas[$i]["asignatura"]. "</td></tr>";
        }

        ?>
        </table>
        <hr>
        <a href="../index.html">Volver al inicio</a>
    </body>
</html>