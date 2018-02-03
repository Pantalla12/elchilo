

 <html>
<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
	
	<title>.: Registra oficial :.</title>
	
</head>
<body>
	<table cellspacing="0px" cellpadding="3px" id="tabla">
<?php 
	
		
	$db="ProyectoIS";
	$host="localhost";
	$pw="";
	$user="root";
	$con= mysqli_connect($host,$user,$pw,$db) or die ("No se pudo conectar");


	$id=$_POST['Idoficial'];

	$busqueda="SELECT * FROM usuario where Idpolicia='$id'";
	$ejecutar_busqueda=mysqli_query($con,$busqueda) or die("Error al insertar");
	//echo "<script>alert('Agregado correctamente')</script>";							 NO AGARRA EL MENSAJE DE ADVERTENCIA





	header("Location:../Default.php");
	mysqli_close($con);

 ?>
</table>

</body>
</html>