<?php
    //did the users browser send a cookie for the session

    if (isset($_COOKIE[session_name()])){
        //empty the cookie
        setcookie(session_name(), '', time()-86400, '/');
    }
  
    session_start();
  
    //clear all session variable
    session_unset();
    
    //destroy the session
    session_destroy();

    echo "You have been logged out from your session! See you next time.. <br>";
    echo "<p><a class='btn btn-info btn-sm' href='login.php'>Log back in</a></p>";

    print_r($_SESSION);

?>