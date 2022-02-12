<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
</head>
<body style="width: 80%;">
    
<div class="txtheader">
<a>BERYLLIUM</a>
<a>HOME</a>
<a>ABOUT</a>
<a>SERVICES</a>
<a>DROPDOWN</a>
<a>PORTFOLIO</a>
<a>CONTACT</a>
</div>

<div>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="slider_1.jpg" style="width:70%">
  <div class="text">Arhitecture#1</div>
</div>

<div class="mySlides fade">
  <img src="slider_2.jpg" style="width:70%">
  <div class="text">Arhitecture#2</div>
</div>

<div class="mySlides fade">
  <img src="slider_3.jpg" style="width:70%">
  <div class="text">Arhitecture#3</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
  <p class="txth">Work</p>
  <p class="txtp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim
  et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt Volutpat erat.</p>
</div>

<div>

</div>

<div class="footer">
  <p></p>
</div>

<script>
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