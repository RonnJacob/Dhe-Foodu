<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dhe Foodu! | Search</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Styles -->
<link href='http://fonts.googleapis.com/css?family=Indie+Flower|Philosopher:400|Dosis|PT+Sans|Montserrat:700' rel='stylesheet' type='text/css'>
<link href="css/search.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<style>
body
{
	background: url(img/white-bg.jpg) no-repeat 50% 50% fixed; 
	overflow: visible;	
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
     <li><a href="main.php">Home</a></li>
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
<div class="container" style="margin-top:4%; text-align:center;"><div style="margin-left:39%; width:275px;text-align:center;border-bottom:1px solid black;"><h1 class="search_title">RESULTS</h1></div></div>
<div class="container" >
<?php
$loc = $_POST['location'];
$cus = $_POST['cuisine'];
$sur= $_POST['surprise'];
	$conn = mysqli_connect("127.0.0.1", "b120469cs","b120469cs","db_b120469cs");
if(mysqli_connect_errno())
        {echo "Error in Connection"." ".mysqli_connect_error();}
if(isset($_POST['surprise']))
{
	
	$result = mysqli_query($conn, "SELECT * FROM RESTAURANTS ORDER BY RAND() LIMIT 1") or die("query not executed");
$count=mysqli_num_rows($result);
if($count!==0)
{
while($row = mysqli_fetch_assoc($result))
        {

                echo '<div class="row">';
                echo '<div class="col-lg-12" style="margin-top:2%;">';
                echo '<div class="col-lg-4"  style="margin-top:3%;">';
                echo '<img src="'.$row['Image'].'" style="float:left; height:200px; width:320px;"/>';
                echo '</div>';
                echo '<div class="col-lg-8" style="border-left:2px solid #b69f57; margin-top:2%; height:auto;">';
                echo '<h2 class="restaurant_name">'.$row['Name'].'</h2>';
                echo '<h4 class="attribute">Location : </h4> <h4 class="description">'.$row['Location'].' </h4><h4 class="attribute">Rating: </h4><h4 class="description">'.$row['Rating'].'</h4>';
                echo '<h4 class="attribute">Cuisine: </h4> <h4 class="description">'.$row['Cuisine'].'</h4>';
                echo '<p class="description" style="font-size:16px; text-align:justify;">'.$row['Description'].'</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
}
        echo '</br>';
        echo '</br>';
        echo '</hr>';
}
else
{
        echo '<div class="container" style="margin-top:4%; text-align:center;"><div style="margin-left:38%; width:275px;text-align:center;"><h1 class="search_title" style="font-size:22px; color:black;">No Results Found.</h1></div></div>';
}
}

else if($cus=="Any"&&$loc!="Any")
{
$result = mysqli_query($conn, "SELECT * FROM RESTAURANTS WHERE Location='$loc'") or die("query not executed");
$count=mysqli_num_rows($result);
if($count!==0)
{

while($row = mysqli_fetch_assoc($result))
	{

		echo '<div class="row">';
		echo '<div class="col-lg-12" style="margin-top:2%;">';
		echo '<div class="col-lg-4"  style="margin-top:3%;">';
		echo '<img src="'.$row['Image'].'" style="float:left; height:200px; width:320px;"/>';
		echo '</div>';
		echo '<div class="col-lg-8" style="border-left:2px solid #b69f57; margin-top:2%; height:auto;">';
		echo '<h2 class="restaurant_name">'.$row['Name'].'</h2>';
		echo '<h4 class="attribute">Location : </h4> <h4 class="description">'.$row['Location'].' </h4><h4 class="attribute">Rating: </h4><h4 class="description">'.$row['Rating'].'</h4>';
		echo '<h4 class="attribute">Cuisine: </h4> <h4 class="description">'.$row['Cuisine'].'</h4>';
		echo '<p class="description" style="font-size:16px; text-align:justify;">'.$row['Description'].'</p>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
}
	echo '</br>';
	echo '</br>';
	echo '</hr>';
}
else
{
	echo '<div class="container" style="margin-top:4%; text-align:center;"><div style="margin-left:38%; width:275px;text-align:center;"><h1 class="search_title" style="font-size:22px; color:black;">No Results Found.</h1></div></div>';
}
}
else if($loc=="Any"&&$cus!="Any")
{
$result = mysqli_query($conn, "SELECT * FROM RESTAURANTS WHERE Cuisine='$cus'") or die("query not executed");
$count=mysqli_num_rows($result);
if($count!==0)
{

while($row = mysqli_fetch_assoc($result))
        {

                echo '<div class="row">';
                echo '<div class="col-lg-12" style="margin-top:2%;">';
                echo '<div class="col-lg-4"  style="margin-top:3%;">';
                echo '<img src="'.$row['Image'].'" style="float:left; height:200px; width:320px;"/>';
                echo '</div>';
                echo '<div class="col-lg-8" style="border-left:2px solid #b69f57; margin-top:2%; height:auto;">';
                echo '<h2 class="restaurant_name">'.$row['Name'].'</h2>';
                echo '<h4 class="attribute">Location : </h4> <h4 class="description">'.$row['Location'].' </h4><h4 class="attribute">Rating: </h4><h4 class="description">'.$row['Rating'].'</h4>';
                echo '<h4 class="attribute">Cuisine: </h4> <h4 class="description">'.$row['Cuisine'].'</h4>';
                echo '<p class="description" style="font-size:16px; text-align:justify;">'.$row['Description'].'</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
}
        echo '</br>';
        echo '</br>';
        echo '</hr>';
}
else
{
        echo '<div class="container" style="margin-top:4%; text-align:center;"><div style="margin-left:38%; width:275px;text-align:center;"><h1 class="search_title" style="font-size:22px; color:black;">No Results Found.</h1></div></div>';
}
}
else if($loc=="Any"&&$cus=="Any")
{
	$result = mysqli_query($conn, "SELECT * FROM RESTAURANTS") or die("query not executed");
$count=mysqli_num_rows($result);
if($count!==0)
{

while($row = mysqli_fetch_assoc($result))
        {

                echo '<div class="row">';
                echo '<div class="col-lg-12" style="margin-top:2%;">';
                echo '<div class="col-lg-4"  style="margin-top:3%;">';
                echo '<img src="'.$row['Image'].'" style="float:left; height:200px; width:320px;"/>';
                echo '</div>';
                echo '<div class="col-lg-8" style="border-left:2px solid #b69f57; margin-top:2%; height:auto;">';
                echo '<h2 class="restaurant_name">'.$row['Name'].'</h2>';
                echo '<h4 class="attribute">Location : </h4> <h4 class="description">'.$row['Location'].' </h4><h4 class="attribute">Rating: </h4><h4 class="description">'.$row['Rating'].'</h4>';
                echo '<h4 class="attribute">Cuisine: </h4> <h4 class="description">'.$row['Cuisine'].'</h4>';
                echo '<p class="description" style="font-size:16px; text-align:justify;">'.$row['Description'].'</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
}
        echo '</br>';
        echo '</br>';
        echo '</hr>';
}
else
{
        echo '<div class="container" style="margin-top:4%; text-align:center;"><div style="margin-left:38%; width:275px;text-align:center;"><h1 class="search_title" style="font-size:22px; color:black;">No Results Found.</h1></div></div>';
}
}  
else
{
$result = mysqli_query($conn, "SELECT * FROM RESTAURANTS WHERE Location='$loc' AND Cuisine='$cus'") or die("query not executed");
$count=mysqli_num_rows($result);
if($count!==0)
{

while($row = mysqli_fetch_assoc($result))
        {

                echo '<div class="row">';
                echo '<div class="col-lg-12" style="margin-top:2%;">';
                echo '<div class="col-lg-4"  style="margin-top:3%;">';
                echo '<img src="'.$row['Image'].'" style="float:left; height:200px; width:320px;"/>';
                echo '</div>';
                echo '<div class="col-lg-8" style="border-left:2px solid #b69f57; margin-top:2%; height:auto;">';
                echo '<h2 class="restaurant_name">'.$row['Name'].'</h2>';
                echo '<h4 class="attribute">Location : </h4> <h4 class="description">'.$row['Location'].' </h4><h4 class="attribute">Rating: </h4><h4 class="description">'.$row['Rating'].'</h4>';
                echo '<h4 class="attribute">Cuisine: </h4> <h4 class="description">'.$row['Cuisine'].'</h4>';
                echo '<p class="description" style="font-size:16px; text-align:justify;">'.$row['Description'].'</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
}
        echo '</br>';
        echo '</br>';
        echo '</hr>';
}
else
{
        echo '<div class="container" style="margin-top:4%; text-align:center;"><div style="margin-left:38%; width:275px;text-align:center;"><h1 class="search_title" style="font-size:22px; color:black;">No Results Found.</h1></div></div>';
}
}

?>
</div>
</body>
</html>
