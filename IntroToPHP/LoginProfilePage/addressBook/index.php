<?php define("TITLE", "Client Address Book"); 
    session_start();
    //$password = password_hash("abc_123", PASSWORD_DEFAULT);
    //echo $password;

    //include validate functions
        include("includes/functions.php");
    //connect to Database
        include("includes/connections.php");
        
        $loginError = "";
        $formEmail = "";
        $formPass = "";
        $email = "";
        $password = "";
        $loggedInUser = "";

    //if login form was submitted
    if(isset($_POST['login'])){

        //create variables 
        //wrap data with validate functions
        $formEmail = validateFormData( $_POST['email'] );
        $formPass = validateFormData( $_POST['password'] );
        
        
        //create query
        $query = "SELECT name, password FROM users WHERE email='$formEmail'";
        
        //store the query in a result
        $result = mysqli_query($conn, $query);
        
        //verify if result is returned
        if( mysqli_num_rows($result) > 0 ){
            //store basic user data in variables
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['name'];
                $hashedPass = $row['passsword'];
            }
            
            //verify hashed password with submitted password
            if( $formPass == $hashedPass ){
                //correct login details 
                //Store data in Session variables
                $_SESSION['loggedInUser'] = $name;
                
                //redirect user to client page
                header("Location: client.php");
            }else{ // hashed password didn't verify
                $loginError = "<div class='alert alert-danger'>Wrong username/password Combination. Try Again!</div>";
            }
        }else{ //no result in database
            $loginError = "<div class='alert alert-danger'>No such user in database. Please try Again.<a class='close' data-dismiss='alert'>&times;</a></div>";
        }
    }

    //close mysql connection
    mysqli_close($conn);

?>

<?php include ("includes/header.php"); ?>
          
        
            <div class="row">
                <div class="col-md-8">
                    <h1><strong><?php echo (TITLE); ?></strong></h1>
                    <p class="lead">Log in to your account:</p>
                    <p><?php echo $loginError; ?></p>
                    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Email*</label>
                            <div class="col-xs-10">
                                <small class="text-danger"></small>
                                <input type="text" class="form-control border-rad" id="inputEmail" name="email" value="<?php echo $formEmail; ?>" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="control-label col-xs-2">Password*</label>
                            <div class="col-xs-10">
                                <small class="text-danger"></small>
                                <input type="password" class="form-control border-rad" id="inputPassword" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <input type="submit" class="btn btn-primary border-rad" name="login">
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>
    <?php include("includes/footer.php"); ?>