<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Generos</title>
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

</body>
</html>