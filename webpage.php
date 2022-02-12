<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
    <!--<script type="text/javascript" src="scriptaction.js"></script>-->
</head>
<body>
<div style="width: 100%;">
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

<div class="SlideImage1 fade">
  <img src="slider_1.jpg" style="width:100%">
  <div class="text">Arhitecture#1</div>
</div>

<div class="SlideImage1 fade">
  <img src="slider_2.jpg" style="width:100%">
  <div class="text">Arhitecture#2</div>
</div>

<div class="SlideImage1 fade">
  <img src="slider_3.jpg" style="width:100%">
  <div class="text">Arhitecture#3</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<!--Paragrapt Work-->
<div style="padding-bottom:30px;">
  <div class="txth">Work</div>
  <br>
  <div class="txtp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim</div>
  <div class="txtp">et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt Volutpat erat.</div>
</div>
<br>
<!--Slide Image dot-->
<!--<div class="slides-container">
  <div class="slide">
      <img src="img_1.jpg">
      <div>New York Area</div>
      <div>New York</div>
  </div>
  <div class="slide">
      <img src="img_2.jpg">
      <div>Eagel Park</div>
      <div>London</div>
  </div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide2(1)"></span> 
  <span class="dot" onclick="currentSlide2(2)"></span> 
  <span class="dot" onclick="currentSlide2(3)"></span> 
</div>

<a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
<a class="next" onclick="plusSlides2(1)">&#10095;</a>

</div>-->


<!-- Paragrap Text 2 column -->
<div class="row" style="width: 100%;padding-top:30px;">
  <div class="column" style="width:50%;">
    <div>New</div>
    <div>SEPTEMBER 10,2016</div>
    <div>Manila Bridge Re-construction </div>
    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Placerat enim et urna sagittis, rhoncus euismod...</div>
  </div>
  <div class="column" style="width:50%;">
    <div>Testimonials</div>
    <div>"Lorem ipsum dolor sit amet, consectetur
adipiscing elit. Phasellus placerat enim et urna 
sagittis, rhoncus euismod erat tincidunt. Donec
tincidunt volupat erat."
</div>
    <div>- John Doe Dueller</div>
  </div>
</div>


<!--Footer-->
<div class="footer">
  <p></p>
</div>
</div>
<!--Script Slide Image Architecture-->
<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("SlideImage1");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}
/*Slide Picture2*/
var slideIndex2 = 1;
showSlides2(slideIndex2);

function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}

function currentSlide2(n) {
  showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
  var i;
  var slides = document.getElementsByClassName("SlideImage2");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex2 = 1}    
  if (n < 1) {slideIndex2 = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex2-1].style.display = "block";  
  dots[slideIndex2-1].className += " active";
}

</script>

</body>
</html>