<?php
include('/crud/select.php');

echo "<br/>";

echo "<div id='panel'><table id='tabela' border='1'>
<thead>
<tr id='linha1'>
	<td></td>
	<td>Tipo</td>
	<td>Tema</td>
	<td>Integrante(s)</td>
	<td>Responsável</td>
	<td>Curso</td>
	<td>Data</td>
	<td>Detalhes</td>
</tr>
</thead>";
while ($linha = pg_fetch_array($query)) {
	
	echo "<tbody><tr>
	     <td>".$linha['id_evento']."</td>
		 <td>".$linha['tipo']."</td>
	     <td>".$linha['tema']."</td>
	     <td>".$linha['integrante']."</td>
	     <td>".$linha['responsavel']."</td>
	     <td>".$linha['curso']."</td>
	     <td>".$linha['data_evento']."</td>
	     <td>".$linha['resumo']."</td>
	     </tr>";
}

echo "</tbody></table></div>";

pg_close($con);

?>

