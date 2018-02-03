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
 		function validanum(e){
		    tecla = (document.all) ? e.keyCode : e.which;

		    if (tecla==8){
		        return true;
		    }
		        
		    patron =/[0-9]/;
		    tecla_final = String.fromCharCode(tecla);
		    return patron.test(tecla_final);
		}
	
		function validaletra(e) { 
		tecla = (document.all) ? e.keyCode : e.which; 
		if (tecla==8) return true; 
		patron =/[A-Za-z\s]/; 
		te = String.fromCharCode(tecla); 
		return patron.test(te); 
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
 			
 		}
 		#tabla{
 			text-align: center;
 			border-radius: 3px;
 			box-shadow: 0px 0px 10px #434343;
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
 		 legend{
            font-size: 20px;
            font-weight: bold;
            
        }

 	</style>

 </head>
 <body>
 	<?php  
	function Mostrarcontenido()
	{
	?>
	<div id="central">
	<br><br><br><br><center>
		<form action="#" method="POST">
			<center><legend> Terminar reporte</legend></center><br>
			<label id="label_user">Id del policia</label>
            <input id="input_text_formularios" type="text" name="idpolicia" value="" placeholder="000000" onkeypress="return validanum(event)" size="20"/>
		    <label id="label_user">Fecha</label>
            <input id="input_text_formularios" type="date" name="fecha" value="" />
            <input id="btn_entrar" type="submit" value="Buscar"/>
            
		</form>
 		
		<table cellspacing="0px" cellpadding="3px" id="tabla">
			<tr id="tr1">
				<td id="td">Id del oficial</td>
				<td id="td">Id del incidente</td>
				<td id="td">Nombre</td>
				<td id="td">Alias</td>
				<td id="td">Motivo</td>
				<td id="td">Dirección </td>
				<td id="td">Fecha </td>
				<td id="td">Hora </td>
			</tr>
			<tr id="tr">
				<td id="td"> |----------------| </td>
				<td id="td"> |----------------| </td>
				<td id="td"> |----------------| </td>
				<td id="td"> |----------------| </td>
				<td id="td"> |----------------| </td>
				<td id="td"> |----------------| </td>
				<td id="td"> |----------------| </td>
				<td id="td"> |----------------| </td>

			</tr>
		</table>
	</center> 
	<br>
	<center><legend style="background:black;box-shadow: 0px 0px 10px #434343;color:white;" >Detallado de reporte</legend></center><br>	
	<center><div id="Carac_fisicas">
		<legend>Caracteristicas fisicas</legend><br>
		<label id="label_user" style="padding-right:65px;">Estatura :</label>
        <input id="input_text_formularios" type="text" name="estatura" value="" placeholder="Estatura en centimetros" onkeypress="return validanum(event)" size="40"/><br><br>
        <label id="label_user"style="padding-right:98px;">Peso :</label>
        <input id="input_text_formularios" type="text" name="peso" value="" placeholder="Peso en kilogramos" onkeypress="return validanum(event)" size="40"/><br><br>
        <label id="label_user"style="padding-right:95px;">Edad :</label>
        <input id="input_text_formularios" type="text" name="edad" value="" placeholder="Edad" onkeypress="return validanum(event)" size="40"/><br><br>
        <label id="label_user"style="padding-right:10px;">Aspecto de ropa :</label>
        <input id="input_text_formularios" type="text" name="aspecto" value="" placeholder="Aspecto de ropa" onkeypress="return validaletra(event)" size="40"/><br><br>
        <label id="label_user"style="padding-right:43px;">Color de ojo :</label>
        <input id="input_text_formularios" type="text" name="ojo" value="" placeholder="color de ojos" onkeypress="return validaletra(event)" size="40"/><br><br>
        <label id="label_user"style="padding-right:15px;">Color de cabello :</label>
        <input id="input_text_formularios" type="text" name="cabello" value="" placeholder="Color de cabello" onkeypress="return validaletra(event)" size="40"/><br><br>
        <label id="label_user"style="padding-right:20px;">Tatuajes :</label><br>
        <textarea id="input_text_formularios" rows="5" cols="63" style="resize:none;"></textarea><br><br>
	</div></center>
	<div id="Edo_detenido">
		<legend>Estado del detenido</legend><br>
		<input type="checkbox" name="transporte" value="1"> <span style="padding-left:15px;" >Alcoholizado</span> <br>
		<input type="checkbox" name="transporte" value="2"> <span style="padding-left:15px;" >Drogado</span> <br>
		<input type="checkbox" name="transporte" value="3"> <span style="padding-left:15px;" >Agresivo</span> <br>
		<input type="checkbox" name="transporte" value="4"> <span style="padding-left:15px;" >Golpeado</span> <br>
		<input type="checkbox" name="transporte" value="5"> <span style="padding-left:15px;" >Normal</span> <br>
	</div><br>
	<div id="Armas">
		<legend>Armas</legend><br>
		<input type="checkbox" name="cuchillo" value="1"> <span style="padding-left:15px;" >Cuchillo</span> <br>
		<input type="checkbox" name="navaja" value="2"> <span style="padding-left:15px;" >Navaja</span><br>
		<input type="checkbox" name="machete" value="3"> <span style="padding-left:15px;" >Machete</span><br>
		<input type="checkbox" name="taser" value="4"> <span style="padding-left:15px;" >Taser</span><br>
		<input type="checkbox" name="tubo" value="5"> <span style="padding-left:15px;" >Tubo</span><br>
		<input type="checkbox" name="palo" value="6"> <span  style="padding-left:15px;">Palo</span><br>
		<input type="checkbox" name="piedra" value="7"> <span  style="padding-left:15px;">Piedra</span><br>
		<input type="checkbox" name="pistola" value="8"> <span style="padding-left:15px;" >Pistola</span><br>
	</div><br><center>
		<div id="Datos_vehiculo">
		<legend>Datos del vehiculo</legend><br>
		<label id="label_user"style="padding-right:76px;">Marca :</label>
        <input id="input_text_formularios" type="text" name="estatura" value="" placeholder="Marca" onkeypress="return validaletra(event)" size="40"/><br><br>
        <label id="label_user"style="padding-right:69px;">Modelo :</label>
        <input id="input_text_formularios" type="text" name="peso" value="" placeholder="Modelo" onkeypress="return validaletra(event)" size="40"/><br><br>
        <label id="label_user"style="padding-right:79px;">Placas :</label>
        <input id="input_text_formularios" type="text" name="edad" value="" placeholder="XXX-00-00"  size="40"/><br><br>
        <label id="label_user"style="padding-right:0px;">Numero de serie :</label>
        <input id="input_text_formularios" type="text" name="aspecto" value="" placeholder="Numero de serie"  size="40"/><br><br>
        <label id="label_user"style="padding-right:85px;">Color :</label>
        <input id="input_text_formularios" type="text" name="colorvehiculo" value="" placeholder="Color del vehiculo" onkeypress="return validaletra(event)" size="40"/><br><br>
        <label id="label_user"style="padding-right:90px;">Tipo :</label>
        <select id="input_text_formularios">
          <option value="Sedan">Selecciona uno...</option>
		  <option value="Sedan">Sedan</option>
		  <option value="Pickup">Pick up</option>
		  <option value="Carga">De Carga</option>
		  <option value="Pasajero">Pasajero</option>
		  <option value="Oficial">Oficial</option>
		</select><br><br>
        <label id="label_user"style="padding-right:66px;">Puertas :</label>
        <input id="input_text_formularios" type="text" name="puertas" value="" placeholder="Numero de puertas" onkeypress="return validanum(event)" size="40"/><br><br>
	</div><br>
	</center>



		<br><br><br>
	<?php 		
		}
		require_once('Master.php');
	 ?>
 </div>
</body>
</html>