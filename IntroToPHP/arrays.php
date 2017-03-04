<?php define("TITLE", "PHP Arrays"); ?>

<!DOCTYPE html>
<html lang="en" data-ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <title><?php echo TITLE; ?></title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
            <?php
              //Variables
              $name="Tanvir";
              echo ("Hello".$name."<br>");

              //Array

              $user = array(
                  "johnDoe",
                  "JohnDoe",
                  32, 
                  "Male",
                  "Mexico"
              );

              foreach($user as $u ){
                  echo $u."<br>";
              }
          //Associative Array
            $people=array(
                "userName" => "johnDoe",
                "fullName" => "John Doe",
                "age" => 32,
                "gender" => "Male",
                "country" => "Mexico"
            );
            
                echo $people["gender"];
          
              //Multidimensional Array
                $employees=array(
                    
                        array(
                        "userName" => "johnDoe",
                        "fullName" => "John Doe",
                        "age" => 32,
                        "gender" => "Male",
                        "country" => "Mexico"
                    ),
                        array(
                        "userName" => "janeDoe",
                        "fullName" => "Jane Doe",
                        "age" => 29,
                        "gender" => "Female",
                        "country" => "South Africa"  
                    ),  
                        array(
                        "userName" => "perinIrani",
                        "fullName" => "Perin Irani",
                        "age" => 30,
                        "gender" => "Female",
                        "country" => "India"  
                    ),
                              
                );
          
                echo $employees[0]["fullName"];
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