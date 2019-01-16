<?php
$sevidor = "localhost";
$usuario = "root";
$senharv = "";
$bd = "ticketbus";
//conectar ao servido de banco de dados.
$conecao = mysql_connect($sevidor,$usuario,$senharv);
//conectar ao banco de dados

$sql=mysql_select_db($bd,$conecao);
$temp="teste passou isso";
?>