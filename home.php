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


<?php 
               
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="leBaieBase";
         

                        
                    
        
                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

 //selects appopriate information from DB that meets conditions 
                        $sql = "SELECT `productName`,`productCategory`, `price`, `image` FROM `products`  WHERE `productName`='Modern Warfare 3' or `productName`='Programming Jumper' or 
                        `productName`='Radio'";
                        $result = mysqli_query($conn, $sql);

echo "<section class='ProdOTM'>";
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table border='1'>";
                            
            
                            // output data of each row - uses php variables in order to match users search and concatenate html variables 
                            while($row = mysqli_fetch_assoc($result)) {
                                $image= $row["image"];
                            
                                echo "<tr>
    
                                <td>". '<img src="media/'.$image.'" class="resultsImage">'. "</td>
                                <td class='resultsName'>". $row['productName']. '<br> <div class="resP">£' .$row['price']."<br>  
                                <button type = 'submit' name = 'btnAddToCart' Value = ".$row["productName"]. " 'class= 'resultsPageAdd'>Add To Cart</button </td></div>
                                
                            
        </tr>";}
    echo "</table>";
  echo"</section>";}

?>

</div>
</body>
</html>
