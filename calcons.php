<?php
	if (isset($_GET["btn1"])) {
		if ((!empty($_GET["l1"])) && (!empty($_GET["a1"]))) {
			if (is_numeric($_GET["l1"]) && is_numeric($_GET["a1"])) {
				$resultado=$_GET["l1"]*$_GET["a1"];
				echo "La cantidad de alambre que necesita es de ". $resultado*3 . " Mts";
			}
			else{
				echo "Debe ingresar un valor numerico ";
				echo " <input type='button' value='Volver' onClick='history.go(-1);'>";	
			}
		}
		else{
			echo "Debe ingresar un valor numerico ";
			echo " <input type='button' value='Volver' onClick='history.go(-1);'>";	
		}
	}

	if (isset($_GET["btn2"])) {
		if ((!empty($_GET["radio"])) && is_numeric($_GET["radio"])) {
			$resultado=$_GET["radio"]*$_GET["radio"]*3.14;
			echo "La cantidad de alambre que necesita es de: " . $resultado . " Mts";
		}
		else{
			echo "Debe ingresar un valor numerico ";
			echo " <input type='button' value='Volver' onClick='history.go(-1);'>";	
		}
	}

	if (isset($_GET["btn3"])) {
		if ((!empty($_GET["l2"])) && (!empty($_GET["a2"]))) {
			if (is_numeric($_GET["l2"]) && is_numeric($_GET["a2"])) {
				$medida=$_GET["l2"]*$_GET["a2"];
				$cemento=$medida*2;
				$cal=$medida*3;
				echo "Para un contrapiso de " . $medida . " metros cuadrados necesita: " . "<br>" . "<br>";
				echo $cemento . " bolsas de cemento y " . $cal . " bolsas de cal";
			}
			else{
				echo "Debe ingresar un valor numerico ";
				echo " <input type='button' value='Volver' onClick='history.go(-1);'>";	
			}
		}
		else{
			echo "Debe ingresar un valor numerico ";
			echo " <input type='button' value='Volver' onClick='history.go(-1);'>";	
		}
	}


?>
	