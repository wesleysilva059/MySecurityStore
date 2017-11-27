<?php
	session_start();

	include("conexao.php");

	$idpf = $_SESSION['id'];
	$nome = $_POST["nome"];
	$sexo = $_POST["sexo"];
	$dataNasc = $_POST["dtnasc"];
	$cpf = $_POST["cpf"];
	$rg = $_POST["rg_nro"];
	$orgaoEmissor = $_POST["rg_emissao"];
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
	
	$consulta = $conexao->query("SELECT email,idlogin FROM login WHERE email='$email'");

	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

	if($consulta->rowCount()==1)
	{
		try{
			$idlogin = $exibe['idlogin'];
			
			$incluir = $conexao->query("
			UPDATE pfisicadados SET nome = '$nome',
									sexo = '$sexo',
									dtnasc = '$dataNasc',
									cpf = '$cpf',
									rg = '$rg',
									orgEmissor = '$orgaoEmissor'
			WHERE idpfisica = '$idpf';
			
			UPDATE pfisicacontatos SET 	telefonefixo = '$telefone',
										telefonecelular = '$celular' 
			WHERE idcliente = '$idpf';
			
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
			UPDATE pfisicadados SET nome = '$nome',
									sexo = '$sexo',
									dtnasc = '$dataNasc',
									cpf = '$cpf',
									rg = '$rg',
									orgEmissor = '$orgaoEmissor'
			WHERE idpfisica = '$idpf';
			
			UPDATE pfisicacontatos SET 	telefonefixo = '$telefone',
										telefonecelular = '$celular' 
			WHERE idcliente = '$idpf';
			
			UPDATE login SET email = '$email'
			WHERE idcliente = '$idpf';
			
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