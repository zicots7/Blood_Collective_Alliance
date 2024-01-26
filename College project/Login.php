<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'
        integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
    <link rel='stylesheet' href='LoginPage.css'>
    <title>Sign in</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Blood Collective Alliance login</title>
    <?php include("_nav.php");
    ?>
</head>
<body>
<?php
echo"


    <div class='mainsec'>
        <span class='SPAN'>
            <form action='#' autocomplete='on' onsubmit='return validateEmail()' onsubmit='return validatePassword()'>
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
                                    <input type='email' id='email' name='email'
                                        class='form-control form-control-lg bg-light fs-6' placeholder='Email address'
                                        pattern='[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com|outlook\.com)' autofocus
                                        required>
                                </div>
                                <!-- Password Input -->
                                <div class='col-auto input-group mb-1'>
                                    <span class='input-group-text'><svg xmlns='http://www.w3.org/2000/svg' width='16'
                                            height='16' fill='currentColor' class='bi bi-lock' viewBox='0 0 16 16'>
                                            <path
                                                d='M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1' />
                                        </svg></span>
                                    <input type='password' class='form-control form-control-lg bg-light fs-6'
                                        placeholder='Password' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}' id='psw'
                                        name='psw'
                                        title='Use at least 10 characters, including a mix of uppercase and lowercase letters, numbers, and special symbols.'
                                        required aria-describedby='passwordHelpInline'>
                                </div>
                                <div class='col-auto mb-3'>
                                    <span id='passwordHelpInline' class='form-text'>
                                        Must be 10-20 characters long.
                                    </span>
                                </div>

                                <div class='input-group mb-3 d-flex justify-content-between'>
                                    <div class='form-check'>
                                        <input type='checkbox' class='form-check-input' id='formCheck'>
                                        <label for='formCheck' class='form-check-label text-secondary'><small>Remember
                                                Me</small></label>
                                    </div>
                                    <div class='forgot'>
                                        <small><a href='#'>Forgot
                                                Password?</a></small>
                                    </div>
                                </div>
                                <div class='input-group mb-3 btn btn-lg btn-primary w-100 fs-6'style='left: 9px;'>
                                    <button type='submit' class='btn btn-lg btn-primary w-100 fs-6'>Login</button>
                                </div>
                                <div class='row mt-3'>
                                    <small>Don't have account? <a
                                            href='Signup.php'>Sign
                                            Up</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </span>
    </div>

    <script>
        function validatePassword() {
            const password = document.getElementById('psw').value;
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{10,}$/;

            if (!passwordRegex.test(password)) {
                alert('Password must be at least 10 characters long and contain a mix of uppercase, lowercase letters, and numbers.');
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }

        function validateEmail() {
            const emailInput = document.getElementById('email');
            const email = emailInput.value;
            const allowedDomains = ['gmail.com', 'yahoo.com'];
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA.-]+\.[a-zA-Z]{2,}$/;
            const domain = email.split('@')[1];
            if (emailRegex.test(email) && allowedDomains.includes(domain)) {
                // Email is valid
                return true;
            } else {
                // Email is invalid
                alert('Please enter a valid email address from a supported domain (e.g., gmail.com, yahoo.com).');
                return false;
            }
        }
    </script>

";
?>
<?php include('footer.php');
    ?>
</body>

</html>