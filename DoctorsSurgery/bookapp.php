<?php

include 'config.php';
include 'functions.php';
    // Start the session

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
        <title>Doctor's Surgery | Book Appointment</title>
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
        
        <div class ='navbar'>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="times.php">Opening Times</a></li>
                <li><a href="appointments.php" class="currentLink">Appointments</a></li>
                <li><a href="prescriptions.php">Prescriptions</a></li>
                <li><a href="clinics.php">Clinics and Services</a></li>
                <li><a href="contact.php">Contact Details</a></li>
                <li><a href="account.php">My Account</a></li>
            </ul>
        </div>
        
        <div id='content'>
            <div id='info'>
                <h1>Book Appointment</h1>

                <p>Search for available appointments either by doctor, by date or by both.</p>
                <button id='btnDr' class='btnStyle dib'>
                     <span>Search by Doctor</span>
                </button>
                    
                <button id='btnDate' class='btnStyle dib ml20'>
                    <span>Search by Date</span>
                </button>
                    
                <button id='btnBoth' class='btnStyle dib ml20'>
                    <span>Search by Date and Doctor</span>
                </button><br>
                 


            </div>
        </div>
        
        <div id='footer' class='hfgrad'>
            
        </div>
        
        <script type="text/javascript">

            var btnLogIn = $("#btnLogin");
            var btnLogOut = $("#btnLogOut");
            var btnDr = $("#btnDr");
            var btnDate = $("#btnDate");
            var btnBoth = $("#btnBoth");

             btnLogIn.click(function(){
             window.location.href='login.php'; 
            }); 
          
            btnLogOut.click(function(){
               window.location.href='logout.php'; 
            });
            
            btnDr.click(function(){
               window.location.href = 'bookdr.php';
            });
            
            btnDate.click(function(){
               window.location.href = 'bookdate.php';
            });
            
            btnBoth.click(function(){
               window.location.href = 'bookboth.php';
            });
           
        </script>
    </body>
</html>
