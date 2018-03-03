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
        <title>Doctor's Surgery | Prescriptions</title>
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
            <div id = 'info'>
                
                <h1>Prescriptions</h1>
                <h2>Repeat Prescriptions</h2>
                <a href="https://www.mysurgerywebsite.co.uk/secure/prescriptionsl.aspx?p=w94018 "><b>Click here for repeat prescriptions</b></a>
                <p>Repeat prescriptions will be issued at the doctor's 
                    discretion and are normally for patients on long-term treatment. 
                    Requests for prescriptions can be made in writing or by calling at the surgery Monday to Friday.
                    We are unable to take prescription requests over the telephone.<br/> <br/>
                    Alternatively you can order online via the link at the top of this page. 
                    New users are required to complete a simple one-off registration prior to using the service.
                    Where possible give exact drug names when ordering.
                    We are unable to take orders or issue prescriptions at weekends, 
                    public holidays or out of normal surgery hours</p> <br/>
                <h2>Medication Reviews</h2>
                <p>Patients on repeat medication will be asked to see a doctor, 
                    nurse practitioner or practice nurse at least once a year to review these regular 
                    medications and notification should appear on your repeat slip. 
                    Please ensure that you book an appropriate appointment to avoid unnecessary 
                    delays to further prescriptions.<p/>
                
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
