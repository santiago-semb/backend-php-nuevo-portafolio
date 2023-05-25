<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
    <link rel="stylesheet" href="../../frontend/assets/styles/styles.css"/>
    <link rel="stylesheet" href="../../frontend/assets/styles/styles2.css"/>
    <script src="https://kit.fontawesome.com/d3ba0e2c6d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        a {
            text-decoration: none;
            color: rgb(19, 18, 18);
        }
    
        a:hover {
            color: white;
        }

        .header {
            height: 100px;
        }

        #title-bbdd {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- HEADER -->
        <header class="header">
            <h1 class="title"><span id="title-bbdd">database </span><i class="fa-sharp fa-solid fa-database" style="color:white;"></i> <span id="title-g">portfolio</span></h1>
            <a href="#" target="_blank"><button class="btn btn-success"><i class="fa-solid fa-f"></i></button></a>
        </header>

        <!-- MENU -->
        <div class="row" id="menu">
            <div class="col"><a href="../crear.html">Crear</a></div>
            <div class="col"><a href="../ver.html">Ver</a></div>
            <div class="col"><a href="../actualizar.html">Actualizar</a></div>
            <div class="col"><a href="../eliminar.html">Eliminar</a></div>
        </div>

        <h3>Actualizar persona</h3>

        <?php if(!isset($_GET["idActualizar"])): ?>
        <form class="form" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div>
                <label for="idActualizar">Id</label>
                <input type="text" name="idActualizar">
            </div>
            <button class="btn btn-info">Ir</button>
        </form>
        <?php endif; ?>

        <?php 
            require("../../backend/portafolio.php");
            if(isset($_GET["idActualizar"])){
            $id = $_GET["idActualizar"];
            $data = Portafolio::getPersonaById($id);
            }
        ?>

        <?php if(isset($_GET["idActualizar"])): ?>
        <form class="form" method="POST" action="../../backend/logica/actualizar.php" enctype="multipart/form-data">
            <input type="hidden" name="idActualizar" value="<?php echo $id; ?>">
            <input type="hidden" name="pagina_actual" value="persona">
            <div>
                <label for="nombrePersona">Nombre</label>
                <input type="text" class="form-control" name="nombrePersona" value="<?php echo $data->getNombre(); ?>">
            </div>
            <div>
                <label for="apellidoPersona">Apellido</label>
                <input type="text" class="form-control" name="apellidoPersona" value="<?php echo $data->getApellido(); ?>"> 
            </div>
            <div>
                <label for="edadPersona">Edad</label>
                <input type="text" class="form-control" name="edadPersona" value="<?php echo $data->getEdad(); ?>">
            </div>
            <div>
                <label for="fechaNacimientoPersona">Fecha de nacimiento</label>
                <input type="text" class="form-control" name="fechaNacimientoPersona" value="<?php echo $data->getFechaDeNacimiento(); ?>"> 
            </div>
            <div>
                <label for="telefonoPersona">Telefono</label>
                <input type="text" class="form-control" name="telefonoPersona" value="<?php echo $data->getTelefono(); ?>">
            </div>
            <div>
                <label for="emailPersona">Email</label>
                <input type="text" class="form-control" name="emailPersona" value="<?php echo $data->getEmail(); ?>">
            </div>
            <div>
                <label for="direccionPersona">Direccion</label>
                <input type="text" class="form-control" name="direccionPersona" value="<?php echo $data->getDireccion(); ?>">
            </div>
            <div>
                <label for="descripcionPersona">Descripcion</label>
                <input type="text" class="form-control" name="descripcionPersona" value="<?php echo $data->getDescripcion(); ?>">
            </div>
            <div>
                <label for="imgPersona">Imagen</label>
                <input type="file" class="form-control" name="imgPersona" value="<?php echo $data->getImg(); ?>">
            </div>
            <button class="btn btn-dark">Submit</button>
        </form>
        <?php endif; ?>
</body>
</html>