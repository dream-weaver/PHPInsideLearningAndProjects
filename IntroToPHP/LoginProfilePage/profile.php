<?php define("TITLE", "Profile Page"); 
    session_start();    
?>

<!DOCTYPE html>
<html lang="en" data-ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <!--The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <title><?php echo TITLE; ?></title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom StyleSheet -->
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
      <body>
        <div class="container"> 
            <div class="row">
                <div class="col-md-8">
                    <h3><?php echo (TITLE); ?></h1>
                    <p class="lead"><?php echo "Welcome ".$_SESSION["loggedInUser"]."!"; ?></p>
                    <p>Your email address is : <?php echo $_SESSION["loggedInEmail"]; ?></p>
                    <p><a href="logout.php" class="btn btn-danger btn-sm">Logout</a></p>
                </div>
            </div>
        </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

      </body>
</html>