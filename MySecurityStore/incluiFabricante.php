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

include 'conexao.php';

$recebe_descricao = $_POST['txtDescricao'];
$recebe_origem = $_POST['txtOrigem'];


try {
	
	$inserir=$conexao->query("INSERT INTO fabricantes (descricao, origem) VALUES ('$recebe_descricao', '$recebe_origem')");

?>
<div class="container">
	<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Cadastro feito com sucesso!</h2>
				
				<a href="listaFabricantes.php" class="btn btn-block btn-default" role="button">Voltar a lista de fabricantes</a>
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