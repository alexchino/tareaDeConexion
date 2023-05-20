<?php
include_once'conexciones.php';
$conectar = new conexionPDO($host,$db,$user,$password);
$conectar-> conectar();
echo  "<br>", "<br>";
$conectar-> desconectar();

?>