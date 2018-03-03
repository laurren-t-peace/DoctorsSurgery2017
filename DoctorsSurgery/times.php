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
        <title>Doctor's Surgery | Opening Times</title>
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
            <div id="info">
            <h1>Opening Times</h1>
            
            <h2>Normal Opening Hours</h2>
            
            <table class="matrix" border="0" cellpadding="5">
	<tbody><tr>
		<th scope="column"></th><th align="center" scope="column"></th><th align="center" scope="column">Open</th><th align="center" scope="column">Close</th>
	</tr><tr>
		<th scope="row"></th><td align="center">Monday</td><td align="center">8.00am</td><td align="center">6.00pm</td>
	</tr><tr>
		<th scope="row"></th><td align="center">Tuesday</td><td align="center">8.00am</td><td align="center">6.00pm</td>
	</tr><tr>
		<th scope="row"></th><td align="center">Wednesday</td><td align="center">8.00am</td><td align="center">6.00pm</td>
	</tr><tr>
		<th scope="row"></th><td align="center">Thursday</td><td align="center">8.00am</td><td align="center">6.00pm</td>
	</tr><tr>
		<th scope="row"></th><td align="center">Friday</td><td align="center">8.00am</td><td align="center">6.00pm</td>
	</tr><tr>
		<th scope="row"></th><td align="center">Saturday</td><td align="center">Closed</td>
	</tr><tr>
		<th scope="row"></th><td align="center">Sunday</td><td align="center">Closed</td>
	</tr>
        </tbody></table>
            
            <h2>Help us reduce infections</h2>
            <p>
                Alcohol foam has been made available which can be used to clean and disinfect hands.  It is available at the entrance to every ward and visitors are encouraged to use it before and after visiting.
            </p>

            <p>To help the hospital reduce infections:</p>
            <p>
                •Visitors should always use the alcohol foam by the entrance to every ward before and after visiting<br />
                •Visitors should always use the chairs and not sit on beds<br />
                •Always wash your hands after visiting the toilet<br />
            </p>
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
