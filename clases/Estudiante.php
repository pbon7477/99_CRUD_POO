
<?php 

include_once("Conexion.php");

class Estudiante {

    private $id;
    private $cedula;
    private $nombre;
    private $apellido;
    private $telefono;
    private $edad;
    private $promedio;
    private $fecha;
    private $conexion;

    public function __construct(){
        $this->conexion = new Conexion();
    }

    public function set($atributo,$contenido){
        $this->$atributo = $contenido;
    }

    public function get($atributo){
        return $this->$atributo;
    }
    

    public function listar(){
        $sql = "SELECT * FROM estudiantes";
        $resultado = $this->conexion->consultaRetorno($sql);
        return $resultado;
    }


    public function crear(){        

        $sql2 = "SELECT * FROM estudiantes WHERE cedula = '{$this->cedula}'";
        $resultado = $this->conexion->consultaRetorno($sql2);
        $numero_filas = mysqli_num_rows($resultado);

        if($numero_filas != 0){
            return false;
            
        }else{

            $sql = "INSERT INTO estudiantes (cedula,nombre,apellido,telefono,edad,promedio,fecha)
                VALUES('{$this->cedula}','{$this->nombre}','{$this->apellido}','{$this->telefono}','{$this->edad}','{$this->promedio}',NOW())";
        
        $this->conexion->consultaSimple($sql);
        return true;
        
        }
    }

    public function eliminar(){
        $sql = "DELETE FROM estudiantes WHERE ID = '{$this->id}'";

        $this->conexion->consultaSimple($sql);
    }


    public function ver(){
        $sql = "SELECT * FROM estudiantes WHERE id = '{$this->id}'";
        $resultado = $this->conexion->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($resultado);

        $this->id = $row['id'];
        $this->cedula = $row['cedula'];
        $this->nombre = $row['nombre'];
        $this->apellido = $row['apellido'];
        $this->telefono = $row['telefono'];
        $this->edad = $row['edad'];
        $this->promedio = $row['promedio'];
        $this->fecha = $row['fecha'];

        return $row;
    }

    public function editar(){        
            $sql = "UPDATE estudiantes SET nombre='{$this->nombre}',
                                   apellido='{$this->apellido}',
                                   edad='{$this->edad}',
                                   telefono= '{$this->telefono}'
                WHERE id = '{$this->id}'";
        
        $this->conexion->consultaSimple($sql);               
        
    }


}

?>