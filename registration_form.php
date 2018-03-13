<?php

// Gets posted data from the HTML form fields with basic 'sanitiation'
$FirstName = trim(stripslashes($_POST['FirstName'])); 
$LastName = trim(stripslashes($_POST['LastName'])); 
$Phone = trim(stripslashes($_POST['PhoneNumber']));
$Email = trim(stripslashes($_POST['Email'])); 
$EmergencyContact = trim(stripslashes($_POST['EmergencyContact']));
$EmergencyContactPhone = trim(stripslashes($_POST['EmergencyContactPhone']));
$VolunteerOrParticipant = trim(stripslashes($_POST['VolunteerOrParticipant']));
$Saturday = trim(stripslashes($_POST['Saturday'])); 
$Sunday = trim(stripslashes($_POST['Sunday'])); 
$SplashAndDash = trim(stripslashes($_POST['SplashAndDash'])); 
$current_date = date("Y-m-d-H-i-s"); // This date is created when the form is submitted.

// Backup php validation linking to form error page
$validationOK=true;
if (Trim($Email)=="") $validationOK=false;
if (Trim($FirstName)=="") $validationOK=false;
if (Trim($LastName)=="") $validationOK=false;
if (Trim($Phone)=="") $validationOK=false;
if (Trim($EmergencyContact)=="") $validationOK=false;
if (Trim($EmergencyContactPhone)=="") $validationOK=false;
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
    INSERT INTO event_registration (first_name, last_name, email, phone_number, emergency_contact, emergency_contact_phone, volunteer_or_participant, saturday, sunday, splash_and_dash, submit_date)
    VALUES ( :FirstName, :LastName, :Email, :Phone, :EmergencyContact, :EmergencyContactPhone, :VolunteerOrParticipant, :Saturday, :Sunday, :SplashAndDash, :current_date )
  ");
  
  //Bind prepared parameters
  $sql->bindParam(':FirstName', $FirstName);
  $sql->bindParam(':LastName', $LastName);
  $sql->bindParam(':Email', $Email);
  $sql->bindParam(':Phone', $Phone);
  $sql->bindParam(':EmergencyContact', $EmergencyContact);
  $sql->bindParam(':EmergencyContactPhone', $EmergencyContactPhone);
  $sql->bindParam(':VolunteerOrParticipant', $VolunteerOrParticipant);
  $sql->bindParam(':Saturday', $Saturday);
  $sql->bindParam(':Sunday', $Sunday);
  $sql->bindParam(':SplashAndDash', $SplashAndDash);
  $sql->bindParam(':current_date', $current_date);
  
  // use exec() because no results are returned
  $sql->execute();
  echo "Thank you for your comment ot question, we value your feedback.";
}
//Catch errors
catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
//Close Connection
$conn->close();
//End PHP
?>
