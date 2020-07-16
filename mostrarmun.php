<?php
require_once('conexion.php');
conectar();
$id = $_POST['Dep'];
$result = mysql_query("SELECT * FROM municipios WHERE IdDept = '$id'");
echo "<option value=''>Seleccione...</option>";
while($row = mysql_fetch_array($result)){
	echo "<option value ='".$row['codmun']."'>".utf8_encode($row['NomMunicipio'])."</option>";
}
?>