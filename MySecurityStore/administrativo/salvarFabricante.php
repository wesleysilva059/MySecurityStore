<!-- Em desenvolvimento-->
<?php include("conexao.php");
	$idfabricante = $_POST["idfabricante"];
	$descricao = $_POST["txtDescricao"];
	$origem = $_POST["txtOrigem"];
	
	function InsereFabricante($descricao,$origem){
		//define o comando SQL(insert)
		$sql = "INSERT INTO `fabricantes`(`descricao`, `origem`) VALUES ('".$descricao."', '".$origem."')";
		//abre a conexao com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
	}
	function AlteraFabricante($descricao,$origem,$idfabricante){
		//define o comando SQL (update)
		$sql = "UPDATE `fabricantes` SET descricao = '".$descricao."', origem = '".$origem."' WHERE idfabricante = ".$idfabricante;
		//abre a conexão com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
	}
	if ($idfabricante==0){//novo cadastro
		InsereFabricante($descricao, $origem);
	}else{//atualiza cadastro existente
		AlteraFabricante($descricao, $origem, $idfabricante);
	}
	header("location:mostraFabricantesCadastrados.php");
?>