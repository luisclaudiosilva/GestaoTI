<?php
include('../conexao/conexao.php');

$select = "select eventos.id_evento, eventos.tipo, eventos.tema, eventos.integrante, eventos.responsavel, eventos.curso, to_char(eventos.data_evento, 'DD/MM/YYYY') AS data_evento from eventos where id_evento=$id;";
$query = pg_query($con, $select);
$num = pg_num_rows($query);

?>