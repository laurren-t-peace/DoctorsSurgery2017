<?php
include 'config.php';
include 'functions.php';
    // Start the session
    session_start();
    
    $logged_in = checkLogIn();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Doctor's Surgery | Register</title>
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
                <li><a href="index.php">Home</a></li>
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
            <h1>Registration</h1>
            <p><b>Please fill out the form below</b></p>
            

                <br><label>First Name:</label>
                <input id='drInput' readonly><br>
                <br><label>Last Name:</label>
                <input id='dateInput' readonly><br>
                <br><label>Date of Birth:</label>
                <input id='timeInput' readonly><br>
                <br><label>Address:</label>
                <input id='timeInput' readonly><br>
                <br><label>Postcode:</label>
                <input id='timeInput' readonly><br>
                <br><label>Home number</label>
                <input id='timeInput' readonly><br>
                <br><label>Mobile number</label>
                <input id='timeInput' readonly><br>
                <br><label>E-mail Address</label>
                <input id='timeInput' readonly><br>
                
                <button id='btnEnter' class='btnStyle dib mt20'>
                    <span>Submit</span>
                </button>               
                
                <button id='btnCancel' class='btnStyle dib mt20 ml20'>
                    <span>Cancel</span>
                </button>
            
             </div>
        </div>
        
        <div id='footer' class='hfgrad'>
            
        </div>
        
        <script type="text/javascript">
            var btnLogIn = $("#btnLogin");
            var btnLogOut = $("#btnLogOut");
            
             btnLogIn.click(function(){
             window.location.href='login.php'; 
          }); 
          
            btnLogOut.click(function(){
               window.location.href='logout.php'; 
            });            
           
        </script>
    </body>
</html>
