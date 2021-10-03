<?php

    $estudio=$_POST["estudios"];

    require_once ("../modelo/asignaturas_modelo.php");

    $asignaturas= new asignaturasModelo();
    $lista_asignaturas=$asignaturas->get_asignaturas_estudio($estudio);

    require_once("../vista/listados/asignaturas_estudio_view.php");

?>