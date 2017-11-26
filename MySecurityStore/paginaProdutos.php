<?php
  session_start();
  include 'conexao.php';
  include("topo.php"); 
  include("menu.php");
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
            <li class="active"><a href="#">Produtos</a></li>
        </ul>
    </div>
    <div class="margem-produtos-geral-breadcrumb">
    </div>
					<div class="panel-group">
   						<div class="panel panel-primary">
      						<div class="panel-heading">Filtrar por Marca</div>
      						<div class="panel-body">
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Intelbras <span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">LuxVision <span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Outras <span class="badge">0</span></label>
                    </div>      
                  </div>
    					</div>
				     	<div class="panel panel-primary">
				      		<div class="panel-heading">Filtrar por Tecnologia</div>
				      		<div class="panel-body"><div class="checkbox">
                      <label><input type="checkbox" value="">Intelbras <span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">LuxVision <span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Outras <span class="badge">0</span></label>
                    </div>     
                  </div>
			    		</div>
    					<div class="panel panel-primary">
      						<div class="panel-heading">Filtrar por Modelo</div>
      						<div class="panel-body">
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Intelbras <span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">LuxVision <span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Outras <span class="badge">0</span></label>
                    </div>      
                  </div>
    					</div>
    					<div class="panel panel-primary">
      						<div class="panel-heading">Filtrar por Categoria</div>
      						<div class="panel-body">
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Intelbras <span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">LuxVision <span class="badge">0</span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Outras <span class="badge">0</span></label>
                    </div>      
                  </div>
    					</div>
    			</div>
    		        <img src="Imagens/intelbrasLado.png" class="img-rounded">
                <!--<img src="Imagens/branco.png" class="img-rounded"> -->
  </div>

   
      <?php 
        $consulta = $conexao->query('SELECT * FROM `produtos`,`prodprecos`,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto');
      ?>
		<h2 class="section-title">Produtos</h2>
    <div class="row">
      <?php 
        while ($listar=$consulta->fetch(PDO::FETCH_ASSOC)){
      ?>
          <div class="col-lg-3">
            <div class="margem">
              <div class="img-thumbnail-promo">
                <div class="single-product-pag-prod">
                  <div class="product-f-image">
                      <img src="Imagens/<?php echo $listar['foto']; ?>" alt="Nome da empresa: <?php echo $listar['descricao'];?>" title="Produto: <?php echo $listar['descricao'];?>">
                      <div class="product-hover">
                          <?php if ($listar['estoque']>0) { ?>
                            <a href="carrinhoCompras.php?Codigo=<?php echo $listar['Codigo']?>" class="add-to-cart-link"><i class="glyphicon glyphicon-ok"></i> Comprar</a>

                            <a href="conteudoProdutoCompra.php?Codigo=<?php echo $listar['Codigo']; ?>" class="view-details-link"><i class="glyphicon glyphicon-plus"></i> Mais detalhes</a>

                          <?php }else{ ?>

                            <a class="add-to-cart-link"><i class="glyphicon glyphicon-ban-circle"></i> Indisponível</a>
                          <?php } ?>
                      </div>
                  </div>
                    <h2 class="fonte-cont"><a href="conteudoProdutoCompra.php?Codigo=<?php echo $listar['Codigo']; ?>"><center><?php echo $listar['descricao']; ?></center></a></h2>
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
          <?php 
        }
           ?>
  </div>
</div>
	
<?php include("rodape.php");

?>