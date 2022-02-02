<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<pre>
	<?php
	$c = range(1,5,1);
	foreach($c as $xd){
		echo "$xd <br/>";
	}

	$cc = array(1,2,3,4);
	foreach ($cc as $xd) {
		echo "$xd <br/>";
	}
	unset($cc[2]);
	foreach ($cc as $xd) {
		echo "$xd <br/>";
	}

	$cname = array("nome"=>"Carlos",
					"idade"=>21,
					"peso"=>50);

	$cname["fuma"] = true;

	foreach ($cname as $campo => $valor) {
		echo "$valor";
	}

	$n = array(array(1,2), array(3,4));
	$n [0][0] = $n[1][1];
?> 
</pre>
</body>
</html>