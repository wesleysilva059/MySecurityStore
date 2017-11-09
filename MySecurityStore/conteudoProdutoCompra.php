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
<div class="container">
		<div class="latest-product">
			<div class="margem-produtos-geral-home">
			<br>
        		<h2 class="section-title-produto"><b>KIT CFTV COMPLETO HDCVI 4 CÂMERAS E ACESSÓRIOS (DISCO RÍGIDO OPCIONAL)</b></h2>
				<div class="row">
					<div class="col-md-3">
						<p class="fonte-cont text-left">Cod: 0000000</p>
					</div>
					<div class="col-md-4">
					<p class="fonte-cont text-right">Marca: Intelbras</p>
					</div>
					<div class="col-md-6 product-carousel-price">
                    <del class="fonte-cont-preco">$1355.00</del> <ins>$1200.00</ins>
                    </div>  
                    <div class="col-md-6 product-carousel-price">
                    <del class="fonte-cont-preco">$1355.00</del> <ins>$1200.00</ins>
                    </div>  
				</div>
			</div>
		</div>

</div>

<?php include("rodape.php");?>