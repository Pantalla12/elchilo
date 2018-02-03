<?php 
	$Usuario=$_POST['user'];
	$Contrasena=$_POST['pass'];
	
	
		$db="ProyectoIS";
		$host="localhost";
		$pw="";
		$user="root";
	
		if (empty($Usuario) || empty($Contrasena)) {
			header("location:Login.php");
			exit();
		}

		$con = mysqli_connect($host,$user,$pw,$db) or die("Error al conectar ".mysql_error());
		$query = "SELECT * FROM usuario WHERE Idpolicia= $Usuario AND Contrasena = $Contrasena";
		$result=mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($result);
		//echo $row;
		if($row["Contrasena"] === $Contrasena && $row["Idpolicia"] === $Usuario && $row["Tipousuario"] === 'Admin') {
				
			session_start();
			$_SESSION['U_Usuario']=$Usuario;
			$_SESSION['T_Tipousuario']=$row['Tipousuario'];
			header("location:DefaultAdmin.php");


	/*		}elseif ($row["Contrasena"] === $Contrasena && $row["Idpolicia"] === $Usuario && $row["Tipousuario"] === 'Admin') {
				session_start();
				$_SESSION['U_Usuario']=$Usuario;
				$_SESSION['T_Tipousuario']=$row['Tipousuario'];
				*/

			}else{
					header("location:Default.php");
				 }
?>




 