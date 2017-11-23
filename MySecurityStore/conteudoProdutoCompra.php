<?php session_start();
      include'conexao.php';
      include("topo.php");
      include("menu.php");
      
      if(!empty($_GET['Codigo'])){

      $Codigo = $_GET['Codigo'];

      $consulta = $conexao->query("SELECT * FROM `produtos`,`prodprecos`,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto AND produtos.Codigo = '$Codigo'");

      $listar = $consulta->fetch(PDO::FETCH_ASSOC);
      }else{
        header('location:index.php');
      }
?>
	<div class="float-compra">
		<div class="latest-product">
        	<ul class="breadcrumb fonte-cont-breadcrumb text-left">
          		<li><a href="index.php">Home</a></li>
				<li><a href="conteudoPaginaPrincipal.php">Ofertas</a></li>
				<li class="active"><a href="#"><?php echo $listar['descricao'];?></a></li}
       		</ul>
    	</div>
    <div class="margem-produtos-geral-breadcrumb"></div>
	<div class="w3-content zoom" style="max-width:400px">
	  <img src="Imagens/<?php echo $listar['foto'];?>" class="mySlides" style="width:100%">
	  <img src="Imagens/<?php echo $listar['foto2'];?>" class="mySlides" style="width:100%">
	  <img src="Imagens/<?php echo $listar['foto3'];?>" class="mySlides" style="width:100%">
	  <div class="w3-row-padding w3-section text-center">
	    <div class="w3-col s4 img-thumbnail">
	      <img src="Imagens/<?php echo $listar['foto'];?>" class="demo w3-opacity margin-right" class="img-responsive" style="max-width:80px" onclick="currentDiv(1)">
	    </div>
	    <div class="w3-col s4 img-thumbnail">
	      <img class="demo w3-opacity margin-right" src="Imagens/<?php echo $listar['foto2'];?>" class="img-responsive" style="max-width:80px" onclick="currentDiv(2)">
	    </div>
	    <div class="w3-col s4 img-thumbnail">
	      <img class="demo w3-opacity margin-right" src="Imagens/<?php echo $listar['foto3'];?>" class="img-responsive" style="max-width:80px" onclick="currentDiv(3)">
	    </div>
	  </div>
	</div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>
<div class="container-pc">
	<div class="latest-product">
		<div class="margem-produtos-geral-home"></div>
				<br>

        		<h2 class="section-title-produto"><b><?php echo $listar['descricao']; ?></b></h2>
			<div class="row ">
				<div class="col-md-2">
						<p class="fonte-cont-ini-pc text-left">Código:<?php echo $listar['codbarras']; ?> </p>
				</div>
				<div class="col-md-2">
						<p class="fonte-cont-ini-pc text-center">Marca: <?php echo $listar['marca']; ?> </p>
				</div>
				<div class="col-md-3">
						<p class="fonte-cont-ini-pc text-right">Disponibilidade: <?php if ($listar['estoque']>0){echo 'Disponível';}else{echo'indisponível';}?></p>
				</div>
				
                <div class="margem-produtos-geral-breadcrumb"></div>
           		<div class="col-sm-7 product-carousel-price">
                   	<p class="fonte-cont-pc">De: <del class="fonte-cont-preco"><?php echo number_format($listar['pvenda'], 2,',','.');?></del></p>
                    <p class="fonte-cont-pc">Por apenas: <ins>R$ <?php echo number_format($listar['pvenda'], 2,',','.');?></ins> a vista ou</p>
                    <p class="fonte-cont-pc"> <ins>R$<?php echo number_format($listar['pvenda'], 2,',','.');?></ins> a prazo</p>
                    <p class="fonte-cont-pc"> em até <ins>3x</ins> de <ins>R$<?php echo number_format($listar['pvenda'], 2,',','.');?></ins></p>
                    <p class="fonte-cont-pc"> ou <ins>6x</ins> de <ins>R$<?php echo number_format($listar['pvenda'], 2,',','.');?></ins> iguais</p>
              </div>
                <div class="col-md-6 text-center">
                  <a href="carrinhoCompras.php?Codigo=<?php echo $listar['Codigo'];?>">
                   <button class="btn btn-primary btn-lg" type="submit">Adicionar ao carrinho</button>
                  </a>
                </div>
                <br>
                  <div class="col-sm-6">
                    <h4 class="text-center">Formas de pagamento</h4>
                  </div>
                  <div class="col-sm-6 box">
                    <table class="table">
                      <tbody>

                        <tr>
                          <td>1x sem juros de R$ <?php echo number_format($listar['pvenda'], 2,',','.');?></td>
                          <td>2x sem juros de R$ <?php $val = ($listar['pvenda'] /2); echo number_format($val, 2,',','.');?></td>
                        </tr>
                        <tr>
                          <td>3x sem juros de R$ <?php $val = ($listar['pvenda'] /3); echo number_format($val, 2,',','.');?></td>
                          <td>4x com juros de R$ <?php $val = ($listar['pvenda'] /4) + 13; echo number_format($val, 2,',','.');?></td>
                        </tr>
                        <tr>
                          <td>5x com juros de R$ <?php $val = ($listar['pvenda'] /5) + 13; echo number_format($val, 2,',','.');?></td>
                          <td>6x com juros de R$ <?php $val = ($listar['pvenda'] /6) + 13; echo number_format($val, 2,',','.');?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>                  
				        </div>
	</div>
</div>
<br><br>
<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Descrição do produto</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
        	<p><?php echo $listar['descricao']; ?></p> 
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Especificações técnicas</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
        	<p><?php echo $listar['descricao']; ?></p>
        </div>
      </div>
    </div>
  </div> 
</div>

<?php include("rodape.php");?>