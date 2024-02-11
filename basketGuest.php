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

   <!-- Page Header -->
<header>
<h1>leBaie</h1>
<li><a id="regPageID" href="registrationPage.html">Register Here</a></li>
<li><a id="loginPageID" href="loginPage.html">Login Here</a></li> 
<br><br><br><br><br><br>
<li><a id="contactUsID" href="contactUsGuest.html">Contact Us</a></li> <br><br><br>
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
                $uname = $_SESSION["userName"]; 
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



                        $sql = "SELECT `guestProdBasket`,`guestBasketCategory`,`guestBasPrice`,`image` FROM `guestbasket`";
                     
                      
                        $result = mysqli_query($conn, $sql);


                        if (mysqli_num_rows($result) > 0) {
                            echo "<table border='1'>";
                            
            
                            // output data of each row - uses php variables in order to match users search and concatenate html variables 
                            while($row = mysqli_fetch_assoc($result)) {
                                $image= $row["image"];
                            
                                echo "<tr>
    
                                <td>". '<img src="media/'.$image.'" class="resultsImage">'. "</td>
                                <td class='resultsName'>". $row['productBasket']. '<br> <div class="resP">£' .$row['basPrice']."<br>  
                                <form id='searchButtonRes' method='GET' action='basketRemoveGuest.php'>
                                <button type = 'submit' name = 'removeBtn' Value = ".$row["productBasket"]. " 'class= 'resultsButton'>Remove from basket</button> </td></div>
                            
                                </form>
                                
                            
        </tr>";}
    echo "</table>";
echo "<br>";
   echo "<button type='submit' class='basketButton'>Checkout  </button>";}
            
                       
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