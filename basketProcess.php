

<?php
// Start the session
session_start();

                $servername="localhost";
                $username="root";
                $password="";
                $dbname="leBaieBase";
            

                        $userBasket=$_GET["cartBtn"];
                    
        
                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }



                        $sql = "SELECT `productName`,`productCategory`, `price`, `image` FROM `products`  WHERE `productName` like '%$userBasket%'";
                       
                       
                        $result = mysqli_query($conn, $sql);


                        if (mysqli_num_rows($result) > 0) {

                            $uname = $_SESSION["userName"]; 
                            $prod = $row["productName"];
                            $basCat = $row["productCategory"];
                            $price = $row["price"];
                            $image =$row["image"];



                            $sql = "INSERT INTO `basket`  (`productBasket`,`basketCategory`,`basPrice`,`uname`, `image`)
                            VALUES('$uname','$prod','$basCat','$price','$image')";
            
            $redirect1 = TRUE;
            if ($redirect1) {
               header('Location: http://localhost/implementation/results.php');
               die();}} 
                         
               else{echo"error adding to basket";}
                        

  
            
                       
             
                    mysqli_close($conn);
?>
