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
        <title>Doctor's Surgery | Appointments</title>
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
                <h1>Appointments</h1>
                <h2>Doctor</h2>
                <p>You can book an appointment with a doctor over the phone, on the website or at the reception desk within the surgery.
                Appointments over the phone can be made between 8.30am and 5pm between Monday and Friday.
                To make an appointment over the phone please call [phone number].<br>
                If you would like to come into the surgery to make an appointment then please come within the opening times and speak
                to the receptionist. If you come between 8.30am and 9am then we may be able to offer you an appointment for that morning.<br>
                Appointments being made through the website can be made by clicking the button below.
                </p>
                <button id='btnBook' class="btnStyle">
                    <span>Book Appointment</span>
                </button>

                <h2>Practice Nurse</h2>
                <p>On some occasions it may be worth considering seeing a practice nurse instead of a doctor.
                   You can book appointments with the practice nurse in exactly the same way as you would to see a doctor.
                   To find out if you need to see a doctor or a practice nurse, please visit the clinics and services page
                   to see our <a href="clinics.php"><u>Who to See?</u></a> scale.
                </p>

                <h2>Cancellations</h2>
                <p>You can cancel or edit an appointment in the same you can book one, either over the phone, on the website or at the reception
                   desk within the surgery.<br>
                   To cancel an appointment using the website, please click the button below. 
                </p>
                <button id='btnCancel' class="btnStyle">
                    <span>Cancel/Edit Appointment</span>
                </button>
            </div>
        </div>
        
        <div id='footer' class='hfgrad'>
            
        </div>
        
        <script type="text/javascript">
            var btnLogIn = $("#btnLogin");
            var btnLogOut = $("#btnLogOut");    
            var btnBook = $("#btnBook");
            
            btnBook.click(function(){
               window.location.href = "bookapp.php"; 
            });
           
            $("#btnCancel").click(function(){
               window.location.href = "cancelapp.php"; 
            });
            

            
             btnLogIn.click(function(){
             window.location.href='login.php'; 
          }); 
          
            btnLogOut.click(function(){
               window.location.href='logout.php'; 
            });
    
        </script>
    </body>
</html>