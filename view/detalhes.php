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
	<h2>Detalhes do Evento</h2>
<?php	
$id = $_GET['id'];


include_once("../crud/select_detalhe.php");

while ($linha = pg_fetch_array($query)) {

	echo "<div id='panel_det'>
			</br>".$linha['resumo']."</br></br>
				".$linha['detalhe'];
		
}


echo "<div class='row'>
<input type='button' class='btn btn-default2' value='Voltar' onclick='chama2($id);' />

</div>";
?>
</body>

</html>


