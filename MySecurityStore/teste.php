<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none}
.demo {cursor:pointer}
</style>
<body>

<div class="w3-container">
  <h2>Slideshow Indicators</h2>
  <p>Using images to indicate how many slides there are in the slideshow, and highlight the image the user is currently viewing.</p>
</div>

<div class="w3-content" style="max-width:200px">
  <img class="mySlides" src="Imagens/kitCompleto1.jpg" style="width:100%">
  <img class="mySlides" src="Imagens/kitCompleto1.jpg" style="width:100%">
  <img class="mySlides" src="Imagens/kitCompleto2.jpg" style="width:100%">
  <img class="mySlides" src="Imagens/kitCompleto3.jpg" style="width:100%">

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity" 
      src="Imagens/kitCompleto1.jpg" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity"
      src="Imagens/kitCompleto2.jpg" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity" 
      src="Imagens/kitCompleto3.jpg" onclick="currentDiv(3)">
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

</body>
</html>

