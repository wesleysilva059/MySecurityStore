<!-- Em desenvolvimento-->
<?php include("conexao.php");
	$Codigo = $_POST["Codigo"];
	$codbarras = $_POST["txtCodBarras"];
	$marca = $_POST["txtMarca"];
	$modelo = $_POST["txtModelo"];
	$grupo = $_POST["txtGrupo"];
	$descricao = $_POST["txtDescricao"];
	$garantia = $_POST["txtGarantia"];
	$obs = $_POST["txtObservacao"];
	$idfabricante = $_POST["txtIdFabricante"];
	$pesoliquido = $_POST["txtPesoLiquido"];
	$pesoembalagem = $_POST["txtPesoEmbalagem"];
	function InsereProduto($codbarras, $marca, $modelo, $grupo, $descricao, $garantia, $obs, $idfabricante, $pesoliquido, $pesoembalagem){
		//define o comando SQL(insert)
		$sql = "INSERT INTO `produtos`(`codbarras`, `marca`, `modelo`, `grupo`, `descricao`, `garantia`, `obs`, `idfabricante`, `pesoliquido`, `pesoembalagem`) VALUES ('".$codbarras."', '".$marca."', '".$modelo."', '".$grupo."', '".$descricao."', '".$garantia."', '".$obs."', '".$idfabricante."', '".$pesoliquido."', '".$pesoembalagem."')";
            //resgatar ultimo id  select * from produtos order by Codigo pegar o comando de pegar o ultimo registro e resgatar id
			//cadastrar prodpreco
		
		//abre a conexao com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
	}
	function AlteraProduto($codbarras, $marca, $modelo, $grupo, $descricao, $garantia, $obs, $idfabricante, $pesoliquido, $pesoembalagem, $Codigo){
		//define o comando SQL (update)
		$sql = "UPDATE produtos SET codbarras = '".$codbarras."', marca = '".$marca."', modelo = '".$modelo."', grupo = '".$grupo."', descricao = '".$descricao."', garantia = '".$garantia."', obs = '".$obs."', idfabricante = '".$idfabricante."', pesoliquido = '".$pesoliquido."', pesoembalagem = '".$pesoembalagem."'WHERE Codigo = ".$Codigo;
		//abre a conexão com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
	}
	if ($Codigo==0){//novo cadastro
		InsereProduto($codbarras, $marca, $modelo, $grupo, $descricao, $garantia, $obs, $idfabricante, $pesoliquido, $pesoembalagem);
	}else{//atualiza cadastro existente
		AlteraProduto($codbarras, $marca, $modelo, $grupo, $descricao, $garantia, $obs, $idfabricante, $pesoliquido, $pesoembalagem, $Codigo);
	}
	header("location:mostraProdutosCadastrados.php");
?>