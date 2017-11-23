<?php
	session_start();
	include("conexao.php");
	$idlogin = $_SESSION['id'];
	$cepalt = $_POST["cepalt"];
	$enderecoalt = $_POST["enderecoalt"];
	$numeroalt = $_POST["nro_enderecoalt"];
	$complementoalt = $_POST["complemento_endalt"];
	$referenciaalt = $_POST["referencia_endalt"];
	$bairroalt = $_POST["bairroalt"];
	$cidadealt = $_POST["cidadealt"];
	$estadoalt = $_POST["estadoalt"];
	$paisalt = $_POST["paisalt"];
	$dtAtual = date('d/m/Y');

	
	
		try{
		$incluir = $conexao->query("
			INSERT INTO `enderecos`(`idlogin`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `cep`, `uf`, `pais`, `referencia`, `complemento`) VALUES ($idlogin,2,'$enderecoalt','$numeroalt','$bairroalt','$cidadealt','$cepalt','$estadoalt','$paisalt','$referenciaalt','$complementoalt')
			");
			
			header('location:ok.php');
		}catch(PDOException $e){
			echo $e->getMessage();
		}


?>