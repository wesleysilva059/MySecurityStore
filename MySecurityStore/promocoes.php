<?php
  session_start();
  include 'conexao.php';
  include("topo.php"); 
  include("menu.php");

  $consulta = $conexao->query("SELECT * FROM produtos, prodprecos, prodpromocao, prodestoque WHERE produtos.Codigo = prodpromocao.idproduto AND produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto");

  ?>
<div class="margem-produtos-geral-home">
</div>
<div class="container">
    <div class="text-right">
          <ul class="pagination fonte-cont">
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
          </ul>
    </div>
		<h2 class="section-title">PROMOÇÕES IMPERDÍVEIS</h2>
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