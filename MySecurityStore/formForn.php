<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao_teste.php';
?>
<script>
$(document).ready(function(){
$('#preco').mask('000.000.000.000.000,00', {reverse: true});		
});
</script>
<div class="container">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Inclusão de produto</h2>
				
				<form method="POST" action="incluiFornecedor.php" name="incluiProd" enctype="multipart/form-data">
				
					<div class="form-group">
						<label for="razaosocial">Razão Social</label>
						<input required name="txtRazaoSocial" type="text" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="nomefantasia">Nome Fantasia</label>
						<input required name="txtNomeFantasia" type="text" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="cnpj">Cnpj</label>
						<input required name="txtCnpj" type="text" class="form-control">
					</div>

					<div class="form-group">
					<label for="inscest">Inscrição Estadual</label>
					<input type="text" class="form-control" required name="txtInscEst" id="txtPesoLiquido">
					</div>
					
					<?php 
       				$consulta3 = $conexao->query('SELECT * FROM `enderecos`');
     				 ?>
					<div class="form-group">
					<label for="endereço">Endereço</label>
					<select class="form-control" name="txtIdEndereco">
					  <option value="selecione">Selecione</option>
					  <?php while ($listar3=$consulta3->fetch(PDO::FETCH_ASSOC)){?>
					  <option value="<?php echo $listar3 ['idendereco']; ?>"><?php echo $listar3 ['idendereco']; ?> - <?php echo $listar3 ['logradouro']; ?></option>
					 <?php } ?>
					</select>
					</div>
					
				<button type="submit" class="btn btn-lg btn-primary">
					<span class="glyphicon glyphicon-pencil"></span> Cadastrar
				</button>
				</form>
				
			</div>
		</div>
	</div>
<?php include ("rodape.php");?>