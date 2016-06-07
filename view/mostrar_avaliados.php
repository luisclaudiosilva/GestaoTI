<!DOCTYPE html>
<head>
<!--
	Projeto de listagem e atribuição de notas dos eventos da semana de gestão da faculdade.
	Equipe: Luis Cláudio, Yago Marques, Keith Narjara, Fernanda Oliveira
	Data criação: 27 de maio 2016
	Professor: Alexandre Vieira
-->
<meta charset="utf-8"/>
<title>Semana de Gestão</title>
<link rel="stylesheet" type="text/css" href="../view/estilo/est.css"/>
<link rel="stylesheet" href="../view/css/bootstrap.css">
<script type="text/javascript" src="../view/js/script.js"></script>

</head>

<body>

<div class="jumbotron">
<h1>Semana de Gestão</h1>

</div>

<div class="container">
	<h2>Eventos Avaliados</h2>
	<?php

include('../crud/select_avaliados2.php');
echo "<br/>";

echo "<div id='panel'><table class='table table-hover table-bordered table-striped' border='1'>
<thead>

<tr id='linha1'>
	
	<td>Tipo</td>
	<td>Tema</td>
	<td>Integrante(s)</td>
	<td>Responsável</td>
	<td>Curso</td>
	<td>Data</td>
	<td>Média</td>
	<td>Detalhes</td>
</tr>
</thead>";
while ($linha = pg_fetch_array($query)) {
	
	echo "<tbody><tr>
	     
		 <td>".$linha['tipo']."</td>
	     <td>".$linha['tema']."</td>
	     <td>".$linha['integrante']."</td>
	     <td>".$linha['responsavel']."</td>
	     <td>".$linha['curso']."</td>
	     <td>".$linha['data_evento']."</td>
	     <td>".$linha['media_notas']."</td>
	     <td id='td_link'><a href='detalhes.php?id=".$linha['id_evento']."'>Ver</a></td>
	     </tr>";
}

echo "</tbody></table></div>";

pg_close($con);
?>
<div class='row'>
<input type='button' class='btn btn-default' value='Voltar' onclick='chama();' />
</div>

</div>	


</body>

</html>