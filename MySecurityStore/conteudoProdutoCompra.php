<?php include("topo.php");?>
<?php include("menu.php");?>
	<div class="float-compra">
		<div class="latest-product">
        	<ul class="breadcrumb fonte-cont-breadcrumb text-left">
          		<li><a href="index.php">Home</a></li>
				<li><a href="conteudoPaginaPrincipal.php">Ofertas</a></li>
				<li class="active"><a href="#">Produto</a></li>

       		</ul>
    	</div>
    <div class="margem-produtos-geral-breadcrumb"></div>
	<div class="w3-content zoom" style="max-width:400px">
	  <img class="mySlides" src="Imagens/kitCompleto1.jpg" style="width:100%">
	  <img class="mySlides" src="Imagens/kitCompleto2.jpg" style="width:100%">
	  <img class="mySlides" src="Imagens/kitCompleto3.jpg" style="width:100%">

	  <div class="w3-row-padding w3-section text-center">

	    <div class="w3-col s4 img-thumbnail">
	      <img class="demo w3-opacity margin-right" 
	      src="Imagens/kitCompleto1.jpg" class="img-responsive" style="max-width:80px" onclick="currentDiv(1)">
	    </div>
	    <div class="w3-col s4 img-thumbnail">
	      <img class="demo w3-opacity margin-right"
	      src="Imagens/kitCompleto2.jpg" class="img-responsive" style="max-width:80px" onclick="currentDiv(2)">
	    </div>
	    <div class="w3-col s4 img-thumbnail">
	      <img class="demo w3-opacity margin-right" 
	      src="Imagens/kitCompleto3.jpg" class="img-responsive" style="max-width:80px" onclick="currentDiv(3)">
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
		<div class="margem-produtos-geral-home">
				<br>

        		<h2 class="section-title-produto"><b>KIT CFTV COMPLETO HDCVI 4 CÂMERAS E ACESSÓRIOS (DISCO RÍGIDO OPCIONAL)</b></h2>
			<div class="row ">
				<div class="col-md-2">
						<p class="fonte-cont-ini-pc text-left">Cod: 0000000</p>
				</div>
				<div class="col-md-2">
						<p class="fonte-cont-ini-pc text-center">Marca: Intelbras</p>
				</div>
				<div class="col-md-3">
						<p class="fonte-cont-ini-pc text-right">Disponibilidade: Pronta entrega</p>
				</div>
				
                <div class="margem-produtos-geral-breadcrumb"></div>
           		<div class="col-sm-4 product-carousel-price">
                   	<p class="fonte-cont-pc">De: <del class="fonte-cont-preco">$1355.00</del></p>
                    <p class="fonte-cont-pc">Por apenas: <ins>R$1200.00</ins> a vista ou</p>
                    <p class="fonte-cont-pc"> <ins>R$1288.00</ins> a prazo</p>
                    <p class="fonte-cont-pc"> em até <ins>3x</ins> de <ins>R$429,33</ins></p>
                    <p class="fonte-cont-pc"> ou <ins>6x</ins> de <ins>R$253,88</ins> iguais</p>
                </div>
                    

                <div class="col-sm-3">
                   	<form action="">
                        <div class="quantity">
                        	<p>Quantidade:
                           	<input type="number" size="100" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1" class="text-right"></p>
                        </div>
                </div>
                <div class="col-md-7 text-center">
                    <div class="margem-produtos-geral-breadcrumb"></div>
	                   	<button class="btn btn-primary btn-lg" type="submit">Adicionar ao carrinho</button>
	                   	</form>
                  	</div>
				</div>
		</div>
	</div>
</div>
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
        	<p>- 01 DVR 8 CANAIS MULTI HD INTELBRAS MHDX 1008;</p>
			<p>- 03 CÂMERAS HDCVI HB 2000;</p>
			<p>- 04 CÂMERAS HDCVI HB 306;</p>
			<p>- 01 Dísco Rígido HD (capacidade a escolher);</p>
			<p>- 01 Fonte 12v 10A;</p>
			<p>- 01 Rolo de Cabo Coaxial 100 Metros;</p>
			<p>- Conectores de vídeo e alimentação inclusos.</p> 
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
        	<p>Processador principal: Integrado de alta perfomance</p>
        	<p>Entradas de vídeo: 8 canais BNC + 2 canais IP ou 10 canais IP no modo NVR¹ Saídas de vídeo (monitores), 1 HDMI, 1 VGA e Saída analógica BNC. Resolução máxima de gravação 1080N (tecnologia analógica) e 5 MP² (tecnologia IP)
</p>
        </div>
      </div>
    </div>
  </div> 
</div>

<?php include("rodape.php");?>