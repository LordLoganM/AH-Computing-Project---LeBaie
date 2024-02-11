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
 <li><a id="basketImage" href="basket.php">  <img id="basketImage" src="Media/cart.png"> </a></li><br><br><br><br><br><br>
   

    <li><a id="contactUsID" href="contactUs.html">Contact Us</a></li> <br><br><br>
    </header>


<!--  search bar and search button for signed in pages -->
<div class="container">
<form id="searchButton" method="GET" action="results.php">
<input type="text" placeholder="Search leBaie" name="search">
<button type="submit">Search</button>
</form>
</div>


 <!-- Navigation Bar -->
 <nav>
            <ul>
                <li><a id="homePageID" href="RegisteredHome.php">Home</a></li>
                <li><a href="aboutUs.html">About Us</a></li>
                <li><a href="clothingPage.php">Clothing</a></li>
                <li><a href="electronicsPage.php">Electronics</a></li>
                <li><a href="gamesPage.php">Games</a></li>
                    <li><a href="vehiclesPage.php">Vehicles</a></li> 
            </ul>
        </nav>

<!-- Product of the Month Section-->
<div class="POTM" > 
<h2>Our Products of the Month</h2> <br><br>


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
                                <form id='searchButtonRes' method='GET' action='basketProcess.php'>
                           
                                <button type = 'submit' name = 'cartBtn' Value = ".$row["productName"]. " 'class= 'resultsPageAdd'>Add To Cart</button> </td></div>
                            
                                </form>
                            
                            
        </tr>";}
    echo "</table>";
  echo"</section>";}

?>
	

</div>
</body>
</html>
