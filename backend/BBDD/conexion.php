<?php

    class Conectar {
        public static function conexion() {

            try{
                $conexion=new PDO("mysql:host=brlbhtcan8imqdcoznj1-mysql.services.clever-cloud.com;dbname=brlbhtcan8imqdcoznj1", "u7yeilrf7pntjbcd", "ClWG3A11nJwuBPZWgA1P");
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET CHARACTER SET utf8");
            }catch(Exception $e){
                die("Error: " . $e->getMessage());
                echo "Linea del error: " . $e->getLine();
            }
            return $conexion;
        }
    }  
?>