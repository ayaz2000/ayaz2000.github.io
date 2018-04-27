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

<div class="topnav">
  <a class="active title" href="#home">ShoppingKart</a>
  <a href="#login">Login</a>
  <a href="#signup">Signup</a>
  <span class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </span>
  
  
</div>

<nav class="navbar">
  <a href="E_commerce.html" class="bar-item">Home</a> |
  <a href="Electronic.html" class="bar-item">Electronic</a> |
  <a href="sport.html" class="bar-item">Sport</a> |
  <a href="toys.html" class="bar-item">Toys</a>
</nav>

<h1 style="text-align:center">Electronics</h1>

<section class="w3-row-padding w3-center w3-white">
<h2> Top Selling </h2>
  <article class="w3-third">
  
    <p>Washing Machine</p>
    <img src="washing.jpeg" alt="Random Name" style="width:75%">
  </article>
  <article class="w3-third">
    <p>TV</p>
    <img src="tv.jpeg" alt="Random Name" style="width:75%">
  </article>
  <article class="w3-third">
    <p>Fridge</p>
    <img src="freez.jpeg" alt="Random Name" style="width:75%">
  </article>
</section>

<section class="w3-row-padding w3-center w3-light-grey">
  <article class="w3-third">
  <h2> You May Like </h2>
    <h1>Laptop</h1>
    <img src="laptop.jpeg" alt="Random Name" style="width:10%">
	<p>Price  35000</p>
	<p> 4GB RAM</p>
  </article>
    <h1>Television</h1>
    <img src="tv1.jpeg" alt="Random Name" style="width:10%">
	<p>Price  45000</p>
	<p>32 inch Display</p>
  </article> 
</section>

<button type="button" onclick="alert">More</button>

<br>

</br>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  
</footer>

</body>
</html>
