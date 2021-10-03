<?php

    require_once ("../modelo/profesores_modelo.php");

    $profesores= new profesoresModelo();
    $lista_profesores=$profesores->get_profesores();

    require_once("../vista/listados/profesores_view.php");

?>