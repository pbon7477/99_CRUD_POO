<?php 
include_once("modulos/Enrrutador.php");
include_once("modulos/ControladorEstudiantes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>99. CRUD POO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

 <?php include("vistas/nav.html");?>

    <div class="container mt-3">

    
    <h5>Gestor de Información Estudiantil:</h5>
    <h6>Organiza, Edita y Analiza Información Escolar.</h6>
    <hr/>
    
    
    <section>
        <?php
            $enrrutador = new Enrrutador();

            /* if($enrrutador->validarGET( $_GET["cargar"] )){   
                  $enrrutador->cargarVista($_GET["cargar"]);
            } */

            if(!isset($_GET["cargar"])){
                $_GET["cargar"] = "inicio";
                $enrrutador->cargarVista($_GET["cargar"]);
            }else{
                $enrrutador->cargarVista($_GET["cargar"]);
            }
        ?>
    </section>
    
</div>
<br><br>
<div class="footer fixed-bottom bg-dark text-white">
        <div class="container  my-2">
            <p><small>@ Todos los derechos reservados.</small></p>
        </div>  
</div>
    
    

    
    
    <script src="js/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
</body>
</html>