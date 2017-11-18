<?php

	include("conexao.php");

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
	$senha = $_POST["senha_2"];
	$dtAtual = date('d/m/Y');

	$consulta = $conexao->query("SELECT email FROM login WHERE email='$email'");

	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

	if($consulta->rowCount()==1)
	{
		header('location:erro1.php');
	} 
	else
	{
		$incluir = $conexao->query("
			INSERT INTO pfisicadados (nome,sexo,dtnasc,cpf,rg,orgEmissor,dtcadastro)
			VALUES ('$nome','$sexo','$dataNasc','$cpf','$rg','$orgaoEmissor','$dtAtual')");
		
		//$pegaId = $conexao->query("SELECT LAST_INSERT_ID() INTO pfisicadados");
		//$exibe2 = $pegaId->fetch(PDO::FETCH_ASSOC);
		
		//echo $exibe2;
		
		header('location;ok.php');
	}

?>