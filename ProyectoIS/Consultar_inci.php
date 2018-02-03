<html>
<head>
 	<title></title>
 	<link href="CSS/Estilo_formularios.css" rel="stylesheet" />
 	<script type="text/javascript" src="JS/jquery.js"></script>
 	<script type="text/javascript">
 		function mostrar_formulario(id){
		 	if (id == "conductor") {
		        $("#conductor").show();
		        $("#persona").hide();
		    }

		    if (id == "persona") {
		        $("#conductor").hide();
		        $("#persona").show();
		    }
		    if (id == "ninguno") {
		        $("#conductor").hide();
		        $("#persona").hide();
		    }
 		}
 	</script>
 	<style type="text/css">
 		#conductor{
 			display: none;
 		}
 		#persona{
 			display: none;
 		}
 		#central{
 			text-align: center;
 		}
 		#tabla{
 			text-align: center;
 			border-radius: 3px;
 		}
 		#tr1{
 			background-color: black;
 			color: white;
 			font-size: 16px;
 			font-weight: bold;

 		}
 		#tr{
 			color: black;
 			font-size: 16px;

 		}
 		#tr:hover{
 			color: black;
 			font-size: 16px;
 			background-color: #f3f3f3;
 			
 		}
 	</style>
 </head>
 <body>
 	<?php  
	function Mostrarcontenido()
	{
	?>
	<div id="central">
	<br><br><br>
		<center><h1>Buscar en registros</h1></center> 
			<form action="#" method="POST">
			<label id="label_user">Busqueda general</label><br>
			<label id="label_user">Tipo de incidencia</label>
		    <select id="input_text_formularios" name="status" onChange="mostrar_formulario(this.value);">
		        <option value="ninguno">Tipo de registro...</option>
		        <option value="persona">Persona</option>
		        <option value="conductor">Conductor</option>
		    </select>
		    <label id="label_user">Fecha del incidente</label>
            <input id="input_text_formularios" type="date" name="conductor" value="Buscar"  size="40"/><br /><br>
		</form>
		
			<center>
		<table cellspacing="0px" cellpadding="3px" id="tabla">
			<tr id="tr1">
				<td id="td">Id del incidente</td>
				<td id="td">Nombre</td>
				<td id="td">Alias</td>
				<td id="td">Dirección de la detencion</td>
				<td id="td">Fecha de incidencia</td>
				<td id="td">Hora de incidencia</td>
			</tr>
			<tr id="tr">
				<td id="td"> |------------------------------| </td>
				<td id="td"> |------------------------------| </td>
				<td id="td"> |------------------------------| </td>
				<td id="td"> |------------------------------| </td>
				<td id="td"> |------------------------------| </td>
				<td id="td"> |------------------------------| </td>
			</tr>
		</table>
	</center> 
	<form>
			<label id="label_user">Busqueda especifica</label><br />
			<label id="label_user">Id de incidente</label><br />
            <input id="input_text_formularios" type="text" name="nombre" value="" placeholder="Identificador" size="40"/>
            <input id="btn_entrar" type="submit" name="busca" value="Buscar" /> 
		</form>

			<center>
		<table cellspacing="0px" cellpadding="3px" id="tabla">
			<tr id="tr1">
				<td id="td">Id del incidente</td>
				<td id="td">Nombre</td>
				<td id="td">Alias</td>
				<td id="td">Dirección de la detencion</td>
				<td id="td">Fecha de incidencia</td>
				<td id="td">Hora de incidencia</td>
			</tr>
			<tr id="tr">
				<td id="td"> |------------------------------| </td>
				<td id="td"> |------------------------------| </td>
				<td id="td"> |------------------------------| </td>
				<td id="td"> |------------------------------| </td>
				<td id="td"> |------------------------------| </td>
				<td id="td"> |------------------------------| </td>
			</tr>
		</table>
	</center> 
		<div id="conductor">
			
		</div>
		<div id="persona">
			
		</div>
	<?php 		
		}
		require_once('Master.php');
	 ?>
 </div>
</body>
</html>