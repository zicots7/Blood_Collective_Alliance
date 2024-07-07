
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pasword Update</title>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="icon" type="image/x-icon" href="icon-5b3206bf.png">
       
  
    </head>
    <?php
    include('_nav.php');
    require('_DB.php');
    ?>
    <body> 
    <?php
        $hashed_token = $_GET['token'];
            $encoded_email = $_GET['email'];
            $email = urldecode($encoded_email);
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
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card border border-light-subtle rounded-5 shadow">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
                <img src="icon-5b3206bf.png" alt="Website Logo" width="200" height="200" >              
            </div>
            <h3 class="fs-5 fw-bold text-center text-secondary mb-4">Create New Password</h3>
            <form method="post" autocomplete="off">
              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating">
                    <input type="password" class="form-control" name="Password" id="textPwd" placeholder="Enter new password" autofocus required>
                    <label for="textPwd" class="form-label">New Password</label>
                    <small class="form-text text-muted">
                        Password must be greater than 8 characters.
                    </small>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid my-3">
                    <button class="btn btn-primary btn-lg" name="updatepassword" onclick="return validatePwd()" type="submit">Update Password</button>
                  </div>
                </div>
                <input type="hidden" class="form-control" name="email" id="textEmail" value="' . $email . '">
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
function updatePwd(){
            global $db_connect;
            // In updatePassword.php, validate the secure identifier
            $hashed_token = $_GET['token'];
            $encoded_email = $_GET['email'];
            $email = urldecode($encoded_email);

            
            date_default_timezone_set('Asia/Kolkata'); // Set your default timezone
            $current_time = time(); // Current timestamp
            
            if(isset($email)&&isset($reset_token)){

                $retrieve_query = "SELECT resettoken, tokenexpire FROM donor_info WHERE donoremail = $1";
                $req_params = array($email);
                $fetch_result = pg_query_params($db_connect, $retrieve_query, $req_params);
                $row = pg_fetch_assoc($fetch_result);

                if ($row) {
                    $stored_token = $row['resettoken'];
                            // Hash the retrieved reset token to compare with the hashed token from URL
                    $secure_reset_token_identifier = hash('sha256', $stored_token);
                    $expiry_timestamp = strtotime($row['tokenexpire']);

                    // Check if token is valid and not expired (within 15 minutes)
                    if ($secure_reset_token_identifier === $hashed_token && $current_time <= $expiry_timestamp) {
                        // Token is valid, proceed with password reset
                        
                        echo '';
                    } else {
                        // Token is expired or invalid
                        echo "
                        <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        The password reset link has expired or is invalid. Please request a new password reset link.
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
        window.location.href = 'ForgotPwd.php'; // Redirect to AboutUs.php
    }
    $(document).ready(function() {
        $('#messageSentModal').modal('show');
    });
    </script>
    ";
                    }
                } else {
                    // No matching record found for the email
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
updatePwd();
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updatepassword'])){
            $Password = $_POST['Password'];
            $SantizePassword = pg_escape_string($db_connect, $Password);
            $Hashed_Pwd = password_hash($SantizePassword, PASSWORD_DEFAULT);
            
            $updatedPwd_query = "UPDATE donor_info SET donorpassword = $1, resettoken=$2, tokenexpire = $3 WHERE donoremail = $4";
            $params = array($Hashed_Pwd, null, null, $email);
            
            $exec_result = pg_query_params($db_connect, $updatedPwd_query, $params);
            
            if($exec_result){
                echo "
                <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Password Updated Successfully!<br>You're redirected to Login Page.
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
                echo "<div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
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
        }
?>
    <script>
    function validatePwd () {
    const passwordInput = document.getElementById("textPwd");
    // Validate password length
    const password = passwordInput.value;
        // Validate pasword length
    if (password.length < 8) {
      alert("Password must be greater than 8 characters in length.");
      return false;
    }
         
    // Validate password complexity
    const complexRegex = /^(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d!@#$%^&*]+$/;
    if (!complexRegex.test(password)) {
        alert("Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.");
        return false;
    }
     // Password is valid
    return true;
    }
  </script>
    <?php
    include('footer.php');
    ?>
    </body>
</html>

