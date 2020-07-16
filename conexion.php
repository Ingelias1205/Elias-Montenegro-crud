<?php
function conectar(){
    $usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "crud";
    $conexion = mysql_connect( $servidor, $usuario, $password)
        or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysql_select_db($basededatos) or die 
        ("Upps! Pues va a ser que no se ha podido conectar a la base de datos");
}
?>
