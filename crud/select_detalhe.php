<?php

include_once ('../conexao/conexao.php');

$select = ("select detalhes.resumo, detalhes.detalhe from detalhes where id_detalhe=$id");
$query = pg_query($con, $select);


?>