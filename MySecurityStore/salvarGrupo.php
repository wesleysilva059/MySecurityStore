<!-- Em desenvolvimento-->
<?php include("conexao.php");
	$idgrupo = $_POST["idgrupo"];
	$descricao = $_POST["txtDescricao"];
	
	function InsereGrupo($descricao){
		//define o comando SQL(insert)
		$sql = "INSERT INTO `grupo`(`descricao`) VALUES ('".$descricao."')";
		//abre a conexao com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
	}
	function AlteraGrupo($descricao, $idfabricante){
		//define o comando SQL (update)
		$sql = "UPDATE `grupo` SET descricao = '".$descricao."' WHERE idfabricante = ".$idgrupo;
		//abre a conexão com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
	}
	if ($idgrupo==0){//novo cadastro
		InsereGrupo($descricao);
	}else{//atualiza cadastro existente
		AlteraGrupo($descricao, $idgrupo);
	}
	header("location:mostraGruposCadastrados.php");
?>