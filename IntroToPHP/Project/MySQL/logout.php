<?php
    if (!isset($_SESSION))
  {
    session_start();
  }
    //clear all session variable
    session_unset();
    
    //destroy the session
    session_destroy();

    echo "You have been logged out from your session! See you next time.. <br>";

    print_r($_SESSION);

?>