<?php

    class profesoresAsignaturasModelo{
        private $conexion;
        private $profesores_asignaturas;

        public function __construct() {

            require_once("..\modelo\conectar.php");
            $this->conexion=conectar::conexion();
            $this->profesores_asignaturas=array();

        }

        public function get_profesores_asignaturas(){

            $consulta=$this->conexion->query("select p.nombre profesor, a.nombre asignatura from nebrija.profesor_asignatura pa left join nebrija.profesor p on p.id=pa.idprofesor left join nebrija.asignatura a on a.id = pa.idasignatura order by profesor,asignatura asc;");

            while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){

                $this->profesores_asignaturas[]=$fila;

            }

            return json_encode($this->profesores_asignaturas, JSON_UNESCAPED_UNICODE);
        }
    }

?>