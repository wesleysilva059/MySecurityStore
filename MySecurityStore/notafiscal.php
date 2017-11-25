<?php 
	session_start();
	if (empty($_SESSION['id'])){//se usuario não está logado
        header('location:login.php');//vai até a tela de login
    }
	include("topo.php");
	include("menu.php");
	include 'conexao.php';
	$usuario = $_SESSION['id'];
	$notafiscal = $_GET['notafiscal'];
	$consultaVenda = $conexao->query("SELECT * from vendas WHERE notafiscal = '$notafiscal'"); 
?>
<div class="container-fluid">
	<?php $exibevenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)
	?>
	<h3 class="text-center">Nota: <?php echo $exibevenda ['notafiscal']; ?></h3>
	<br><br>
	<div class="row" style="margin-top: 15px;">
		
		
		<div class="col-sm-1 col-sm-offset-1 text-center"> Data </div>
		<div class="col-sm-2 text-center"> Nota fiscal </div>
		<div class="col-sm-1 text-center"> Quantidade </div>
		<div class="col-sm-1 text-center"> Preço </div>
		<div class="col-sm-1 text-center"> Transportadora </div>
		<div class="col-sm-2 text-center"> Pagamento </div>
		<div class="col-sm-2 text-center"> Status </div>
					
	</div>	
	<?php while($exibevenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)){?>
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1 text-center"><?php echo date('d/m/Y',strtotime($exibevenda['dtvenda']));?></div>
		<div class="col-sm-2 text-center"><?php echo $exibevenda['notafiscal'];?></div>
		<div class="col-sm-1 text-center"><?php echo $exibevenda['totalitens'];?></div>
		<div class="col-sm-1 text-center"><?php echo number_format($exibevenda['valortotal'], 2,',','.');?></div>
		<?php $transporte = $exibevenda['tipoentrega'];
			  if ($transporte == 1 ){
		?>
		<div class="col-sm-1 text-center">Correios</div>
		<?php }else if ($transporte == 2){ ?>
		<div class="col-sm-1 text-center">PAC</div>
		<?php }else{ ?>
		<div class="col-sm-1 text-center">JAD LOG transportadora</div>
		<?php } ?>
		<?php $tipopagamento = $exibevenda['tipopagamento'];
			  if ($tipopagamento == 1 ){
		?>
		<div class="col-sm-2 text-center">Boleto</div>
		<?php }else if ($tipopagamento == 2){ ?>
		<div class="col-sm-2 text-center">Crédito</div>
		<?php }else{ ?>
		<div class="col-sm-2 text-center">Débito</div>
		<?php } ?>
		<?php $status = $exibevenda['situacao'];
			  if($status == 1){
		?>
		<div class="col-sm-2 text-center">Não entregue</div>
		<?php }else{ ?>
		<div class="col-sm-2 text-center">Entregue</div>	
		<?php } ?>

	</div>	
	<?php } ?>
</div>

<?php include ("rodape.php");?>