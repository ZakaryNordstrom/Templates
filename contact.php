<?php
  $title = "Contact Us"; 
  include_once './includes/head.php'; 
  include_once './includes/header.php'; ?>

<body>
  <main>
    <section class="contacts">
      <header>
        <h2>Contact Us!</h2>
      </header>

      <img src="./img/2015-05-31_11-55-46_triathlon.jpg" alt="triathlon finish line" style="width:100%">

      <hr class="styled">

      <h3>Whether you have a question or comment, don't hesitate to let us know what your thinking. We love to hear your feedback. </h3>

      <hr class="styled">
<div class="forms">
      <form action="contact_form.php" method="post" class="forms">
        <ul>
          <li>
            <label for="FirstName">First Name</label>
            <input type="text" name="FirstName" id="first_name" required>
          </li>
          
          <li>
            <label for="LastName">Last Name</label>
            <input type="text" name="LastName" id="last_name" required>
          </li>
          
          <li>
            <label for="Email">Email</label>
            <input type="email" name="Email" id="email" required> 
          </li>
          
          <li>
            <label for="VolunteerAthleteInterested">Are You Volunteering Or Participanting?</label>
            <select name="VolunteerAthleteInterested" required>
              <option id="volunteer" value="volunteer">Volunteer</option>
              <option id="participant" value="participant">Participant</option>
              <option id="interested" value="interested">Interested</option>
            </select>
          </li>
          
          <li>
            <label for="Comment">Your Comment or Question: </label>
            <input type="textarea" name="Comment" required>
          </li>
        </ul>
        <input type="submit" value="Send!">
      </form>
  </div>
    </section>
  </main>
</body>
<script src="scripts/navi.js" type="text/javascript"></script>
<?php include_once './includes/footer.html' ?>
