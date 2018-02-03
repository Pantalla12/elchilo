<?php 
  

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="CSS/Estilo_index_2.css" rel="stylesheet" />
    <title></title>

    <style type="text/css">
        #imglogo_index {
            height: 58px;
            width: 47px;
        }
        #contenedor_central{
          margin-top: 1%;
          margin-bottom: 1%;
        }
                #li_menu_index{
          padding-right: 10px;
        padding-left: 10px;
        }

    </style>
    <script type="text/javascript">
      function mostrar_formulario(id){
      if (id == "admin") {
            $("#admin").show();
            $("#usuario").hide();
        }

        if (id == "usuario") {
            $("#admin").hide();
            $("#usuario").show();
        }
    }

    </script>
</head>
<body>
  <div>
      <header id="header_index"> 
            <a id="logo_index" href="#" >
               <span class="nombreabre"> <img id="imglogo_index" src="Imagenes/escudohillo.png" alt="Alternate Text" /></span>
            </a>
            <a id="logo_index" href="#" >
             <span class="nombrecom">Jefatura de Policía Preventiva y Tránsito Municipal </span> 
            </a>
          <div>
              <ul id="ul_index">
                 <li id="li_index"><a id="a_index" href="Default.php" >Inicio</a></li>          
                 <li id="li_index"><a id="a_index" href="Valida_Salir.php" >Salir</a></li>
              </ul>
          </div>
          <br />
          <br />
          
          <div id="menu" >
             
              <?php
              
              ?>
          </div>


          <div id="usuario">
          <div id="contenedor_menu_index">
              <ul id="ul_menu_index">
                <li id="li_menu_index"><a id="a_menu_index" href="Terminar_registro.php">Terminar registro</a></li>
                <li id="li_menu_index"><a id="a_menu_index" href="Consultar_inci.php">Consultar incidencias</a></li>
              </ul>
          </div>
          </div> 
      </header>
</div>
<div id="contenedor_central">
  <?php Mostrarcontenido(); ?>

</div>

      <!-- Pie de pagina -->
      <div id="contenedor_piepag_index">
          <h3 id="h3_piepag_index">
           <a> Copyright @ Ingenieria de Software </a>
          </h3>
      </div>
</body>
</html>