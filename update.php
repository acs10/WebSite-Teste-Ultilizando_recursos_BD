<?php 
$id=$_POST['id'];
$login = $_POST['login'];
$email = $_POST['email'];
$senha = $_POST["senha"];

$con = mysql_connect('localhost', 'root', '') or
    die('Não foi possível conectar');

mysql_select_db("ticketbus", $con);

mysql_query("CALL alterar($id,'$login', '$email','$senha')");

if(mysql_affected_rows() > 0){
	echo "<script> location='index.php'; </script>";
  }else{
	echo "<script>alert('Aviso: Falha ao Realizar Mudancas '); 
  
	</script>";
  }
  


mysql_close($con);

?>

