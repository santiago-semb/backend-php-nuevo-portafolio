<?php 

require("../portafolio.php");
$portfolio = new Portafolio();
$pagina_actual = $_POST["pagina_actual"];

switch($pagina_actual){
    case "experiencia":
        $portfolio::deleteAllExperiencia();
    break;
    case "proyecto":
        $portfolio::deleteAllProyecto();
    break;
    case "persona":
        $portfolio::deleteAllPersona();
    break;
    case "estudio":
        $portfolio::deleteAllEstudio();
    break;
    case "certificado":
        $portfolio::deleteAllCertificado();
    break;
    case "skill":
        $portfolio::deleteAllSkill();
    break;
}

header("Location:../../frontend/eliminar.html");
die();

?>