<?php
  session_start();
  include 'conexao.php';
  include("topo.php"); 
  include("menu.php");
 if(empty($_GET['txtBusca'])){

  echo "<html><script>location.href='index.php'</script></html";

 }

  $recebebusca = $_GET['txtBusca'];

  //$consulta = $conexao->query("SELECT * FROM produtos,prodprecos,prodestoque WHERE descricao LIKE CONCAT ('%','$recebebusca','%') OR marca LIKE CONCAT ('%','$recebebusca','%') OR modelo LIKE CONCAT ('%','$recebebusca','%')");
  $consulta = $conexao->query("SELECT * FROM produtos,prodprecos,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto AND descricao LIKE CONCAT ('%','$recebebusca','%')"); 
  ?>
<div class="container">
   		<div class="brands-area">
          	<div class="row">
       			<div class="col-md-12">
                   	<div class="brand-wrapper text-center">
                      		<a href="promocoes.php"><img src="Imagens/ofertas.jpg" alt="" width="85%"></a>
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
            <li class="active"><a href="#">Busca</a></li>
        </ul>
    </div>
    <div class="margem-produtos-geral-breadcrumb">
    </div>
					<div class="panel-group">
   						<div class="panel panel-primary">
      						<div class="panel-heading">Filtrar por Marca</div>
      						<div class="panel-body">
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=intelbras" value="">Intelbras <span class="badge">0</span></a></label>
                    </div>
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=lux" value="">LuxVision <span class="badge">0</span></a></label>
                    </div>
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=tec" value="">Tecvoz <span class="badge">0</span></a></label>
                    </div>      
                  </div>
    					</div>
				     	<div class="panel panel-primary">
                  <div class="panel-heading">Filtrar por Marca</div>
                  <div class="panel-body">
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=intelbras" value="">Intelbras <span class="badge">0</span></a></label>
                    </div>
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=lux" value="">LuxVision <span class="badge">0</span></a></label>
                    </div>
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=tec" value="">Tecvoz <span class="badge">0</span></a></label>
                    </div>      
                  </div>
              </div>
    					<div class="panel panel-primary">
                  <div class="panel-heading">Filtrar por Marca</div>
                  <div class="panel-body">
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=intelbras" value="">Intelbras <span class="badge">0</span></a></label>
                    </div>
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=lux" value="">LuxVision <span class="badge">0</span></a></label>
                    </div>
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=tec" value="">Tecvoz <span class="badge">0</span></a></label>
                    </div>      
                  </div>
              </div>
    					<div class="panel panel-primary">
                  <div class="panel-heading">Filtrar por Marca</div>
                  <div class="panel-body">
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=intelbras" value="">Intelbras <span class="badge">0</span></a></label>
                    </div>
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=lux" value="">LuxVision <span class="badge">0</span></a></label>
                    </div>
                    <div class="checkbox">
                      <label><a href="busca.php?txtBusca=tec" value="">Tecvoz <span class="badge">0</span></a></label>
                    </div>      
                  </div>
              </div>
    			</div>
    		        <a href="busca.php?txtBusca=Intelbras"><img src="Imagens/intelbrasLado.png" class="img-rounded"></a>
  </div>
		<h2 class="section-title">Resultados da Busca</h2>
    <div class="row col-md-9">
       <?php while ($listar = $consulta->fetch(PDO::FETCH_ASSOC)){
    ?>
          <div class="col-lg-4">
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
                        <del class="fonte-cont-preco"><strong>R$ 
                          <?php $valorprodant = ($listar['pvenda'] *1.05);
                            echo number_format($valorprodant, 2,',','.')?></strong>
                        </del><br/>
                        <ins>Por: R$ <?php echo number_format($listar['pvenda'], 2,',','.');?></ins>
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