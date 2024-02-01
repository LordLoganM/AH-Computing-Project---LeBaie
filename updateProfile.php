<?php
session_start();
?>

<!DOCTYPE html>
<html>

<?php

//gets users input from forms using post method and uses session variable from login or registration page to assign value to uname
$uname = $_SESSION["userName"]; 
    $updateForename = $_POST["updateForename"];
    $updateSurname = $_POST["updateSurname"];
    $updateDOB = $_POST["updateDOB"];
    $updatePass = $_POST["updatePass"];

            $servername="localhost";
            $username="root";
            $password="";
            $dbname="leBaieBase";
        

            //connects to db 
        $conn=mysqli_connect($servername, $username, $password, $dbname);
    
      //checks to see if db sucessfully connected 
	  if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
  } 

    //updates the users details in the SQL db table "registration" 
    $sql = "UPDATE `registration` SET `firstname` = '$updateForename', `surname` = '$updateSurname', `DOB` = $updateDOB, `password` = '$updatePass' WHERE `username` = '$uname'";
echo $sql;
  
//querys the db update the users details 
    if(mysqli_query($conn, $sql)) {
      echo "Account updated successfully";} 

      //sets up session variables to be used across website 
    $_SESSION["firstName"] = $updateForename; 
    $_SESSION["surName"] =  $updateSurname;
    $_SESSION["dateOfBirth"] = $updateDOB;
    $_SESSION["userPassword"] =   $updatePass;

    //setups redirect, which then sends user to the profile page after there details have updated
      $redirect = TRUE;
  if ($redirect) {
    header('Location: http://localhost/implementation/profile.php');
     die();
  }
  
  

mysqli_close($conn)
?>



</body>
</html>
