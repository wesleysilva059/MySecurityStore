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
	$dtAtual = date('Y-m-d');

	$consulta = $conexao->query("SELECT email FROM login WHERE email='$email'");

	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

	if($consulta->rowCount()==1)
	{
		header('location:erro1.php');
	} 
	else
	{
		try{
		$incluir = $conexao->query("
			INSERT INTO pfisicadados (nome,sexo,dtnasc,cpf,rg,orgEmissor,dtcadastro)
			VALUES ('$nome','$sexo','$dataNasc','$cpf','$rg','$orgaoEmissor','$dtAtual');
			select last_insert_id() into @id;
			INSERT INTO `pfisicacontatos` (`tipoemail`, `email`, `tipotelefone`, `fone`, `idcliente`) VALUES (1,'$email',1,'$telefone',@id);
			INSERT INTO `login`(`adm`,`tipousuario`, `email`, `senha`, `idcliente`) VALUES (0,1,'$email','$senha',@id);
			select last_insert_id() into @id2;
			INSERT INTO `enderecos`(`idlogin`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `cep`, `uf`, `pais`, `referencia`, `complemento`) VALUES (@id2,1,'$endereco','$numero','$bairro','$cidade','$cep','$estado','$pais','$referencia','$complemento')
			");
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>