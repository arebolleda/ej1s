<HTML>
<HEAD><TITLE> EJ3-Array </TITLE></HEAD>
<BODY>

<?php
//Array asociativo almacenando INDITEX también para poder a posteriorí seguir almacenando la info de
//otras empresas creo que sería.
//La conclusión ideal seria hacer un array de arrays. (50 filas y 9 columnas);
//Necesito que sea de manera aleatoria.lo primero aleatorio string porque es nombre empresa

// $ibex35=array(

// array('inditex',1,2,3,4,5,6,7,3),
// array('acciona',1,2,3,4,5,6,7,3),
// array('acs',1,2,3,4,5,6,7,3),
// array('aena',1,2,3,4,5,6,7,3),
// array('bbva',1,2,3,4,5,6,7,3),
// array('caixabank',1,2,3,4,5,6,7,3)


// );
$ibex35=array(array());

$desdeletra="a";
$hastaletra="z";
for($x=0;$x<6;$x++){
     for($y=0;$y<9;$y++)
		 // if($x==1){
			 // $ibex35[$x][$y]=chr(rand(ord($desdeletra),ord($hastaletra))); 
		 // }
          $ibex35[$x][$y]=rand(0,1000);

}			

foreach($ibex35 as $producto => $detalles)
{
	echo "<h1> $producto </h1>";
 
    foreach($detalles as $indice => $valor)
	{
		echo "<p> $indice:$valor </p>";
	}
}




?>
</BODY>
</HTML>