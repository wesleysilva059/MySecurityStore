<!--IMPLEMENTANDO-->
<?php include("conexao.php");
$idfornecedor = $_GET["idfornecedor"];
	function ExcluiFornecedor($idfornecedor){
		// Define o comando SQL (delete)
		$sql =  "DELETE FROM `fornecedor` WHERE `fornecedor`.`idfornecedor` =".$idfornecedor;
		$conexao = AbreConexao(); // Abre conexão com o BD
		// Executa o comando SQL 
		$conexao->query($sql);
		$conexao->close(); // Fecha a conexão com o BD
	}
//exclui pessoa do banco de dados
ExcluiFornecedor($idfornecedor);
//redireciona para a página de lista de pessoas
header("location:mostraFornecedoresCadastrados.php");
?>