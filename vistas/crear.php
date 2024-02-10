
<?php 

    $controlador = new ControladorEstudiantes();

    if(isset($_POST["enviar"])){
        $registro = $controlador->crear($_POST["cedula"],
                                        $_POST["nombre"],
                                        $_POST["apellido"],
                                        $_POST["telefono"],
                                        $_POST["edad"],
                                        $_POST["nota1"],
                                        $_POST["nota2"],
                                        $_POST["nota3"]);  

                                      

         if($registro == true){
            echo "Se ha registrado un nuevo estudiante";
         }else{
            echo "La cedula que esta intentando ingresar ya existe";
         }                               
    }

?>


<h4>Formulario de inscripción de alumno.</h4>
<p>"Rellene todos los campos."</p>
<hr/>

<form action="" method="POST">
    <div class="container ">

        <div class="row mb-1">
            <div class="col-sm-1"><label for="cedula">Cedula:</label></div>
            <div class="col"><input type="number" name="cedula" maxlength="10" required></div>
        </div>     
        
        <div class="row mb-1">
            <div class="col-sm-1"><label for="nombre">Nombre:</label></div>
            <div class="col"><input type="text" name="nombre"required></div>
        </div>
    
        <div class="row mb-1">
            <div class="col-sm-1"><label for="apellido">Apellido:</label></div>
            <div class="col"><input type="text" name="apellido"  required></div>
        </div>

        <div class="row mb-1">
            <div class="col-sm-1"><label for="telefono">Teléfono:</label></div>
            <div class="col"><input type="number" name="telefono" maxlength="20" required></div>
        </div>   
        
        <div class="row mb-1">
            <div class="col-sm-1"><label for="edad">Edad:</label></div>
            <div class="col"><input type="number" name="edad" maxlength="2" required></div>
        </div>

        <div class="row mb-1">
            <div class="col-sm-1"><label for="nota1">Nota 1:</label></div>
            <div class="col"><input type="number" name="nota1" maxlength="10" required></div>
        </div>

        <div class="row mb-1">
            <div class="col-sm-1"><label for="nota2">Nota 2:</label></div>
            <div class="col"><input type="number" name="nota2" maxlength="10" required></div>
        </div>

        <div class="row mb-1">
            <div class="col-sm-1"><label for="nota3">Nota 3:</label></div>
            <div class="col"><input type="number" name="nota3" maxlength="10" required></div>
        </div>

        
        
        <div class="row mb-1">
            <div class="col offset-1"><input type="submit" name="enviar" value="Crear"></div>
        </div>
    
    
        
        <br><br>
</div>

</form>