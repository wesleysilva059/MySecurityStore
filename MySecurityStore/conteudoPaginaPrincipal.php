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
        <img src="Imagens/ofertas.jpg" alt="...">
		    <div class="carousel-caption">
       		 <a href="paginaProdutos.php"><h2 class="fonte-slider">Clique aqui e saiba mais promoções.</h2></a>
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

<script>
  $(document).ready(function(){
  
    $("#myCarousel").carousel({interval: 3000, pause: "hover"});
    
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
    
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});

</script>	
<div class="container">
  <div class="latest-product">
    <div class="margem-produtos-geral-home">
      <?php 
          $consulta = $conexao->query("SELECT * FROM produtos,prodprecos,prodestoque, prodpromocao WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto AND produtos.Codigo = prodpromocao.idproduto ORDER BY prodpromocao.idproduto LIMIT 3");
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
                      <a href="conteudoPromocaoCompra.php?Codigo=<?php echo $listar['Codigo']; ?>" class="view-details-link"><i class="glyphicon glyphicon-plus"></i> Mais detalhes</a>
                      <?php }else{ ?>
                      <a class="add-to-cart-link"><i class="glyphicon glyphicon-ban-circle"></i> Indisponível</a>
                      <?php } ?>
                    </div>
                </div>
                 <h2 class="fonte-cont"><a href="#"><center><?php echo $listar['descricao'];?></center></a></h2>
                  <center>
                      <p><strong>Desconto de <?php echo $listar['desconto']; ?>%</strong></p>
                  </center>
                  <div class="product-carousel-price">
                    <center>
                        <del class="fonte-cont-preco"><strong>R$ 
                          <?php $valoranterior = $listar['pvenda'] / (1-($listar['desconto']/100));
                            echo number_format($valoranterior, 2,',','.')?></strong>
                        </del><br/>
                        <ins>Por: R$ <?php echo number_format($listar['pvenda'], 2,',','.');?></ins>
                    </center>
                </div>   
              </div>
            </div>
          </div>
        </div>
      <?php }?>
      </div>
      <a href="promocoes.php" class="btn btn-primary" style="float:right;">Clique aqui e veja mais promoções...</a>
    </div>
  </div>
</div>
<div class="latest-product">
  <div class="margem-produtos-geral-home">
      <?php 
        $consulta1 = $conexao->query("SELECT * FROM produtos,prodprecos,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto AND grupo = 1 ORDER BY produtos.Codigo LIMIT 4");
      ?>
      <h3 class="section-title">As melhores câmeras do mercado</h3>
  </div>
  <div class="container">
    <div class="row">
      <?php 
        while ($listar1=$consulta1->fetch(PDO::FETCH_ASSOC)){
        ?>          
        <div class="col-sm-3">
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
                    <ins>Por: R$ <?php echo number_format($listar1['pvenda'], 2,',','.');?></ins>
                  </center>
                </div>   
              </div>
            </div>
          </div>
        </div> 
          <?php } ?> 
        <a href="busca.php?txtBusca=camera" class="btn btn-primary" style="float:right;">Clique aqui e veja mais câmeras...</a>
</div>
<div class="latest-product">
  <div class="margem-produtos-geral-home">
    <?php 
      $consulta2 = $conexao->query("SELECT * FROM produtos,prodprecos,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto AND grupo = 7 ORDER BY produtos.Codigo DESC LIMIT 4");
    ?>
    <h3 class="section-title">DVRs com o melhor preço do Brasil</h3>
  </div>
  <div class="container">
    <div class="row">
      <?php 
        while ($listar2=$consulta2->fetch(PDO::FETCH_ASSOC)){
      ?>          
      <div class="col-sm-3">
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
                  <ins>Por: R$ <?php echo number_format($listar2['pvenda'], 2,',','.');?></ins>
                </center>
              </div>   
            </div>
          </div>
        </div>
      </div> 
      <?php } ?> 
    </div>
    <a href="busca.php?txtBusca=DVR" class="btn btn-primary" style="float:right;">Clique aqui e veja mais DVRs...</a>
  </div>
</div>
<div class="latest-product">
  <div class="margem-produtos-geral-home">
    <?php 
      $consulta3 = $conexao->query("SELECT * FROM produtos,prodprecos,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto AND grupo = 6 ORDER BY produtos.Codigo DESC LIMIT 4");
    ?>
    <h3 class="section-title">Cabos de excelente qualidade</h3>
  </div>
  <div class="container">
    <div class="row">
      <?php 
        while ($listar3=$consulta3->fetch(PDO::FETCH_ASSOC)){
      ?>          
        <div class="col-sm-3">
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
                    <ins>Por: R$ <?php echo number_format($listar3['pvenda'], 2,',','.');?></ins>
                  </center>
                </div>   
              </div>
            </div>
          </div>
        </div> 
      <?php } ?> 
    </div>
     <a href="busca.php?txtBusca=cabo" class="btn btn-primary" style="float:right;">Clique aqui e veja mais cabos...</a>
  </div>
</div>
<div class="container">
  <div class="brands-area">
    <div class="row">
      <div class="col-md-12">
        <div class="brand-wrapper">
          <div class="brand-list">
            <a href="busca.php?txtBusca=Intelbras"><img src="Imagens/intelbrasLogo.png" alt=""></a>
            <a href="busca.php?txtBusca=LuxVision"><img src="Imagens/luxvisionLogo.png" alt=""></a>
            <a href="busca.php?txtBusca=TecVoz"><img src="Imagens/tecVozLogo.png" alt=""></a>
            <a href="busca.php?txtBusca=GigaByte"><img src="Imagens/gigaByteLogo.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>