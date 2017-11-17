<!--IMPLEMENTANDO-->
<?php include("conexao.php");
$idtecnologia = $_GET["idtecnologia"];
	function ExcluiTecnologia($idtecnologia){
		// Define o comando SQL (delete)
		$sql =  "DELETE FROM `tecnologias` WHERE `tecnologias`.`idtecnologia` =".$idtecnologia;
		$conexao = AbreConexao(); // Abre conexão com o BD
		// Executa o comando SQL 
		$conexao->query($sql);
		$conexao->close(); // Fecha a conexão com o BD
	}
//exclui pessoa do banco de dados
ExcluiTecnologia($idtecnologia);
//redireciona para a página de lista de pessoas
header("location:mostraTecnologiasCadastradas.php");
?>