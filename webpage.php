<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
    <script type="text/javascript" src="scriptaction.js"></script>
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
<!--Paragrapt Work-->
</div>
  <p class="txth">Work</p>
  <p class="txtp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim
  et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt Volutpat erat.</p>
</div>
<!--Slide Image dot-->
<div>

</div>

<!--Footer-->
<div class="footer">
  <p></p>
</div>

<script type="text/javascript">
   $(function(){
      plusSlides($n);
   });
</script>
</body>
</html>