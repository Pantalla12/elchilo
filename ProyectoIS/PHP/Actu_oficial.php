<html>
<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
	
	<title>.: Registra oficial :.</title>
	
</head>
<body>
<?php 
	
	$db="ProyectoIS";
	$host="localhost";
	$pw="";
	$user="root";
	$con= mysql_connect($host,$user,$pw) or die ("No se pudo conectar");
	mysql_select_db($db) or die ("No se pudo conectar");


	$idpolicia=$_POST['id'];
	$nombre=$_POST['nombre'];
	$mac=$_POST['mac'];
	$pass=$_POST['pass'];
	$pass2=$_POST['pass2'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
	$fecha=$_POST['fecha'];
	$tipo=$_POST['tipo'];

	$registro=mysql_query("SELECT * FROM usuario where Idpolicia=$idpolicia") or die ("Problemas a la consulta".mysql_error());

	if ($reg=mysql_fetch_array($registro)) {

		$reg_act=mysql_query("UPDATE usuario SET Idpolicia=$idpolicia, Nombre='$nombre',Mac='$mac',Contrasena='$pass',Contrasena2='$pass2', Telefono=$telefono,Correo='$correo',Domicilio='$direccion',Fecha='$fecha',Tipousuario='$tipo'  WHERE Idpolicia=$idpolicia") or die ("Problemas a la consulta".mysql_error());

		header("location: default.html");
		
	}else{
		echo "<script>alert('Problema al actualizar el registro')</script>";
	}
	echo "<script>alert('Modificado exitosamente')</script>";

	header("Location:../Default.php");
	mysqli_close($con);

	

 ?>


</body>
</html>