<?php
session_start();
?>
	
<!DOCTYPE html>
<html>


<?php


        $userName = $_POST["username"];
    $firstName = $_POST["firstname"];
    $surName = $_POST["surname"];
    $dateOfBirth = $_POST["DOB"];
    $userPassword = $_POST["password"];

    $_SESSION["userName"] = $userName;
    $_SESSION["firstName"] = $firstName;
    $_SESSION["surName"] =  $surName;
    $_SESSION["dateOfBirth"] = $dateOfBirth;
    $_SESSION["userPassword"] =   $userPassword;

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
   header('Location: http://localhost/implementation/RegisteredHome.php');
   die();}

}

?>



</body>
</html>
