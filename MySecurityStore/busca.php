<?php
  session_start();
  include 'conexao.php';
  include("topo.php"); 
  include("menu.php");
  $recebebusca = $_GET['txtBusca'];

  $consulta = $conexao->query("SELECT DISTINCT * FROM produtos,prodprecos,prodestoque WHERE descricao LIKE CONCAT ('%','$recebebusca','%')");

 /* if ($consulta->rowCount()==0) {
    
    echo"<html><script>location.href='erro.php'<script><html>";
  }
*/
  ?>
<div class="margem-produtos-geral-home">
</div>
<div class="container">
	<div class="margem-produtos-geral-home">
	</div>
   		<div class="brands-area">
          	<div class="row">
       			<div class="col-md-12">
                   	<div class="brand-wrapper">
                       	<div class="brand-list text-center">
                      		<img src="Imagens/ofertasTitle.png" alt="">
                        </div>
                  	</div>
          		</div>
       		</div>
   		</div>  		
</div>
<div class="container">
      
	<div class="float">
    <div class="latest-product">
        <ul class="breadcrumb fonte-cont-breadcrumb text-left">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Ofertas</a></li>
        </ul>
    </div>
    <div class="margem-produtos-geral-breadcrumb">
    </div>
					<div class="panel-group">
   						<div class="panel panel-primary">
      						<div class="panel-heading">Filtrar por marca</div>
      						<div class="panel-body">
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=intelbras" value="">Intelbras<span class="badge">0</span></a></label>
                    </div>
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=luxvision" value="">LuxVision<span class="badge">0</span></a></label>
                    </div>
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=tecvoz" value="">Tecvoz<span class="badge">0</span></a></label>
                    </div>      
                  </div>
    					</div>
				     	<div class="panel panel-primary">
				      		<div class="panel-heading">Filtrar por tecnologia</div>
				      		<div class="panel-body"><div class="checkbox">
                      <label><input type="checkbox" value="">Intelbras<span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">LuxVision<span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Outras<span class="badge">0</span></label>
                    </div>     
                  </div>
			    		</div>
    					<div class="panel panel-primary">
      						<div class="panel-heading">Filtrar por modelo</div>
      						<div class="panel-body">
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Intelbras<span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">LuxVision<span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Outras<span class="badge">0</span></label>
                    </div>      
                  </div>
    					</div>
    					<div class="panel panel-primary">
      						<div class="panel-heading">Filtrar por Categoria</div>
      						<div class="panel-body">
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Intelbras<span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">LuxVision<span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Outras<span class="badge">0</span></label>
                    </div>      
                  </div>
    					</div>
    			</div>
    		        <img src="Imagens/intelbrasLado.png" class="img-rounded">
                <!--<img src="Imagens/branco.png" class="img-rounded"> -->
  </div>
    <div class="text-right">
          <ul class="pagination fonte-cont">
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
          </ul>
    </div>
		<h2 class="section-title">Ofertas</h2>
    <div class="row">
       <?php while ($listar = $consulta->fetch(PDO::FETCH_ASSOC)){
    ?>
          <div class="col-lg-3">
            <div class="margem">
              <div class="img-thumbnail-promo">
                <div class="single-product-pag-prod">
                  <div class="product-f-image">
                      <img src="Imagens/<?php echo $listar['foto']; ?>" alt="Nome da empresa: <?php echo $listar['descricao'];?>" title="Produto: <?php echo $listar['descricao'];?>">
                      <div class="product-hover">
                          <?php if ($listar['estoque']>0) { ?>
                            <a href="#" class="add-to-cart-link"><i class="glyphicon glyphicon-ok"></i> Comprar</a>

                            <a href="conteudoProdutoCompra.php?Codigo=<?php echo $listar['Codigo']; ?>" class="view-details-link"><i class="glyphicon glyphicon-plus"></i> Mais detalhes</a>

                          <?php }else{ ?>

                            <a class="add-to-cart-link"><i class="glyphicon glyphicon-ban-circle"></i> Indisponível</a>
                          <?php } ?>
                      </div>
                  </div>
                    <h2 class="fonte-cont"><a href="#"><center><?php echo $listar['descricao'];?></center></a></h2>
                  <div class="product-carousel-price">
                    <center>
                        <del class="fonte-cont-preco">$1355.00</del> <ins>Por: R$ <?php echo number_format($listar['pvenda'], 2,',','.');?></ins>
                    </center>
                  </div>   
                </div>
              </div>
            </div>
          </div>
          <?php }   ?>
  </div>
</div>
	
<?php include("rodape.php");

?>