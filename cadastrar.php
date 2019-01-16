<?php 
$login = $_POST['login'];
$email = $_POST['email'];
$senha = $_POST["senha"];

$sevidor = "localhost";
$usuario = "root";
$senharv = "";
$bd = "ticketbus";
//conectar ao servido de banco de dados.
$conexao = mysql_connect($sevidor,$usuario,$senharv);
//conectar ao banco de dados
mysql_select_db($bd,$conexao); 


 if( (isset ($_POST["login"])) && (isset($_POST["email"])) && (isset($_POST["senha"]))   )
     {
        
     
		$query =  "CALL cadastrar('$login','$email','$senha')"; 

		if($aux = mysql_query($query,$conexao)) //ve se da falha ao cadastrar os login
		{
			echo "<script> location = 'index.php'; </script>";

		}
		else
		{
			echo "<script>alert('Falha ao Realizar cadastro'); 
			window.history.back();
			</script>"; //aparece se cadastro direito 
		}

}else{
echo "<script>alert('Por Favor Preencha todos os campos'); 
window.history.back();
	</script>";
}
     
?> 