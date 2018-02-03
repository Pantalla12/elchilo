 <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title> Gestor policial </title>
        <link href="CSS/Estilo_login.css" rel="stylesheet" />
        <link href="CSS/Estilo_formularios.css" rel="stylesheet" />
    </head>
    <body>
        <header id="header_login"> 
            <a id="logo_header" href="#" >
                <span class="nombreabre"> <img id="imglogo_header" src="Imagenes/escudohillo.png" alt="Alternate Text" /></span>
                <span class="nombrecom"> Jefatura de Policía Preventiva y Tránsito Municipal </span>
            </a>
      </header>
            <br />
	        <div id="contenedor_login">
                <form id="formulario_login" Method="POST" action="Valida_login.php">
                    <header id="header_controluser">
                        <br />
                        <br />
                    </header>
                    <br />
                    <img id="imagen_cont_login" src="Imagenes/policia.png" alt="Alternate Text" />
                    <br />
                    <br />
                    <label id="label_user">Usuario</label><br />
                    <input id="input_text_formularios" type="text" name="user" value="" required placeholder="usuario-matricula" size="40"/><br />
                    <br />
                    <label id="label_pass">Contraseña</label><br />
                    <input id="input_pass_formularios" type="password" name="pass" value="" required placeholder="*********" size="40" /><br />
                    <br />
                    <input id="btn_entrar" type="submit" name="entrar" value="Entrar" />    <input id="btn_limpiar"type="reset" name="limpiar" value="Limpiar" />
                    <br />
                    <br />
                </form>
            </div>
       
        

    </body>
    </html>




