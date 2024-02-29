<?php



  //destroys all of the data associated with the current session.
                session_destroy();
                echo "<h2>Log Out</h2>";
               
                echo "<p>You have been logged out</p>"; 

                echo "<p><a href='home.php'>Return to login screen</a></p>";

                $redirect1 = TRUE;
      if ($redirect1) {
         header('Location: http://localhost/implementation/home.php');
         die();}
                ?>

  