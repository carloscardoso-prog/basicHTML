<?php
/*
	$nome = "Aleatorio";

	echo "meu nome é ".$nome;
	echo "<br>";
	
	if($nome == "Carlos"){
		echo "true";
	}else{
		echo "false";
	}
	echo "<br>";
	
	for($i = 0; $i < 10; $i++){
		echo $i;
		echo "<hr>";
		echo "<br>";
	}

	$i = 0;
	while($i < 10){
		echo $i;
		echo "<br>";
		$i++;
	}
*/	
	echo "<br>";
	
	function printNumero($n){
		echo $n;
	}
	
	printNumero(30);
	
	class Pessoa{
		
		public $nome;
		public $idade;
		
		public function __construct($nome, $idade){
			$this->nome = $nome;
			$this->idade = $idade;
			echo "<br>";
		}
		
		public function printNameAge(){
			echo $this->nome;
			echo "<br>";
			echo $this->idade;
		}
	}
	
	$pessoa = new Pessoa("carlos","21");
	
	$pessoa->printNameAge();
	echo "<br>";
	
	$arr = ['aa','bb'];
	echo $arr[0];
	
?>