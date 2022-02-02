<!DOCTYPE html>
<html>
<head>
	<?php $value = 500;?>
	
	<style>
		.text{
			font-size: <?php echo $value; ?>;
		}
	</style>
</head>
<body>
<div>
		<?php echo "<span class='text'>$value</span>" ?>
</div>
</body>
</html>