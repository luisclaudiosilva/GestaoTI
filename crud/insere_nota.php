<?php
include_once ('../conexao/conexao.php');

include_once('../crud/select_notas.php');

$resel = pg_fetch_array($query);

If(!$resel){
$insere = "insert into notas (pertinencia, coerencia, inovacao, desenvoltura, slide, tempo, media_notas, id_evento) values ($pe, $co, $in, $de, $sl, $te, $me, $id);";
$query = pg_query($con, $insere);
}



?>