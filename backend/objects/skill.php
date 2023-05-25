<?php 

    class Skill {

        private $id;
        private $nombre;
        private $img;

        public function __construct($nombre,$img){
            $this->nombre = $nombre;
            $this->img = $img;
        }

        public function toString(){
            return "ID: " . $this->id . "<br>" .
                   "Nombre: " . $this->nombre . "<br>" . 
                   "Imagen: " . $this->img . "<br>";
        }

        // GETTERS
        public function getId(){
            return $this->id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getImg(){
            return $this->img;
        }

        // SETTERS
        public function setId($id){
            $this->id = $id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setImg($img){
            $this->img = $img;
        }

    }

?>