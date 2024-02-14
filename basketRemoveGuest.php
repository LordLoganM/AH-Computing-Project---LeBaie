


<?php
// Start the session
session_start();

$prod = $_GET["removeBtn"];
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


                      // sql to delete a record of product selected
$sql = "DELETE FROM `guestbasket` WHERE `guestProdBasket` like '%$prod%'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  $redirect1 = TRUE;
  if ($redirect1) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
     die();}
               
     else{echo"error adding to basket";}}

      

else {
  echo "Error deleting record: " . mysqli_error($conn);
}
                                          
                    mysqli_close($conn);
?>
 
            </div>        
           
        </section>
    

    </main> 

</body>
</html>