<!DOCTYPE html>
<html>

<head>

<title>Registration Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css"> <!--  CSS link -->
</head>
<body> 
<header>
<h1 id="regHead">leBaie</h1>
<h3 id="regH2">Create Account</h3>
</header>


	<?php
	
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
	
	
        $sql = "INSERT INTO `registration`  (`username`,`firstname`,`surname`,`DOB`,`password`) VALUES('$userName','$firstName','$surName','$dateOfBirth','$userPassword')";
    
        if (mysqli_query($conn, $sql)){
            
            echo "<p>Account Created</p>";
            
        }
   
        else{
            
            echo "<p>Error Registering Account</p>";
            echo $sql;
            
        }
    
   $conn = mysql_query("SELECT username FROM registration WHERE username='".$username."'");
echo $conn;
  if (mysql_num_rows($conn) != 0)
  {
      echo "Username already exists";
  }
  else{}

  
	
	
	

        mysqli_close($conn);
		
		
	?>
    

</body>
</html>
