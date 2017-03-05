<?php define("TITLE", "PASSWORD HASH"); 
    include("connection.php");
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
    <link href="https://bootswatch.com/sandstone/bootstrap.min.css" rel="stylesheet">
    <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
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
            <h3><?php echo (TITLE); ?></h1>
            <?php
                /*$password = password_hash("mypassword", PASSWORD_DEFAULT);
                echo $password;*/
                $hashedPassword = '$2y$10$RhbPevAS4kn9xpy1J/4Gye68HB6RyjmtHOsTp9xVFMxnmwBfFifeq';
                if(isset($_POST["submit"])){
                        if(password_verify($_POST["password"], $hashedPassword)){
                        echo "Correct Password";
                    }else{
                        echo "Incorrect Password";
                    }
                }
            ?>
            <form class="form-horizontal" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                 <div class="form-group">
                    <label for="inputPassword" class="control-label col-xs-2">Password</label>
                    <div class="col-xs-10">
                        <small class="text-danger"></small>
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-10">
                        <input type="submit" class="btn btn-primary" name="submit">
                    </div>
                </div>
            </form>
            
        </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
      </body>
</html>