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
<div class="geral">

<div class="jumbotron">
<h1>Semana de Gestão</h1>
</div>

<div class="container">
	<h2>Eventos Avaliados</h2>
<?php
$id = $_GET['id'];

$pe = $_POST['pe'];
$co = $_POST['co'];
$in = $_POST['in'];
$de = $_POST['de'];
$sl = $_POST['sl'];
$te = $_POST['te'];
$me = $_POST['me'];

include('../crud/insere_nota.php');
pg_close($con);

$id = $_GET['id'];
include('../crud/select_evento.php');


echo "<div id='panel_avalia'><table class='table table-hover table-bordered table-striped' border='1'>
<thead>
<tr id='linha1'>
	
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
	     
		 <td>".$linha['tipo']."</td>
	     <td>".$linha['tema']."</td>
	     <td>".$linha['integrante']."</td>
	     <td>".$linha['responsavel']."</td>
	     <td>".$linha['curso']."</td>
	     <td>".$linha['data_evento']."</td>
	     <td id='td_link'><a href='detalhes.php?id=".$linha['id_evento']."'>Ver</a></td>
	     </tr>";
}

echo "</tbody></table></div>";

pg_close($con);

include('../crud/select_notas.php');
echo "<h2>Notas</h2>";

echo "<div id='panel_avalia'><table class='table table-hover table-bordered table-striped' border='1'>
<thead>
<tr id='linha1'>
	<td></td>
	<td>Pertinencia</td>
	<td>Coerencia</td>
	<td>Inovação</td>
	<td>Desenvoltura</td>
	<td>Slide</td>
	<td>Tempo</td>
	<td>Média</td>
</tr>
</thead>";
while ($linha = pg_fetch_array($query)) {
	
	echo "<tbody><tr>
	     <td>Notas</td>
		 <td>".$linha['pertinencia']."</td>
	     <td>".$linha['coerencia']."</td>
	     <td>".$linha['inovacao']."</td>
	     <td>".$linha['desenvoltura']."</td>
	     <td>".$linha['slide']."</td>
	     <td>".$linha['tempo']."</td>
	     <td>".$linha['media_notas']."</td>
	     </tr>
	     ";
}

echo "</tbody></table></div>";

pg_close($con);

?>
<div class='row'>
<input type='button' class='btn btn-default2' value='Voltar' onclick='chama();'/>
</div>

</div>
</body>

</html>