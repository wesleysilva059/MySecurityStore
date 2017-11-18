<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	$idfornecedor = $_GET['idfornecedor'];
	include("topo.php");
	include("menu.php");
	include 'conexao_teste.php';

?>
</script>
<div class="container">
		<?php $consulta = $conexao->query("SELECT * FROM fornecedor WHERE idfornecedor='$idfornecedor'");
		$exibe = $consulta->fetch(PDO::FETCH_ASSOC) ?>
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Alteração de produto</h2>
				
				<form method="POST" action="alterarFornecedor.php?idfornecedor=<?php echo $idfornecedor;?>" name="alteraForn" enctype="multipart/form-data">
				
					<div class="form-group">
						<label for="razaosocial">Razão social</label>
						<input required name="txtRazaoSocial" value="<?php echo $exibe['razaosocial']; ?>" type="text" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="nomefantasia">Nome fantasia</label>
						<input required name="txtNomeFantasia" value="<?php echo $exibe['nomefantasia']; ?>" type="text" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="cnpj">CNPJ</label>
						<input required name="txtCnpj" value="<?php echo $exibe['cnpj']; ?>" type="text" class="form-control">
					</div>
					
					<div class="form-group">
					<label for="inscest">Inscrição estadual</label>
					<input type="text" class="form-control" value="<?php echo $exibe['inscest']; ?>" required name="txtInscEst" id="txtInscEst">
					</div>
					
					<?php 
       				$consulta3 = $conexao->query('SELECT * FROM `enderecos`');
     				 ?>
					<div class="form-group">
					<label for="endereco"> Código tecnologia</label>
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