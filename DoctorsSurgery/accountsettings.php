<?php
include 'config.php';
include 'functions.php';
    session_start();
    
    $logged_in = checkLogIn();

if(($_SESSION['logged_in'] === false) || (!isset($_SESSION['logged_in']))){//if login is false then redirect user
    header('Location: login.php');
    die();
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
            
            <button id='btnLogin' class='dib flr m20 btnStyle' <?php if ($logged_in===true){?>style="display:none"<?php } ?>>
                <span>Log In</span>
            </button>
            
            <button id='btnLogOut' class='dib flr m20 btnStyle' <?php if ($logged_in===false){?>style="display:none"<?php } ?>>
                <span>Log Out</span>
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
            
                <h1>Account Settings</h1>
                
                <form>
                    <label for='username'>Username:</label>
                    <input type='text' name='username'>
                    
                    <button class='dib m20 btnStyle'>
                        <span>Edit</span>
                    </button>
                    <br>
                    <label for='password'>Password:</label>
                    <input type='password' name='username'>

                    <button id="btnPassChange" class='m20 btnStyle'>
                        <span>Change Password</span>
                    </button>
                </form>

                
                <div id="passwordChange" class="dib" style="display:none">
                    <form>
                        <label for="new">New Password:</label>
                        <input type="text" name="new"><br>
                        <label for="retype">Retype Password:</label>
                        <input type="text" name="retype">
                        
                            
                    </form>
                    
                    
                </div>
                
                
            </div>
            
        </div>
        
        <div id='footer' class='hfgrad'>
            
        </div>
        
        <script type="text/javascript">
            var btnLogIn = $("#btnLogin");
            var btnPassChange = $("#btnPassChange");
            var passwordDiv = $("#passwordChange");
            var btnLogOut = $("#btnLogOut");
            
             btnLogIn.click(function(){
             window.location.href='login.php'; 
          }); 
          
            btnLogOut.click(function(){
               window.location.href='logout.php'; 
            });
          
             btnPassChange.click(function(){
             passwordDiv.show(); 
          }); 
          
           
        </script>
    </body>
</html>

