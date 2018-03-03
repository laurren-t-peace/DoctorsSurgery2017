<?php
include 'config.php';
include 'functions.php';

session_start();

$logged_in = checkLogIn();
    
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
            <h1>Doctor's Surgery</h1>
            <!--              <div class ='Noticeboard'>
                <b>Notice board</b>
              </div>  -->
             
            <article>
                <h2>Registration</h2> 
              <p>Please make sure that you are registered with us before making an appointment, you can fill in a registration form
                  <a href="register.php"><b>here</b></a> or alternatively ring the surgery on +44 (0) 1492 860066.</p>
            </article>
            
            <article>        

              <h2>Recent news</h2>
              <p>Please ensure that you are up to date with all current vaccinations  as it 
                has been brought to attention that diseases like mumps have been reported to be on the rise.
                This is due to parents not bringing in their children in for vaccinations. <br> <br> <b> To book an appointment</b>
                you can go to the appointments page to book one there, alternatively  you can book by ringing
                the surgery.</p>
            </article>
            
            
<!--            <aside>
            <img src="images/img1.jpg" alt="Doctor" style="width:400px;height:200px;">
            </aside> -->
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
