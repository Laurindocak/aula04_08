<?php
require_once 'cabecalho.php';
/*
/*$result=2*1;
echo "<b> 2 x 1 = $result</b>";
/*
$numero=1;
//while ($numero<=10) {
do {
	// code...
	$result=2*$numero;
	echo "<p> 2 x $numero = $result</p>";
	$numero++;
	// code...
}while($numero<=10);
*/
?>
<form action="tabuada.php" method="GET">
	<h1>Tabuada</h1>
	<p>Digite um número para a tabuada:</p>
	<p> <input type="number" name="tabuada" required></p>
	<p> <input type="submit" name="botao" value="Mostrar"> </p>

</form>
<?php

if (isset($_GET['botao'])) {
	// code...
	$tabuada=$_GET['tabuada'];

	$numero=1;
	while ($numero<=10) {
		// code...
		$result=$tabuada*$numero;
		echo "<p>$tabuada x $numero = $result</p>";
		$numero++;
	}
}

?>

</body>
</html>