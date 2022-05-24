<?php
	include('claseconexion.php');
	$nombre = $_POST['nombre'];
$password = $_POST['pass'];
	
	$sql = mysqli_query($conex, "SELECT * FROM usuarios WHERE username = '$nombre' AND password ='$password'") ;



	$result = mysqli_num_rows($sql);
	$row = mysqli_fetch_array($sql);
	if ($row) {		
		//Aquí se revisa un Usuario Normal
    	session_start();
		$_SESSION["usuario"] = $row["nombre"];; 
		$_SESSION["privilegio"] = $row["privilegio"];    

		if ($_SESSION["privilegio"] == "admin")  echo "<script> alert('Inicio de Sesion, - B I E N V E N I D O -');
                         location.href='admi.html'; 
               </script> ";
		else header("Location: inicio.php");
	}
 	
	$conex->close();	
?>