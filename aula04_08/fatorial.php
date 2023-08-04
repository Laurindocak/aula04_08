<?php
require_once 'cabecalho.php';

?>
<form action="fatorial.php" method="GET">
	<h1>Fatorial</h1>
	<p>Digite um número para a Calcular o fatorial:</p>
	<p> <input type="number" name="numero"required></p>
	<p> <input type="submit" name="botao" value="Calcule"> </p>
</form>
<?php

	if(isset($_GET['botao'])) {
		$numero=$_GET['numero'];
		$fatorial=1;
	for($contador=$numero; $contador>=1; $contador--){ 
		$fatorial=$fatorial*$contador;
	}
	echo "<h2>o fatorial é: $fatorial</h2>";

/*
	function fatorial($number){
    if($number <= 1){  
        return 1;  
    }  
    else{  
        return $number * factorial($number - 1);  
    }  
}
  
$number=10;
$fatorial = fatorial($number);
echo "fatorial = $fatorial";
*/
	}

?>
</body>
</html>