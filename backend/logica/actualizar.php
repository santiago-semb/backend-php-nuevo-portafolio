<?php 

    require("../portafolio.php");

    $portfolio = new Portafolio();
    $pagina_actual = $_POST["pagina_actual"];
    $id = $_POST["idActualizar"];

    switch($pagina_actual){
        case "experiencia":
            $lugarAct = $_POST["lugarExp"];
            $direccionAct = $_POST["direccionExp"];
            $tiempoAct = $_POST["tiempoExp"];
            $desdeAct = $_POST["desdeExp"];
            $hastaAct = $_POST["hastaExp"];
            $descripcionAct = $_POST["descripcionExp"];
            $img = $_FILES["imgExp"]["name"];

            $carpeta_destinataria = "D:/front-newfolio/front-newfolio/src/assets/experiencias/c_"; 
            move_uploaded_file($_FILES["imgExp"]["tmp_name"],$carpeta_destinataria.$img);

            $experienciaActualizar = new Experiencia($lugarAct,$direccionAct,$tiempoAct,$desdeAct,$hastaAct,$descripcionAct,$img);

            $portfolio::updateExperiencia($id,$experienciaActualizar);
        break;
        case "proyecto":
            $nombreAct = $_POST["nombreProyecto"];
            $descripcionAct = $_POST["descripcionProyecto"];
            $lenguajesAct = $_POST["lenguajesProyecto"];
            $linkAct = $_POST["linkProyecto"];

            $proyectoActualizar = new Proyecto($nombreAct,$descripcionAct,$lenguajesAct,$linkAct);

            $portfolio::updateProyecto($id,$proyectoActualizar);
        break;
        case "persona":
            $nombreAct = $_POST["nombrePersona"];
            $apellidoAct = $_POST["apellidoPersona"];
            $edadAct = $_POST["edadPersona"];
            $fecha_de_nacimientoAct = $_POST["fechaNacimientoPersona"];
            $telefonoAct = $_POST["telefonoPersona"];
            $emailAct = $_POST["emailPersona"];
            $direccionAct = $_POST["direccionPersona"];
            $descripcionAct = $_POST["descripcionPersona"];
            $img = $_FILES["imgPersona"]["name"];

            $carpeta_destinataria = "D:/front-newfolio/front-newfolio/src/assets/persona/c_"; 
            move_uploaded_file($_FILES["imgPersona"]["tmp_name"],$carpeta_destinataria.$img);

            $personaActualizar = new Persona($nombreAct,$apellidoAct,$edadAct,$fecha_de_nacimientoAct,$telefonoAct,$emailAct,$direccionAct,$descripcionAct,$img);

            $portfolio::updatePersona($id,$personaActualizar);
        break;
        case "estudio":
            $institucionAct = $_POST["institucionEstudio"];
            $completoAct = $_POST["completoEstudio"];
            $fechaAct = $_POST["fechaEstudio"];
            $certificadoAct = $_POST["certificadoEstudio"];
            $link_certificadoAct = $_POST["linkCertificadoEstudio"];
            $img = $_FILES["imgEstudio"]["name"];

            $carpeta_destinataria = "D:/front-newfolio/front-newfolio/src/assets/estudios/c_"; 
            move_uploaded_file($_FILES["imgEstudio"]["tmp_name"],$carpeta_destinataria.$img);

            $estudioActualizar = new Estudio($institucionAct,$completoAct,$fechaAct,$certificadoAct,$link_certificadoAct,$img);

            $portfolio::updateEstudio($id,$estudioActualizar);
        break;
        case "certificado":
            $nombreAct = $_POST["nombreCertificado"];
            $fechaAct = $_POST["fechaCertificado"];
            $linkAct = $_POST["linkCertificado"];
            $img = $_FILES["imgCertificado"]["name"];

            $carpeta_destinataria = "D:/front-newfolio/front-newfolio/src/assets/certificados/c_";
            move_uploaded_file($_FILES["imgCertificado"]["tmp_name"],$carpeta_destinataria.$img);

            $certificadoActualizar = new Certificado($nombreAct,$fechaAct,$linkAct,$img);

            $portfolio::updateCertificado($id,$certificadoActualizar);
        break;
        case "skill":
            $nombreAct = $_POST["nombreSkill"];
            $img = $_FILES["imgSkill"]["name"];

            $carpeta_destinataria = "D:/front-newfolio/front-newfolio/src/assets/skills/c_"; 
            move_uploaded_file($_FILES["imgSkill"]["tmp_name"],$carpeta_destinataria.$img);

            $skillActualizar = new Skill($nombreAct,$img);

            $portfolio::updateSkill($id,$skillActualizar);
        break;
    }

header("Location:../../frontend/actualizar.html");
die();

?>