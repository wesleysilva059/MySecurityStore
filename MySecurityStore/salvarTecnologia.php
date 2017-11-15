<!-- Em desenvolvimento-->
<?php include("conexao.php");
	$idtecnologia = $_POST["idtecnologia"];
	$descricao = $_POST["txtDescricao"];
	$caracteristicas = $_POST["txtCaracteristicas"];
	
	function InsereTecnologia($descricao, $caracteristicas){
		//define o comando SQL(insert)
		$sql = "INSERT INTO `tecnologias`(`descricao`, `caracteristicas`) VALUES ('".$descricao."', '".$caracteristicas."')";
		//abre a conexao com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
	}
	function AlteraTecnologia($descricao, $caracteristicas, $idtecnologia){
		//define o comando SQL (update)
		$sql = "UPDATE `tecnologias` SET descricao = '".$descricao."', caracteristicas = '".$caracteristicas."' WHERE idtecnologia = ".$idtecnologia;
		//abre a conexão com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
	}
	if ($idtecnologia==0){//novo cadastro
		InsereTecnologia($descricao,$caracteristicas);
	}else{//atualiza cadastro existente
		AlteraTecnologia($descricao, $caracteristicas, $idtecnologia);
	}
	header("location:mostraTecnologiasCadastradas.php");
?>