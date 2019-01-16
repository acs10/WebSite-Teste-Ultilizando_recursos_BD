<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

$host = "localhost";
$user = "root";
$pass = "";
$bd = "ticketbus";
$conexao = mysql_connect($host,$user,$pass);
mysql_select_db($bd,$conexao);

$consulta = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
$resultado = mysql_query($consulta,$conexao);
$reg = mysql_fetch_array($resultado);
$count = mysql_num_rows($resultado);
if($count == 1){
    session_start();
echo "<script> location = 'inicial.php'; </script>";
} else {
echo "<script>
alert ('Usuario nao Cadastrado ...');
 location = 'index.php'; </script>";
}
mysql_close($conexao);
?>