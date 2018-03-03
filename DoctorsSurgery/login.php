<?php

include 'config.php';
include 'functions.php';

session_start();
    
    
    $conn = connect($config);
    
    $status = "";
    $login_status = "";

    
   if ( isset ($_POST['loginForm'])) {//Checks to see if form has been posted
        //get values
        $username =$_POST['username'];//posts user name
        $password = $_POST['password'];//posts password
        
        (int)$results = getObject("SELECT loginID FROM login WHERE username = :username AND password = :password",//uses query function
                array(
                    'username' => $username,
                    'password' => $password
                ),
                $conn)[0];
        var_dump($results);
        
        
        if($results > 0){//query should bring back id, if it does then set log in to true
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $results;
            header('Location: account.php');
            $login_status = "";
            
        }
        else{//if not set to false
            $_SESSION['logged_in'] = false;
            $login_status = "You have entered the wrong username or password. Please try again.";
        }
    }
    
    

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Doctor's Surgery | Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet"> 
        <link rel="stylesheet" media="screen" type="text/css" href="css/screen.css" />    
        <script type="text/javascript" src="js/jquery-1.12.0.js"></script>
    </head>
    <body id='grad'>
        <div id='header' class='hfgrad'>
            <h1 id='logo'>Doctor's Surgery</h1>
            
            <button class='dib flr m20 btnStyle'>
                <span>Log In</span>
            </button>
        </div>
        
        <div class='navbar'>
            <ul>
                <li><a href="index.php" class="currentLink">Home</a></li>
                <li><a href="times.php">Opening Times</a></li>
                <li><a href="appointments.php">Appointments</a></li>
                <li><a href="prescriptions.php">Prescriptions</a></li>
                <li><a href="clinics.php">Clinics and Services</a></li>
                <li><a href="contact.php">Contact Details</a></li>
                <li><a href="account.php">My Account</a></li>
            </ul>
        </div>
        
        <div id='content'>
            
            <div id='info'>
                
                <h1>Log In</h1>
                
                 <div id='orderForm' class="center mb2">
                <form method='post'>
                    <fieldset>
                        <legend>Log in</legend>
                        <label for='username'>Username:</label>
                        <input name='username' type='text'><br>
                        <label for='password'>Password:</label>
                        <input name='password' type='text'>
                        
                    <button id='submitLogIn' class='btnStyle dib m2 p5' type='submit' name="loginForm">
                        <span>Login</span>
                    </button>                       
                        
                    </fieldset>
                </form>
                  <h3 class="dib">Don't have an account?</h3>
                <button id='btnSignUp' class='btnStyle dib'>
                    <span>Sign up</span>
                </button>              
                 <?php echo $status; ?>
            </div>
            

        </div>
        
        <div id='footer' class='hfgrad'>
            
        </div>
        
        <script type="text/javascript">
            
           
        </script>
    </body>
</html>
