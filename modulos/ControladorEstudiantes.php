
<?php 

include_once('clases/Conexion.php');
include_once('clases/Estudiante.php');

class ControladorEstudiantes{
    private $estudiante;

    public function __construct(){
        $this->estudiante = new Estudiante();
    }

    public function index(){
        $resultado = $this->estudiante->listar();
        return $resultado;
    }

    public function crear($cedula,$nombre,$apellido,$telefono,$edad,$nota1,$nota2,$nota3){

        $promedio = (intval($nota1) + intval($nota2) + intval($nota3)) / 3;

        $this->estudiante->set("cedula",$cedula);
        $this->estudiante->set("nombre",$nombre);
        $this->estudiante->set("apellido",$apellido);
        $this->estudiante->set("telefono",$telefono);
        $this->estudiante->set("edad",$edad);
        $this->estudiante->set("promedio",$promedio);

        $resultado = $this->estudiante->crear();
        return $resultado;
     
    }


    public function eliminar($id){
        $this->estudiante->set("id",$id);
        $this->estudiante->eliminar();

    }

    public function ver($id){
        $this->estudiante->set("id",$id);
        $datos = $this->estudiante->ver();
        return $datos;
    }

    public function editar($id,$nombre,$apellido,$edad,$telefono){
        $this->estudiante->set("id",$id);
        $this->estudiante->set("nombre",$nombre);
        $this->estudiante->set("apellido",$apellido);
        $this->estudiante->set("edad",$edad);
        $this->estudiante->set("telefono",$telefono);        
        $this->estudiante->editar();

    }

}

?>