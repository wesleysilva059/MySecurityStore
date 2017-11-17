<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	$idtecnologia = $_GET['idtecnologia'];
	include("topo.php");
	include("menu.php");
	include 'conexao_teste.php';

?>
<div class="container">
		<?php $consulta = $conexao->query("SELECT * FROM tecnologias WHERE idtecnologia = '$idtecnologia'");
		$exibe = $consulta->fetch(PDO::FETCH_ASSOC) ?>
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Alteração de tecnologia</h2>
				
				<form method="POST" action="alterarTecnologia.php?idtecnologia=<?php echo $idtecnologia;?>" name="alteraTec" enctype="multipart/form-data">
				
					<div class="form-group">
						<label for="codbarras">Descricao</label>
						<input required name="txtDescritec" value="<?php echo $exibe['descritec']; ?>" type="text" class="form-control">
					</div>
					
					
					<div class="form-group">
						<label for="caracteristicas">Características</label>
						<input required name="txtCaracteristicas" value="<?php echo $exibe['caracteristicas']; ?>" type="text" class="form-control">
					</div>
							
				<button type="submit" class="btn btn-lg btn-primary">
					<span class="glyphicon glyphicon-pencil"></span> Cadastrar
				</button>
				</form>
				
			</div>
		</div>
	</div>
<?php include ("rodape.php");?>