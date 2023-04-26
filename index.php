<!DOCTYPE html>
<html>
<head>
	<title>Inversor de String</title>
</head>
<body>
	<h1>Inversor de String</h1>
	<form method="post">
		<label for="string">Digite qualquer coisa:</label>
		<input type="text" id="string" name="string">
		<button type="submit">Inverter</button>
	</form>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$string = $_POST['string'];
			$reversed = '';
			for ($i = strlen($string) - 1; $i >= 0; $i--) {
				$reversed .= $string[$i];
			}
			echo '<p>O inverso é: ' . $reversed . '</p>';
		}
	?>
</body>
</html>
