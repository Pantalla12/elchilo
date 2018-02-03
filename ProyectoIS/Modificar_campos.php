<html>
<head>
 	<title></title>
 	<link href="CSS/Estilo_formularios.css" rel="stylesheet" />
 	<link href="CSS/Estilo_index_2.css" rel="stylesheet" />
 	<script type="text/javascript" src="JS/jquery.js"></script>
 	<style type="text/css">
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
 	<script type="text/javascript">
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

		<script type="text/javascript">
		function desplegalogin(_Valor){
			document.getElementById('bgventana').style.visibility=_Valor;
		}


	</script>

 	</script>
 </head>
 <body>
 	<?php  
	function Mostrarcontenido()
	{
	?>
	<div id="central">
	<br><br><br>
		<center><h1>Modificacion de campos del sistema</h1></center> 
		
	<center>
	<div>
		<form method="POST" action="#">
			<label id="label_user">Nombre de la seccion</label><br />
			<select id="input_text_formularios" >
			  <option name="seccion" value="ninguna">Selecciona</option>
			  <option name="seccion" value="Carac_fisicas">Caracteristcas fiscas</option>
			  <option name="seccion" value="Edo_detenido">Estado del detenido</option>
			  <option name="seccion" value="Armas">Armas</option>
			  <option name="seccion" value="Datos_vehiculo">Datos del vehiculo</option>
			</select>
            <input id="btn_entrar" type="submit" name="busca" value="Aceptar" /> 
		</form>
	</div>
	</center>
	<br>
	<div><center>
	<table cellspacing="0px" cellpadding="3px" id="tabla">
			<?php
				
	
			error_reporting(0);
			$db="ProyectoIS";
			$host="localhost";
			$pw="";
			$user="root";
			$con=mysql_connect($host,$user,$pw);
			mysql_select_db($db,$con);

			$nombre=$_POST['nombre'];
			$sql="SHOW COLUMNS";
			$dato=mysql_query($sql,$con);

		
			if ($dato > 1) {
			while ($row=mysql_fetch_assoc($dato)){



				echo "<tr id='tr1'>";
				echo "<td id='td'>Id del oficial</td><td id='td1'>" .$row['Idpolicia']."</td>";
				echo "</tr>";
				echo "<tr id='tr1'>";
					echo "<td id='td'>Nombre del oficial</td><td id='td1'>" .$row['Nombre']."</td>";
				echo "</tr>";
				echo "<tr id='tr1'>";
					echo "<td id='td'>Id del dispositivo</td><td id='td1'>" .$row['Mac']."</td>";
				echo "</tr>";
				echo "<tr id='tr1'>";
					echo "<td id='td'>Numero de teléfono</td><td id='td1'>" .$row['Telefono']."</td>";
				echo "</tr>";
				echo "<tr id='tr1'>";
					echo "<td id='td'>Correo Electronico</td><td id='td1'>" .$row['Correo']." </td>";
				echo "</tr>";
				echo "<tr id='tr1'>";
					echo "<td id='td'>Domicilio</td><td id='td1'>" .$row['Domicilio']." </td>";
				echo "</tr>";
				echo "<tr id='tr1'>";
					echo "<td id='td'>Fecha de nacimiento</td><td id='td1'>" .$row['Fecha']." </td>";
				echo "</tr>";
				echo "<tr id='tr1'>";
					echo "<td id='td'>Tipo de permiso</td><td id='td1'> " .$row['Tipousuario']."  </td>";
				echo "</tr>";	

				break;

			}
			} else {
				echo "<tr>";
				echo "<td colspan='8' style='text-align: center;'>Busca un registro</td>";
				echo "</tr>";
			}

	
 
	
	mysqli_close($con);

			?>
		</table>
		</center>
	</div>
		
	<br><br><br>
	<?php 		
		}
		require_once('MasterAdmin.php');
	 ?>
 </div>
</body>
</html>