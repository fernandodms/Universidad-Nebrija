<?php

require_once ("../modelo/profesores_asignaturas_modelo.php");

$profesores_asignaturas= new profesoresAsignaturasModelo();
$lista_profesores_asignaturas=$profesores_asignaturas->get_profesores_asignaturas();

require_once("../vista/listados/profesores_asignaturas_view.php");

?>