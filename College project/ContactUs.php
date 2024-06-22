
<!doctype html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>Responsive Contact Us Page</title>
  <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="contactUs.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Blood Collective Alliance Contact Us</title>
    <?php include("_nav.php");
    ?>
   
<?php 
function display_cntUS(){
  echo'


  <body>
      <div class="mainsec">
          <span class="SPAN">
              <form action="#" autocomplete="on" onsubmit="return validateEmail()" onsubmit="return validatePassword()">
                  <!----------------------- Main Container -------------------------->
                  <!-- Outer DIV tag and its properties and css class have been removed to resolved the margin problem -->
                  <div class="container d-flex justify-content-center align-items-center min-vh-100">
  
                      <!----------------------- Login Container -------------------------->
  
                      <div class="row border rounded-5 justify-content-center p-3 bg-white shadow box-area">
  
                          <!--------------------------- Left Box ----------------------------->
                  
                          <div class="col-md-6 rounded-5 d-flex justify-content-center  align-items-justify flex-column left-box"
                              style="background: #ff5462;">
  
                              <div class="contact-info">
                              <div class="contact-info-item">
                                <div class="contact-info-icon">
                                  <i class="fas fa-home" style= "font-weight: 900" aria-hidden="true"></i>
                                </div>
                                
                                <div class="contact-info-content" >
                                  <h4>Address</h4>
                                  <p>4671 Sugar Camp Road,<br> Owatonna, Minnesota, <br>55060</p>
                                </div>
                              </div>
                              
                              <div class="contact-info-item">
                                <div class="contact-info-icon">
                                  <i class="fas fa-phone" style= "font-weight: 900" aria-hidden="true"></i>
                                </div>
                                
                                <div class="contact-info-content">
                                  <h4>Phone</h4>
                                  <p>571-457-2321</p>
                                </div>
                              </div>
                              
                              <div class="contact-info-item">
                                <div class="contact-info-icon">
                                  <i class="fas fa-envelope" style= "font-weight: 900" aria-hidden="true"></i>
                                </div>
                                
                                <div class="contact-info-content">
                                  <h4>Email</h4>
                                 <p>ntamerrwael@mfano.ga</p>
                                </div>
                              </div>
                            </div>
                          </div>
  
                          <!-------------------- ------ Right Box ---------------------------->
  
                          <div class="col-md-6 d-flex justify-content-center  align-items-justify flex-column right-box" >
                              <div class="row align-items-center">
                                  <div class="header-text mb-4 ">
                                      <h2>Contact Us</h2>
                                      <p>We value your feedback and suggestions. Please don"t hesitate to share them with us.</p>
                                  </div>
  
                                  <!--Dont change this section-->
  
  <!--Name Section--> 
                                  <div class="input-group mb-3">
                                    <input type="text" id="fullName" name="fullName"
                                        class="form-control form-control-lg bg-light fs-6" placeholder="Full Name"
                                        required="true">
                                </div>
  <!--Email Address Input-->
                                  <div class="input-group mb-3 ">
                                      <input type="email" id="email" name="email"
                                          class="form-control form-control-lg bg-light fs-6" placeholder="Email address"
                                          pattern="[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com|outlook\.com)"
                                          required="true">
                                  </div>
  <!--Name Section--> 
                                  <div class="input-group mb-3 ">
                                    <input type="textarea" id="sendMsg" name="sendMsg"
                                        class="form-control form-control-lg bg-light fs-6" placeholder="Type your message.."
                                        required="true">
                                </div>
  
                                  <div class=" input-box input-group mb-3 btn-lg btn-primary w-100 fs-6">
                                      <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Send</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </span>
      </div>
  
      <script>
          function validateEmail() {
              const emailInput = document.getElementById("email");
              const email = emailInput.value;
              const allowedDomains = ["gmail.com", "yahoo.com"];
              const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA.-]+\.[a-zA-Z]{2,}$/;
              const domain = email.split("@")[1];
              if (emailRegex.test(email) && allowedDomains.includes(domain)) {
                  // Email is valid
                  return true;
              } else {
                  // Email is invalid
                  alert("Please enter a valid email address from a supported domain (e.g., gmail.com, yahoo.com, outlook.com).");
                  return false;
              }
          }
      </script>
  
      </body>
  ';
}
display_cntUS();
?>
  <?php include("footer.php");
  ?>

</html>