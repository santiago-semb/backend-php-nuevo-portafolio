<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    require("portafolio.php");
    
    /*$exp = Portafolio::getExperienciaByLugar("gdfgdsfg");

    echo $exp["lugar"];
    echo $exp["direccion"];
    echo $exp["tiempo"];
    echo $exp["desde"];
    echo $exp["hasta"];
    echo $exp["descripcion"];
    echo $exp["img"];*/

    //$expes = Portafolio::getExperiencias();

    $expObj = new Experiencia("actualizado","av.actualizado","2 meactualizadoses","20/09/0000","20/11/0000","actualizado default","actualizado");

    $p = Portafolio::updateExperiencia(4,$expObj);
    echo $p;

    //$expEliminar = Portafolio::deleteExperiencia(5);

    //$expActualizar = Portafolio::updateExperiencia(4,"gdfgdsfg","dean funesgfdgfdgd","1 agfdgdño","24/08gfdgdf/2020","24/gdfgfd08/2021","tragdfgdfdbajaba ahi","image.png");

    //$nuevaExp = Portafolio::setExperiencia("fsdfds","gfgsdfgds","gfgfsdgds","gfgsdgfds","gfdgsgfds","ggfgsdgfd","gfgfsgsd");
    
    ?>
</body>
</html>