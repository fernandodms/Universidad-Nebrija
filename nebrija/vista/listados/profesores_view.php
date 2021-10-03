<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Profesores</title>

    <link rel="stylesheet" href="../estilos/estilobase.css" type="text/css" media="screen">

</head>
<body>
    <h2>Listado de profesores</h2>
    <hr>
    <table>
        <th>Id</th>
        <th>Nombre</th>

    <?php

        $profesores = json_decode($lista_profesores, true);
        for($i=0;$i<count($profesores);$i++){
            echo "<tr>";
            echo "<td>". $profesores[$i]["id"]. "</td><td>" . $profesores[$i]["nombre"]. "</td></tr>";
        }

    ?>
    </table>
    <hr>
    <a href="../index.html">Volver al inicio</a>
</body>
</html>