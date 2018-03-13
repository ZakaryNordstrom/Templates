<?php
  $title = "Registration"; 
  include 'includes/head.php';
  include_once 'includes/header.php';
?>

  <body>
    <main>
      <div class="content-col">
        <section class="col-4">
          <header>
            <h2>Costs & Perks</h2>
          </header>
          <h3>Ace in the Hole Multisport Event Weekend </h3>
          <p> Includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
          </p>

          <br>
          <hr class="styled">
          <br>

          <h3>Events</h3>
          <p>
            Long Course - $240
            <br> Olympic - $110
            <br> 10K - $50
            <br> Half Marathon - $75
            <br> Sprint - $90
            <br> Try-a-Tri - $65
          </p>

          <br>
          <hr class="styled">
          <br>

          <h3>Cost Includes</h3>
          <p>
            Food & Beer!
            <br> Access to the Weekend’s Live Entertainment & Fitness Expo
            <br> Commemorative Finisher medal
            <br> Accurate Chip Timing for Competitive Races
            <br> Ace in the Hole MultiSport Weekend Tech Shirt
            <br> Post-Event Party & Entertainment
          </p>

          <br>
          <hr class="styled">
          <br>

          <h3>Packet Pick Up</h3>
          <p>
            All packet pick ups will occur before the race date at Why Worry Racing, 123 NW Everett Street, Portland&nbspOR.
            <br> Packet pick up hours: Thursday 8-5, Friday 9-noon.
          </p>

          <br>
          <hr class="styled">
          <br>

          <h3>Notice!</h3>
          <p>
            Tech shirts guaranteed to pre-registered participants only.
            <br> No day of event packet pick ups.
          </p>
        </section>

        <section class="col-3">
          <header>
            <h2>Registration</h2>
          </header>
          
          <form action="registration_form.php" method="post" class="forms">
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
                <label for="PhoneNumber">Phone Number</label>
                <input type="text" name="PhoneNumber" id="phone_number" required>
              </li>

              <li>
                <label for="EmergencyContact">Emergency Contact</label>
                <input type="text" name="EmergencyContact" id="emergency_contact" required>
              </li>

              <li>
                <label for="EmergencyContactPhone">Emergency Contact Phone Number</label>
                <input type="text" name="EmergencyContactPhone" id="emergency_contact_phone" required>
              </li>

              <li>
                <label for="VolunteerOrParticipate">Are You Volunteering Or Participanting? - </label>
                <select name="VolunteerOrParticipant" required>
                  <option for="volunteer" value="volunteer">Volunteer</option>
                  <option  id="participant" value="participant">Participant</option>
                </select>
              </li>

              <li>
                <label for="Saturday">Saturday Event - </label>
                <select name="Saturday" required>
                  <option id="no_saturday_event" value="none_saturday">No Saturday Event</option>
                  <option id="long_course" value="long_course">Long Course Triathlon</option>
                  <option id="olympic" value="olympic">Olympic Triathlon</option>
                  <option id="10k" value="10k">10k</option>
                  <option id="half_marathon" value="half_marathon">Half Marathon</option>
                </select>
              </li>

              <li>
                <label for="Sunday">Sunday Event - </label>
                <select name="Sunday" required>
                  <option id="no_sunday_event" value="none_sunday">No Sunday Event</option>
                  <option id="sprint" value="sprint">Sprint Triathlon</option>
                  <option id="try-a-tri" value="try-a-tri">Try-A-Try</option>
                </select>
              </li>

              <li>
                <label for="SplashAndDash">After Party Featuring Live Entertainment - </label>
                <select name="SplashAndDash" required>
                  <option id="no_party" value="no_party">No After Party</option>
                  <option id="splash_and_dash" value="splash_and_dash">Splash And Dash After Party</option>
                </select>
              </li>
            </ul>
            <input type="submit" value="Register!">
          </form>
        </section>
      </div>
      <!--Content-col-->
    </main>
  </body>

  <?php
  include 'includes/footer.html';
?>

    <script src="scripts/navi.js" type="text/javascript"></script>