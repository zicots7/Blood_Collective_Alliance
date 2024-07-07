<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=">

<head>
  <link rel="icon" type="image/x-icon" href="icon-5b3206bf.png">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contactUs.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




</head>
<?php
include ("_nav.php");
require ("_DB.php");
?>

<body>
  <?php
  function display_cntUS()
    {
    echo '
  <script>
    $(document).ready(function () {
      // Hide the alert after 3 seconds (3000 milliseconds)
      setTimeout(function () {
        $("#myAlert").alert("close");
      }, 3000);
    });
  </script>
  <div class="mainsec">
    <span class="SPAN">
      <form method="post" action="ContactUs.php" autocomplete="off" onsubmit="return sendMsg()">

        <!----------------------- Main Container -------------------------->

        <div class="container-md d-flex justify-content-center align-items-center min-vh-100">

          <!----------------------- Login Container -------------------------->

          <div class="row border rounded-5 justify-content-center p-3 shadow box-area bg-light">

            <!--------------------------- Left Box 

            <div class="col-md-6 rounded-5 d-flex justify-content-center  align-items-justify flex-column left-box"
              style="background: #ff5462;">
              <div class="contact-info">
                <div class="contact-info-item">
                  <div class="contact-info-icon">
                    <i class="fas fa-home" style="font-weight: 900" aria-hidden="true"></i>
                  </div>

                  <div class="contact-info-content">
                    <h4 class="fw-bold">Address</h4>
                    <p>4671 Sugar Camp Road,<br> Owatonna, Minnesota, <br>55060</p>
                  </div>
                </div>

                <div class="contact-info-item">
                  <div class="contact-info-icon">
                    <i class="fas fa-phone" style="font-weight: 900" aria-hidden="true"></i>
                  </div>

                  <div class="contact-info-content">
                    <h4 class="fw-bold" >Phone</h4>
                    <p>571-457-2321</p>
                  </div>
                </div>

                <div class="contact-info-item">
                  <div class="contact-info-icon">
                    <i class="fas fa-envelope" style="font-weight: 900" aria-hidden="true"></i>
                  </div>

                  <div class="contact-info-content">
                    <h4 class="fw-bold" >Email</h4>
                    <p>jgiq3cein@mozmail.com</p>
                  </div>
                </div>
              </div>
            </div>
----------------------------->
            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 d-flex justify-content-center bg-light align-items-center flex-column right-box">
              <div class="row justify-content-center align-items-center">
                <div class="header-text">
                  <h1 class="text-center fw-bolder fs-1 my-3 px-md-5 px-xs-6"><strong>Contact Us</strong></h1>
                 <p class="text-center"><small >We value your feedback and suggestions.<br>Please don\'t hesitate to share them with us.</small></p>
                </div>

                <!--Name Section-->
                <div class="input-group mb-3">
                 <div class="form-floating">

                  <input type="text" id="textName" name="userName" class="form-control form-control-lg bg-light fs-6"
                    placeholder=" " required>

                    <label for="textName" class="form-label">Full Name</label>
                    </div>
                </div>

                <div class="input-group mb-3 ">
                  <div class="form-floating">

                    <input type="email" id="textEmail" name="userEmail" class="form-control form-control-lg bg-light fs-6" placeholder="  " required>

                    <label for="textEmail" class="form-label">Email</label>
                  </div>
                </div>

                <div class="input-group mb-3 ">
                <div class="form-floating">
                  <input type="textarea" id="textMsg" name="userMsg" class="form-control rows=50 form-control-lg bg-light fs-6"
                    placeholder="Type your message" required>
                    <label for="textMsg" class="form-label">Message</label>
                    </div>
                </div>

                <div class="col mx-auto">
                <button type="submit" name="send-message" class="btn btn-lg btn btn-outline-success text-white btn-primary w-100 btn-danger fs-4">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </span>
  </div>
  ';
    }
  display_cntUS();
  ?>

  <?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  function sendMsg($email, $name, $message)
    {
    require ('PHPMailer/PHPMailer.php');
    require ('PHPMailer/SMTP.php');
    require ('PHPMailer/Exception.php');

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
      //Server settings
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth = true;                                   //Enable SMTP authentication
      $mail->Username = 'system.bloodcollectivealliance@gmail.com';                     //SMTP username
      $mail->Password = 'aszu fzff ymid agau';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port = 465;

      //Recipients
      $mail->setFrom('system.bloodcollectivealliance@gmail.com', 'BLOOD COLLECTIVE ALLIANCE');
      $mail->addAddress('yojoe7984@gmail.com');              // Add a recipient
  
      // Content
      $mail->isHTML(true);                                       // Set email format to plain text
      $mail->Subject = 'Contact us form  - ' . $name;
      $mail->Body = "
        <h2>Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
    ";

      $mail->send();
      return true;
      } catch (Exception $e) {
      return false;
      }
    }
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send-message'])) {
    $email = $_POST['userEmail'];
    $name = $_POST['userName'];
    $message = $_POST['userMsg'];

    if (sendMsg($email, $name, $message)) {
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
        The Blood Collective Alliance has received your message. Our support team will contact you within 24 hours.
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
        Server is down. Message could not be sent.<br>Please try again after some time.
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
<?php
include ("footer.php");
?>
</body>
</html>
<!-- Modal -->