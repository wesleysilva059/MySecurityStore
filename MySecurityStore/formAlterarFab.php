<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	$idfabricante = $_GET['idfabricante'];
	include("topo.php");
	include("menu.php");
	include 'conexao_teste.php';

?>
<div class="container">
		<?php $consulta = $conexao->query("SELECT * FROM fabricantes WHERE idfabricante = '$idfabricante'");
		$exibe = $consulta->fetch(PDO::FETCH_ASSOC) ?>
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Alteração de fabricante</h2>
				
				<form method="POST" action="alterarFabricante.php?idfabricante=<?php echo $idfabricante;?>" name="alteraFab" enctype="multipart/form-data">
				
					<div class="form-group">
						<label for="codbarras">Descricao</label>
						<input required name="txtDescricao" value="<?php echo $exibe['descricao']; ?>" type="text" class="form-control">
					</div>
					
					
					<div class="form-group">
						<label for="descricao">Origem</label>
						<input required name="txtOrigem" value="<?php echo $exibe['origem']; ?>" type="text" class="form-control">
					</div>
							
				<button type="submit" class="btn btn-lg btn-primary">
					<span class="glyphicon glyphicon-pencil"></span> Cadastrar
				</button>
				</form>
				
			</div>
		</div>
	</div>
<?php include ("rodape.php");?>