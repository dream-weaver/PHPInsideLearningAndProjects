<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <!--The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <title><?php echo TITLE; ?></title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Custom StyleSheet -->
    <style>
        body{
            font-family: 'Lato', sans-serif;
        }
        
        .border-rad{
            border-radius: 0px!important;
        }
        
        .middle{
            text-align: center;
        }
        
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
      <body>
        <header>
            <nav class="navbar navbar-default navbar-inverse border-rad">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="clients.php">CLIENT<strong>MANAGER</strong></a>
                     <!--   <p class="navbar-text navbar-right"><a href="#" class="navbar-link">Log in</a></p>-->
                    </div>
                    <?php if ( $_SESSION['loggedInUser'] ) { // if user is logged in
                        ?>
                    <ul class="nav navbar-nav">
                        <li><a href="clients.php">My Clients</a></li>
                        <li><a href="add.php">Add Client</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <p class="navbar-text">Aloha, Brad!</p>
                        <li><a href="logout.php">Log out</a>/</li>
                    </ul>
                    <?php } else {
                     ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Log in</a>/</li>
                    </ul>
                    <?php } ?>
                   
                </div>
            </nav>
        </header>
        <div class="container">