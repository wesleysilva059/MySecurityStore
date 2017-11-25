<?php
  include 'conexao.php';
?>


<div class="container">
    <div class="row">
			  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 2024px;
      height: 350px;
      overflow: hidden;
  }
  </style>
</head>
<body>

<div class="container-slider-home">
  <div id="myCarousel" class="carousel slide">
<ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Imagens/slide1.jpg" alt="...">
		<div class="carousel-caption">
       		 <a href="paginaProdutos.php"><h2 class="fonte-slider">Clique aqui e saiba mais.</h2></a>
      	</div>
      </div>

      <div class="item">
        <img src="Imagens/slide2.jpg" alt="...">
		<div class="carousel-caption">
       		<a href="paginaProdutos.php"><h2 class="fonte-slider">Clique aqui e saiba mais.</h2></a>
      	</div>
      </div>
    
      <div class="item">
        <img src="Imagens/slide3.jpg" alt="...">
        <div class="carousel-caption">
       		 <a href="paginaProdutos.php"><h2 class="fonte-slider">Clique aqui e saiba mais.</h2></a>
      	</div>
      </div>

      <div class="item">
        <img src="Imagens/slide4.jpg" alt="...">
        <div class="carousel-caption">
       		 <a href="paginaProdutos.php"><h2 class="fonte-slider">Clique aqui e saiba mais.</h2></a>
      	</div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</div>
		</div>
	</div>
</div>
	<div class="margem-produtos-geral-home"></div>
	<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel({interval: 3000, pause: "hover"});
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});

</script>	
<div class="margem-produtos-geral-home"></div>

<div class="margem-produtos-geral-home"></div>
<div class="container">
  <div class="latest-product">
    <div class="margem-produtos-geral-home">
      <?php 
          $consulta = $conexao->query('SELECT * FROM `produtos`,`prodprecos`,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto');
          ?>
          <h3 class="section-title">Promoções bombásticas!</h3>
      <div class="row">
      <?php 
          while ($listar=$consulta->fetch(PDO::FETCH_ASSOC)){
        ?>
        <div class="col-md-4">
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
                    <del class="fonte-cont-preco">R$ 1355,00</del><br/><ins>Por: R$ <?php echo number_format($listar['pvenda'], 2,',','.');?></ins>
                  </center>
                </div>   
              </div>
            </div>
          </div>
        </div>
        <?php }?>
      </div>
      <button class="btn btn-primary" style="float:right;" >Clique aqui e veja mais</button>
    </div>
  </div>
</div>
	<div class="container">
  	<div class="brands-area">
      <div class="row">
        <div class="col-md-12">
          <div class="brand-wrapper">
            <div class="brand-list">
              <a href="#"><img src="Imagens/intelbrasLogo.png" alt=""></a>
              <a href="#"><img src="Imagens/luxvisionLogo.png" alt=""></a>
              <a href="#"><img src="Imagens/tecVozLogo.png" alt=""></a>
              <a href="#"><img src="Imagens/gigaByteLogo.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
	  </div>
	</div>
  <div class="latest-product">
    <div class="margem-produtos-geral-home">
      <?php 
        $consulta1 = $conexao->query('SELECT * FROM `produtos`,`prodprecos`,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto');
      ?>
      <h3 class="section-title">Os melhores CFTVs do mercado</h3>
    </div>
    <div class="container">
      <div class="row">
        <?php 
        while ($listar1=$consulta1->fetch(PDO::FETCH_ASSOC)){
        ?>          
        <div class="col-md-3">
          <div class="margem">
            <div class="img-thumbnail-promo">
              <div class="single-product-pag-prod">
                <div class="product-f-image">
                  <img src="Imagens/<?php echo $listar1['foto']; ?>" alt="Nome do produto: <?php echo $listar1['descricao'];?>" title="Produto: <?php echo $listar1['descricao'];?>">
                  <div class="product-hover">
                    <?php if ($listar1['estoque']>0) { ?>
                    <a href="carrinhoCompras.php?Codigo=<?php echo $listar1['Codigo']?>" class="add-to-cart-link"><i class="glyphicon glyphicon-ok"></i> Comprar</a>
                    <a href="conteudoProdutoCompra.php?Codigo=<?php echo $listar1['Codigo']; ?>" class="view-details-link"><i class="glyphicon glyphicon-plus"></i> Mais detalhes</a>
                    <?php }else{ ?>
                    <a class="add-to-cart-link"><i class="glyphicon glyphicon-ban-circle"></i> Indisponível</a>
                    <?php } ?>
                  </div>
                </div>
                  <h2 class="fonte-cont"><a href="conteudoProdutoCompra.php?Codigo=<?php echo $listar1['Codigo']; ?>"><center><?php echo $listar1['descricao']; ?></center></a></h2>
                <div class="product-carousel-price">
                  <center>
                    <del class="fonte-cont-preco">R$ 1355,00</del><br/><ins>Por: R$ <?php echo number_format($listar1['pvenda'], 2,',','.');?></ins>
                  </center>
                </div>   
              </div>
            </div>
          </div>
        </div> 
          <?php } ?> 
      </div>
        <button class="btn btn-primary" style="float:right;" >Clique aqui e veja mais</button>
    </div>
  </div>
    <div class="latest-product">
    <div class="margem-produtos-geral-home">
      <?php 
        $consulta2 = $conexao->query('SELECT * FROM `produtos`,`prodprecos`,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto');
      ?>
      <h3 class="section-title">Os melhores CFTVs do mercado</h3>
    </div>
    <div class="container">
      <div class="row">
        <?php 
        while ($listar2=$consulta2->fetch(PDO::FETCH_ASSOC)){
        ?>          
        <div class="col-md-3">
          <div class="margem">
            <div class="img-thumbnail-promo">
              <div class="single-product-pag-prod">
                <div class="product-f-image">
                  <img src="Imagens/<?php echo $listar2['foto']; ?>" alt="Nome do produto: <?php echo $listar2['descricao'];?>" title="Produto: <?php echo $listar2['descricao'];?>">
                  <div class="product-hover">
                    <?php if ($listar2['estoque']>0) { ?>
                    <a href="carrinhoCompras.php?Codigo=<?php echo $listar2['Codigo']?>" class="add-to-cart-link"><i class="glyphicon glyphicon-ok"></i> Comprar</a>
                    <a href="conteudoProdutoCompra.php?Codigo=<?php echo $listar2['Codigo']; ?>" class="view-details-link"><i class="glyphicon glyphicon-plus"></i> Mais detalhes</a>
                    <?php }else{ ?>
                    <a class="add-to-cart-link"><i class="glyphicon glyphicon-ban-circle"></i> Indisponível</a>
                    <?php } ?>
                  </div>
                </div>
                  <h2 class="fonte-cont"><a href="conteudoProdutoCompra.php?Codigo=<?php echo $listar2['Codigo']; ?>"><center><?php echo $listar2['descricao']; ?></center></a></h2>
                <div class="product-carousel-price">
                  <center>
                    <del class="fonte-cont-preco">R$ 1355,00</del><br/><ins>Por: R$ <?php echo number_format($listar2['pvenda'], 2,',','.');?></ins>
                  </center>
                </div>   
              </div>
            </div>
          </div>
        </div> 
        <?php } ?> 
      </div>
       <button class="btn btn-primary" style="float:right;" >Clique aqui e veja mais</button>
    </div>
  </div>
    <div class="latest-product">
    <div class="margem-produtos-geral-home">
      <?php 
        $consulta3 = $conexao->query('SELECT * FROM `produtos`,`prodprecos`,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto');
      ?>
      <h3 class="section-title">Os melhores CFTVs do mercado</h3>
    </div>
    <div class="container">
      <div class="row">
        <?php 
        while ($listar3=$consulta3->fetch(PDO::FETCH_ASSOC)){
        ?>          
        <div class="col-md-3">
          <div class="margem">
            <div class="img-thumbnail-promo">
              <div class="single-product-pag-prod">
                <div class="product-f-image">
                  <img src="Imagens/<?php echo $listar3['foto']; ?>" alt="Nome do produto: <?php echo $listar3['descricao'];?>" title="Produto: <?php echo $listar3['descricao'];?>">
                  <div class="product-hover">
                    <?php if ($listar3['estoque']>0) { ?>
                    <a href="carrinhoCompras.php?Codigo=<?php echo $listar3['Codigo']?>" class="add-to-cart-link"><i class="glyphicon glyphicon-ok"></i> Comprar</a>
                    <a href="conteudoProdutoCompra.php?Codigo=<?php echo $listar3['Codigo']; ?>" class="view-details-link"><i class="glyphicon glyphicon-plus"></i> Mais detalhes</a>
                    <?php }else{ ?>
                    <a class="add-to-cart-link"><i class="glyphicon glyphicon-ban-circle"></i> Indisponível</a>
                    <?php } ?>
                  </div>
                </div>
                  <h2 class="fonte-cont"><a href="conteudoProdutoCompra.php?Codigo=<?php echo $listar3['Codigo']; ?>"><center><?php echo $listar3['descricao']; ?></center></a></h2>
                <div class="product-carousel-price">
                  <center>
                    <del class="fonte-cont-preco">R$ 1355,00</del><br/><ins>Por: R$ <?php echo number_format($listar3['pvenda'], 2,',','.');?></ins>
                  </center>
                </div>   
              </div>
            </div>
          </div>
        </div> 
        <?php } ?> 
      </div>
       <button class="btn btn-primary" style="float:right;">Clique aqui e veja mais</button>
    </div>
  </div>