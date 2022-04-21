<DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Conversor</title>
</head>

<body>
	<a href="index.php">Inicio</a><label> - </label>
	<a href="formulario.php">Convertir</a><label> - </label>
	<a href="creditos.html">Créditos</a>

	<h1>Conversor de Sistema Métrico Inglés a Decimal</h1>
	</br>
	<form name="converter" action="converter.php" method="POST">
		<label> Quiero convertir  </label>
		<input type = "number" name="entrada" value=1>
		<select name="unidades">
			<option>Mililitros a onzas</option>
			<option>Metros a yardas</option>
			<option>Gramos a libras</option>
			<option>Grados Celsius a Farenheit</option>
			<option>Kilometros a millas</option>
			<option>Pesos a libras esterlinas</option>
		</select>
		<input type="submit" value="Convertir">
	</form>
</body>


</html>
