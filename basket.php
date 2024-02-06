<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Lebaie</title>

    <link rel="stylesheet" type="text/css" href="css/style.css"> <!--  CSS link -->

</head>

<body>

    <header>
    <h1 class="loggedHeader">leBaie</h1>
    <li><a id="listProduct" href="listingPage.html">List Product</a></li>
    <li><a id="profileImage" href="profile.php"><img id="profileImage" src="media/profile-icon-png-908.png"></a></li>
 <li><a id="basketImage" href="basket.php">  <img id="basketImage" src="Media/cart.png"> </a></li><br><br><br><br><br><br>
   

    <li><a id="contactUsID" href="contactUs.html">Contact Us</a></li> <br><br><br>
    </header>




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
    
    <main>
            
        <section>

    <h2 id="resultsH2">Basket</h2>
    <br><br><br>

            <div class="resultsDiv">

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



                        $sql = "SELECT `productBasket`,`basketCategory`,`basPrice`,`uname`, `image` FROM `basket` "; 
                        
                      
                      
                       
                       
                        $result = mysqli_query($conn, $sql);


                        if (mysqli_num_rows($result) > 0) {
                            echo "<table border='1'>";
                            
            
                            // output data of each row - uses php variables in order to match users search and concatenate html variables 
                            while($row = mysqli_fetch_assoc($result)) {
                                $image= $row["image"];
                            
                                echo "<tr>
    
                                <td>". '<img src="media/'.$image.'" class="resultsImage">'. "</td>
                                <td class='resultsName'>". $row['productName']. '<br> <div class="resP">£' .$row['price']."<br>  
                               
                                
                            
        </tr>";}
    echo "</table>";

   echo "<button type='submit' id='basketButton'>Checkout  </button>";}
            
                       
    else {    
	
        echo "Your Basket is empty, sorry!";

  }
                    
                    mysqli_close($conn);
?>
 
            </div>        
           
        </section>
    

    </main> 

</body>
</html>