<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Lebaie</title>

    <link rel="stylesheet" type="text/css" href="css/style.css"> <!--  CSS link -->

</head>
<body>

    <header>
    <h1 class="loggedHeader">leBaie</h1>
    <li><a id="listProduct" href="listingPage.html">List Product</a></li>
    <li><a id="profileImage" href="profile.html"><img id="profileImage" src="media/profile-icon-png-908.png"></a></li>
 <li><a id="basketImage" href="basket.html">  <img id="basketImage" src="Media/cart.png"> </a></li><br><br><br><br><br><br>
   

    <li><a id="contactUsID" href="contactUs.html">Contact Us</a></li> <br><br><br>
    </header>


<!--  search bar and search button -->
<div class="container">
<form id="searchButton" method="GET" action="results.php">
<input type="text" placeholder="Search leBaie">
<button type="submit">Search</button>
</form>
</div>

     <nav>
    
    
     </nav>
    
    <main>
            
        <section>

    
            <div class="resultsDiv">

  
                <?php 
               
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="leBaieBase";
        

                if ($_SERVER["REQUEST_METHOD"] == "GET") {    
                    $userTitle=$_GET['Title'];
                    $userType=$_GET['Type'];
                }
                //Building website using echo

                if ($userTitle==""){
	               echo "You forgot to enter a Title";}

                else
                {


                    //Results now displayed
                    echo "<h2>Find Assessment</h2>";    
                    echo "Results for ".$userTitle." from the category: ".$userType;
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }



                    $sql = "SELECT `username`,`firstName`, `surname`, `DOB`, `password` FROM `storeFront`";
                    $result = mysqli_query($conn, $sql);



                    if (mysqli_num_rows($result) > 0) {
	                    echo "<table border='1'>";
	                    echo "<tr>";
	                    echo "<th>Code</th>";
                        echo "<th>Title</th>";
                        echo "<th>Assessment Type</th>";
                        echo "<th>Duration</th>";
                        echo "<th>Setter</th>";
                        echo "<th>Pass Mark</th>";
         
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
        
	                       echo "<tr><th>". $row["AssessmentCode"]. "</th> <th> " . $row["Title"]. "</th> <th>". $row["AssessmentType"]. "</th><th>". $row["Duration"]. "</th><th>". $row["Setter"]. "</th><th>". $row["Pass Mark"]. "</th></tr>";
                        }
		                echo "</table>";

                    } 


                    else {    
	
		                  echo "There were no results matching your search";
                
                    }


                    mysqli_close($conn);


                }


                echo"<p>";

                echo"<a href='FindAssessment.php'>Return to search page</a>";

                }
                
                ?>
 
            </div>        
        

        </section>
    

    </main> 


    <footer>
        <a href='index.html'>Home</a>  
     </footer>    
    
</body>
</html>