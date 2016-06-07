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
<link rel="stylesheet" type="text/css" href="view/estilo/est.css"/>
<link rel="stylesheet" href="view/css/bootstrap.css">
<script type="text/javascript" src="view/js/script.js"></script>

</head>
<body>
<div class="jumbotron">
<h1>Semana de Gestão</h1>
<h2>Este sistema tem o objetivo de mostrar e avaliar os eventos da Semana de Gestão e Tecnologia.</h2>

</div>

<div class="container">
<h2 class="bg-primary text-center">Avaliar eventos</h2>
<select onchange="window.location=this.value;" id="menu1" class="form-control" name="menu1">
    
   <?php 
   include('crud/select_avaliar.php');
   echo "<option value='#'>Selecione...</option>"; ?>
    <?php
     while($prod = pg_fetch_array($query)) { ?>
    <option value="view/avalia.php?id=<?php echo $prod['id_evento'] ?>"><?php echo $prod['tema'] ?></option>
    <?php } ?>
  </select>
<br><br><br>

<h2 class="bg-primary2 text-center">Eventos avaliados</h2>

  <select onchange="window.location=this.value;" id="menu1" class="form-control" name="menu1">
    
   <?php 
   include('crud/select_avaliados.php');
   echo "<option value='#'>Selecione...</option>"; ?>
    <?php
     while($prod = pg_fetch_array($query)) { ?>
    <option value="view/avalia.php?id=<?php echo $prod['id_evento'] ?>"><?php echo $prod['tema'] ?></option>
    <?php } 
    echo "<option value='view/mostrar_avaliados.php'>Todos</option>";
    ?>
  </select>

</div>	
</div>	

</body>

</html>