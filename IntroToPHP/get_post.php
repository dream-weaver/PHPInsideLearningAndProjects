<?php define("TITLE", "GET &amp POST"); 

    if(isset($_POST["post_submit"])){
       
        function validateFormData($formData){
            $formData=trim(stripslashes(htmlspecialchars($formData)));
            return $formData;
        }
        
        $post_name="";
        $post_email="";
        $nameError="";
        $emailError="";
        
        
        if(!$_POST["post_name"]){
            $nameError = "Please enter your name <br>";
        }else{
            $post_name = validateFormData($_POST["post_name"]);
        }

        if(!$_POST["post_email"]){
            $emailError = "Please enter your email <br>";
        }else{
            $post_email = validateFormData($_POST["post_email"]);
        }
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
            
            <h4>Submit form using GET method</h4>
            <form action="form_get.php" method="get">
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Email" name="email">
                <input type="submit" name="form_submit">
            </form>
            <br>
            
   
            <h4>Submit form using POST method</h4>
            <p class="text-danger">* required fields</p>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <small class="text-danger">*<?php echo $nameError; ?></small>
                <input type="text" placeholder="Name" name="post_name"><br>
                <small class="text-danger">*<?php echo $emailError; ?></small>
                <input type="text" placeholder="Email" name="post_email"><br>
                <input type="submit" name="post_submit">
            </form>
            
            <hr>
            <?php
            
                if(isset($_POST["post_submit"])){
                    echo "<lead>Your form has been sent successfully!</lead>";
                    echo "<lead>Hello ".$post_name. "</lead><br>
                        <p>Your email is ".$post_email."</p>";
                }else{
                    echo "Please check your information and submit!";
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