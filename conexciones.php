<?php
class conexionPDO{
    private $host;
    private $db;
    private $user;
    private $password;
    private $conexion;

public function __construct($host,$db,$user,$password)
{
$this->host = $host;
$this->db = $db;
$this-> user=$user;
$this-> password = $password;
}

 public function conectar(){
    try {
        $opcion =array
        ( PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION);
        $this->conexion = new PDO('mysql:host'.$this->host.';
       db= '.$this->db,
       $this->user,
       $this->password
    );
    if ($this->conexion) {
        echo "conexion exitosa";
    }else{
        echo "fallo la conexion ";
        }
    } 
    catch (PDOException $e) {
 echo "ërror de conexion ".$e->getMessage();
 die();
    }
 }
 function desconectar(){
    $this-> conexion = null;
    echo " base de datos desconectada ";
     
    }
}
    
$host = "localhost"; 
$db= "dbclasepoo";
$user=  "root" ;
$password="";
?>