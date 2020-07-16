<?php
require_once('conexion.php');
conectar();
$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$familia = $_POST['familia'];
$proyecto = $_POST['proyecto'];
$base = $_POST['base'];
$anio = $_POST['anio'];
$departamento = $_POST['departamentos'];
$municipio = $_POST['municipios'];
$localidad = $_POST['local'];
$latitud = $_POST['lati'];
$longitud = $_POST['longi'];
$autor = $_POST['autor'];
$fecha = $_POST['fecha'];
$eco = $_POST['eco'];

$sql = mysql_query("SELECT * FROM analisis WHERE idespecie='$especie' and idfamilia = '$familia' and nomespest = '$nombre' and idproyecto = '$proyecto'");
if(mysql_num_rows($sql)==0){
	$sql = mysql_query("INSERT INTO analisis (idespecie, idfamilia, nomespest,idproyecto, base, anio, dept, mnpio, localidad, latitud, longitud, autor, 	feccapt,ecoregion) VALUES ('$especie', '$familia', '$nombre', '$proyecto', '$base', '$anio', '$departamento', '$municipio', '$localidad', '$latitud', '$longitud', '$autor', '$fecha', '$eco')");
		echo "<script language = javascript>
							alert('Registro exitoso')
							self.location = 'index.php'
				   </script>";
}else{
	echo "<script language = javascript>
		  	  alert('Ya se ingreso la informacion de la mesa...')
			  self.location = 'index.php'
	  	   </script>";
}

?>