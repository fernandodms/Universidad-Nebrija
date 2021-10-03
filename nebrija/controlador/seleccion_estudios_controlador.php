<?php

    require_once ("../modelo/estudios_modelo.php");

    $estudios= new estudiosModelo();
    $lista_estudios=$estudios->get_estudios();

    require_once("../vista/seleccion_estudio.php");

?>