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



if (isset($_SESSION["firstName"])){

    echo "<h2 id='profileHeading'>Heres a look at your profile ".$forename."</h2>";
   
    echo"<section class='profileInfo'>";
    echo"<br>";
    echo "<p>Username: ".$uname."</p>";
    echo"<br>";
    echo "<p>Forename: ".$forename."</p>";
    echo"<br>";
    echo "<p>Surname: ".$surname."</p>";
    echo"<br>";
    echo "<p>DOB: ".$dob."</p>";
    echo"<br>";
    echo "<p>password: ".$pass."</p>";
    echo"</section>";
    echo"<br>";
    echo "<form action='editProfile.php'>";
    echo "<button  id=editButton type='submit'>Edit Profile </button>";
    echo "</form>";

    }
    ?>

        
</body>
</html>
