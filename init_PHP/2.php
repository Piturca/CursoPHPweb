<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejemplos 2</title>

	<style>
		.rojo{
			background: #000;
			color:red;
			font-size: 2rem;
		}
		.azul{
			color:blue;
			cursor: pointer;
		}
		.teal{
			color:teal;
		}
		.btn{
			font-size: 0.9rem;
			cursor: pointer;
			background-color: #0F6ED0;
			color: white;
			border: 1px solid black;
			border-radius: 5px;
		}
		.btn:hover{
			color: #0F6ED0;
			background-color: white;
			border: 1px solid #0F6ED0;
		}
	</style>
</head>
<body>

	<form action="" method="POST">
		<input type="text" id="color" name="color" class="caja" placeholder="Escribe un Color" autofocus>
		<input type="submit" class="btn" value="Enviar">
	</form>

	<?php
		$color = $_POST['color'];

		echo 'Color => '.$color;
	?>

</body>
</html>