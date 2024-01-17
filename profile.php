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


echo $_SESSION["userName"];
 $username = $_SESSION["userName"]; 
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

    echo "<h2>Heres a look at your profile".$username.".</h2>";

    echo "<form id='editButton' action='editPage.php'>";
    echo "<button type='submit'>Edit</button>";

    echo"<section id='profileInfo'>";
    echo "<p>Username:".$username.".</p>";
    echo "<p>Forename:".$forename.".</p>";
    echo "<p>Surname:".$surname.".</p>";
    echo "<p>DOB:".$dob.".</p>";
    echo "<p>password:".$pass.".</p>";
    echo"</section>";
    }
    ?>

        
</body>
</html>
