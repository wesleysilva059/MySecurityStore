<!--IMPLEMENTANDO-->
<?php include("conexao.php");
$Codigo = $_GET["Codigo"];
//recebe o nome da foto que será excluida da pasta
$foto = $_GET["foto"];
//verifica se eesta foto existe na pasta
//if(file_exists('"fotos/"'.$foto)){
if(file_exists("fotos/".$foto)){
	//remove a foto da pasta
	//unlink('"fotos/"'.$foto);
	unlink("fotos/".$foto);
}
	function ExcluiProduto($Codigo){
		// Define o comando SQL (delete)
		$sql =  "DELETE FROM produtos,grupo,fabricantes WHERE produtos.Codigo = ".$Codigo;
		$conexao = AbreConexao(); // Abre conexão com o BD
		// Executa o comando SQL 
		$conexao->query($sql);
		$conexao->close(); // Fecha a conexão com o BD
	}
//exclui pessoa do banco de dados
ExcluiProduto($Codigo);
//redireciona para a página de lista de pessoas
header("location:mostraProdutosCadastrados.php");
?>