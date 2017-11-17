<!-- Em desenvolvimento-->
<?php include("conexao.php");
	$idfornecedor = $_POST["idfornecedor"];
	$razaosocial = $_POST["txtRazaoSocial"];
	$nomefantasia = $_POST["txtNomeFantasia"];
	$cnpj = $_POST["txtCNPJ"];
	$inscest = $_POST["txtInscEst"];
	$idendereco = $_POST["txtIdEndereco"];
	
	function InsereFornecedor($razaosocial, $nomefantasia, $cnpj, $inscest, $idendereco){
		//define o comando SQL(insert)
		$sql = "INSERT INTO `fornecedor`(`razaosocial`, `nomefantasia`, `cnpj`, `inscest`, `idendereco`) VALUES ('".$razaosocial."', '".$nomefantasia."', '".$cnpj."', '".$inscest."','".$idendereco."')";
		//abre a conexao com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
	}
	function AlteraFornecedor($razaosocial, $nomefantasia, $cnpj, $inscest, $idendereco, $idfornecedor){
		//define o comando SQL (update)
		$sql = "UPDATE fornecedor SET razaosocial = '".$razaosocial."', nomefantasia = '".$nomefantasia."', cnpj = '".$cnpj."', inscest = '".$inscest."', idendereco = '".$idendereco."' WHERE idfornecedor = ".$idfornecedor;
		//abre a conexão com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
	}
	if ($idfornecedor==0){//novo cadastro
		InsereFornecedor($razaosocial, $nomefantasia, $cnpj, $inscest, $idendereco);
	}else{//atualiza cadastro existente
		AlteraFornecedor($razaosocial, $nomefantasia, $cnpj, $inscest, $idendereco, $idfornecedor);
	}
	header("location:mostraFornecedoresCadastrados.php");
?>