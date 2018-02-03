<html>
<head>
 	<title></title>
 	<link href="CSS/Estilo_formularios.css" rel="stylesheet" />
 	<script type="text/javascript" src="JS/jquery.js"></script>
 	<link href="CSS/Estilo_index_2.css" rel="stylesheet" />
	<style type="text/css">
 		    legend{
            font-size: 20px;
            font-weight: bold;
            
        }
          #fielsetcheck{
        	width: 30%;
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


  </script>
 </head>
 <body>
 	<?php  
	function Mostrarcontenido()
	{
	?>
	<div id="central">
	<br><br><br>
<br>
<center>
		<div id="oficial">
			<legend>Actualizar datos del oficial</legend><br>
			<form method="POST" action="PHP/Actu_oficial.php">
			<label id="label_user" style="padding-right:60px;">Id del oficial</label>
                <input id="input_text_formularios" type="text" name="id" value="" placeholder="Id oficial" required onkeypress="return validanum(event)" size="40"/><br /><br>
                <label id="label_user" style="padding-right:20px;">Nombre del oficial</label>
                <input id="input_text_formularios" type="text" name="nombre" value="" placeholder="Nombre completo" required onkeypress="return validaletra(event)" size="40"/><br><br>
                <label id="label_user" style="padding-right:27px;">Id del dispositivo</label>
                <input id="input_text_formularios" type="text" name="mac" value="" placeholder="Mac Adress del dispositivo" required size="40"/><br><br>
                <label id="label_user" style="padding-right:72px;">Contraseña</label>
                <input id="input_text_formularios" type="text" name="pass" value="" placeholder="Contraseña" required size="40"/><br><br>
                <label id="label_user" style="padding-right:2px;">Verificar contraseña</label>
                <input id="input_text_formularios" type="text" name="pass2" value="" placeholder="Contraseña" required size="40"/><br><br>
                <label id="label_user" style="padding-right:18px;">Numero telefonico</label>
                <input id="input_text_formularios" type="text" name="telefono" value="" placeholder="Telefono celular" required onkeypress="return validanum(event)" size="40"/><br><br>
                <label id="label_user" style="padding-right:18px;">Correo electronico</label>
                <input id="input_text_formularios" type="text" name="correo" value="" placeholder="ejemplo@email.com" title="ejemplo@email.com"  required pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" size="40"/><br><br>
                <label id="label_pass" style="padding-right:88px;">Domicilio</label>
                <input id="input_text_formularios" type="text" name="direccion" value="" placeholder="Domicilio" required onkeypress="return validaletra(event)" size="40"/><br><br>
  				<label id="label_user" style="padding-right:30px;">Fecha de nacimiento</label>
                <input id="input_text_formularios" type="date" name="fecha" value=""  size="40"/><br><br> 

                <fieldset id="fielsetcheck">
				<legend>Tipo de usuario</legend>
  				<input id="radios" type="radio" name="tipo" value="transito"> Transito 
  				<input id="radios" type="radio" name="tipo" value="dactiloscopia" > Dactiloscopia
  				<input id="radios" type="radio" name="tipo" value="Administrador"> Administrador <br>
  				<center></fieldset> <br><br>
                <input id="btn_entrar" type="submit" name="guardar" value="Actualizar" />    <input id="btn_limpiar"type="reset" name="limpiar" value="Limpiar" />
</center>
			<br><br><br><br>
			</form>
		</div>
</center>
	<?php 		
		}
		require_once('MasterAdmin.php');
	 ?>
 </div>
</body>
</html>