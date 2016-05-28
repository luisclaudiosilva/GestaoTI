<?php
$teste = "teste";
$con = pg_connect("host='localhost' user='postgres' password='6871' dbname='gestao'");
if(!$con){
	echo "erro de conexao";
}

?>