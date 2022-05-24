<?php
  
  include 'conectar_utd.php';

  session_start();
  if (!isset($_SESSION['user'])) 
  {
		header("location: login.php");
	}
  else 
  {
    $us=$_SESSION['user'];
    $ps=$_SESSION['pass'];
    
    
	}
       
?> 
    <!DOCTYPE html>
    <html>  
      <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilos_menu.css">
        <link rel="stylesheet" href="css/estilos_iconos.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   


        <title>MENÚ</title>
      </head>
      <body>
      <div class="container">
      <div class="ctn-welcome">
        <h2> Menú principal </h2>  
      </div>

        <form action="acciones.php" method="post">
          <table align="center">
            <h4>Sistema UTD</h4>
            <tr>
            <a class="btn-menu"  href="alumnos/alumnos.php"  >Alumnos</a>
            <tr>
            <a class="btn-menu"  href="contactos/contactos.php" >Contactos</a>
            </tr>
              <a class="btn-menu" href="usuarios/usuarios.php">Usuarios</a>
            </tr>
            </table>
            <input type="hidden" name="us" value="<? echo $us; ?>">
            <input type="hidden" name="ps" value="<? echo $ps; ?>">
        </form>
         
      
      <div class="center" id="cm-up">
            <a class="btn-sesion" href='login.php'>Cerrar sesión de <?php echo $us ?></a>
      </div> 


      <footer id="tm-footer" class="tm-footer">
          	<p><img src="images/logo_utyp.png" alt="" width="95" height="55" />&nbsp;Copyright © 2018 <a href="http://www.utd.edu.mx" target="_parent" rel="noopener">UTD</a></p></div>
           
      </footer>
      </body>
   </html> 


   
  
       
