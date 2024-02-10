<?php
require_once("modulos/ControladorEstudiantes.php");

$controlador = new ControladorEstudiantes();
$resultado = $controlador->index();

?>


<h4>Lista de alumnos inscritos.</h4>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Apellido</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $resultado->fetch_assoc()): ?>
    <tr >
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['cedula']?></td>
      <td><?php echo $row['nombre']?></td>
      <td><?php echo $row['apellido']?></td>

      <td>
            <button class="btn btn-secondary "><a href="?cargar=ver&id=<?php echo $row["id"]; ?>">Ver</a></button>
            <button class="btn btn-secondary "><a href="?cargar=editar&id=<?php echo $row["id"]; ?>">Editar</a></button>
            <button class="btn btn-secondary "><a href="?cargar=eliminar&id=<?php echo $row["id"]; ?>">Eliminar</a></button>
      </td>
      
    </tr>  
    <?php endwhile; ?>
  </tbody>
</table>