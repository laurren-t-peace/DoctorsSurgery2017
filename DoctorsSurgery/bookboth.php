<?php

include 'config.php';
include 'functions.php';
    // Start the session

    session_start();
    
    $status = "";
    $login_id = $_SESSION['userid'];
    
    $logged_in = checkLogIn();
    
    $conn = connect($config);
    
    

if(($_SESSION['logged_in'] === false) || (!isset($_SESSION['logged_in']))){//if login is false then redirect user
    header('Location: login.php');
    die();
}

(int)$user_id = getObject("SELECT ID FROM users WHERE LoginID = :id",//uses query function
                array(
                    'id' => $login_id
                ),
                $conn)[0]; 

   if ( isset ($_POST['search'])) {//Checks to see if form has been posted
        //get values
        $doctor =$_POST['doctor'];//posts user name
        $date = $_POST['date'];//posts password
        
        
       $results = get("SELECT Time FROM booking WHERE Doctor = :doctor AND Date = :date AND Booked = 'N'",//uses query function
                array(
                    'doctor' => $doctor,
                    'date' => $date
                ),
                $conn);
        
   }
   
      if ( isset ($_POST['book'])) {//Checks to see if form has been posted
        //get values
        $doctor = $_POST['doctor'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        
        if ($time === "Please Select..."){
            $status = "Please ensure all fields have been entered.";
        }
        else{
         (int)$booking_results = getObject("SELECT ID FROM booking WHERE Doctor = :doctor AND Date = :date AND Time = :time",//uses query function
                array(
                    'doctor' => $doctor,
                    'date' => $date,
                    'time' => $time
                ),
                $conn)[0]; 
         
         query('UPDATE booking SET Booked = "Y" WHERE ID = :id',
                 array(
                     'id' => $booking_results
                 ),
                 $conn);
         
         query("INSERT INTO user_bookings (ID, UserID, BookingID) VALUES(NULL, :userid, :bookingid)",
                 array(
                     'userid' => $user_id,
                     'bookingid' => $booking_results
                 ),
                 $conn);
         
        }

        
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
                <h2>Search by Date and Doctor</h2>
                 
                <form method="post">
                    <fieldset>
                        <label for="doctor">Please select a doctor:</label>
                        <select name="doctor">
                            <option <?php if(isset($_POST['doctor']) && $_POST['doctor'] == 'Dr Acula'){ ?> selected="selected" <?php } ?>>Dr Acula</option>
                            <option <?php if(isset($_POST['doctor']) && $_POST['doctor'] == 'Dr Ake'){ ?> selected="selected" <?php } ?>>Dr Ake</option>
                            <option <?php if(isset($_POST['doctor']) && $_POST['doctor'] == 'Practice Nurse'){ ?> selected="selected" <?php } ?>>Practice Nurse</option>
                        </select><br>
                        <label for="date">Please enter a date [DD/MM/YYYY format]:</label>
                        <input name='date' type='text' value="<?php echo isset($_POST['date']) ? $_POST['date'] : '' ?>">
                        
                        <button id='btnSearch' class='dib m20 btnStyle' name="search">
                            <span>Search Appointments</span>
                        </button><br>
                        
                        <label for='time'>Available appointment times:</label>
                        <select name='time'>
                        <option value=''>Please Select...</option>
                        
                        <?php foreach ($results as $result):?>
                             
                                <option><?= $result['Time']?></option>;
                                
                                
                            
                       <?php endforeach;?>
                       
                                
                            

                        </select>
                        
                    </fieldset>
                    <button id='btnBook' class='dib m20 btnStyle' name="book">
                        <span>Book Appointment</span>
                    </button>                        
                </form>
                

                
                

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

