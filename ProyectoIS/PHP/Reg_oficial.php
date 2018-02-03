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
	$con= mysqli_connect($host,$user,$pw,$db) or die ("No se pudo conectar");


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


	$insert="INSERT INTO usuario VALUES ('$idpolicia','$nombre','$mac','$pass','$pass2','$telefono','$correo','$direccion','$fecha','$tipo')";
	$ejecutar_insert=mysqli_query($con,$insert) or die("Error al insertar");
	//echo "<script>alert('Agregado correctamente')</script>";							 NO AGARRA EL MENSAJE DE ADVERTENCIA

	header("Location:../Default.php");
	mysqli_close($con);

	

 ?>


</body>
</html>