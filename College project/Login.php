<!DOCTYPE html>
<html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'
              integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
        <link rel='stylesheet' href='LoginPage.css'>
        <link rel="icon" type="image/x-icon" href="..\College Project\icon-5b3206bf.png">
        <title>Sign in</title>
        <meta name="description" content="Blood Collective Alliance connects blood donors directly with patients in critical need, eliminating middlemen. Our mission is to save lives by reducing wait times, expanding the donor pool, and empowering communities through voluntary blood donations. Join us in making a difference today!">
        <meta name="keywords" content="Blood Donation, Blood Collective Alliance,blood colective allaince, Blood Donor, India, Blood, Voluntary Blood Donation, Donate Blood, Blood Collection Services, Donor Finder, Blood Donor Finder, Blood Donation Near Me, Blood Donation Center, Blood Drive, Find Blood Donors, Blood Donor Finder India, Blood Donation online, ">
        <meta name="robots" content="notranslate">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>



        <?php
        function check_login(){
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


                if (!$result) { 
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
        window.location.href = 'AboutUs.php'; // Redirect to AboutUs.php
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
                if($row){

                    $hashedPasswordFromDB = $row["donorpassword"];

                    //if user enters all correct informations
                    if(password_verify($donorPassword, $hashedPasswordFromDB)){

                        include("_nav.php");

                        $_SESSION['donorEmail'] = $row['donoremail'];

                        $_SESSION['LoggedIn']=true;

                        echo" <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
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
        window.location.href = 'main.php'; // Redirect to AboutUs.php
    }
    $(document).ready(function() {
        $('#messageSentModal').modal('show');
    });
    </script>";


                        exit;


                    }else{                       
                        //if user enters a wrong password
                        echo" <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
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
        window.location.href = 'Login.php'; // Redirect to AboutUs.php
    }
    $(document).ready(function() {
        $('#messageSentModal').modal('show');
    });
    </script>";

                    }

                    // Check if user does not exist 

                }else { 
                    echo"
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
        window.location.href = 'Signup.php'; // Redirect to AboutUs.php
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
            $(document).ready(function(){
                // Hide the alert after 5 seconds 
                setTimeout(function(){
                    $("#myAlert").alert('close');
                }, 5000);
            });
        </script>

        <?php 
        include("_nav.php");
        ?>
        <script>

            // JavaScript code for handling Remember Me functionality

            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/; secure; SameSite=Strict";
            }

            // Function to get a cookie value by name
            function getCookie(name) {
                var nameEQ = name + "=";
                var cookies = document.cookie.split(';');
                for (var i = 0; i < cookies.length; i++) {
                    var cookie = cookies[i];
                    while (cookie.charAt(0) === ' ') {
                        cookie = cookie.substring(1, cookie.length);
                    }
                    if (cookie.indexOf(nameEQ) === 0) {
                        return cookie.substring(nameEQ.length, cookie.length);
                    }
                }
                return null;
            }

            // Check if "Remember Me" checkbox is checked and set cookie accordingly
            var rememberMeCheckbox = document.getElementById('rememberMeCheckbox');
            if (rememberMeCheckbox) {
                rememberMeCheckbox.addEventListener('change', function() {
                    if (this.checked) {
                        // Set cookie with name 'remember_me' and value 'true' for 30 days
                        setCookie('remember_me', 'true', 30);
                    } else {
                        // Remove cookie if unchecked
                        setCookie('remember_me', '', -1);
                    }
                });

                // On page load, check if 'remember_me' cookie is set and update checkbox state
                var rememberMeCookie = getCookie('remember_me');
                if (rememberMeCookie === 'true') {
                    rememberMeCheckbox.checked = true;
                } else {
                    rememberMeCheckbox.checked = false;
                }
            }

        </script>
    </head>
    <body>
        <div class='mainsec'>
            <span class='SPAN'>
                <form name="Login page" method="post" action="Login.php" autocomplete="off" onchange="">
                    <!----------------------- Main Container -------------------------->
                    <div class='container d-flex justify-content-center align-items-center min-vh-100'>
                        <!----------------------- Login Container -------------------------->
                        <div class='row border rounded-5 p-3 bg-white shadow box-area'>
                            <!--------------------------- Left Box ----------------------------->
                            <div class='col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box'
                                 style='background: #ff4747;'>
                                <div class='featured-image mb-3'>
                                    <img src='computer-security-with-login-password-padlock.jpg' class='img-fluid'
                                         style='width: 250px;'>
                                </div>
                                <p class='text-white fs-2'
                                   style='font-family: Courier New, Courier, monospace; font-weight: 600;'>
                                    Be Verified</p>
                                <small class='text-white text-wrap text-center'
                                       style='width: 17rem;font-family: Courier New, Courier, monospace;'>
                                    Faced with a critical blood shortage? Time
                                    is of
                                    the
                                    essence. Our website rapidly connects
                                    patients
                                    with
                                    qualified donors near you, Save lives
                                    instantly.</small>
                            </div>
                            <!-------------------- ------ Right Box ---------------------------->
                            <div class='col-md-6 right-box'>
                                <div class='row align-items-center'>
                                    <div class='header-text mb-4'>
                                        <h2>Welcome, Back!</h2>
                                        <p>Sign in using your valid Email
                                            account to
                                            continue with our service</p>
                                    </div>

                                    <!--Don't change this section-->

                                    <!-- Email Address Input -->
                                    <div class='input-group mb-3'>
                                        <span class='input-group-text'>@</span>
                                        <input type='email' id='donorEmail' name='donorEmail'
                                               class='form-control form-control-lg bg-light fs-6' placeholder='Email address'
                                               autofocus required>
                                    </div>
                                    <!-- Password Input -->
                                    <div class='col-auto input-group mb-1'>
                                        <span class='input-group-text'><svg xmlns='http://www.w3.org/2000/svg' width='16'
                                                                            height='16' fill='currentColor' class='bi bi-lock' viewBox='0 0 16 16'>
                                            <path
                                                  d='M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1' />
                                            </svg></span>
                                        <input type='password' class='form-control form-control-lg bg-light fs-6'
                                               placeholder='Password' id='donorPassword' name='donorPassword' required
                                               aria-describedby='passwordHelpInline'>
                                    </div>
                                    <div class='col-auto mb-3'>
                                        <span id='passwordHelpInline' class='form-text'>
                                            Must be 8 to 10 characters long.
                                        </span>
                                    </div>

                                    <div class='input-group mb-3 d-flex justify-content-between'>
                                        <div class="input-group mb-3 d-flex justify-content-between">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="rememberMeCheckbox">
                                                <label class="form-check-label text-secondary" for="rememberMeCheckbox"><small>Remember Me</small></label>
                                            </div>

                                            <div class='forgot'>
                                                <small><a href='ForgotPwd.php'>Forgot
                                                    Password?</a></small>
                                            </div>
                                        </div>
                                        <div class='input-group mb-2 btn btn-lg btn-primary w-100 fs-6' style='left: 9px;'>
                                            <button type='submit' class='btn btn-lg btn-primary w-100 fs-6'>Login</button>
                                        </div>
                                        <div class='row mt-3'>
                                            <p>Don't yet have an account? <a href='Signup.php'>Sign Up</a></p>
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