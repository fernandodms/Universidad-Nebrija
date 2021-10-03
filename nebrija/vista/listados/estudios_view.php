<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estudios</title>

    <link rel="stylesheet" href="../estilos/estilobase.css" type="text/css" media="screen">

</head>
<body>
    <h2>Listado de estudios</h2>
    <hr>
    <table>
        <th>Id</th>
        <th>Nombre</th>
    <?php

        $estudios = json_decode($lista_estudios, true);
        for($i=0;$i<count($estudios);$i++){
            echo "<tr>";
            echo "<td>". $estudios[$i]["id"]. "</td><td>" . $estudios[$i]["nombre"]. "</td></tr>";
        }

    ?>
    </table>
    <hr>
    <a href="../index.html">Volver al inicio</a>
</body>
</html>