<?php
  session_start();
  include ("conexao.php");
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
      <?php
      function RetornaProdutos(){
        $sql = "SELECT * FROM `produtos`,`prodprecos` WHERE produtos.Codigo = prodprecos.idproduto";
        $conexao = AbreConexao();//abre a conexao com o BD
        $resultado = $conexao->query($sql);
        $conexao->close();//fecha a conexão com o BD
        if(mysqli_num_rows($resultado) > 0){
        while ($row = mysqli_fetch_array($resultado)){
          $listar[] = $row;
        }
        return $listar;
        }else{
        return null;
        }
      }
        $vetProdutos = RetornaProdutos();
        foreach($vetProdutos as $listar):
      ?>
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
          <div class="col-lg-3">
            <div class="margem">
              <div class="img-thumbnail-promo">
                <div class="single-product-pag-prod">
                  <div class="product-f-image">
                              <img src="Imagens/kitCompleto1.jpg" alt="">
                                  <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="glyphicon glyphicon-ok"></i> Comprar</a>
                                    <a href="conteudoProdutoCompra.php" class="view-details-link"><i class="glyphicon glyphicon-plus"></i> Mais detalhes</a>
                                  </div>
                          </div>
                          <h2 class="fonte-cont"><a href="#"><center><?=($listar['descricao'])?></center></a></h2>
                  <div class="product-carousel-price">
                    <center>
                        <del class="fonte-cont-preco">$1355.00</del> <ins>Por: R$ <?= number_format($listar['pvenda'], 2,',','.')?></ins>
                    </center>
                  </div>   
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
<?php endforeach; ?>
	
<?php include("rodape.php");

?>