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

	function InserePessoa($nome,$sexo,$dataNasc,$cpf,$rg,$orgaoEmissor,$email,$telefone,$celular,$cep,$endereco,$numero,$complemento,$referencia,$bairro,$cidade,$estado,$pais,$senha){
		
		$sql = "insert into usuario_pf(nome, sexo, dtnasc, cpf, rg_nro, rg_emissao, email, telefone, celular, cep, endereco, nro_endereco, complemento_end, referencia_end, bairro, cidade, estado, pais, senha) values ('$nome','$sexo','$dataNasc','$cpf','$rg','$orgaoEmissor','$email','$telefone','$celular','$cep','$endereco','$numero','$complemento','$referencia','$bairro','$cidade','$estado','$pais','$senha')";

		$conexao = AbreConexao();
		$resultado = $conexao->query($sql);
		$conexao->close();
	}

	

	InserePessoa($nome,$sexo,$dataNasc,$cpf,$rg,$orgaoEmissor,$email,$telefone,$celular,$cep,$endereco,$numero,$complemento,$referencia,$bairro,$cidade,$estado,$pais,$senha);
?>