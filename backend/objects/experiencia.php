<?php 

    class Experiencia {

        private $id;
        private $lugar;
        private $direccion;
        private $tiempo;
        private $desde;
        private $hasta;
        private $descripcion;
        private $img;

        public function __construct($lugar,$direccion,$tiempo,$desde,$hasta,$descripcion,$img){
            $this->lugar = $lugar;
            $this->direccion = $direccion;
            $this->tiempo = $tiempo;
            $this->desde = $desde;
            $this->hasta = $hasta;
            $this->descripcion = $descripcion;
            $this->img = $img;
        }

        public function toString(){
            return "ID: " . $this->id . "<br>" .
                   "Lugar: " . $this->lugar . "<br>" .
                   "Direccion: " . $this->direccion . "<br>" . 
                   "Tiempo: " . $this->tiempo . "<br>" . 
                   "Desde: " . $this->desde . "<br>" . 
                   "Hasta: " . $this->hasta . "<br>" . 
                   "Descripcion: " . $this->descripcion . "<br>" . 
                   "Imagen: " . $this->img . "<br>";
        }

        // GETTERS
        public function getId(){
            return $this->id;
        }
        
        public function getLugar(){
            return $this->lugar;
        }
        
        public function getDireccion(){
            return $this->direccion;
        }

        public function getTiempo(){
            return $this->tiempo;
        }

        public function getDesde(){
            return $this->desde;
        }

        public function getHasta(){
            return $this->hasta;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function getImg(){
            return $this->img;
        }

        // SETTERS
        public function setId($id){
            $this->id = $id;
        }
 
        public function setLugar($lugar){
            $this->lugar = $lugar;
        }

        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }

        public function setTiempo($tiempo){
            $this->tiempo = $tiempo;
        }

        public function setDesde($desde){
            $this->desde = $desde;
        }

        public function setHasta($hasta){
            $this->hasta = $hasta;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        public function setImg($img){
            $this->img = $img;
        }

    }
?>