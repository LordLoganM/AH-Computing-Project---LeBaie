<?php
session_start();
?>

<!DOCTYPE html>
<html>

<?php


$uname = $_SESSION["userName"]; 
    $updateForename = $_POST["updateForename"];
    $updateSurname = $_POST["updateSurname"];
    $updateDOB = $_POST["updateDOB"];
    $updatePass = $_POST["updatePass"];

            $servername="localhost";
            $username="root";
            $password="";
            $dbname="leBaieBase";
        
        $conn=mysqli_connect($servername, $username, $password, $dbname);
    
      
	  if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
  } 


    $sql = "UPDATE `registration` SET `firstname` = '$updateForename', `surname` = '$updateSurname', `DOB` = $updateDOB, `password` = '$updatePass' WHERE `username` = '$uname'";
echo $sql;
  
    if(mysqli_query($conn, $sql)) {
      echo "Account updated successfully";} 
    $_SESSION["firstName"] = $updateForename;
    $_SESSION["surName"] =  $updateSurname;
    $_SESSION["dateOfBirth"] = $updateDOB;
    $_SESSION["userPassword"] =   $updatePass;
      $redirect = TRUE;
  if ($redirect) {
    header('Location: http://localhost/implementation/profile.php');
     die();
  }
  
  

mysqli_close($conn)
?>



</body>
</html>
