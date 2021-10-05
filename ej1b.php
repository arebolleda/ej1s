<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<BODY>
<?php
$num="168";
$resto=0;
while($num>0){
		
		$resultado=$num/2; #resultado 
		$resto=$resto.$num%2; 	#resto division
		$num=intval($resultado);	#asignamos al num el resultado 
	
}
#recorro el array del final al principio 
for ($i = count($resto) - 1; $i >= 0; $i--) {
			// Y vamos concatenando cada carácter a la nueva cadena
			$invertida += $resto.charAt($i);
		}

echo ($invertida);

?>
</BODY>
</HTML>
