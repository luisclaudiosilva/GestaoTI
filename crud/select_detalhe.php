<?php

include_once ('../conexao/conexao.php');

$select = ("select detalhes.id_detalhe, detalhes.resumo, detalhes.detalhe from detalhes where id_detalhe=$id");
$query = pg_query($con, $select);


?>