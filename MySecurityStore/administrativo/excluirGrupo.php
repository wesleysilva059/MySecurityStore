<!--IMPLEMENTANDO-->
<?php include("conexao.php");
$idgrupo = $_GET["idgrupo"];
	function ExcluiGrupo($idgrupo){
		// Define o comando SQL (delete)
		$sql =  "DELETE FROM `grupo` WHERE `grupo`.`idgrupo` =".$idgrupo;
		$conexao = AbreConexao(); // Abre conexão com o BD
		// Executa o comando SQL 
		$conexao->query($sql);
		$conexao->close(); // Fecha a conexão com o BD
	}
//exclui pessoa do banco de dados
ExcluiGrupo($idgrupo);
//redireciona para a página de lista de pessoas
header("location:mostraGruposCadastrados.php");
?>