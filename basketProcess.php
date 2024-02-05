

<?php 
           
// Start the session
session_start();

$uname = $_SESSION["userName"]; 

                $servername="localhost";
                $username="root";
                $password="";
                $dbname="leBaieBase";
            

                        $prodName=$_GET["prodName"];
                        $itemCat=$_GET["itemCat"];
                        
                        $image=$_GET["image"];
                        $userBasket=$_GET["cartBtn"];


                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        


  $sql = "INSERT INTO `basket`  (`productBasket`,`basketCategory`,`basPrice`,`uname`, `image`) 
  VALUES('$prodName','$itemCat','$price','$uname','$image')";


                        $sql = "SELECT `productName`,`productCategory`, `price`, `image` FROM `products`  WHERE `productName` like '%$userBasket%'";
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