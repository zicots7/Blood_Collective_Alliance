<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'
    integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
  <link rel='stylesheet' href='LoginPage.css'>
  <link rel="icon" type="image/x-icon" href="icon-5b3206bf.png">
  <title>Sign in</title>
  <meta name="description"
    content="Blood Collective Alliance connects blood donors directly with patients in critical need, eliminating middlemen. Our mission is to save lives by reducing wait times, expanding the donor pool, and empowering communities through voluntary blood donations. Join us in making a difference today!">
  <meta name="keywords"
    content="Blood Donation, Blood Collective Alliance,blood colective allaince, Blood Donor, India, Blood, Voluntary Blood Donation, Donate Blood, Blood Collection Services, Donor Finder, Blood Donor Finder, Blood Donation Near Me, Blood Donation Center, Blood Drive, Find Blood Donors, Blood Donor Finder India, Blood Donation online, ">
  <meta name="robots" content="notranslate">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Bootstrap JS Bundle (with Popper) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>



  <?php
  function check_login()
    {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      require ('_DB.php');
      //---------- Retrieve form data--------
      $donorEmail = $_POST["donorEmail"];
      $donorPassword = $_POST["donorPassword"];

      $donorEmail = pg_escape_string($db_connect, $donorEmail);
      $donorPassword = pg_escape_string($db_connect, $donorPassword);



      $query = "SELECT donorEmail ,donorPassword FROM donor_info WHERE donorEmail = $1";
      $param = array($donorEmail);

      $result = pg_query_params($db_connect, $query, $param);
      // $login_check = pg_num_rows($result);
  

      if (! $result) {
        echo "
                      <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Server is down.<br>Please try again after some time.
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-primary' onclick='dismissModalAndRedirect()'>OK</button>

      </div>
    </div>
  </div>
</div>
  <script>
    // JavaScript function to dismiss modal and redirect
    function dismissModalAndRedirect() {
        $('#messageSentModal').modal('hide'); // Hide the modal
        window.location.href = 'index.php'; // Redirect to index.php
    }
    $(document).ready(function() {
        $('#messageSentModal').modal('show');
    });
    </script>

                        ";
        pg_close($db_connect);
        }



      $row = pg_fetch_assoc($result);

      // var_dump($row);
      if ($row) {

        $hashedPasswordFromDB = $row["donorpassword"];

        //if user enters all correct informations
        if (password_verify($donorPassword, $hashedPasswordFromDB)) {

          include ("_nav.php");

          $_SESSION['donorEmail'] = $row['donoremail'];

          $_SESSION['LoggedIn'] = true;

          echo " <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Successfully Login!
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-primary' onclick='dismissModalAndRedirect()'>OK</button>
        
      </div>
    </div>
  </div>
</div>
  <script>
    // JavaScript function to dismiss modal and redirect
    function dismissModalAndRedirect() {
        $('#messageSentModal').modal('hide'); // Hide the modal
        window.location.href = 'main.php'; // Redirect to main.php
    }
    $(document).ready(function() {
        $('#messageSentModal').modal('show');
    });
    </script>";


          exit;


          } else {
          //if user enters a wrong password
          echo " <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Incorrect Password!
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-primary' onclick='dismissModalAndRedirect()'>OK</button>
        
      </div>
    </div>
  </div>
</div>
  <script>
    // JavaScript function to dismiss modal and redirect
    function dismissModalAndRedirect() {
        $('#messageSentModal').modal('hide'); // Hide the modal
        window.location.href = 'Login.php'; // Redirect to Login.php
    }
    $(document).ready(function() {
        $('#messageSentModal').modal('show');
    });
    </script>";

          }

        // Check if user does not exist 
  
        } else {
        echo "
                    <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Account does not exist. Kindly registered yourself.
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-primary' onclick='dismissModalAndRedirect()'>OK</button>
        
      </div>
    </div>
  </div>
</div>
  <script>
    // JavaScript function to dismiss modal and redirect
    function dismissModalAndRedirect() {
        $('#messageSentModal').modal('hide'); // Hide the modal
        window.location.href = 'Signup.php'; // Redirect to Signup.php
    }
    $(document).ready(function() {
        $('#messageSentModal').modal('show');
    });
    </script>
                    ";

        }
      }
    }
  check_login();
  ?>

  <script>
    $(document).ready(function () {
      // Hide the alert after 5 seconds 
      setTimeout(function () {
        $("#myAlert").alert('close');
      }, 5000);
    });
  </script>

  <?php
  include ("_nav.php");
  ?>
  <script>
    // JavaScript code for handling Remember Me functionality
    function setCookie (name, value, days) {
      var expires = "";
      if (days)
      {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/; secure; SameSite=Strict";
    }

    // Function to get a cookie value by name
    function getCookie (name) {
      var nameEQ = name + "=";
      var cookies = document.cookie.split(';');
      for (var i = 0; i < cookies.length; i++)
      {
        var cookie = cookies[i];
        while (cookie.charAt(0) === ' ')
        {
          cookie = cookie.substring(1, cookie.length);
        }
        if (cookie.indexOf(nameEQ) === 0)
        {
          return cookie.substring(nameEQ.length, cookie.length);
        }
      }
      return null;
    }

    // Check if "Remember Me" checkbox is checked and set cookie accordingly
    var rememberMeCheckbox = document.getElementById('rememberMeCheckbox');
    if (rememberMeCheckbox)
    {
      rememberMeCheckbox.addEventListener('change', function () {
        if (this.checked)
        {
          // Set cookie with name 'remember_me' and value 'true' for 30 days
          setCookie('remember_me', 'true', 30);
        } else
        {
          // Remove cookie if unchecked
          setCookie('remember_me', '', -1);
        }
      });

      // On page load, check if 'remember_me' cookie is set and update checkbox state
      var rememberMeCookie = getCookie('remember_me');
      if (rememberMeCookie === 'true')
      {
        rememberMeCheckbox.checked = true;
      } else
      {
        rememberMeCheckbox.checked = false;
      }
    }

  </script>

  <style>

  </style>
</head>

<body>
  <div class='mainsec'>
    <span class='SPAN'>
      <form name="Login page" method="post" action="Login.php" autocomplete="off" onchange="">
        <!----------------------- Main Container -------------------------->
        <div class='container d-flex justify-content-center align-items-center min-vh-100'>
          <!----------------------- Login Container -------------------------->
          <div class='row border rounded-5 my-5 p-3 md:p-4 sm:p-2 lg:p-5 bg-white shadow box-area'>
            <!--------------------------- Left Box ----------------------------->
            <div
              class='col-md-6 col-4 col-xs-3 col-lg-6 col-12 rounded-3 justify-content-center align-items-center flex-column left-box'
              style='background: #ff4747;'>
              <div class='featured-image my-2 px-md-4'>
                <img src="computer-security-with-login-password-padlock.jpg" class="align-items-center"
                  sizes="(max-width: 600px !important) 90vw, 400px"
                  style=" height: auto !important; width: 100% !important;">
              </div>
              <p class='text-white text-center fs-3 my-2 fw-bolder'
                style='font-family: Courier New, Courier, monospace; font-weight: 600;'>
                Be Verified</p>
              <small class='text-white text-center fs-md-1 text-wrap'
                style='width: 100% !important;font-family: Courier New, Courier, monospace;'>
                <p>Faced with a critical blood shortage? Time
                  is of
                  the
                  essence. Our website rapidly connects
                  patients
                  with
                  qualified donors near you, Save lives
                  instantly.</p>
              </small>
            </div>
            <!-------------------- ------ Right Box ---------------------------->
            <div
              class='col-md-6 col-4 col-xs-3 col-lg-6 col-12 rounded-3 right-box justify-content-center align-items-center flex-column px-md-4'
              style='background: #ffff;'>
              <div class='row align-items-center text-center'>
                <div class='header-text-dark'>
                  <h2 class="text-center fw-bold">USER LOGIN</h2>
                </div>
                <p><small>Please sign in using your registered email address.<br>If you're new here, <span><a href="Signup.php"
                class="text-decoration-none"><i class="fas fa-user-plus"></i> create an account</a></span> to get
                    started!</small></p>
              </div>

              <!--Don't change this section-->

              <!-- Email Address Input -->
              <div class='input-group my-3 px-md-3 px-xs-2 px-12'>
                <span class='input-group-text'>@</span>
                <div class="form-floating">
                  <input type='email' id='donorEmail' name='donorEmail'
                    class='form-control form-control-lg bg-light fs-6' placeholder='' required>
                  <label for="donorEmail" class="form-label">USERNAME</label>
                </div>
              </div>

              <!-- Password Input -->
              <div class='input-group my-2 px-md-3 px-xs-2 px-12'>
                <span class='input-group-text'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'
                    fill='currentColor' class='bi bi-lock' viewBox='0 0 16 16'>
                    <path
                      d='M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1' />
                  </svg></span>
                <div class="form-floating">
                  <input type='password' class='form-control form-control-lg bg-light fs-6' placeholder=''
                    id='donorPassword' name='donorPassword' required aria-describedby='passwordHelpInline'>
                  <label for="donorEmail" class="form-label">PASSWORD</label>
                </div>
              </div>

              <div class='input-group my-3 justify-content-between align-items-center px-3'>
                <div class="input-group justify-content-between align-items-center">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMeCheckbox">
                    <label class="form-check-label text-secondary fs-6" for="rememberMeCheckbox">Remember
                      Me</label>
                  </div>
                  <div class='forgot both'>
                    <a href='ForgotPwd.php'>Forgot
                      Password?</a>
                  </div>
                </div>
                <div class='input-group my-3 btn btn-lg btn-primary w-100 fs-6'>
                  <button type='submit' class='btn btn-lg btn-primary w-100 fs-6'>Login</button>
                </div>
                <div class="spinner-border text-primary" role="status" style="display: none;">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class='text-center both'>
                  <p class='text-center'>Not a member? <a href='Signup.php'>Sign Up</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </span>
  </div>
  <?php
  include 'footer.php';
  ?>
</body>

</html>