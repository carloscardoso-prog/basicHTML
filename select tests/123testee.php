<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
	<form>
		<?php
			$c=1;
			while($c < 5){
				echo ('valor 1: <input type=\'number\' />' . ($c++));
			}
		?>
		<?php echo $c; ?>
		<input type="submit">
	</form>
</body>

</html>