<?php define("TITLE", "MYSQL SELECT"); 
    
    include("connection.php"); 
    
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
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
          
            if(mysqli_num_rows($result)>0){
                //we have data
                //output the data
                echo "<table class='table table-responsive table-bordered'><tr><th>ID</th><th>UserName</th><th>Email</th></tr>";

                while($row=mysqli_fetch_assoc($result)){
                   echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td></tr>";
                }

                echo "<table>";

            }else{
                echo "Whoops! No results.";
            }

            $conn->close();
          
          ?>
        </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
      </body>
</html>