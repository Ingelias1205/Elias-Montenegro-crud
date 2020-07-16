// JavaScript Document

//Llenar lista de municipios dependiendo del departamento que escoja
var llenaMun = function(Dep){
	$("document").ready(function(){
	var dep = $("#departamentos").val();
	$("#municipios").load("mostrarmun.php",{Dep:dep});
	})
}
