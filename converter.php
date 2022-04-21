<?php

$cantidad = abs($_POST["entrada"]);
$option = $_POST["unidades"];

//echo "Cantidad seleccionada: " .$cantidad. " " .$option;

function mililitrosOnzas($cant)
{
	echo "<p>" .$cant. " mililitros es igual a " .($cant/29.574). " onzas.</p>";
}

function metrosYardas($cant)
{
	echo "<p>" .$cant. " metros son " . ($cant * 1.094) . " yardas</p>";
}

function gramosLibras($cant)
{
	echo "<p>" .$cant. " gramos son " . ($cant/454) . " libras</p>";
}

function celsiusFarenheit($cant)
{
	echo "<p>" .$cant. " grados celsius son " . (($cant * 9/5) + 33.8) . " grados farenheit</p>";
}

function kilometrosMillas($cant)
{
	echo "<p>" .$cant. " kilometros son " . ($cant/1.609) . " millas</p>";
}

function pesosLibras($cant)
{
	echo "<p>" .$cant. " pesos mexicanos son " . ($cant * 0.038) . " libras esterlinas</p>";
}


function llamarFormula($opt, $cant)
{
	switch ($opt){
		case "Mililitros a onzas":
			mililitrosOnzas($cant);
			break;
		case "Metros a yardas":
			metrosYardas($cant);
			break;
		case "Gramos a libras":
			gramosLibras($cant);
			break;
		case "Grados Celsius a Farenheit":
			celsiusFarenheit($cant);
			break;
		case "Kilometros a millas":
			kilometrosMillas($cant);
			break;
		case "Pesos a libras esterlinas":
			pesosLibras($cant);
			break;
	}
}


?>

<html>

<head>
	<meta charset = "UTF-8">
</head>

<body>
	<a href="index.php">Inicio</a><label> - </label>
	<a href="formulario.php">Convertir</a> <label> - </label>
	<a href="creditos.html">Créditos</a></html>

	<h1>Conversor de Sistema Métrico Inglés a Decimal</h1>
	</br>
	<?php llamarFormula($option, $cantidad);?>

	</br></br>
	<a href="formulario.php">Ingresar nueva cantidad</a>

</body>

</html>
