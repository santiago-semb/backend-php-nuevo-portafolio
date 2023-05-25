<?php 
require("BBDD/conexion.php");
require("objects/certificado.php");
require("objects/estudio.php");
require("objects/experiencia.php");
require("objects/persona.php");
require("objects/proyecto.php");
require("objects/skill.php");


class Portafolio {

    public function __construct(){}

    // EXPERIENCIA

    public static function crearExperiencia($experiencia){
        $conn = Conectar::conexion();
        $sentencia = $conn->prepare("INSERT INTO experiencia (lugar,direccion,tiempo,desde,hasta,descripcion,img) VALUES (:lugar,:direccion,:tiempo,:desde,:hasta,:descripcion,:imagen)");
        //
        $lugar = $experiencia->getLugar();
        $direccion = $experiencia->getDireccion();
        $tiempo = $experiencia->getTiempo();
        $desde = $experiencia->getDesde();
        $hasta = $experiencia->getHasta();
        $descripcion = $experiencia->getDescripcion();
        $img = $experiencia->getImg();
        //
        $sentencia->bindParam(':lugar', $lugar);
        $sentencia->bindParam(':direccion', $direccion);
        $sentencia->bindParam(':tiempo', $tiempo);
        $sentencia->bindParam(':desde', $desde);
        $sentencia->bindParam(':hasta', $hasta);
        $sentencia->bindParam(':descripcion', $descripcion);
        $sentencia->bindParam(':imagen', $img);

        $sentencia->execute();
    }

    public static function getExperiencias(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("SELECT * FROM experiencia");
        $sql->execute();
        foreach($sql as $v){
            $experiencia = new Experiencia($v["lugar"],$v["direccion"],$v["tiempo"],$v["desde"],$v["hasta"],$v["descripcion"],$v["img"]);
            $experiencia->setId($v["id"]);
            echo $experiencia->toString();
            echo "<hr>";
        }
    }

    public static function getExperienciaById($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM experiencia WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
        $experiencia = new Experiencia("","","","","","","");
        foreach ($sql as $row) {
            $experiencia->setId($row['id']);
            $experiencia->setLugar($row['lugar']);
            $experiencia->setDireccion($row['direccion']);
            $experiencia->setTiempo($row['tiempo']);
            $experiencia->setDesde($row['desde']);
            $experiencia->setHasta($row['hasta']);
            $experiencia->setDescripcion($row['descripcion']);
            $experiencia->setImg($row['img']);
        }
        return $experiencia;
    }

    public static function getExperienciaByLugar($lugar){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM experiencia WHERE LUGAR=:lugar');
        $sql->bindParam(":lugar", $lugar);
        $sql->execute();
        $experiencia = new Experiencia("","","","","","","");
        foreach ($sql as $row) {
            $experiencia->setId($row['id']);
            $experiencia->setLugar($row['lugar']);
            $experiencia->setDireccion($row['direccion']);
            $experiencia->setTiempo($row['tiempo']);
            $experiencia->setDesde($row['desde']);
            $experiencia->setHasta($row['hasta']);
            $experiencia->setDescripcion($row['descripcion']);
            $experiencia->setImg($row['img']);
        }
        return $experiencia->toString();
    }

    public static function deleteExperiencia($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM experiencia WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
    }

    public static function deleteAllExperiencia(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM experiencia');
        $sql->execute();
    }

    public static function updateExperiencia($id,$experiencia){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("UPDATE experiencia SET lugar=:lugar, direccion=:direccion, tiempo=:tiempo, desde=:desde, hasta=:hasta, descripcion=:descripcion, img=:imagen WHERE ID=:id");
        //
        $lugar = $experiencia->getLugar();
        $direccion = $experiencia->getDireccion();
        $tiempo = $experiencia->getTiempo();
        $desde = $experiencia->getDesde();
        $hasta = $experiencia->getHasta();
        $descripcion = $experiencia->getDescripcion();
        $img = $experiencia->getImg();
        //
        $sql->bindParam(":id", $id);
        $sql->bindParam(":lugar", $lugar);
        $sql->bindParam(":direccion", $direccion);
        $sql->bindParam(":tiempo", $tiempo);
        $sql->bindParam(":desde", $desde);
        $sql->bindParam(":hasta", $hasta);
        $sql->bindParam(":descripcion", $descripcion);
        $sql->bindParam(":imagen", $img);
        $sql->execute();
    }

    // PROYECTO

    public static function crearProyecto($proyecto){
        $conn = Conectar::conexion();
        $sentencia = $conn->prepare("INSERT INTO proyecto (nombre,descripcion,lenguajes,link) VALUES (:nombre,:descripcion,:lenguajes,:link)");
        //
        $nombre = $proyecto->getNombre();
        $descripcion = $proyecto->getDescripcion();
        $lenguajes = $proyecto->getLenguajes();
        $link = $proyecto->getLink();
        //
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':descripcion', $descripcion);
        $sentencia->bindParam(':lenguajes', $lenguajes);
        $sentencia->bindParam(':link', $link);

        $sentencia->execute();
    }

    public static function getProyectos(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("SELECT * FROM proyecto");
        $sql->execute();
        foreach($sql as $v){
            $proyectos = new Proyecto($v["nombre"],$v["descripcion"],$v["lenguajes"],$v["link"]);
            $proyectos->setId($v["id"]);
            echo $proyectos->toString();
            echo "<hr>";
        }
    }

    public static function getProyectoById($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM proyecto WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
        $proyecto = new Proyecto("","","","");
        foreach ($sql as $row) {
            $proyecto->setId($row['id']);
            $proyecto->setNombre($row['nombre']);
            $proyecto->setDescripcion($row['descripcion']);
            $proyecto->setLenguajes($row['lenguajes']);
            $proyecto->setLink($row['link']);

        }
        return $proyecto;
    }

    public static function getProyectoByNombre($name){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM proyecto WHERE NOMBRE=:nombre');
        $sql->bindParam(":nombre", $name);
        $sql->execute();
        $proyecto = new Proyecto("","","","");
        foreach ($sql as $row) {
            $proyecto->setId($row['id']);
            $proyecto->setNombre($row['nombre']);
            $proyecto->setDescripcion($row['descripcion']);
            $proyecto->setLenguajes($row['lenguajes']);
            $proyecto->setLink($row['link']);

        }
        return $proyecto->toString();
    }

    public static function deleteProyecto($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM proyecto WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
    }

    public static function deleteAllProyecto(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM proyecto');
        $sql->execute();
    }


    public static function updateProyecto($id,$proyecto){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("UPDATE proyecto SET nombre=:nombre, descripcion=:descripcion, lenguajes=:lenguajes, link=:link WHERE ID=:id");
        //
        $nombre = $proyecto->getNombre();
        $descripcion = $proyecto->getDescripcion();
        $lenguajes = $proyecto->getLenguajes();
        $link = $proyecto->getLink();
        //
        $sql->bindParam(":id", $id);
        $sql->bindParam(":nombre", $nombre);
        $sql->bindParam(":descripcion", $descripcion);
        $sql->bindParam(":lenguajes", $lenguajes);
        $sql->bindParam(":link", $link);
        $sql->execute();
    }

    // ESTUDIO

    public static function crearEstudio($estudio){
        $conn = Conectar::conexion();
        $sentencia = $conn->prepare("INSERT INTO estudio (institucion,completo,fecha,certificado,link_certificado,img) VALUES (:institucion,:completo,:fecha,:certificado,:link_certificado,:img)");
        //
        $institucion = $estudio->getInstitucion();
        $completo = $estudio->getCompleto();
        $fecha = $estudio->getFecha();
        $certificado = $estudio->getCertificado();
        $link_certificado = $estudio->GetLinkCertificado();
        $img = $estudio->getImg();
        //
        $sentencia->bindParam(':institucion', $institucion);
        $sentencia->bindParam(':completo', $completo);
        $sentencia->bindParam(':fecha', $fecha);
        $sentencia->bindParam(':certificado', $certificado);
        $sentencia->bindParam(':link_certificado', $link_certificado);
        $sentencia->bindParam(':img', $img);

        $sentencia->execute();
    }

    public static function getEstudios(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("SELECT * FROM estudio");
        $sql->execute();
        foreach($sql as $v){
            $estudio = new Estudio($v["institucion"],$v["completo"],$v["fecha"],$v["certificado"],$v["link_certificado"],$v["img"]);
            $estudio->setId($v["id"]);
            echo $estudio->toString();
            echo "<hr>";
        }
    }

    public static function getEstudioById($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM estudio WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
        $estudio = new Estudio("","","","","","");
        foreach ($sql as $row) {
            $estudio->setId($row['id']);
            $estudio->setInstitucion($row['institucion']);
            $estudio->setCompleto($row['completo']);
            $estudio->setFecha($row['fecha']);
            $estudio->setCertificado($row['certificado']);
            $estudio->setLinkCertificado($row['link_certificado']);
            $estudio->setImg($row['img']);
        }
        return $estudio;
    }

    public static function getEstudiosByInstitucion($institucion){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM estudio WHERE INSTITUCION=:institucion');
        $sql->bindParam(":institucion", $institucion);
        $sql->execute();
        $estudio = new Estudio("","","","","","");
        foreach ($sql as $row) {
            $estudio->setId($row['id']);
            $estudio->setInstitucion($row['institucion']);
            $estudio->setCompleto($row['completo']);
            $estudio->setFecha($row['fecha']);
            $estudio->setCertificado($row['certificado']);
            $estudio->setLinkCertificado($row['link_certificado']);
            $estudio->setImg($row['img']);
        }
        return $estudio->toString();
    }

    public static function deleteEstudio($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM estudio WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
    }

    public static function deleteAllEstudio(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM estudio');
        $sql->execute();
    }

    public static function updateEstudio($id,$estudio){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("UPDATE estudio SET institucion=:institucion, completo=:completo, fecha=:fecha, certificado=:certificado, link_certificado=:link_certificado, img=:img WHERE ID=:id");
        //
        $institucion = $estudio->getInstitucion();
        $completo = $estudio->getCompleto();
        $fecha = $estudio->getFecha();
        $certificado = $estudio->getCertificado();
        $link_certificado = $estudio->getLinkCertificado();
        $img = $estudio->getImg();
        //
        $sql->bindParam(":id", $id);
        $sql->bindParam(":institucion", $institucion);
        $sql->bindParam(":completo", $completo);
        $sql->bindParam(":fecha", $fecha);
        $sql->bindParam(":certificado", $certificado);
        $sql->bindParam(":link_certificado", $link_certificado);
        $sql->bindParam(":img", $img);
        $sql->execute();
    }

    // CERTIFICADO

    public static function crearCertificado($certificado){
        $conn = Conectar::conexion();
        $sentencia = $conn->prepare("INSERT INTO certificado (nombre,fecha,link,img) VALUES (:nombre,:fecha,:link,:img)");
        //
        $nombre = $certificado->getNombre();
        $fecha = $certificado->getFecha();
        $link = $certificado->getLink();
        $img = $certificado->getImg();
        //
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':fecha', $fecha);
        $sentencia->bindParam(':link', $link);
        $sentencia->bindParam(':img', $img);

        $sentencia->execute();
    }

    public static function getCertificados(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("SELECT * FROM certificado");
        $sql->execute();
        foreach($sql as $v){
            $certificado = new Certificado($v["nombre"],$v["fecha"],$v["link"],$v["img"]);
            $certificado->setId($v["id"]);
            echo $certificado->toString();
            echo "<hr>";
        }
    }

    public static function getCertificadoById($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM certificado WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
        $certificado = new Certificado("","","","");
        foreach ($sql as $row) {
            $certificado->setId($row['id']);
            $certificado->setNombre($row['nombre']);
            $certificado->setFecha($row['fecha']);
            $certificado->setLink($row['link']);
            $certificado->setImg($row['img']);
        }
        return $certificado;
    }

    public static function getCertificadoByNombre($nombre){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM certificado WHERE NOMBRE=:nombre');
        $sql->bindParam(":nombre", $nombre);
        $sql->execute();
        $certificado = new Certificado("","","","");
        foreach ($sql as $row) {
            $certificado->setId($row['id']);
            $certificado->setNombre($row['nombre']);
            $certificado->setFecha($row['fecha']);
            $certificado->setLink($row['link']);
            $certificado->setImg($row['img']);
        }
        return $certificado->toString();
    }

    public static function deleteCertificado($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM certificado WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
    }

    public static function deleteAllCertificado(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM certificado');
        $sql->execute();
    }

    public static function updateCertificado($id,$certificado){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("UPDATE certificado SET nombre=:nombre, fecha=:fecha, link=:link, img=:img WHERE ID=:id");
        //
        $nombre = $certificado->getNombre();
        $fecha = $certificado->getFecha();
        $link = $certificado->getLink();
        $img = $certificado->getImg();
        //
        $sql->bindParam(":id", $id);
        $sql->bindParam(":nombre", $nombre);
        $sql->bindParam(":fecha", $fecha);
        $sql->bindParam(":link", $link);
        $sql->bindParam(":img", $img);
        $sql->execute();
    }

    // PERSONA

    public static function crearPersona($persona){
        $conn = Conectar::conexion();
        $sentencia = $conn->prepare("INSERT INTO persona (nombre,apellido,edad,fecha_de_nacimiento,telefono,email,direccion,descripcion,img) VALUES (:nombre,:apellido,:edad,:fec_nac,:telefono,:email,:direccion,:descripcion,:img)");
        //
        $nombre = $persona->getNombre();
        $apellido = $persona->getApellido();
        $edad = $persona->getEdad();
        $fecha_de_nacimiento = $persona->getFechaDeNacimiento();
        $telefono = $persona->getTelefono();
        $email = $persona->getEmail();
        $direccion = $persona->getDireccion();
        $descripcion = $persona->getDescripcion();
        $img = $persona->getImg();
        //
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':apellido', $apellido);
        $sentencia->bindParam(':edad', $edad);
        $sentencia->bindParam(':fecha_de_nacimiento', $fecha_de_nacimiento);
        $sentencia->bindParam(':telefono', $telefono);
        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':direccion', $direccion);
        $sentencia->bindParam(':descripcion', $descripcion);
        $sentencia->bindParam(':img', $img);

        $sentencia->execute();
    }

    public static function getPersonas(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("SELECT * FROM persona");
        $sql->execute();
        foreach($sql as $v){
            $persona = new Persona($v["nombre"],$v["apellido"],$v["edad"],$v["fecha_de_nacimiento"],$v["telefono"],$v["email"],$v["direccion"],$v["descripcion"],$v["img"]);
            $persona->setId($v["id"]);
            echo $persona->toString();
            echo "<hr>";
        }
    }

    public static function getPersonaById($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM persona WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
        $persona = new Persona("","","","","","","","","");
        foreach ($sql as $row) {
            $persona->setId($row['id']);
            $persona->setNombre($row['nombre']);
            $persona->setApellido($row['apellido']);
            $persona->setEdad($row['edad']);
            $persona->setFechaDeNacimiento($row['fecha_de_nacimiento']);
            $persona->setTelefono($row['telefono']);
            $persona->setEmail($row['email']);
            $persona->setDireccion($row['direccion']);
            $persona->setDescripcion($row['descripcion']);
            $persona->setImg($row['img']);
        }
        return $persona;
    }

    public static function getPersonaByApellido($apellido){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM persona WHERE APELLIDO=:apellido');
        $sql->bindParam(":apellido", $apellido);
        $sql->execute();
        $persona = new Persona("","","","","","","","","");
        foreach ($sql as $row) {
            $persona->setId($row['id']);
            $persona->setNombre($row['nombre']);
            $persona->setApellido($row['apellido']);
            $persona->setEdad($row['edad']);
            $persona->setFechaDeNacimiento($row['fecha_de_nacimiento']);
            $persona->setTelefono($row['telefono']);
            $persona->setEmail($row['email']);
            $persona->setDireccion($row['direccion']);
            $persona->setDescripcion($row['descripcion']);
            $persona->setImg($row['img']);
        }
        return $persona->toString();
    }

    public static function deletePersona($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM persona WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
    }

    public static function deleteAllPersona(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM persona');
        $sql->execute();
    }

    public static function updatePersona($id,$persona){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("UPDATE persona SET nombre=:nombre, apellido=:apellido, edad=:edad, fecha_de_nacimiento=:fecha_de_nacimiento, telefono=:telefono, email=:email, direccion=:direccion, descripcion=:descripcion, img=:img WHERE ID=:id");
        //
        $nombre = $persona->getNombre();
        $apellido = $persona->getApellido();
        $edad = $persona->getEdad();
        $fecha_de_nacimiento = $persona->getFechaDeNacimiento();
        $telefono = $persona->getTelefono();
        $email = $persona->getEmail();
        $direccion = $persona->getDireccion();
        $descripcion = $persona->getDescripcion();
        $img = $persona->getImg();
        //
        $sql->bindParam(":id", $id);
        $sql->bindParam(":nombre", $nombre);
        $sql->bindParam(":apellido", $apellido);
        $sql->bindParam(":edad", $edad);
        $sql->bindParam(":fecha_de_nacimiento", $fecha_de_nacimiento);
        $sql->bindParam(":telefono", $telefono);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":direccion", $direccion);
        $sql->bindParam(":descripcion", $descripcion);
        $sql->bindParam(":img", $img);
        $sql->execute();
    }

    // SKILL

    public static function crearSkill($skill){
        $conn = Conectar::conexion();
        $sentencia = $conn->prepare("INSERT INTO skills (nombre,img) VALUES (:nombre,:imagen)");
        //
        $nombre = $skill->getNombre();
        $img = $skill->getImg();
        //
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':imagen', $img);

        $sentencia->execute();
    }

    public static function getSkills(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("SELECT * FROM skills");
        $sql->execute();
        foreach($sql as $v){
            $skill = new Skill($v["nombre"],$v["img"]);
            $skill->setId($v["id"]);
            echo $skill->toString();
            echo "<hr>";
        }
    }

    public static function getSkillById($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM skills WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
        $skill = new Skill("","");
        foreach ($sql as $row) {
            $skill->setId($row['id']);
            $skill->setNombre($row['nombre']);
            $skill->setImg($row['img']);
        }
        return $skill;
    }

    public static function getSkillByNombre($nombre){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('SELECT * FROM skills WHERE NOMBRE=:nombre');
        $sql->bindParam(":nombre", $nombre);
        $sql->execute();
        $skill = new Skill("","");
        foreach ($sql as $row) {
            $skill->setId($row['id']);
            $skill->setNombre($row['nombre']);
            $skill->setImg($row['img']);
        }
        return $skill->toString();
    }

    public static function deleteSkill($id){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM skills WHERE ID=:id');
        $sql->bindParam(":id", $id);
        $sql->execute();
    }

    public static function deleteAllSkill(){
        $conn = Conectar::conexion();
        $sql = $conn->prepare('DELETE FROM skills');
        $sql->execute();
    }

    public static function updateSkill($id,$skill){
        $conn = Conectar::conexion();
        $sql = $conn->prepare("UPDATE skills SET nombre=:nombre, img=:img WHERE ID=:id");
        //
        $nombre = $skill->getNombre();
        $img = $skill->getImg();
        //
        $sql->bindParam(":id", $id);
        $sql->bindParam(":nombre", $nombre);
        $sql->bindParam(":img", $img);
        $sql->execute();
    }

}

?>