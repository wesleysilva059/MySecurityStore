<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao.php';
?>
<?php

$recebe_razaosocial = $_POST['txtRazaoSocial'];
$recebe_nomefantasia = $_POST['txtNomeFantasia'];
$recebe_cnpj = $_POST['txtCnpj'];
$recebe_inscest = $_POST['txtInscEst'];
$recebe_idendereco = $_POST['txtIdEndereco'];

try {
	
	$inserir=$conexao->query("INSERT INTO fornecedor(razaosocial, nomefantasia, cnpj, inscest, idendereco) VALUES ('$recebe_razaosocial', '$recebe_nomefantasia', '$recebe_cnpj', '$recebe_inscest', '$recebe_idendereco')");

?>
<div class="container">
	<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Cadastro feito com sucesso!</h2>
				
				<a href="listaFornecedores.php" class="btn btn-block btn-default" role="button">Voltar a lista de fornecedores</a>
				<a href="admIndex.php">
				<button type="button" class="btn btn-lg btn-link">
					
					Voltar ao menu administrativo
					
				</button></a>
							
			</div>
		</div>
</div>
<?php
	
}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?>

<?php include ("rodape.php");?>