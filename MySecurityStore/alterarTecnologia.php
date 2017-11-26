<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao.php';

$idtecnologia = $_GET['idtecnologia'];
$consulta = $conexao->query("SELECT * FROM tecnologias WHERE idtecnologia='$idtecnologia'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
$recebe_descritec = $_POST['txtDescritec'];
$recebe_caracteristicas = $_POST['txtCaracteristicas'];

	

try {
	
	$alterar = $conexao->query("UPDATE tecnologias SET
	
	descritec = '$recebe_descritec', 
	caracteristicas = '$recebe_caracteristicas'
	
	WHERE idtecnologia = '$idtecnologia'"

	);
?>
<div class="container">
	<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Alteração feita com sucesso!</h2>
				
				<a href="listaTecnologias.php" class="btn btn-block btn-default" role="button">Voltar a lista de tecnologias</a>
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