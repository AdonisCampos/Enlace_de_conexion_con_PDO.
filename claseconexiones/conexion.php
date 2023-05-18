<?php
class ConexionPDO
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $conexion;

    public function __construct($host, $db, $user, $password)
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;
    }
    public function conectar()
    {
        try {
            $opcion = array (
                PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
            );
            $this->conexion=new PDO('mysql:host='.$this->host.';
            db='.$this->db,
            $this->user,
            $this->password,
            $opcion 
        );
        if ($this->conexion){
           echo "Conexion Exitosa";
        }
        else{
          echo "Fallo la conexion";
        }
        } catch (PDOException $e) 
        {
            echo "Error de conexion ".$e->getMessage();
            die();
        }
    }

    public function desconectar()
    {
       $this->conexion = null;
       echo "Base de datos desconectada";
    }
}
$host = "localhost";
$db = "dbclasepoo";
$user = "root";
$password ="";
?>