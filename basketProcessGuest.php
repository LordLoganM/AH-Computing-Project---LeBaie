
<?php
// Start the session
session_start();

                $servername="localhost";
                $username="root";
                $password="";
                $dbname="leBaieBase";
            

                        $userBasket=$_GET["cartBtn"];
                        $timestamp = time();
                        $currentDate = gmdate('Y-m-d', $timestamp);

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }



                        $sql = "SELECT `productName`,`productCategory`, `price`, `image` FROM `products`  WHERE `productName` like '%$userBasket%'";
                       
                       
                        $result = mysqli_query($conn, $sql);


                        if (mysqli_num_rows($result) > 0) {
                            
                            //sets $result to $row which is a associated array which is then inserted to basket table 
$row =mysqli_fetch_array($result);
                           
                            $prod = $row["productName"];
                            $basCat = $row["productCategory"];
                            $price = $row["price"];
                            $image =$row["image"];



                            $sql = "INSERT INTO `guestbasket`  (`guestProdBasket`,`guestBasketCategory`,`guestBasPrice`,`image`, `orderTime`)
                            VALUES('$prod','$basCat','$price','$image', $currentDate)";
                            

                            //querys db and creates delay so that insert works before being redirected to the page they came from  
                    if(mysqli_query($conn, $sql)) {
    echo "added to basket";}        
                          
            $redirect1 = TRUE;
            if ($redirect1) {
               header('Location: ' . $_SERVER['HTTP_REFERER']);
               die();}} 
                         
               else{echo"error adding to basket";}
            
                       
             
                    mysqli_close($conn);
?>