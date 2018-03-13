<?php

echo '<script>window.location.href = "https://zakarynordstrom.webhostingforstudents.com/cas222/template/thanks_comment.php/";</script>';

// Gets posted data from the HTML form fields with basic 'sanitiation'
$FirstName = trim(stripslashes($_POST['FirstName'])); 
$LastName = trim(stripslashes($_POST['LastName'])); 
$Email = trim(stripslashes($_POST['Email'])); 
$Comment = trim(stripslashes($_POST['Comment']));
$VolunteerAthleteInterested = trim(stripslashes($_POST['VolunteerAthleteInterested']));
$current_date = date("Y-m-d-H-i-s"); // This date is created when the form is submitted.

// Backup php validation linking to form error page
$validationOK=true;
if (Trim($Email)=="") $validationOK=false;
if (Trim($FirstName)=="") $validationOK=false;
if (Trim($LastName)=="") $validationOK=false;
if (Trim($Comment)=="") $validationOK=false;
if (!$validationOK) {
print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
exit;
}

// SQL Database Account Info
$servername = "localhost";
$username = "zakaryno_cas222_form_post";
$password = "ace_multisports";
$dbname = "zakaryno_ace_multisport";

//Prepared SQL statement to insert values into database
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  //Prepare SQL statement
  $sql = $conn->prepare("
    INSERT INTO contact (first_name, last_name, email, volunteer_athlete_interested, comment, submit_date)
    VALUES ( :FirstName, :LastName, :Email, :VolunteerAthleteInterested, :Comment,  :current_date )
  ");
  
  //Bind prepared parameters
  $sql->bindParam(':FirstName', $FirstName);
  $sql->bindParam(':LastName', $LastName);
  $sql->bindParam(':Email', $Email);
  $sql->bindParam(':VolunteerAthleteInterested', $VolunteerAthleteInterested);
  $sql->bindParam(':Comment', $Comment);
  $sql->bindParam(':current_date', $current_date);
  
  // use exec() because no results are returned
  $sql->execute();
}
//Catch errors
catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
//Close Connection
$conn->close();
//End PHP
?>