

<?php
include 'config.php';
include 'functions.php';

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
        <title>Doctor's Surgery | My Account:My Details</title>
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

        <?php
        $query = "SELECT * FROM User_Details WHERE ID = loginID";
        $result = mysql_query($query) or die(mysql_error());
        ?>
        
        <div id='content'> 
            <form>

<?php 

while($row = mysql_fetch_array($result))
            {

$Fname = $row['Fname'];
$Sname = $row['Sname'];
$DOB = $row['DOB'];
$Street = $row['Street'];
$Town = $row['Town'];
$County = $row['County'];
$Postcode = $row['Postcode'];
$Phone = $row['Phone'];
$Email = $row['Email'];
            }
?>
            
                <p>
                <br><label for = "First Name">First Name:</label>
                <input type="text" name="first_name" value="<?=$Fname?>"<br>
                </p>
                
                <p>
                <br><label>Last Name:</label>
                <input type="text" name="last_name" value="<?=$Sname?>"><br>
                </p>
                
                <p>
                <br><label>Date of Birth:</label>
                <input type="Date" name="_DOB" value="<?=$DOB?>" ><br>
                </p>
                
                <p>
                <br><label>Street:</label>
                <input type="text" name="_Street" value="<?=$Street?>" ><br>
                </p>
                
                <p>
                <br><label>Town:</label>
                <input type="text" name="_Town" value="<?=$Town?>" ><br>
                </p>
                
                <p>
                <br><label>County:</label>
                <input type="text" name="_County" value="<?=$County?>" ><br>
                </p>
                
                <p>
                <br><label>Postcode:</label>
                <input type="text" name="_Postcode" value="<?=$Postcode?>" ><br>
                </p>
                
                <p>
                <br><label>Phone Number</label>
                <input type="Int" name="_Number" value="<?=$Phone?>" ><br>
                </p>
                
                <p>
                <br><label>E-mail Address</label>
                <input type="text" name="email" value="<?=$Email?>" ><br>
                </p>
                
                <input name="update" type="submit" id="update" value="Update">
                
            </form>  
            
            <?php

if(isset($_POST['update']))
{

$Fname = $_POST['first_name'];
$Sname = $_POST['last_name'];
$DOB = $_POST['_DOB'];
$Street = $_POST['_Street'];
$Town = $_POST['_Town'];
$County = $_POST['_County'];
$Postcode = $_POST['_Postcode'];
$Phone = $_POST['_Number'];
$Email = $_POST['email'];

$sql = mysql_query("UPDATE User_Details SET Fname = '$Fname', Sname = '$Sname', DOB = '$DOB', Street = '$Street', Town = '$Town', County = '$County', Postcode = '$Postcode', Phone = '$Phone', Email = '$Email' WHERE ID = loginID");

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully";

}


?>
             
                <button id='btnCancel' class='btnStyle dib mt20 ml20'>
                    <span>Cancel</span>
                </button>
            
             </div>
        </div>
        
        <div id='footer' class='hfgrad'>
            
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
