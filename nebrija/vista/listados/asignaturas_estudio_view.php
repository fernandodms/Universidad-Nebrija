<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignaturas de Estudio</title>

    <link rel="stylesheet" href="../estilos/estilobase.css" type="text/css" media="screen">

</head>
<body>

    <?php

        $asignaturas = json_decode($lista_asignaturas, true);

        if(count($asignaturas)>0){
            echo '<h2>Listado de asignaturas del estudio: ' . $asignaturas[0]["nombre_estudio"] . '</h2><hr>';
            echo "<table><th>Asignaturas</th>";
            for($i=0;$i<count($asignaturas);$i++){
                echo '<tr><td>' . $asignaturas[$i]["nombre_asignatura"]. '</td></tr>';
            }
            echo "</table>";
        } else {
            echo '<p><b>El estudio no tiene aún asociada ninguna asignatura</b></p>';
        }

    ?>
    <hr>
    <a href="seleccion_estudios_controlador.php">Seleccionar otros estudios</a>
    <a href="../index.html">Volver al inicio</a>
</body>
