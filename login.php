
            <?php

            $userName = $_POST["username"];
            $userPassword = $_POST["password"];

                $servername="localhost";
                $username="root";
                $password="";
                $dbname="leBaieBase";
                    
                $valid=false;
                $conn=mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT `username`,`firstName`, `surname`, `DOB`, `password` FROM `registration` WHERE `username`='".$userName."'";
                $result = mysqli_query($conn, $sql);   
    
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    if($row["password"]==$userPassword){
                        $valid=true;
                        $_SESSION["logged_in"] = true;
                    }
        
                }
                mysqli_close($conn);
    
                if ($valid==true){

                    echo "<h3>You are not logged in</h3>";
                    $redirect5 = TRUE;
                    if ($redirect5) {
                       header('Location: http://localhost/implementation/RegisteredHomeLanding.html');
                       die();}}

                   
                

                else   {
                    echo "<h3>You are not logged in</h3>";
                    $redirect4 = TRUE;
                    if ($redirect4) {
                       header('Location: http://localhost/implementation/invalidLogin.html');
                       die();}}
                ?>

        