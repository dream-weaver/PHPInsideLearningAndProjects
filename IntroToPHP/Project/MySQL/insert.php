<?php define("TITLE", "MYSQL INSERT"); 
        $userName="";
        $email="";
        $password="";
        $biography="";
        
        $userNameError="";
        $emailError="";
        $passwordError="";
    
    include("connection.php"); 
    
    if(isset($_POST["addEntry"])){
        
        if(!$_POST["userName"]){
            $userNameError = "Please enter your userName <br>";
        }else{
            $userName = validateFormData($_POST["userName"]);
        }
        
        if(!$_POST["email"]){
            $emailError = "Please enter your email <br>";
        }else{
            $email = validateFormData($_POST["email"]);
        }
        
        if(!$_POST["password"]){
            $passwordError = "Please enter your password <br>";
        }else{
            $password = validateFormData($_POST["password"]);
        }
        
        
        if($_POST["biography"]){
            $biography = validateFormData($_POST["biography"]);
        }
        
        //check to see if each variable has data
        if($userName && $email && $password){
            $query = "INSERT INTO users(id, username, password, email, signup_date, biography) VALUES (NULL, '$userName','$password','$email', CURRENT_TIMESTAMP, NULL)";

            
            if(mysqli_query($conn, $query)){
                echo "New record in database";
            }else{
                echo "Error: ".$query ."<br>". mysqli_error($conn);   
            }
            
        }
        
    }
    
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
            
            <div class="row">
                
                <div class="col-md-8">
                    
                    <h3><?php echo (TITLE); ?></h1>
                    <h4>Submit form using POST method</h4>
                    <p class="text-danger">* required fields</p>
                    
                    <form class="form-horizontal" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                        <!-- div class="form-group">
                            <label for="inputID" class="control-label col-xs-2">ID*</label>
                            <div class="col-xs-10">
                                <small class="text-danger"></small>
                                <input type="text" class="form-control" id="inputID" name="id" placeholder="ID">
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="inputUserName" class="control-label col-xs-2">UserName*</label>
                            <div class="col-xs-10">
                                <small class="text-danger"><?php echo $userNameError; ?></small>
                                <input type="text" class="form-control" id="inputUserName" name="userName" placeholder="UserName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="control-label col-xs-2">Password*</label>
                            <div class="col-xs-10">
                                <small class="text-danger"><?php echo $passwordError; ?></small>
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Email*</label>
                            <div class="col-xs-10">
                                <small class="text-danger"><?php echo $emailError; ?></small>
                                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="inputSignUpDate" class="control-label col-xs-2">Sign Up Date*</label>
                            <div class="col-xs-10">
                                <small class="text-danger"></small>
                                <input type='text' class="form-control" id="inputSignUpDate" name="signUpDate" placeholder="Sign Up Date">
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label for="inputBiography" class="control-label col-xs-2">Biography</label>
                            <div class="col-xs-10">
                                <textarea class="form-control"  name="biography" placeholder="Biography"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <input type="submit" class="btn btn-primary" name="addEntry">
                            </div>
                        </div>
                    </form>
                
                </div>
            
            </div>
          
        </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    
        <!-- Include all compiled plugins (below), or include individual files as needed -->

      </body>
</html>