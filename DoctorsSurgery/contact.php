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
        <title>Doctor's Surgery | Contact Details</title>
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
            <h1>
                Contact US
            </h1>
            
            <p class="dib">
                Llandudno General Hospital<br /> 
                Hospital Road<br />
                Llandudno<br />
                Conwy<br />
                LL30 1LB<br />
            </p>
            <img class="" style="width: 240px; height: 149px;" alt="" src="http://www.wales.nhs.uk/sitesplus/gallery/861/LLGH_web.jpg">
            <p>    
                Tel:  +44 (0) 1492 860066
            </p>
            
            <h2>
                How to get there:
            </h2>
            <p>
                <b>By road:</b>  Leave the A55 at junction 18 (Llandudno Junction).  Passing Tesco on your left, take the second exit at the roundabout (towards Deganwy)<br/>
                Drive along the A546 towards Llandudno, the hospital is located on the right behind the Maesgu Golf Club.
            </p>

            <p><b>By rail:</b>  The hospital is located approximately 10 minutes walk from Llandudno Station.  For information on rail travel information, go to:  www.traveline-cymru.info</p>

            <p><b>By bus:</b>  A regular bus service to the hospital site.  For more information, go to: www.traveline-cymru.info</p>

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
