<?php
include('/conexao/conexao.php');

$select = "select eventos.id_evento, eventos.tipo, eventos.tema,eventos.integrante, eventos.responsavel, eventos.curso, to_char(eventos.data_evento, 'DD/MM/YYYY' ) AS data_evento from notas
right join eventos
on notas.id_evento = eventos.id_evento
where notas.id_evento is null;";

$query = pg_query($con, $select);


?>