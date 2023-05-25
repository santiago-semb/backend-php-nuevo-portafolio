<?php

    class Estudio {

        private $id;
        private $institucion;
        private $completo;
        private $fecha;
        private $certificado;
        private $link_certificado;
        private $img;

        public function __construct($institucion,$completo,$fecha,$certificado,$link_certificado,$img){
            $this->institucion = $institucion;
            $this->completo = $completo;
            $this->fecha = $fecha;
            $this->certificado = $certificado;
            $this->link_certificado = $link_certificado;
            $this->img = $img;
        }

        public function toString(){
            return "ID: " . $this->id . "<br>" . 
                   "Institucion: " . $this->institucion . "<br>" . 
                   "Completo: " . $this->completo . "<br>" . 
                   "Fecha: " . $this->fecha . "<br>" . 
                   "Certificado: " . $this->certificado . "<br>" . 
                   "Link Certificado: " . $this->link_certificado . "<br>" . 
                   "Imagen: " . $this->img . "<br>"; 
        }

        // GETTERS
        public function getId(){
            return $this->id;
        }

        public function getInstitucion(){
            return $this->institucion;
        }

        public function getCompleto(){
            return $this->completo;
        }

        public function getFecha(){
            return $this->fecha;
        }

        public function getCertificado(){
            return $this->certificado;
        }

        public function getLinkCertificado(){
            return $this->link_certificado;
        }

        public function getImg(){
            return $this->img;
        }

        // SETTERS
        public function setId($id){
            $this->id = $id;
        }

        public function setInstitucion($institucion){
            $this->institucion = $institucion;
        }

        public function setCompleto($completo){
            $this->completo = $completo;
        }

        public function setFecha($fecha){
            $this->fecha = $fecha;
        }

        public function setCertificado($certificado){
            $this->certificado = $certificado;
        }

        public function setLinkCertificado($link_certificado){
            $this->link_certificado = $link_certificado;
        }

        public function setImg($img){
            $this->img;
        }

    }

?>