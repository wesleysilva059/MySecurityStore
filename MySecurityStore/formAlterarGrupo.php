<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	$idgrupo = $_GET['idgrupo'];
	include("topo.php");
	include("menu.php");
	include 'conexao.php';

?>
<div class="container">
		<?php $consulta = $conexao->query("SELECT * FROM grupo WHERE idgrupo = '$idgrupo'");
		$exibe = $consulta->fetch(PDO::FETCH_ASSOC) ?>
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Alteração de Grupo de produto</h2>
				
				<form method="POST" action="alterarGrupo.php?idgrupo=<?php echo $idgrupo;?>" name="alterarGrupo" enctype="multipart/form-data">
				
					<div class="form-group">
						<label for="codbarras">Descricao</label>
						<input required name="txtDescrigrupo" value="<?php echo $exibe['descrigrupo']; ?>" type="text" class="form-control">
					</div>
					
				<button type="submit" class="btn btn-lg btn-primary">
					<span class="glyphicon glyphicon-pencil"></span> Cadastrar
				</button>
				</form>
				
			</div>
		</div>
	</div>
<?php include ("rodape.php");?>