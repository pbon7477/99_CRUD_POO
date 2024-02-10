
<?php 

$controlador = new ControladorEstudiantes();

if(isset($_GET["id"])){
    $row = $controlador->ver($_GET["id"]);
}else{
    header("Location:index.php");
}

?>



    <form>
      <fieldset disabled>
        <legend>Datos del alumno: <b><?php echo $row["nombre"] . " " . $row["apellido"]?></b></legend>
    
        <div class="mb-3 ">
          <label for="disabledTextInput" class="form-label">Cedula</label>
          <input type="text" id="disabledTextInput" class="form-control"  value="<?php echo $row["cedula"]?>">
        </div>
    
        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Nombre</label>
          <input type="text" id="disabledTextInput" class="form-control"  value="<?php echo $row["nombre"]?>">
        </div>
    
        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Apellido</label>
          <input type="text" id="disabledTextInput" class="form-control"  value="<?php echo $row["apellido"]?>">
        </div>
    
        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Edad</label>
          <input type="text" id="disabledTextInput" class="form-control"  value="<?php echo $row["edad"]?>">
        </div>
    
        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Teléfono</label>
          <input type="text" id="disabledTextInput" class="form-control"  value="<?php echo $row["telefono"]?>">
        </div>
    
        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Promedio</label>
          <input type="text" id="disabledTextInput" class="form-control"  value="<?php echo $row["promedio"]?>">
        </div>
    
    </fieldset>
</form>

<div class="container mt-5 mb-5">
        <button class="btn btn-primary"><a href="?cargar=editar&id=<?php echo $row["id"]; ?>">Actualizar información<noscript></noscript>!</a></button>
        <br><br>
    </div>

