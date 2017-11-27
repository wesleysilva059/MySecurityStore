<?php
  session_start();
  include 'conexao.php';
  include("topo.php"); 
  include("menu.php");

  $consulta = $conexao->query("SELECT * FROM produtos, prodprecos, prodpromocao, prodestoque WHERE produtos.Codigo = prodpromocao.idproduto AND produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto");

  ?>
<div class="container">
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
		<h2 class="section-title">PROMOÇÕES IMPERDÍVEIS</h2>
    <div class="row col-md-12">
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
                            <a href="carrinhoCompras.php?Codigo=<?php echo $listar['Codigo']?>" class="add-to-cart-link" title="Adicionar ao carrinho"><i class="glyphicon glyphicon-ok"></i> Comprar</a>

                            <a href="conteudoPromocaoCompra.php?Codigo=<?php echo $listar['Codigo']; ?>" class="view-details-link" title="Detalhes do produto"><i class="glyphicon glyphicon-plus"></i> Mais detalhes</a>

                          <?php }else{ ?>

                            <a class="add-to-cart-link"><i class="glyphicon glyphicon-ban-circle"></i> Indisponível</a>
                          <?php } ?>
                      </div>
                  </div>
                    <h2 class="fonte-cont"><a href="carrinhoCompras.php?Codigo=<?php echo $listar['Codigo']?>" title="<?php echo $listar['descricao'];?> - <?php echo $listar['pvenda'];?> reais"><center><?php echo $listar['descricao'];?></center></a></h2>
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
          <?php }   ?>
  </div>
</div>
	
<?php include("rodape.php");

?>