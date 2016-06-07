<?php
include('../conexao/conexao.php');

$select = "select notas.id_nota, notas.pertinencia, notas.coerencia, notas.inovacao, notas.desenvoltura, notas.slide, notas.tempo, notas.media_notas from notas where id_evento=$id;";
$query = pg_query($con, $select);

?>