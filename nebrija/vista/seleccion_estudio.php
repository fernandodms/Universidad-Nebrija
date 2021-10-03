<title>Seleción de estudio</title>
<link rel="stylesheet" href="../estilos/estilobase.css" type="text/css" media="screen">
<h2>Selección de estudios</h2>
<hr>
<div>

    <form method="post" action="../controlador/asginaturas_estudio_controlador.php">
        <label for estudios>Selecciona un estudio</label>
        <select name="estudios">
        <?php
        $estudios = json_decode($lista_estudios, true);
        for($i=0;$i<count($estudios);$i++){
            echo '<option value="' . $estudios[$i]["id"]. '">' . $estudios[$i]["nombre"] . '</option>';
        }
        ?>
        </select>
        <input type="submit" name="enviar" value="Buscar">
    </form>
    <a href="../index.html">Volver al inicio</a>

</div>





