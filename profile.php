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

$_SESSION["userName"] = $updateUser
$_SESSION["firstName"] = $updateForename
$_SESSION["surName"] =  $updateSurname 
$_SESSION["dateOfBirth"] = $updateDOB 
$_SESSION["userPassword"] =   $updatePass   

$username=$updateUser
if (isset($_SESSION["firstName"])){

echo "<h2>Heres a look at your profile".$username.".</h2>";




}
?>

            
              

</body>
</html>
