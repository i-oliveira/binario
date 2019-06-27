<?php
	echo "<h2><p>Resultado codificação : </p></h2>";
	$texto = $_GET['texto'];
	$string = $texto;
	$codificada = base64_encode($string);
	$decodificado = base64_decode($codificada);
	echo "<p>Resultado criptografado: " . $codificada . "<br> </p>";
	echo "<p>Resultado descriptografado: ".$decodificado."<br></p>";

	if($_GET){
		echo "<p>Resultado Binário: </p>";
		$texto = $_GET['texto']; 
		$numerosBinario = Array("0000", "0001", "0010", "0011", "0100", "0101","0110", "0111", "1000", "1001", "1010", "1011", "1100", "1101", "1110", "1111");
		// ordena as combinações em binário
		for ($i = 1;$i <= 10;$i++){
			for ($j = 0;$j <=15;$j++){
				$binario[] = " ".$numerosBinario[$i]." ".$numerosBinario[$j]; 
			}
		}
		
		// atribui ao array todos os caracteres imprimiveis da tabela ASCII
		for ( $i=32; $i <= 126; $i++ ) {
				$a[] = chr($i); //funçao (chr), retorna um caracter, de acordo com seu código na base Decimal
		}
		
		// converte dados enviados pelo usuário para binário
		for($i = 0;$i <(strlen($texto));$i++){
			
			foreach ($a as $key => $value){
			
				if($texto[$i] == $value){
					echo $binario[$key]; 
				}
				
			}
		}
	}   
?>