<html>
<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
	
	<title>.: Registra oficial :.</title>
	
</head>
<body>
	
<?php 
	
			error_reporting(0);
			$db="ProyectoIS";
			$host="localhost";
			$pw="";
			$user="root";
			$con=mysql_connect($host,$user,$pw);
			mysql_select_db($db,$con);

			$id=$_POST['Idoficial'];

			$registro=mysql_query("SELECT * FROM usuario where Idpolicia='$id'",$con) or die ("Problemas a la consulta".mysql_error());

			if ($reg=mysql_fetch_array($registro)) {
				
				mysql_query("DELETE FROM usuario where Idpolicia='$id'")or die ("Problemas a la consulta".mysql_error());
			}else{
				echo "<script>alert('No existe');</script>";
			}

			echo "<script>alert('Se elimino correctamente')</script><br>";


			header("Location:../Default.php");
			
			mysqli_close($con);

	

 ?>


</body>
</html>