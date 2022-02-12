<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
    <!--<script type="text/javascript" src="scriptaction.js"></script>-->
</head>
<body>
<!--Navigation bar-->
<div class="txtheader">
<a>BERYLLIUM</a>
<a>HOME</a>
<a>ABOUT</a>
<a>SERVICES</a>
<a>DROPDOWN</a>
<a>PORTFOLIO</a>
<a>CONTACT</a>
</div>
<!--Slide Image Architecture-->
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="slider_1.jpg" style="width:100%">
  <div class="text">Arhitecture#1</div>
</div>

<div class="mySlides fade">
  <img src="slider_2.jpg" style="width:100%">
  <div class="text">Arhitecture#2</div>
</div>

<div class="mySlides fade">
  <img src="slider_3.jpg" style="width:100%">
  <div class="text">Arhitecture#3</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
<!--Paragrapt Work-->
</div>
  <div class="txth">Work</div>
  <div class="txtp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim</div>
  <div class="txtp">et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt Volutpat erat.</div>
</div>
<!--Slide Image dot-->
<div>

</div>

<!--Footer-->
<div class="footer">
  <p></p>
</div>
<!--Script Slide Image Architecture-->
<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>