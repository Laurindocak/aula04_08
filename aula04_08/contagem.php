<?php
require_once 'cabecalho.php';
?>
<form action="contagem.php" method="GET">
	<h1>Contagem</h1>
	<p>Digite um número Inicial:</p>
	<p> <input type="number" name="inicio" required></p>
	<p>Digite um número Final:</p>
	<p> <input type="number" name="fim"required></p>
	<p> <input type="submit" name="botao" value="Contar"></p>
</form>
<?php
if (isset($_GET['botao'])) {
	$inicio=$_GET['inicio'];
	$fim=$_GET['fim'];
	
$contador=$inicio;

    	if($inicio<$fim){
    	while($contador<=$fim){
    	echo "<p>$contador</p>";
    	$contador++;
    	}
    }else if($inicio>$fim){
    	while($contador>=$fim){
    	echo "<p>$contador</p>";
    	$contador--;
    	}
    }else{
		echo "<p>Os números sâo Iguais</p>";
	} 
}
?>

</body>
</html>