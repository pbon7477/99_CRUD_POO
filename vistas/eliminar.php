<?php

$controlador = new ControladorEstudiantes();

if (isset($_GET['id'])) {
    $row = $controlador->ver($_GET['id']);
} else {
    header('Location:index.php');
}

if(isset($_POST['eliminar'])){
    $controlador->eliminar($_GET['id']);
    header("Location:index.php");
}
else if(isset($_POST['cancelar'])){
    header("Location:index.php");
}


?>

<div class="container">
    <h5>¿Seguro que quiere eliminar al estudiante
        <?php echo $row['nombre'] . " " . $row['apellido'] ?> ?
    </h5><br>

    <form action="" method="POST" class="row g-3 needs-validation">     

        <div class="col-12">
            <input type="submit" name="eliminar" class="btn btn-danger" value="Sí, estoy seguro/a">
            <input type="submit" name="cancelar" class="btn btn-primary" value="Cancelar">
        </div>
    </form>

</div>