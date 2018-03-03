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
        <title>Doctor's Surgery | Cancel or Edit Appointment</title>
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
                <li><a href="appointments.php" class="currentLink">Appointments</a></li>
                <li><a href="prescriptions.php">Prescriptions</a></li>
                <li><a href="clinics.php">Clinics and Services</a></li>
                <li><a href="contact.php">Contact Details</a></li>
                <li><a href="account.php">My Account</a></li>
            </ul>
        </div>
        
        <div id='content'>
            <div id='info'>
                <h1>Cancel or Edit Appointment</h1>
                <p class='dib'>What date is your appointment?</p>
                <select name='app' id='selectApp' class='dib'>
                    <option value=''>Please Select...</option>
                </select><br>

                <br><label>Doctor:</label>
                <input id='drInput' readonly><br>
                <br><label>Date:</label>
                <input id='dateInput' readonly><br>
                <br><label>Time:</label>
                <input id='timeInput' readonly><br>
                
                <button id='btnEdit' class='btnStyle dib mt20'>
                    <span>Edit</span>
                </button>
                
                <button id='btnSave' class='btnStyle dib mt20' style="display:none">
                    <span>Save</span>
                </button>                
                
                <button id='btnCancel' class='btnStyle dib mt20 ml20'>
                    <span>Cancel</span>
                </button>
                
            </div>
        </div>
        
        <div id='footer' class='hfgrad'>
            
        </div>
        
        <script type="text/javascript">
        var btnCancel = $("#btnCancel");
        var btnEdit = $("#btnEdit");
        var btnSave = $("#btnSave");
    
    
        btnCancel.click(function(){
            alert("Are you sure you want to cancel?");
        });

        
        btnEdit.click(function(){
            $("#drInput").attr('readonly', false);
            $("#dateInput").attr('readonly', false);
            $("#timeInput").attr('readonly', false);
            btnEdit.hide();
            btnSave.show();
        });
        
        btnSave.click(function(){
            $("#editInput").attr('readonly', true);
            $("#dateInput").attr('readonly', true);
            $("#timeInput").attr('readonly', true);
            btnEdit.show();
            btnSave.hide();
            alert("Your appointment has been changed.");
        });
        
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