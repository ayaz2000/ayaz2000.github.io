<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
  
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  margin-left: 20px;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 8px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.topnav .title {
	font-style: italic;
}

.bar-item {
	padding-left: 20px;
	padding-right: 20px;
}

.navbar {
	text-align: center;
	margin-top: 10px;
	margin-bottom: 10px;
}

.navbar a {
	text-decoration:none;
}

.footer {
	background-color: #2196F3;
	color: white;
	padding: 20px;
}
</style>
</head>
<body>

<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","http://localhost/ecommerce/livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

<div class="topnav">
  <a class="active title" href="#home">ShoppingKart</a>
  <a href="#login">Login</a>
  <a href="#signup">Signup</a>
  <span class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search" onkeyup="showResult(this.value)">
	  <div id="livesearch" style="position : fixed; top:45px; left:1125px"></div>
    </form>
  </span> 
</div>

<nav class="navbar">
  <a href="E_commerce.html" class="bar-item">Home</a> |
  <a href="Electronic.html" class="bar-item">Electronic</a> |
  <a href="sport.html" class="bar-item">Sport</a> |
  <a href="toys.html" class="bar-item">Toys</a> |
  <a href="news.php" class="bar-item">News</a>
</nav>


<div class="">
  <img class="mySlides" src="tire.jpg" style="width:100%">
  <img class="mySlides" src="detergent.jpg" style="width:100%">
  <img class="mySlides" src="antivirus.jpg" style="width:100%">
  <img class="mySlides" src="airtel.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>



<section class="w3-row-padding w3-center w3-white">
<h2> Top Selling </h2>
  <article class="w3-third">
  
    <p>Laptop</p>
    <img src="laptop.jpeg" alt="Random Name" style="width:75%">
  </article>
  <article class="w3-third">
    <p>VIVO Case</p>
    <img src="vivo.jpeg" alt="Random Name" style="width:75%">
  </article>
  <article class="w3-third">
    <p>Ring</p>
    <img src="ring.jpeg" alt="Random Name" style="width:75%">
  </article>
</section>

<section class="w3-row-padding w3-center w3-white">
<h2> Food Best sellers </h2>
  <article class="w3-third">
  
    <p>Cadbury Silk</p>
    <img src="food1.jpg" alt="Random Name" style="width:75%">
  </article>
  <article class="w3-third">
    <p>Cadbury celebrations</p>
    <img src="food2.jpg" alt="Random Name" style="width:75%">
  </article>
  <article class="w3-third">
    <p>Green Tea</p>
    <img src="food3.jpg" alt="Random Name" style="width:75%">
  </article>
</section>

<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">Online shopping in India at its best</h2>
  <p class="w3-justify">It's no longer just the privilege of a metro city or an urban area to shop online for their favorite products. Flipkart is one online shopping site that has made it possible for consumers even in the remote areas of India to avail products from the best brands at low prices online. Considering the present lifestyle of people, it's no surprise that they prefer to buy online most of the products that they need on a daily basis like clothes for men and women, electronics, mobiles, home appliances, products for personal beauty and care , and the like. The ultimate convenience of having to simply browse through their favorite online shopping website and place orders from the comfort of their home, and get it delivered in the shortest time possible at their doorstep is a service that is unbeatable.</p>
</section>

<br>

</br>

<!-- Footer -->
<footer class="w3-container w3-center footer w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  
</footer>

</body>
</html>
