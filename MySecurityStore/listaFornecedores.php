<?php
	
	session_start();
	
	
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		
		header('location:index.php');
		
	}
	
	include 'conexao.php';	
	include 'topo.php';
	include 'menu.php';
	
	
	$consulta = $conexao->query("SELECT * FROM fornecedor");
	
	
	?>
	
<div class="container">
	
	
	<?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
	/*Não será habilitado o comando de exclusão pois os dados inseridos serão armazenados no histórico de compra,
	se levar em consideração um e-commerce profissional*/
	?>
	
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-5"><h4 style="padding-top:20px"><?php echo $exibe['nomefantasia']; ?></div>
		<div class="col-sm-4"><h4 style="padding-top:20px"><?php echo $exibe['cnpj']; ?></h4></div>
		<div class="col-sm-3" style="padding-top:20px">	
		<a href="formAlterarForn.php?idfornecedor=<?php echo $exibe['idfornecedor']; ?>">	
		<button class="btn btn-block btn-primary">
		<span class="glyphicon glyphicon-pencil"></span> Alterar
		</button>
		</a>
		</div>
		
		

				
	</div>		
	
	
	<?php } ?>
	<br><br>
	<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<a href="admIndex.php"><button type="button" class="btn btn-lg btn-link">
					
					Voltar ao menu administrativo
					
				</button></a>
							
	</div>

	
</div>
	
	<?php
	
	include 'rodape.php';
	
	?>
	