<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST["mensagem"];

$sevidor = "localhost";
$usuario = "root";
$senharv = "";
$bd = "ticketbus";
//conectar ao servido de banco de dados.
$conexao = mysql_connect($sevidor,$usuario,$senharv);
//conectar ao banco de dados
mysql_select_db($bd,$conexao); 


 if( (isset ($_POST["nome"])) && (isset($_POST["email"]))  && (isset($_POST["mensagem"]))  )
     {
        
     
		$query =  "CALL mensagem('$nome','$email','$mensagem')"; 

		if(mysql_query($query,$conexao)) 
		{
			echo "<script>alert('Mensagem enviada com sucesso'); 
			window.history.back();
			</script>"; 

		}
		else
		{
			echo "<script>alert('Falha ao Realizar cadastro'); 
			window.history.back();
			</script>"; 
		}

}else{
echo "<script>alert('Por Favor Preencha todos os campos'); 

	</script>";
}
     
?> 