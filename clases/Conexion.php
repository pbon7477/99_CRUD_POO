
<?php 

class Conexion{
        private $db_host = 'localhost';
        private $db_user = 'root';
        private $db_pass = '123456';
        private $db_name = 'curso';
        private $conexion;
    

    public function __construct(){        
        $this->conexion = new mysqli($this->db_host, $this->db_user,$this->db_pass,$this->db_name);

        if( $this->conexion->connect_error){
            die("Error de conexion: " . $this->conexion->connect_error);
        }
    }

    public function consultaSimple($sql){
        $this->conexion->query($sql);
    }

    public function consultaRetorno($sql){        
        $consulta = $this->conexion->query($sql);
        return $consulta;
    }




} 



?>