<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css"> <!--  CSS link -->
<script>


  </script>
</head>

<body>

  <!-- Page Header -->
  <header>
    <h1 class="loggedHeader">leBaie</h1>
    <li><a id="listProduct" href="listingPage.html">List Product</a></li>
    <li><a id="profileImage" href="profile.php"><img id="profileImage" src="media/profile-icon-png-908.png"></a></li>
 <li><a id="basketImage" href="basket.html">  <img id="basketImage" src="Media/cart.png"> </a></li><br><br><br><br><br><br>
   

    <li><a id="contactUsID" href="contactUs.html">Contact Us</a></li> <br><br><br>
    </header>


<!--  search bar and search button for signed in pages -->
<div class="container">
<form id="searchButton" method="GET" action="results.php">
<input type="text" placeholder="Search leBaie">
<button type="submit">Search</button>
</form>
</div>


<!-- Navigation Bar -->
	<nav>
		<ul>
			<li><a id="homePageID" href="RegisteredHome.php">Home</a></li>
			<li><a href="aboutUs.html">About Us</a></li>
			<li><a href="clothingPage.html">Clothing</a></li>
			<li><a href="electronicsPage.html">Electronics</a></li>
			<li><a href="gamesPage">Games</a></li>
				<li><a href="vehiclesPage.html">Vehicles</a></li> 
		</ul>
	</nav>

<!-- Product of the Month Section-->
<div class="POTM"> 
<h2>Products of the <br>Month</h2> 


<img id="product1Image" src="media/WIP.png">
<img id="product2Image" src="media/WIP.png">
<img id="product3Image" src="media/WIP.png">

	

</div>
</body>
</html>
