<?php
include('/conexao/conexao.php');

$select = "select eventos.id_evento, eventos.tipo, eventos.tema, eventos.integrante, eventos.responsavel, eventos.curso, to_char(eventos.data_evento, 'DD/MM/YYYY') AS data_evento, detalhes.resumo from eventos inner join detalhes on eventos.id_detalhe = detalhes.id_detalhe;";
$query = pg_query($con, $select);
$num = pg_num_rows($query);

?>
