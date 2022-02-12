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

<!--<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>-->

<a class="prev" onclick="plusSlides(-1,0)">&#10094;</a>
<a class="next" onclick="plusSlides(1,0)">&#10095;</a>
</div>
<br>
<!--Paragrapt Work-->
<div>
  <div class="txth">Work</div>
  <br>
  <div class="txtp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim</div>
  <div class="txtp">et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt Volutpat erat.</div>
</div>
<br>
<!--Slide Image dot-->
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img_1.jpg" style="width:100%">
  <div>New York Arena</div>
  <div>New York</div>
</div>

<div class="mySlides fade">
  <img src="img_2.jpg" style="width:100%">
  <div>Eagle Park</div>
  <div>London</div>
</div>

<div class="mySlides fade">
  <img src="img_3.jpg" style="width:100%">
  <div>Nationals Park</div>
  <div>Paris, Frans</div>
</div>

<div class="mySlides fade">
  <img src="img_4.jpg" style="width:100%">
  <div>Test</div>
  <div>Test</div>
</div>

<a class="prev" onclick="plusSlides(-1,1)">&#10094;</a>
<a class="next" onclick="plusSlides(1,1)">&#10095;</a>

<!--<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>-->
</div>

<!--Footer-->
<div class="footer">
  <p></p>
</div>
<!--Script Slide Image Architecture-->
<script type="text/javascript">
var slideIndex = [1,1];
var slideId = ["SlideImage1", "SlideImage2"]
showSlides(1, 0);
showSlides(1, 1);
//showSlides(slideIndex);

function plusSlides(n,no) {
  showSlides(slideIndex[no] += n);
}

/*function currentSlide(n,no) {
  showSlides(slideIndex[no] = n);
}*/
function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block"; 
}
/*function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex[] = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}*/
</script>
</body>
</html>