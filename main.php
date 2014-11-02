<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dhe Foodu!</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Styles -->
<link href='http://fonts.googleapis.com/css?family=Indie+Flower|Philosopher:400|Dosis|PT+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<style>
body
{
	background: url(img/biryani.jpg) no-repeat 50% 50% fixed; 
}
</style>
</head>

<body>

<!-- Navbar -->
<div class="wrapper">
<div class="row">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
     <ul class="nav navbar-nav">
     <li><a href="main.html">Home</a></li>
     <li><a href="about.html">About Us</a></li>
	 </ul>
	<div class="navbar-header" style="margin-left:31%;margin-top:1%">
    Dhe Foodu!
    </div>
	 <ul class="nav navbar-nav navbar-right">
     <li><a href="contact.html">Contact</a><li>
	 </ul>
	 </div>
</nav>
</div>

<div id="tags" class="row">
<div class="container">
	<h1>Dhe Foodu!</h1>
	<h3>Discover great places to eat around you in Kozhikode.</h3>
</div>
</div>

<!-- Select Menu -->
<div id="search" class="row">
<div class="col-lg-9 col-lg-offset-2">
<div class="col-lg-3">
<form action="search.php" method="post">
<select class="form-control" name="location">
	<option value="Any">Any</option>
	<option value="Mavoor Road">Mavoor Road</option>
	<option value="Beach Road">Beach</option>
	<option value="West Hill">West Hill</option>
	<option value="Thondayad">Thondayad</option>
	<option value="Mananchira">Mananchira</option>
</select>
</select>
</div>
<div class="col-lg-3">
<select class="form-control" name="cuisine">
	<option value="Any">Any</option>
	<option value="Chinese">Chinese</option>
	<option value="Indian">Indian</option>
	<option value="Arabic">Arabic</option>
	<option value="Fast Food">Fast Food</option>
	<option value="Cafe">Cafe</option>
	<option value="Seafood">Seafood</option>
</select>
</div>

<div class="col-lg-3">
	<button class="btn" type="submit">Submit</button>
</div>
</div>
</div>
<div class="container">
<div class="row" style="margin-top:3%">
<div class="col-lg-3"></div>
<div class="col-lg-2"></div>
<div class="col-lg-3">
	<button class="btn" type="submit" name="surprise" value="surprise">Surprise Me!</button>
</div>
<div class="col-lg-4"></div>
</div>
</div>
</form>
</body>
</html>
