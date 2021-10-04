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
for($x=0;$x<35;$x++) {
     for($y=0;$y<9;$y++) {
        if ($y == 0) {
            $ibex35[$x][$y] = chr(rand(ord($desdeletra),ord($hastaletra)));
        } else {
            $ibex35[$x][$y] = rand(0,1000);
        }
     }
}			


echo '<table>
        <tr>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>VAR.(%)</th>
            <th>VAR. (€)</th>
            <th>VOLUMEN (€)</th>
            <th>CAP.</th>
            <th>PER</th>
            <th>RENT. /DIV.</th>
            <th>HORA</th>
        </tr>';
        
foreach($ibex35 as $indice => $detalles) {
    echo '<tr>';
    foreach($detalles as $valor)
	{
		echo "<td> $valor </td>";
	}
	echo '</tr>';
}

echo '</table>';

?>
</BODY>
</HTML>