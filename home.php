<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css"> <!--  CSS link -->
</head>

<body>

<!-- Page Header -->
<header>
<h1>leBaie</h1>
<li><a id="regPageID" href="registrationPage.html">Register Here</a></li>
<li><a id="loginPageID" href="loginPage.html">Login Here</a></li> <br><br><br><br><br><br>
<li><a id="contactUsID" href="contactUs.html">Contact Us</a></li> <br><br><br>
</header>


<!--  search bar and search button for unlogged pages-->
<div class="container">
<form id="searchButton" method="GET" action="resultsUnlogged.php">
<input type="text" placeholder="Search leBaie" name="search">
<button type="submit">Search</button>
</form>
</div>

<!-- Navigation Bar -->
	<nav>
		<ul>
			<li><a id="homePageID" href="home.php">Home</a></li>
			<li><a href="UnloggedAboutUs.html">About Us</a></li>
			<li><a href="clothingPageUnlogged.php">Clothing</a></li>
			<li><a href="electronicsPageUnlogged.php">Electronics</a></li>
			<li><a href="gamesPageUnlogged.php">Games</a></li>
				<li><a href="vehiclesPageUnlogged.php">Vehicles</a></li> 
		</ul>
	</nav>

<!-- Product of the Month Section-->
<div class="POTM"> 
<h2>Product of the <br>Month</h2> 


<img id="product1Image" src="media/WIP.png">
<img id="product2Image" src="media/WIP.png">
<img id="product3Image" src="media/WIP.png">

	

</div>
</body>
</html>
