<?php
	require_once('conexion.php');
	conectar();

function departamentos(){
	echo "<option value = ''>Seleccione...</option> \n";
	$sql = mysql_query("SELECT * FROM departamentos");
	while($row = mysql_fetch_assoc($sql)){
	  	echo "<option value = '".$row["IdDepart"]."'>".$row["NomDep"]."</option> \n";
		}
}

function especie(){
	echo "<option value = ''>Seleccione...</option> \n";
	$sql3 = mysql_query("SELECT * FROM especies");
	while($row3 = mysql_fetch_assoc($sql3)){
	  	echo "<option value = '".$row3["idespecie"]."'>".$row3["nomespecie"]."</option> \n";
	}
}

function familia(){
	echo "<option value = ''>Seleccione...</option> \n";
	$sql2 = mysql_query("SELECT * FROM familia");
	while($row2 = mysql_fetch_assoc($sql2)){
	  	echo "<option value = '".$row2["idfamilia"]."'>".$row2["nomfamilia"]."</option> \n";
	}
}

function mostrardatos(){
	$sql = mysql_query("select * from analisis");
	while($row = mysql_fetch_assoc($sql)){
		echo"<tr>";
		echo "<td align='center'><label class='texto3'>".$row["codregesp"]."</label></td>";
		
		$especie = $row["idespecie"];
		$sql2 = mysql_query("select * from especies where idespecie='$especie'");
		$row2 = mysql_fetch_assoc($sql2);
		$nesp = $row2["nomespecie"];
		echo "<td align='center'><label class='texto3'>".$nesp."</label></td>";
		
		$familia = $row["idfamilia"];
		$sql3 = mysql_query("select * from familia where idfamilia='$familia'");
		$row3 = mysql_fetch_assoc($sql3);		
		$nfamilia = $row3["nomfamilia"];
		echo "<td align='center'><label class='texto3'>".$nfamilia."</label></td>";
		
		echo "<td align='center'><label class='texto3'>".$row["nomespest"]."</td>";		
		echo "<td align='center'><label class='texto3'>".$row["proyecto"]."</label></td>";
		echo "<td align='center'><label class='texto3'>".$row["base"]."</td>";		
		echo "<td align='center'><label class='texto3'>".$row["anio"]."</label></td>";
	
		$dpt = $row["dept"];
		$sql4 = mysql_query("select * from departamentos where IdDepart='$dpt'");
		$row4 = mysql_fetch_assoc($sql4);		
		$depart = $row4["NomDep"];
		echo "<td align='center'><label class='texto3'>".$depart."</td>";		

		$mun = $row["mnpio"];
		$sql5 = mysql_query("select * from municipios where codmun='$mun'");
		$row5 = mysql_fetch_assoc($sql5);
		$muni = $row5["NomMunicipio"];	
		echo "<td align='center'><label class='texto3'>".$muni."</label></td>";
		
		echo "<td align='center'><label class='texto3'>".$row["localidad"]."</td>";		
		echo "<td align='center'><label class='texto3'>".$row["latitud"]."</label></td>";
		echo "<td align='center'><label class='texto3'>".$row["longitud"]."</td>";				
		echo "<td align='center'><label class='texto3'>".$row["autor"]."</label></td>";
		echo "<td align='center'><label class='texto3'>".$row["feccapt"]."</td>";		
		echo "<td align='center'><label class='texto3'>".$row["ecoregion"]."</label></td>";
	}
}


?>
