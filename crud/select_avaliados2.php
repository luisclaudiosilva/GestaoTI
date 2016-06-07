<?php
include('../conexao/conexao.php');

$select = "select eventos.id_evento, eventos.tipo, eventos.tema, eventos.integrante, eventos.responsavel, eventos.curso, to_char(eventos.data_evento, 'DD/MM/YYYY' ) AS data_evento , notas.media_notas from notas inner join eventos on notas.id_evento = eventos.id_evento order by notas.media_notas desc;";

$query = pg_query($con, $select);

?>