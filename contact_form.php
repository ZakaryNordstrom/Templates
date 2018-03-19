<?php
  $title = "Thanks for Your Comment";
  include 'includes/head.php';
  include 'includes/header.php';

  echo '<main id="form-center">
      <header><h2>Thanks for Providing Feedback!</h2></header>
      <img src="./img/34932345236_1f2534307c_o.jpg" alt="jump in the water" style="width:100%">
      <br>
      <br>
      <h3>It Keeps Us In The Loop</h3>
      <hr class="styled">
      <h4>
      Thanks for your question or comment. We value all feedback here at Ace in the Hole MultiSport Events. We thank you for taking time to provide this feedback, it goes a long ways towards bettering our services.
      </h4>
  </main>';

  include 'includes/footer.html';

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