<?php
	if (isset($_GET["btn1"])) {
		if ((!empty($_GET["far"])) && is_numeric($_GET["far"])) {
		$resultado=(5/9)*($_GET["far"]-32);
		echo $_GET["far"] . " Fahrenheit son " . $resultado . " Centigrados";
		}
		else{
			echo "debe ingresar un valor numerico";
			echo " <input type='button' value='Volver' onClick='history.go(-1);'>";
		}
	}

	if (isset($_GET["btn2"])) {
		if ((!empty($_GET["cen"])) && is_numeric($_GET["cen"])) {
			$resultado=$_GET["cen"]/(5/9)+32;
			echo $_GET["cen"] . " Centigrados son ". $resultado . " Fahrenheit";
		}
		else{
			echo "Debe ingresar un valor numerico";
			echo " <input type='button' value='Volver' onClick='history.go(-1);'>";
		}
	}
?>