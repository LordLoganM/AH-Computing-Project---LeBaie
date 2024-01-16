<!DOCTYPE html>
<html>
    <head>
        <title>Profile Page</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"> <!--  CSS link -->
    
        </head>
        
        <body>
        
        <!-- Page Header -->
        <header>
            <h1 class="loggedHeader">leBaie</h1>
         
        
            <li><a id="contactUsID" href="contactUs.html">Contact Us</a></li> <br><br><br>
            </header>
        <!-- Navigation Bar -->
            <nav id="listingNav">
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

session_start();

$_SESSION["userName"] = $username;
$_SESSION["firstName"] = $forename;
$_SESSION["surName"] =  $surname;
$_SESSION["dateOfBirth"] = $dob;
$_SESSION["userPassword"] =   $pass;

$servername="localhost";
$username="root";
$password="";
$dbname="leBaieBase";

$conn=mysqli_connect($servername, $username, $password, $dbname);



if (isset($_SESSION["firstName"])){


        echo "<form id="editButton" action="editPage.php">";
        echo "<button type="submit">Edit</button>";

    echo"<section id="profileInfo">";
    echo "<h2>Heres a look at your profile".$username.".</h2>";


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
