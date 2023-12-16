<!DOCTYPE html>
<html>


<?php
session_start();

        $userName = $_POST["username"];
    $firstName = $_POST["firstname"];
    $surName = $_POST["surname"];
    $dateOfBirth = $_POST["DOB"];
    $userPassword = $_POST["password"];



            $servername="localhost";
            $username="root";
            $password="";
            $dbname="leBaieBase";
        
        $conn=mysqli_connect($servername, $username, $password, $dbname);
    
      
	  if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); } 


    
$result= mysqli_query($conn, "SELECT `username` FROM `registration` WHERE `username`='".$userName."'");

  if (mysqli_num_rows($result) >0)
  {
      echo "<p>Username already exists</p>";
      $redirect1 = TRUE;
      if ($redirect1) {
         header('Location: http://localhost/implementation/failedReg.html');
         die();}}

else{
    $sql = "INSERT INTO `registration`  (`username`,`firstname`,`surname`,`DOB`,`password`) 
    VALUES('$userName','$firstName','$surName','$dateOfBirth','$userPassword')";
  
  if(mysqli_query($conn, $sql)) {
    echo "New account created successfully";} 

    $redirect = TRUE;
if ($redirect) {
   header('http://localhost/implementation/RegisteredHome.html');
   die();}

}

$_SESSION["userName"]= $userName;
$_SESSION["firstname"] = $firstName; 
$_SESSION["password"] = $userPassword; 

?>



</body>
</html>
