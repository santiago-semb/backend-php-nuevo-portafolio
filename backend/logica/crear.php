<?php 

require("../portafolio.php");

$portfolio = new Portafolio();
$pagina_actual = $_POST["pagina_actual"];

    switch($pagina_actual){
        case "experiencia":
            $lugar = $_POST["lugarExp"];
            $direccion = $_POST["direccionExp"];
            $tiempo = $_POST["tiempoExp"];
            $desde = $_POST["desdeExp"];
            $hasta = $_POST["hastaExp"];
            $descripcion = $_POST["descripcionExp"];
            $img = $_FILES["imgCertificado"]["name"];

            $carpeta_destinataria = "D:/front-newfolio/front-newfolio/src/assets/experiencias/c_"; 
            move_uploaded_file($_FILES["imgCertificado"]["tmp_name"],$carpeta_destinataria.$img);
    
            $experiencia = new Experiencia($lugar,$direccion,$tiempo,$desde,$hasta,$descripcion,$img);
    
            $portfolio::crearExperiencia($experiencia);
        break;
        case "proyecto":
            $nombre = $_POST["nombreProyecto"];
            $descripcion = $_POST["descripcionProyecto"];
            $lenguajes = $_POST["lenguajesProyecto"];
            $link = $_POST["linkProyecto"];

            $proyecto = new Proyecto($nombre,$descripcion,$lenguajes,$link);

            $portfolio::crearProyecto($proyecto);
        break;
        case "persona":
            $nombre = $_POST["nombrePersona"];
            $apellido = $_POST["apellidoPersona"];
            $edad = $_POST["edadPersona"];
            $fecha_de_nacimiento = $_POST["fechaNacimientoPersona"];
            $telefono = $_POST["telefonoPersona"];
            $email = $_POST["emailPesona"];
            $direccion = $_POST["direccionPersona"];
            $descripcion = $_POST["descripcionPersona"];
            $img = $_FILES["imgCertificado"]["name"];

            $carpeta_destinataria = "D:/front-newfolio/front-newfolio/src/assets/persona/c_"; 
            move_uploaded_file($_FILES["imgCertificado"]["tmp_name"],$carpeta_destinataria.$img);

            $persona = new Persona($nombre,$apellido,$edad,$fecha_de_nacimiento,$telefono,$email,$direccion,$descripcion,$img);

            $portfolio::crearPersona($persona);
        break;
        case "estudio":
            $institucion = $_POST["institucionEstudio"];
            $completo = $_POST["completoEstudio"];
            $fecha = $_POST["fechaEstudio"];
            $certificado = $_POST["certificadoEstudio"];
            $link_certificado = $_POST["linkCertificadoEstudio"];
            $img = $_POST["imgEstudio"];

            $estudio = new Estudio($institucion,$completo,$fecha,$certificado,$link_certificado,$img);

            $portfolio::crearEstudio($estudio);
        break;
        case "certificado":
            $nombre = $_POST["nombreCertificado"];
            $fecha = $_POST["fechaCertificado"];
            $link = $_POST["linkCertificado"];
            $img = $_FILES["imgCertificado"]["name"];

            $carpeta_destinataria = "D:/front-newfolio/front-newfolio/src/assets/certificados/c_"; 
            move_uploaded_file($_FILES["imgCertificado"]["tmp_name"],$carpeta_destinataria.$img);

            $certificado = new Certificado($nombre,$fecha,$link,$img);

            $portfolio::crearCertificado($certificado);
        break;
        case "skill":
            $nombre = $_POST["nombreSkill"];
            $img = $_FILES["imgCertificado"]["name"];

            $carpeta_destinataria = "D:/front-newfolio/front-newfolio/src/assets/skills/c_"; 
            move_uploaded_file($_FILES["imgCertificado"]["tmp_name"],$carpeta_destinataria.$img);

            $skill = new Skill($nombre,$img);

            $portfolio::crearSkill($skill);
        break;
    }

header("Location:../../frontend/crear.html");
die();

?>