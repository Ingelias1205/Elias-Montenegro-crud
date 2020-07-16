<?php
include "consultas.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>crud</title>
<style type="text/css">
.selct {
	width: 150px;
	height:20px;
	font-size:10px;
}
</style>

<link href="estilo3.css" rel="stylesheet" type="text/css" />
<link href="estilos2.css" rel="stylesheet" type="text/css" />
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="body">
    <p><br class="spacer" />
    </p>
		<br />	<br />	
    <div id="top">
	    <img src="logo.PNG" width="700" height="200"/>
    </div>
	<br />	<br />	<br />	<br />	<br />	<br />
  <div id="login" align="center">
  

  </div>
</div>
<br /><br /><br /><br />

</body>
<center>
<table align="center" border="1">
	<tr>
		<td height="50" width="60" align="center"> <label class="texto2">	Código			</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Especie			</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Familia			</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Nombre			</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Proyecto		</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Base			</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Año				</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Departamento	</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Municipio		</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Localidad		</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Latitud			</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Longitud		</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Autor			</label></td>
		<td height="50" width="100" align="center"><label class="texto2">	Fecha captura	</label></td>
		<td height="50" width="60" align="center"> <label class="texto2">	Ecoregión		</label></td>
	</tr>
	<?php mostrardatos(); ?>
	
	<tr>
		<td colspan="15" height="50" align="center">
						<button onclick="location.href='generarcsv.php'" class="botton">Generar CSV</button>
		</td>
	</tr>
</table>
</center>
</html>