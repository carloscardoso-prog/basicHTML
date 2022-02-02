<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
	<form method="get">
		<?php 
			printf("O %s custa %.2f", $prod, $preco)
		?>	
	</form>
</body>
</html>	 

<!--
	Inicio: <input type="number" name="valorinicio">
	Fim: <input type="number" name="valorfinal">
	Somador: <input type="number" name="somador">
	<input type="submit">
	</br>
-->
<?php
	$val1 = $_GET["valorinicio"];
	$val2 = $_GET["valorfinal"];
	$som = $_GET["somador"];

while($val1 < $val2){
		echo "$val1";
		$val1 += $som;	
	}
?>
<?php
		$a=opcao(1, 23 ,4);
		echo "aaa $a";
		function opcao(){
			$v = func_get_args();
			$tot = func_num_args();
						}
?>
<?php
	$v = 30;
	teste($v);
	function teste(&$v){
		$v= $v+30;
	}

	echo "$v";
?>