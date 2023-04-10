<?php
    class Modelo{
        //atributos de la clase
        private $Modelo;
        private $db;
        private $datos;
        //metodos de la clase
        public function __construct(){
            $this->Modelo = array();
            $this->db = new PDO('mysql:host=localhost;dbname=bdproductos',"root");
        }
        public function insertar($tabla,$data){
            $consulta = "insert into ".$tabla." values(null,". $data .")";
            $resultado=$this->db->query($consulta);
            return $resultado;
        }
        public function mostrar($tabla,$condicion){
            $consul = "select * from ".$tabla." where ".$condicion.";";
            $resu = $this->db->query($consul);
            while($filas = $resu -> FETCHALL(PDO::FETCH_ASSOC)){
                $this->datos[]=$filas;
            }
            return $this->datos;
        }
        public function actualizar($tabla,$data,$condicion){
            $consulta = "update ".$tabla." set ".$data." where ".$condicion.";";
            $resultado = $this->db->query($consulta);
            return $resultado;
        }
        public function eliminar($tabla,$condicion){
            $eli = "delete from ".$tabla." where ".$condicion.";";
            $res = $this->db->query($eli);
            return $res;
        }
    }
?>