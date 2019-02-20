<?php 
//iniciamos el manejo de sesiones
session_start();
//preguntamos si la variable de sesion "color" existe, entonces realizamos lo sig..
if (isset($_SESSION["color"])) {
	echo "el color de la sesion es: " . $_SESSION["color"];
//en caso que la variable no exista hacemos lo sig..	
} else {
	echo "la variable color no ha sido declarada en la sesion actual";
}

 ?>