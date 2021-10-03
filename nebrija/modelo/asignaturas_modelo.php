<?php

class asignaturasModelo
{
    private $conexion;
    private $asignaturas;

    public function __construct()
    {

        require_once("..\modelo\conectar.php");
        $this->conexion = conectar::conexion();
        $this->asignaturas = array();

    }

    public function get_asignaturas_estudio($id_estudio){

        $consulta=$this->conexion->query("SELECT a.nombre as nombre_asignatura, e.nombre as nombre_estudio FROM asignatura a left join estudio e on a.idestudio=e.id where a.idestudio=" . $id_estudio);

        while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){

            $this->asignaturas[]=$fila;

        }
        return json_encode($this->asignaturas, JSON_UNESCAPED_UNICODE);

    }

}

 ?>