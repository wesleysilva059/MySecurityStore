<?php
  session_start();
  include 'conexao.php';
  include("topo.php"); 
  include("menu.php");
  ?>
<div class="container">
   		<div class="brands-area">
            <div class="row">
            <div class="col-md-12">
                    <div class="brand-wrapper text-center">
                          <a href="promocoes.php" title="Promoções"><img src="Imagens/ofertas.jpg" alt="" width="85%"></a>
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
                  <div class="panel-heading">Filtrar por Categoria</div>
                  <div class="panel-body">
                    <div class="checkbox">
                      <?php $consulta12 = $conexao->query("SELECT COUNT(*) AS total12 FROM produtos WHERE descricao LIKE CONCAT ('%','kit','%')"); 
                        $total12 = (int) $consulta12->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total12;?></span><a href="busca.php?txtBusca=kit" value=""> Kits</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta13 = $conexao->query("SELECT COUNT(*) AS total13 FROM produtos WHERE descricao LIKE CONCAT ('%','camera','%')"); 
                        $total13 = (int) $consulta13->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total13; ?></span><a href="busca.php?txtBusca=camera" value=""> Câmeras</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta14 = $conexao->query("SELECT COUNT(*) AS total14 FROM produtos WHERE descricao LIKE CONCAT ('%','DVR','%')"); 
                        $total14 = (int) $consulta14->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total14; ?></span><a href="busca.php?txtBusca=DVR" value=""> DVR</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta15 = $conexao->query("SELECT COUNT(*) AS total15 FROM produtos WHERE descricao LIKE CONCAT ('%','HVR','%')"); 
                        $total15 = (int) $consulta15->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total15; ?></span><a href="busca.php?txtBusca=HVR" value=""> HVR</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta16 = $conexao->query("SELECT COUNT(*) AS total16 FROM produtos WHERE descricao LIKE CONCAT ('%','Cabo','%')"); 
                        $total16 = (int) $consulta16->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total16; ?></span><a href="busca.php?txtBusca=Cabo" value=""> Cabos</a></label>
                    </div>       
                  </div>
            </div>
            <div class="panel panel-primary">
                  <div class="panel-heading">Filtrar por Marca</div>
                  <div class="panel-body">
                    <div class="checkbox">
                      <?php $consulta2 = $conexao->query("SELECT COUNT(*) AS total2 FROM produtos WHERE produtos.marca='Intelbras'"); 
                        $total2 = (int) $consulta2->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total2;?></span><a href="busca.php?txtBusca=intelbras" value=""> Intelbras</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta3 = $conexao->query("SELECT COUNT(*) AS total3 FROM produtos WHERE produtos.marca='LuxVision'"); 
                        $total3 = (int) $consulta3->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total3; ?></span><a href="busca.php?txtBusca=Lux" value=""> LuxVision</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta4 = $conexao->query("SELECT COUNT(*) AS total4 FROM produtos WHERE produtos.marca='Tecvoz'"); 
                        $total4 = (int) $consulta4->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total4; ?></span><a href="busca.php?txtBusca=tec" value=""> Tecvoz</a></label>
                    </div>      
                  </div>
              </div>
              <div class="panel panel-primary">
                  <div class="panel-heading">Filtrar por Tecnologia</div>
                  <div class="panel-body">
                    <div class="checkbox">
                      <?php $consulta5 = $conexao->query("SELECT COUNT(*) FROM prodtecnologia WHERE codtecnologia=1"); 
                        $total5 = (int) $consulta5->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total5; ?></span><a href="busca.php?txtBusca=IP" value=""> IP</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta6 = $conexao->query("SELECT COUNT(*) FROM prodtecnologia WHERE codtecnologia=2"); 
                        $total6 = (int) $consulta6->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total6; ?></span><a href="busca.php?txtBusca=AHCD" value=""> AHCD</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta7 = $conexao->query("SELECT COUNT(*) FROM prodtecnologia WHERE codtecnologia=3"); 
                        $total7 = (int) $consulta7->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total7; ?></span><a href="busca.php?txtBusca=FULL" value=""> FULL HD</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta8 = $conexao->query("SELECT COUNT(*) FROM prodtecnologia WHERE codtecnologia=5"); 
                        $total8 = (int) $consulta8->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total8; ?></span><a href="busca.php?txtBusca=analogico" value=""> Analógico</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta9 = $conexao->query("SELECT COUNT(*) FROM prodtecnologia WHERE codtecnologia=6"); 
                        $total9 = (int) $consulta9->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total9; ?></span><a href="busca.php?txtBusca=HDCVI" value=""> HDCVI</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta10 = $conexao->query("SELECT COUNT(*) FROM prodtecnologia WHERE codtecnologia=7"); 
                        $total10 = (int) $consulta10->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total10; ?></span><a href="busca.php?txtBusca=HDTVI" value=""> HDTVI</a></label>
                    </div>
                    <div class="checkbox">
                      <?php $consulta11 = $conexao->query("SELECT COUNT(*) FROM prodtecnologia WHERE codtecnologia=8"); 
                        $total11 = (int) $consulta11->fetchColumn(0);
                      ?>
                      <label><span class="badge"><?php echo $total11; ?></span><a href="busca.php?txtBusca=AHD" value=""> AHD</a></label>
                    </div>
                        
                  </div>
              </div>
          </div>
    		  <a href="busca.php?txtBusca=Intelbras"><img src="Imagens/intelbrasLado.png" class="img-rounded"></a>
  </div>

   
      <?php 
        $consulta = $conexao->query('SELECT * FROM `produtos`,`prodprecos`,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto');
      ?>
		<h2 class="section-title">Produtos</h2>
    <div class="row col-md-8">
      <?php 
        while ($listar=$consulta->fetch(PDO::FETCH_ASSOC)){
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

                            <a href="conteudoProdutoCompra.php?Codigo=<?php echo $listar['Codigo']; ?>" class="view-details-link" title="Detalhes do produto"><i class="glyphicon glyphicon-plus"></i> Mais detalhes</a>

                          <?php }else{ ?>

                            <a class="add-to-cart-link"><i class="glyphicon glyphicon-ban-circle"></i> Indisponível</a>
                          <?php } ?>
                      </div>
                  </div>
                    <h2 class="fonte-cont"><a href="conteudoProdutoCompra.php?Codigo=<?php echo $listar['Codigo']; ?>" title="<?php echo $listar['descricao'];?> - <?php echo $listar['pvenda'];?> reais"><center><?php echo $listar['descricao'];?></center></a></h2>
                  <div class="product-carousel-price">
                    <center>
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