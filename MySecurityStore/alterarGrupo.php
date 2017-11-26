<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}

	include 'conexao.php';
	include("topo.php");

$idgrupo = $_GET['idgrupo'];
$consulta = $conexao->query("SELECT * FROM grupo WHERE idgrupo='$idgrupo'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
$recebe_descrigrupo = $_POST['txtDescrigrupo'];


	

try {
	
	$alterar = $conexao->query("UPDATE grupo SET
	
	descrigrupo = '$recebe_descrigrupo'
	
	WHERE idgrupo = '$idgrupo'"

	);
?>
<div class="container">
	<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Alteração feita com sucesso!</h2>
				
				<a href="listaGrupos.php" class="btn btn-block btn-default" role="button">Voltar a lista dos grupos</a>
				<a href="admIndex.php">
				<button type="button" class="btn btn-lg btn-link">
					
					Voltar ao menu administrativo
					
				</button></a>
							
			</div>
		</div>
</div>
<?php
} catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}



?>