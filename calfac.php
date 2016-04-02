<?php

	if (isset($_GET["btn1"])) {
		if ((!empty($_GET["primero"])) && (!empty($_GET["segundo"])) && (!empty($_GET["tercero"]))) {
			if (is_numeric($_GET["primero"]) && is_numeric($_GET["segundo"]) && is_numeric($_GET["tercero"])) {
				$resultado=$_GET["primero"]+$_GET["segundo"]+$_GET["tercero"];
				echo "La suma de los precios es: $". $resultado;
			}
			else{
				echo "Debe ingresar valores numericos ";
				echo " <input type='button' value='Volver' onClick='history.go(-1);'>";
			}
		}
		else{
			echo "Debe ingresar un valor numerico ";
			echo " <input type='button' value='Volver' onClick='history.go(-1);'>";
		}
	}

	if (isset($_GET["btn2"])) {
		if ((!empty($_GET["primero"])) && (!empty($_GET["segundo"])) && (!empty($_GET["tercero"]))) {
			if (is_numeric($_GET["primero"]) && is_numeric($_GET["segundo"]) && is_numeric($_GET["tercero"])) {
				$resultado=($_GET["primero"]+$_GET["segundo"]+$_GET["tercero"])/3;
				echo "El promedio es: $". $resultado;
			}
			else{
				echo "Debe ingresar valores numericos ";
				echo " <input type='button' value='Volver' onClick='history.go(-1);'>";
			}
		}
		else{
			echo "Debe ingresar un valor numerico ";
			echo " <input type='button' value='Volver' onClick='history.go(-1);'>";
		}
	}

	if (isset($_GET["btn3"])) {
		if ((!empty($_GET["primero"])) && (!empty($_GET["segundo"])) && (!empty($_GET["tercero"]))) {
			if (is_numeric($_GET["primero"]) && is_numeric($_GET["segundo"]) && is_numeric($_GET["tercero"])) {
				$resultado=($_GET["primero"]+$_GET["segundo"]+$_GET["tercero"]) * 1.21;
				echo "La suma de los precios mas IVA es: $". $resultado;
			}
			else{
				echo "Debe ingresar valores numericos ";
				echo " <input type='button' value='Volver' onClick='history.go(-1);'>";
			}
		}
		else{
			echo "Debe ingresar un valor numerico ";
			echo " <input type='button' value='Volver' onClick='history.go(-1);'>";
		}
	}


?>