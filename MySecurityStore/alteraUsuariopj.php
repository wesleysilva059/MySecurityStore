<?php
	session_start();

	include("conexao.php");

	$idpj = $_SESSION['id'];
	$razaosocial = $_POST["razaosocial"];
	$nfantasia = $_POST["nfantasia"];
	$cnpj = $_POST["cnpj"];
	$inscEst = $_POST["inscEst"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	$celular = $_POST["celular"];
	$cep = $_POST["cep"];
	$endereco = $_POST["endereco"];
	$numero = $_POST["nro_endereco"];
	$complemento = $_POST["complemento_end"];
	$referencia = $_POST["referencia_end"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$pais = $_POST["pais"];	
	$dtcadastro = date('Y-m-d');
	$consulta = $conexao->query("SELECT email,idlogin FROM login WHERE email='$email'");

	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

	if($consulta->rowCount()==1)
	{
		try{
			$idlogin = $exibe['idlogin'];
			
			$incluir = $conexao->query("
			UPDATE pjuridicadados SET razaosocial = '$razaosocial',
									nomefantasia = '$nfantasia',
									cnpj = '$cnpj',
									inscest = '$inscEst',
									dtcadastro = '$dtcadastro'
			WHERE idpjuridica = '$idpj';
			
			UPDATE pjuridicacontatos SET telefonefixo = '$telefone',
										telefonecelular = '$celular' 
			WHERE idcliente = '$idpj';
			
			UPDATE enderecos SET logradouro = '$endereco',
									numero = '$numero',
									bairro = '$bairro',
									cidade = '$cidade', 
									cep = '$cep',
									uf = '$estado',
									pais = '$pais',
									referencia = '$referencia', 
									complemento = '$complemento' WHERE	idlogin = '$idlogin'");
			
			header('location:ok.php');
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	} 
	else
	{
		try{
			$idlogin = $exibe['idlogin'];
			
			$incluir = $conexao->query("
			UPDATE pjuridicadados SET razaosocial = '$razaosocial',
									nomefantasia = '$nfantasia',
									cnpj = '$cnpj',
									inscest = '$inscEst',
									dtcadastro = '$dtcadastro'
			WHERE idpjuridica = '$idpj';
			
			UPDATE pjuridicacontatos SET telefonefixo = '$telefone',
										telefonecelular = '$celular' 
			WHERE idcliente = '$idpj';
			
			UPDATE login SET email = '$email'
			WHERE idcliente = '$idpj';
			
			UPDATE enderecos SET logradouro = '$endereco',
									numero = '$numero',
									bairro = '$bairro',
									cidade = '$cidade', 
									cep = '$cep',
									uf = '$estado',
									pais = '$pais',
									referencia = '$referencia', 
									complemento = '$complemento' WHERE	idlogin = '$idlogin'");
			
			header('location:ok.php');
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>