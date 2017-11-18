<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao.php';
?>
</script>
<div class="container">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Inclusão de Tecnologia</h2>
				
				<form method="POST" action="incluiTecnologia.php" name="incluiTec" enctype="multipart/form-data">
					
					<div class="form-group">
						<label for="descricao">Descrição</label>
						<input required name="txtDescritec" type="text" class="form-control">
					</div>
					

					<div class="form-group">
						<label for="modelo">Características</label>
						<textarea rows="5" class="form-control" value="<?php echo $exibe['caracteristicas']; ?>" required name="txtCaracteristicas"></textarea>
					</div>
					
				<button type="submit" class="btn btn-lg btn-primary">
					<span class="glyphicon glyphicon-pencil"></span> Cadastrar
				</button>
				</form>
				
			</div>
		</div>
	</div>
<?php include ("rodape.php");?>