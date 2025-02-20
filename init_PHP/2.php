<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejemplos 2</title>
</head>
<body>

	<?php
		$sex = 2;

		if ($sex == 0) {
			echo 'Eres una Chica!';
		}
		elseif ($sex == 1){
			echo 'Eres una Chico!';
		}
		else{
			echo 'Eres Otro!';
		}
	?>

	<hr>

	<form action="">
		<input type="text" id="resp" name="resp" placeholder="Escribe un Color">
		<br>
		<br>
		<input type="submit" value="Enviar">
	</form>

	<?php
		// $r = $_GET["resp"];
		// // echo $r;

		// if ($r == 'Rojo') {
		// 	echo 'Eres el Ganador!';
		// }
		// else{
		// 	echo 'Intentalo de nuevo...';
		// }
	?>

</body>
</html>