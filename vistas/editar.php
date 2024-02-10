
<?php 

$controlador = new ControladorEstudiantes();

if(isset($_GET['id'])){
    $row = $controlador->ver($_GET['id']);
}else{
    header("Location:index.php");
}

if(isset($_POST['enviar'])){
    $controlador->editar($_GET['id'],
                         $_POST['nombre'],
                         $_POST['apellido'],
                         $_POST['edad'],
                         $_POST['telefono']);

     //header("Location:index.php?cargar=editar&id=" . $_GET['id'] . ""); 
     header("Location:index.php?cargar=ver&id=" . $_GET['id'] . ""); 
             
                        
}

?>

<legend>Formulario de actualizacion del alumno: <b><?php echo $row["nombre"] . " " . $row["apellido"]?></b></legend>

<form action=""  method="POST" class="row g-3 needs-validation" >
    
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Cedula:</label>
    <input type="number" name="cedula" class="form-control" id="validationCustom01" value="<?php echo $row["cedula"];?>" disabled>
    <div class="valid-feedback">
      Buena suerte!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Nombre:</label>
    <input type="text" name="nombre" class="form-control" id="validationCustom02" value="<?php echo $row["nombre"]?>" required>
    <div class="valid-feedback">
      Buena suerte con tu nombre!
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Apellido:</label>
    <input type="text" name="apellido" class="form-control" id="validationCustom03" value="<?php echo $row["apellido"]?>" required>
    <div class="valid-feedback">
      Buena suerte con tu apellido!
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Edad:</label>
    <input type="number" name="edad" class="form-control" id="validationCustom04" value="<?php echo $row["edad"]?>" required>
    <div class="valid-feedback">
      Buena suerte con tu edad!
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Telefono:</label>
    <input type="number" name="telefono" class="form-control" id="validationCustom05" value="<?php echo $row["telefono"]?>" required>
    <div class="valid-feedback">
      Buena suerte con tu telefono !
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom06" class="form-label">Promedio:</label>
    <input type="number" name="promedio" class="form-control" id="validationCustom06" value="<?php echo $row["promedio"]?>" disabled>
    <div class="valid-feedback">
      Buena suerte con tu promedio!
    </div>
  </div> 
          
  <div class="col-12">
    <input type="submit" name="enviar" class="btn btn-primary"  value="Editar">
  </div>
</form>