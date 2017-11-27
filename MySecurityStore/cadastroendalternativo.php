<?php
	session_start();
	include("conexao.php");
	$idlogin = $_SESSION['idlogin'];;
	$cepalt = $_POST["cepalt"];
	$enderecoalt = $_POST["enderecoalt"];
	$numeroalt = $_POST["nro_enderecoalt"];
	$complementoalt = $_POST["complemento_endalt"];
	$referenciaalt = $_POST["referencia_endalt"];
	$bairroalt = $_POST["bairroalt"];
	$cidadealt = $_POST["cidadealt"];
	$estadoalt = $_POST["estadoalt"];
	$paisalt = $_POST["paisalt"];
	$dtAtual = date('Y-m-d');

	try{
		$incluir = $conexao->query("
			INSERT INTO `enderecos`(`idlogin`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `cep`, `uf`, `pais`, `referencia`, `complemento`) VALUES ($idlogin,2,'$enderecoalt','$numeroalt','$bairroalt','$cidadealt','$cepalt','$estadoalt','$paisalt','$referenciaalt','$complementoalt')
			");
?>
<div class="container">
	<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Cadastro feito com sucesso!</h2>
				
				<a href="entrega.php" class="btn btn-block btn-default" role="button">Voltar a confirmação de endereco</a>
				<a href="index.php">
				<button type="button" class="btn btn-lg btn-link">
					
					Voltar ao início
					
				</button></a>
							
			</div>
		</div>
</div>
<?php
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>