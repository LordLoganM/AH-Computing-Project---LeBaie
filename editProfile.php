<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Profile Page</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"> <!--  CSS link -->
    
        </head>
        
        <body>
        

        <header>
<h1 id="profileH1">leBaie</h1>
</header>

        <!-- Navigation Bar -->
            <nav id="profileNav">
                <ul>
                    <li><a id="homePageID" href="RegisteredHome.php">Home</a></li>
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="clothingPage.html">Clothing</a></li>
                    <li><a href="electronicsPage.html">Electronics</a></li>
                    <li><a href="gamesPage">Games</a></li>
                        <li><a href="vehiclesPage.html">Vehicles</a></li> 
                </ul>
            </nav>
        
            <?php
 $uname = $_SESSION["userName"]; 
 $forename = $_SESSION["firstName"];
 $surname = $_SESSION["surName"] ;
$dob = $_SESSION["dateOfBirth"];
$pass = $_SESSION["userPassword"]; 

$servername="localhost";
$username="root";
$password="";
$dbname="leBaieBase";

$conn=mysqli_connect($servername, $username, $password, $dbname);
?>

<h2 id='profileHeading'>Edit Profile:</h2>
<section class="profileInfo">
<form id="profileEdits" method="POST" action="updateProfile.php">
<br><br><br><br><br>
<p>Forename: <input  type ="text" maxlength="20"size="25" name="updateForename" required value="<?php echo $forename;?>"/> </p> <br>
<p>Surname: <input  type ="text" maxlength="20"size="24" name="updateSurname" required value="<?php echo $surname;?>"/> </p> <br>
<p>Date of Birth: <input type ="date" name="updateDOB" min="1940-12-31" max="2012-12-31" required value="<?php echo $dob;?>"/> </p> <br>
<p>Password: <input  type ="text" maxlength="20" size="26" name="updatePass" required value="<?php echo $pass;?>"/> </p> <br>

<button  id="saveProfile" type="submit">Save Changes</button>

</form>
</section>
        
</body>
</html>
