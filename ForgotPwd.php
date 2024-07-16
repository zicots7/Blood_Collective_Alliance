    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="utf-8">
            <title>Reset Password</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
            <link rel="icon" type="image/x-icon" href="icon-5b3206bf.png">
            <meta name="description" content="Blood Collective Alliance connects blood donors directly with patients in critical need, eliminating middlemen. Our mission is to save lives by reducing wait times, expanding the donor pool, and empowering communities through voluntary blood donations. Join us in making a difference today!">
            <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <meta name="keywords" content="Blood Donation, Blood Collective Alliance,blood colective allaince, Blood Donor, India, Blood, Voluntary Blood Donation, Donate Blood, Blood Collection Services, Donor Finder, Blood Donor Finder, Blood Donation Near Me, Blood Donation Center, Blood Drive, Find Blood Donors, Blood Donor Finder India, Blood Donation online, ">
    <meta name="robots" content="notranslate">
        </head>
        <?php
        include ("_nav.php");
        ?>
        <body>
            <?php

            echo '
        <style>
        body {
        background-color:hsla(0,100%,50%,1);
        background-image:
        radial-gradient(at 40% 20%, hsla(28,100%,74%,1) 0px, transparent 50%),
        radial-gradient(at 80% 0%, hsla(189,100%,56%,1) 0px, transparent 50%),
        radial-gradient(at 0% 50%, hsla(355,100%,93%,1) 0px, transparent 50%),
        radial-gradient(at 80% 50%, hsla(340,100%,76%,1) 0px, transparent 50%),
        radial-gradient(at 0% 100%, hsla(22,100%,77%,1) 0px, transparent 50%),
        radial-gradient(at 80% 100%, hsla(242,100%,70%,1) 0px, transparent 50%),
        radial-gradient(at 0% 0%, hsla(343,100%,76%,1) 0px, transparent 50%);
        }
        .btn:hover{
            background-color: green;
            transition: all .5s;
        }
     </style>

    <section class="py-3 py-md-5">
    <div class="container-fluid justify-content-center align-items-center min-vh-100">
    <div class="col d-flex align-items-center justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card border border-light-subtle rounded-5 shadow">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
                <img src="icon-5b3206bf.png" alt="Website Logo" width="300" height="300" >              
            </div>
            <h2 class="fs-5 fw-normal text-center text-secondary mb-4">Provide the email address associated with your account to recover your password.</h2>

            <form method="post" action="ForgotPwd.php" autocomplete="off">
              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="textEmail" placeholder="name@example.com" required>
                    <label for="textEmail" class="form-label">Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid my-3">
                    <button class="btn btn-primary btn-lg" name="send-reset-link" type="submit">Reset Password</button>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-flex gap-2 justify-content-between">
                    <a href="Login.php" class="link-primary text-decoration-none">Log In</a>
                    <a href="Signup.php" class="link-primary text-decoration-none">Register</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    </section>
    ';
            ?>
            <?php

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;

            function resetPwd(){

                require('_DB.php');

                function sendMail($email, $secure_reset_token_identifier){
                    require ('PHPMailer/PHPMailer.php');
                    require ('PHPMailer/SMTP.php');
                    require ('PHPMailer/Exception.php');

                    // Instantiate PHPMailer
                    $mail = new PHPMailer(true);

                    try {
                        //Server settings
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'system.bloodcollectivealliance@gmail.com';                     //SMTP username
                        $mail->Password   = 'aszu fzff ymid agau';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;  

                        //Recipients
                        $mail->setFrom('system.bloodcollectivealliance@gmail.com', 'BLOOD COLLECTIVE ALLIANCE');
                        $mail->addAddress($email);     //Add a recipient


                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Reset Password';
                        $mail->Body    = '
        <p>Hello,</p>
    <p>You are receiving this email because you (or someone else) requested a password reset for your account.</p>
    <p>To proceed with resetting your password, please click on the following link:</p>
    <p><a href="http://localhost/College project/updatePwd.php?email='.urlencode($email).'&token=' .$secure_reset_token_identifier.'">Reset Password</a></p>
    <p>If you did not initiate this request, there is no need for further action, and your password will remain unchanged.</p>
    <p>For security reasons, this link will expire in 24 hours. If you encounter any issues or need further assistance, please contact our <a href="ContactUs.php">support tteam</a>.</p>
    <p>Thank you for your attention to this matter.</p>
    <p>Best regards,</p>
    <p>Blood Collective Alliance Team</p>

    ';

                        $mail->send();
                        return true;
                    } 
                    catch (Exception $e) {

                        return false;
                    }
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send-reset-link'])) {
                    // Correctly access the email from $_POST and prepare the query
                    $email = $_POST['email'];
                    // Using parameterized query to prevent SQL injection
                    $query = "SELECT * FROM donor_info WHERE donoremail = $1";
                    $result = pg_query_params($db_connect, $query, array($email));

                    if ($result) {
                        /*Email Found*/
                        if(pg_num_rows($result) == 1){
                            /*random string that should be returned in bytes using rndom_bytes(length)*/
                            $reset_token = bin2hex(random_bytes(32)); 
                            // Generate a hash of the reste_token
                            $secure_reset_token_identifier = hash('sha256', $reset_token); 
                            // Default timezone set for getting accurate date and time
                            date_default_timezone_set('Asia/kolkata'); 
                            // Generate expiry timestamp (15 minutes from current time)
                            $expiry_timestamp = time() + (15 * 60); // 15 minutes = 15 * 60 seconds
                            // Format the timestamp to YYYY-MM-DD HH:MM:SS format for database storage
                            $expiry_date = date('Y-m-d H:i:s', $expiry_timestamp);
                            //                        $date=date("Y-m-d");

                            // Prepare the update query
                            $update_query = "UPDATE donor_info SET resettoken = $1, tokenexpire = $2 WHERE donoremail = $3";
                            $parameters = array($reset_token, $expiry_date, $email); // Bind parameters in correct order
                            // Execute the query
                            $exec_result = pg_query_params($db_connect, $update_query, $parameters);
                            if($exec_result && sendMail($email, $secure_reset_token_identifier)){

                                /*Reset link sent to mail*/
                                echo "
                                
                                <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Reset link sent to your corresponding Email.<br>Please check your <b>Spam folder<b>.
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
    </script>
                            
                        ";

                            }else{
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
                            }
                        }else{
                            echo "
                            <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Email address not found. Kindly register yourself.
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
                    } else {
                        //            error_get_last();
                        echo "
                            <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Something went wrong.<br>Please try again after some time.
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
    </script>
                        ";
                    }
                }
            }

            resetPwd();
            ?>
        </body>
        <?php 
        include ("footer.php");
        ?>
    </html>