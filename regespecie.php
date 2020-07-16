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
<script type = "text/javascript" src = "jquery.min.js"></script>
<script type = "text/javascript" src="funciones.js"></script>	
<link href="estilo3.css" rel="stylesheet" type="text/css" />
<link href="estilos.css" rel="stylesheet" type="text/css" />
<link href="estilos2.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="body">
    <p><br class="spacer" />
    </p>
		<br />	<br />	
    <div id="top" align="center">
		
	    <img src="logo.PNG" width="300" height="50"/>
    </div>

  <div id="login" align="center">
  

  </div>
</div>
<br />

</body>
<center>
<div id="login" >
<form action="regisespecie.php" method="post">
<table align="center" border="1">
	<tr>
		<td height="30" width="150">	
			<label class="texto2">
				Nombre especie		
			</label>											</td>
		<td width="300"> 				<input type="text" id="nombre" class="input2" name="nombre" required/>	</td>
	</tr>
	<tr>
		<td height="30" width="150">			
			<label class="texto2">
				Especie															
			</label>
		</td>
				
		<td>			<select name = "especie" id="especie"  class="select3" required/>
							<?php especie(); ?>
						</select>																
		</td>
	</tr>
		<tr>
		<td height="30" width="150">			
			<label class="texto2">
				Familia															
			</label>
		</td>
		<td >			<select name = "familia" id="familia"  class="select3" required/>
							<?php familia(); ?>
						</select>	
		</td>
	</tr>
		<tr>
		<td height="30" width="150">			
			<label class="texto2">
				Proyecto
			</label>														
		</td>
		<td>			
			<input type="text" id="proyecto" class="input2" name="proyecto" required/>		</td>					
		</td>
	</tr>
	<tr>
		<td height="30" width="150">	
			<label class="texto2">		
				Base de Registro												
			</label>
		</td>
		<td>			<input type="text" id="base" class="input2" name="base" required/>		</td>	
	</tr>
	<tr>
		<td height="30" width="150">
			<label class="texto2">		
				Año					
			</label>											
		</td>
		<td>			<input type="text" id="anio" class="input3" name="anio" required/>		</td>
	</tr>
	<tr>
		<td height="30" width="150">			
			<label class="texto2">
				Departamento		
			</label>										
		</td>
		<td >			<select name ="departamentos" id ="departamentos" onChange="llenaMun(this.value);" class="select3" required>	
							<?php	departamentos();?>
						</select>										
		</td>
	</tr>
	<tr>
		<td height="30" width="150">
			<label class="texto2">			
				Municipio														
			</label>
		</td>
		<td>			<select name = "municipios" id="municipios"  class="select3" required/>
						</select>										
		</td>
	</tr>
	<tr>
		<td height="30" width="150">
			<label class="texto2">		
				Localidad			
			</label>											
		</td>
		<td >			<input type="text" id="local" class="input2" name="local" required/>		</td>
	</tr>
	<tr>
		<td height="30" width="150">		
			<label class="texto2">
				Latitud															
			</label>
		</td>
		<td>			<input type="text" id="lati" class="input2" name="lati" required/>		</td>
	</tr>
	<tr>
		<td height="30" width="150">			
			<label class="texto2">
				Longitud														
			</label>
		</td>
		<td >			<input type="text" id="longi" class="input2" name="longi" required/>		</td>
	</tr>
		<tr>
		<td height="30" width="150">		
			<label class="texto2">
				Autor															
			</label>
		</td>
		<td>			<input type="text" id="autor" class="input2" name="autor" required/>		</td>
	</tr>
	<tr>	
		<td height="30" width="150">			
			<label class="texto2">
				Fecha Captura													
			</label>
		</td>
		<td>			<input type="text" id="fecha" class="input2" name="fecha" placeholder="dd/mm/yyyy" required/> 		</td>
	</tr>
	<tr>
		<td height="30" width="150">
			<label class="texto2">			
				Ecoregion														
			</label>
		</td>
		<td >			
			<input type="text" id="eco" class="input2" name="eco" required/>		
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center" height="40">
				 <input type="submit" class="botton" value="Registrar"  />
		</td>
	</tr>
</table>
</form>
</div>
<br /><br /><br /><br />	
</center>
</html>