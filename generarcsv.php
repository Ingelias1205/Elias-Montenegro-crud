<?php
	require_once('conexion.php');
	conectar();
	$cont = 1;
	$arreglo[0] = array('Codigo', 'Nombre Especie', 'Familia', 'Nombre Especie', 'Proyecto', 'Base del Registro', 'Año', 'Departamento', 'Municipio', 'Localidad', 'Latitud', 'Longitud', 'Autor', 'Fecha Captura', 'Ecoregion');	
	$sql = mysql_query("select * from analisis");
	while($row = mysql_fetch_assoc($sql)){
		
		$especie = $row["idespecie"];
		$sql2 = mysql_query("select * from especies where idespecie='$especie'");
		$row2 = mysql_fetch_assoc($sql2);
		
		$familia = $row["idfamilia"];
		$sql3 = mysql_query("select * from familia where idfamilia='$familia'");
		$row3 = mysql_fetch_assoc($sql3);		
		
		$dpt = $row["dept"];
		$sql4 = mysql_query("select * from departamentos where IdDepart='$dpt'");
		$row4 = mysql_fetch_assoc($sql4);
		
		$mun = $row["mnpio"];
		$sql5 = mysql_query("select * from municipios where codmun='$mun'");
		$row5 = mysql_fetch_assoc($sql5);
		
		$arreglo[$cont] = array($row['codregesp'], $row2['nomespecie'], $row3['nomfamilia'], $row['nomespest'], $row['proyecto'], $row['base'], $row['anio'], $row4['NomDep'], $row5['NomMunicipio'], $row['localidad'], $row['latitud'], $row['longitud'], $row['autor'], $row['feccapt'], $row['ecoregion']);
		$cont++;

	}
	

$ruta = "C:/datos.csv";

generarCSV($arreglo, $ruta, $delimitador = ';', $encapsulador = '"');

function generarCSV($arreglo, $ruta, $delimitador, $encapsulador){
  $file_handle = fopen($ruta, 'w');
  foreach ($arreglo as $linea) {
    fputcsv($file_handle, $linea, $delimitador, $encapsulador);
  }
  rewind($file_handle);
  fclose($file_handle);
}
echo "<script language = javascript>
		alert('Generacion exitoso')
		self.location = 'index.php'
	</script>";

?>
