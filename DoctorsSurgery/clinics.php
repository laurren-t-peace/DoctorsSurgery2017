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
        <title>Doctor's Surgery | Clinics and Services</title>
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
                <h1>Clinics and Services</h1>
                <p>Our nurses run their own surgeries in a specially equipped treatment room. Appointments can be booked in advance with the nurses. They are vital to the well-being of our patient and can help/advise on a vast range of medical conditions, including:</p>
                <p>- Minor ailments and accidents<br />	
                   - Wound care and dressings<br /> 	
                   - Blood pressure checks<br /> 	
                   - Cervical smear tests<br /> 	
                   - Family planning<br /> 	
                   - Chronic Disease clinics ( diabetes/ respiratory/ heart disease, etc.)<br /> 	
                   - Smoking Cessation<br /> 	
                   - Ear syringing<br /> 	
                   - HRT & Menopause<br /> 	
                   - Immunisations/travel advice<br /> 	
                   - Cryosurgery (liquid nitrogen)<br /> 	
                   - Annual checks for people over the age of 75<br /> 	
                   - plus many more<br />
                   
                <p>If you would to know more about your health and illnesses, please <a href="illness.php"><b>click here...</b></a></p>
                
                <b>Well-Person Consultations</b>
                <p>Registered patients aged over 16-74 who have not been seen for three years may request a consultation.<br />
                   Registered patients aged over 75 who have not been seen in the previous 12 months may request a consultation. If you are unable to attend the surgery for this consultation because of your medical condition, a home visit may be arranged.
                </p>
                
                <b>Vaccinations</b>
                <p>Flu and Pneumonia Vaccinations are encouraged for all patients over 65, and also, patients under 65 who have certain medical conditions. For further information, please speak to a Practice Nurse.
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