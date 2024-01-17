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
 $updateUser = $_SESSION["userName"]; 
 $updateForename = $_SESSION["firstName"];
 $updateSurname = $_SESSION["surName"] ;
$updateDob = $_SESSION["dateOfBirth"];
$updatePass = $_SESSION["userPassword"]; 


$servername="localhost";
$username="root";
$password="";
$dbname="leBaieBase";

$conn=mysqli_connect($servername, $username, $password, $dbname);



if (isset($_SESSION["userName"])){


        echo "<form id="editPageForm" action="editPage.php">";
       

    echo"<section id="profileInfo">";
    echo "<h2>Heres a look at your profile".$username.".</h2>";


    
    echo "<button type="submit">Save</button>";
    echo"</section>";
    }


    ?>

            
              

</body>
</html>
