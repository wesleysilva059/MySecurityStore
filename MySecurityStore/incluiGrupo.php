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


$recebe_descrigrupo = $_POST['txtDescrigrupo'];


try {
	
	$inserir=$conexao->query("INSERT INTO grupo (descrigrupo) VALUES ('$recebe_descrigrupo')");
?>
<div class="container">
	<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Cadastro feito com sucesso!</h2>
				
				<a href="listaGrupos.php" class="btn btn-block btn-default" role="button">Voltar a lista de grupos</a>
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