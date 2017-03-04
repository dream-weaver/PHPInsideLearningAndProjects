<?php define("TITLE", "Honest Click Bait Headlines"); 

    include("PHPInclude/functions.php");
    if (isset($_POST["fix_submit"])){
        checkForClickBait();
    }
?>

<!DOCTYPE html>
<html lang="en" data-ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <title><?php echo TITLE; ?></title>

    <!-- Bootstrap -->
    <link href="https://bootswatch.com/readable/bootstrap.min.css" rel="stylesheet">
    <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Custom StyleSheet -->
    <link href="includes/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>  
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program</p>
            
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post" >
                    <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make Honest</button>
                </form>
            </div>
            
            <?php
                if(isset($_POST["fix_submit"])){
                    $click_bait = checkForClickBait()[0];
                    $honest_headline = checkForClickBait()[1];
                    displayHonestHeadline($click_bait, $honest_headline);
                }
            ?>
            
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="includes/js/angular.min.js"></script>
    <script src="includes/js/app.js"></script>
  </body>
</html>