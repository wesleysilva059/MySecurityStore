<?php 
	include("conexao.php");
	include("topo.php");
	include("menu.php");
?>
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4 text-center">
			<h2>Sua compra foi realizada com sucesso!</h2>
			<h4>Sua nota fiscal é: <?php echo $notafiscal; ?></h4>
			<a href="index.php"><button type="submit" class="btn btn-block btn-primary">Ir para a página inicial</button></a><br>
		</div>
	</div>
</div>
<?php
	unset($_SESSION['carrinho']);
	unset($_SESSION['idendereco']);
	unset($_SESSION['idtransportadora']);
	unset($_SESSION['idpagamento']);
	include("rodape.php");
?>