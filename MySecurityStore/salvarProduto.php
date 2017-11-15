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
	$pcusto = $_POST["txtPCusto"];
	$pmedio = $_POST["txtPMedio"];
	$pvenda = $_POST["txtPVenda"];
	$estoque = $_POST["txtEstoque"];
	$estmin = $_POST["txtEstMin"];
	$estideal = $_POST["txtEstIdeal"];
	$codtecnologia = $_POST["txtCodTec"];
	function InsereProduto($codbarras, $marca, $modelo, $grupo, $descricao, $garantia, $obs, $idfabricante, $pesoliquido, $pesoembalagem,$pcusto,$pmedio,$pvenda,$data,$codprod,$codtecnologia,$estoque,$estmin,$estideal){
		//define o comando SQL(insert)
		$sql = "INSERT INTO `produtos`(`codbarras`, `marca`, `modelo`, `grupo`, `descricao`, `garantia`, `obs`, `idfabricante`, `pesoliquido`, `pesoembalagem`) VALUES ('".$codbarras."', '".$marca."', '".$modelo."', '".$grupo."', '".$descricao."', '".$garantia."', '".$obs."', '".$idfabricante."', '".$pesoliquido."', '".$pesoembalagem."')";
		//abre a conexao com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
            //resgatar ultimo id  select * from produtos order by Codigo pegar o comando de pegar o ultimo registro e resgatar id
		$sqlCod = "SELECT MAX(Codigo) AS 'codprod' FROM produtos";

		$sqlPreco = "INSERT INTO 'prodprecos'('pcusto','pmedio','pvenda','data','idproduto') VALUES('".$pcusto."', '".$pmedio."','".$pvenda."', '".NOW()."', '".$codprod."')";
		$sqlTec = "INSERT INTO 'prodtecnologia'('codtecnologia','codproduto') VALUES('".$codtecnologia."','".$codprod."')";
		$sqlEstoque="INSERT INTO'prodestoque'('estoque','estmin','estideal','idproduto') VALUES('".$estoque."','".$estmin."','".$estideal."','".$codprod."')";
		//abre a conexao com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sqlPreco);
		$conexao->query($sqlTec);
		$conexao->query($sqlEstoque);
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
		InsereProduto($codbarras, $marca, $modelo, $grupo, $descricao, $garantia, $obs, $idfabricante, $pesoliquido, $pesoembalagem, $pcusto, $pmedio, $pvenda, $codtecnologia, $estoque, $estmin, $estideal);
	}else{//atualiza cadastro existente
		AlteraProduto($codbarras, $marca, $modelo, $grupo, $descricao, $garantia, $obs, $idfabricante, $pesoliquido, $pesoembalagem,$pcusto,$pmedio,$pvenda,$data,$codprod,$codtecnologia,$estoque,$estmin,$estideal,$Codigo);
	}
	header("location:mostraProdutosCadastrados.php");
?>