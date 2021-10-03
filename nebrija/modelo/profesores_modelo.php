<?php

    class profesoresModelo{
        private $conexion;
        private $profesores;

        public function __construct() {

            require_once("..\modelo\conectar.php");
            $this->conexion=conectar::conexion();
            $this->profesores=array();

        }

        public function get_profesores(){

            $consulta=$this->conexion->query("SELECT * FROM profesor");

            while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){

                $this->profesores[]=$fila;

            }
            return json_encode($this->profesores, JSON_UNESCAPED_UNICODE);
        }
    }

?>