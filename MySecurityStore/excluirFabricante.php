<!--IMPLEMENTANDO-->
<?php include("conexao.php");
$idfabricante = $_GET["idfabricante"];
	function ExcluiFabricante($idfabricante){
		// Define o comando SQL (delete)
		$sql =  "DELETE FROM `fabricantes` WHERE `fabricantes`.`idfabricante` =".$idfabricante;
		$conexao = AbreConexao(); // Abre conexão com o BD
		// Executa o comando SQL 
		$conexao->query($sql);
		$conexao->close(); // Fecha a conexão com o BD
	}
//exclui pessoa do banco de dados
ExcluiFabricante($idfabricante);
//redireciona para a página de lista de pessoas
header("location:mostraFabricantesCadastrados.php");
?>