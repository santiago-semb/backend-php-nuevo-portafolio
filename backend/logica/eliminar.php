<?php 

require("../portafolio.php");
$portfolio = new Portafolio();
$pagina_actual = $_POST["pagina_actual"];

switch($pagina_actual){
    case "experiencia":
        $id = $_POST["idEliminar"];
        $portfolio::deleteExperiencia($id);
    break;
    case "proyecto":
        $id = $_POST["idEliminar"];
        $portfolio::deleteProyecto($id);
    break;
    case "persona":
        $id = $_POST["idEliminar"];
        $portfolio::deletePersona($id);
    break;
    case "estudio":
        $id = $_POST["idEliminar"];
        $portfolio::deleteEstudio($id);
    break;
    case "certificado":
        $id = $_POST["idEliminar"];
        $portfolio::deleteCertificado($id);
    break;
    case "skill":
        $id = $_POST["idEliminar"];
        $portfolio::deleteSkill($id);
    break;
}

header("Location:../../frontend/eliminar.html");
die();

?>