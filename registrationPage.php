<!DOCTYPE html>
<html>

<head>
<title>Registration Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css"> <!--  CSS link -->
<script>
function check() {
    var input = document.getElementById('password_confirm');
    if (input.value != document.getElementById('password').value) {
        input.setCustomValidity('Passwords Must be Matching.');
    } else {
        // input is valid -- reset the error message
        input.setCustomValidity('');
    }
}

</script>
</head>

<body>
<!-- Page Header -->
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


 $conn = mysqli_query("SELECT username FROM registration WHERE username='".$username."'");
echo $conn;
  if (mysql_num_rows($conn) != 0)
  {
      echo "<p>Username already exists</p>";
 
		echo "<div id='regDiv' align='center'>";
		echo "<section id='sectionReg'>";


echo "<form id='regForm' method='POST' action='registrationPage.php'>";

echo "<p>Username: <input type ='text' size='25' maxlength='10' name='username' value='' required > </p> <br>"; 
echo "<p>First Name: <input  type ='text' maxlength='20'size='24' name='firstname' value='' required> </p> <br>";
echo "<p>Surname: <input  type ='text' maxlength='20' size='26' name='surname' value='' required> </p> <br>";
echo "<p>Date of Birth: <input id='DOBreg' type ='date' size='30' name='DOB' value='dd/mm/yyyy' min='1940-12-31' max='2012-12-31' required> </p> <br>";


echo "<p> <label for='password'>Password:</label> <input name='password' required='required' type='password' id='password' size='26' maxlength='20'  oninput='check()'/>
</p> <br>";

echo "<p><label for='password_confirm'>Confirm Password:</label> <input name='password_confirm' required='required' size='16' type='password' id='password_confirm' maxlength='20' oninput='check()'/>
</p><br>";

echo "<button type='submit'>Create Account</button>";

 echo "</form>";

echo "<a id='homeRegLink' href='home.html'>continue as guest</a>";
echo "<a  href='loginPage.html'>login</a>";
 echo "</section>";
 echo "</div>";
 
  $sql = "INSERT INTO `registration`  (`username`,`firstname`,`surname`,`DOB`,`password`) VALUES('$userName','$firstName','$surName','$dateOfBirth','$userPassword')";
  
  }
else{
	echo "You have registered succesfully";
	echo "Click here to go to the main page";
	
}
?>
</body>
</html>
