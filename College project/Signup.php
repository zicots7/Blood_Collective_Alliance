<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blood Collective Alliance connects blood donors directly with patients in critical need, eliminating middlemen. Our mission is to save lives by reducing wait times, expanding the donor pool, and empowering communities through voluntary blood donations. Join us in making a difference today!">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="SignUp.css">
    <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <title>Sign Up</title>
    <link rel="icon" type="image/x-icon" href="..\College Project\icon-5b3206bf.png">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
        </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
        </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
        </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
        </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<?php
include ('_nav.php');
?>

<body>
    <script>
        $(document).ready(function () {
            // Hide the alert after 5 seconds (5000 milliseconds)
            setTimeout(function () {
                $("#myAlert").alert('close');
            }, 5000);
        });
    </script>

    <div class="mainsec">
        <span class="SPAN">
            <form name="SignUP" method="post" action="Signup.php" autocomplete="off" onsubmit="return validateEmail()"
                enctype="multipart/form-data">
                <div class="container mt-5 mb-5 d-flex justify-content-center align-items-center min-vh-100">
                    <div class="container">
                        <div class="card card-container"
                            style="padding: 20px; background: #ffffff; border: 2px; border-radius: 20px; ">
                            <h2 class="text-danger" align="left">Donor Sign-Up</h2>

                            <div class="form-group">
                                <div class="d-flex justify-content-center mb-4">
                                    <img id="selectedAvatar" src="avtarUploadPic.png" class="rounded-circle"
                                        style="width: 200px; height: 200px; object-fit:fill;"
                                        alt="Profile Picture Upload" />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
                                        <label class="form-label text-white m-1" for="donorPhoto">Choose file</label>

                                        <input type="file" class="form-control-file d-none" id="donorPhoto"
                                            name="donorPhoto" accept=".jpg, .jpeg, .png"
                                            onchange="displaySelectedImage(event, 'selectedAvatar')" />
                                        <script>
                                            function displaySelectedImage (event, elementId) {
                                                const selectedImage = document.getElementById(elementId);
                                                const fileInput = event.target;

                                                if (fileInput.files && fileInput.files[0])
                                                {
                                                    const reader = new FileReader();

                                                    reader.onload = function (e) {
                                                        selectedImage.src = e.target.result;
                                                    };
                                                    reader.readAsDataURL(fileInput.files[0]);
                                                }
                                            }
                                        </script>

                                    </div>
                                </div>
                            </div>


                            <div id="enterDonorDetails">
                                <!-- Name & DOB Group -->
                                <div class="nameDobSelect">
                                    <div class="row pt-2">
                                        <div class="col-sm-6">
                                            <label>Your Name:</label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa-solid fa-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="donorName" maxlength="50" value=""
                                                    onkeypress="return validateAlphaOnlyWithDotAndSpace(event)"
                                                    class="form-control" id="txtBbFName" autocomplete="off"
                                                    placeholder="Enter your full name" autofocus required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="selectDob">Date of Birth: </label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa-regular fa-calendar-days"></i>
                                                    </span>
                                                </div>
                                                <input type="date" name="donorDob" maxlength="2" value=""
                                                    onkeypress="return validateNumeric(event)" class="form-control"
                                                    autocomplete="off" autofocus required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Gender & Blood Group -->
                                <div class="genderBldGrpSelect">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="selectGender">Gender: </label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa-solid fa-venus-mars"></i>
                                                    </span>
                                                </div>
                                                <select name="donorGender" class="form-control" autofocus required>
                                                    <option value="">Not Selected</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="donorBloodGrp">Blood Group:</label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa-solid fa-droplet"></i>
                                                    </span>
                                                </div>
                                                <select name="donorBloodGrp" class="form-control" id="donorBloodGrp"
                                                    autofocus required>
                                                    <option value="">Select Blood Group</option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mobileSelect">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="txtBbMobile">Contact No.: </label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa-solid fa-phone"></i>
                                                    </span>
                                                </div>
                                                <input type="tel" class="form-control" name="donorMobile"
                                                    id="txtBbMobile"
                                                    placeholder="Enter your contact number with country code"
                                                    maxlength="10" onkeypress="return validateNumeric(event)"
                                                    pattern="[0-9]{10}" autocomplete="off" autofocus required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="txtBbAltMobile">Alternative No: </label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa-solid fa-address-book"></i>
                                                    </span>
                                                </div>
                                                <input type="tel" name="donorAltNo" maxlength="10"
                                                    onkeypress="return validateNumeric(event)" pattern="[0-9]{10}"
                                                    class="form-control" id="txtBbAltMobileNo" autocomplete="off"
                                                    placeholder="Enter your alternative number" autofocus required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="emailPwd">
                                    <div class="row ">
                                        <div class="col-sm-6">
                                            <label for="txtBbEmail">Email: </label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa-solid fa-at"></i>
                                                    </span>
                                                </div>
                                                <input type="email" name="donorEmail" maxlength="254"
                                                    class="form-control" id="txtBbEmail" autocomplete="off"
                                                    placeholder="Enter your email id"
                                                    pattern="[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com|outlook\.com)"
                                                    autofocus required>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> We'll never share your
                                                email with anyone else.</small>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="txtBbPassword">Password: </label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa-solid fa-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="Password" name="donorPassword" maxlength="254"
                                                    class="form-control" id="txtBbPassword" autocomplete="off"
                                                    placeholder="Enter your password" autofocus required>
                                            </div>
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                Must be 8 to 10 characters long.
                                            </small>
                                        </div>
                                    </div>
                                </div>


                                <div class="stateDistSelect">
                                    <div class="row pt-2 pb-0">
                                        <div class="col-sm-6 ">
                                            <label for="inputState" autofocus required>State</label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa-solid fa-map-location-dot"></i>
                                                    </span>
                                                </div>
                                                <select class="form-control" id="inputState" name="donorState" autofocus
                                                    required>
                                                    <option value="">Select State</option>
                                                    <option value="Andra Pradesh">Andra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madya Pradesh">Madya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Orissa">Orissa</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttaranchal">Uttaranchal</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputDistrict">District</label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <img width="16" height="16"
                                                            src="..\College project\district.png"
                                                            alt="cancel-4-digits" />
                                                    </span>
                                                </div>
                                                <select class="form-control" id="inputDistrict" name="donorDistrict"
                                                    autofocus required>
                                                    <option autofocus required value="">Select District</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="selectAddPin">
                                    <div class="row pt-2">
                                        <div class="col-sm-6">
                                            <label>Address:</label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa-solid fa-landmark"></i>
                                                    </span>
                                                </div>
                                                <textarea class="form-control" name="donorAddress"
                                                    id="exampleFormControlTextarea1" rows="2" cols="20" maxlength="300"
                                                    autofocus required> </textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="txtBbPincode" class="mb-2">PinCode: </label>
                                            <font color="red">*</font>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <img width="16" height="20"
                                                            src="https://img.icons8.com/glyph-neue/64/cancel-4-digits.png"
                                                            alt="cancel-4-digits" />
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" name="donorPincode"
                                                    id="txtBbPincode" placeholder="Pin Code" maxlength="6"
                                                    onkeypress="return validateNumeric(event)" autocomplete="off"
                                                    autofocus required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                            </div>

                            <div class="row" id="divsignup">
                                <div class="col-xs-12" align="center">
                                    <button input type="submit" class="btn btn-danger" onclick="return checkFileInput()"
                                        value="Submit">Sign Up</button>
                                    <script>
                                        function checkFileInput () {
                                            const fileInput = document.getElementById('donorPhoto');
                                            if (!fileInput || !fileInput.files || fileInput.files.length === 0)
                                            {
                                                alert("Please select a profile picture before submitting the form.");
                                                return false;
                                            }
                                            return true;
                                        }
                                    </script>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </form>
        </span>
    </div>
    <script>
        function validateEmail () {
            const emailInput = document.getElementById("txtBbEmail");
            const passwordInput = document.getElementById("txtBbPassword");
            const email = emailInput.value;
            const allowedDomains = ["gmail.com", "yahoo.com", "outlook.com"];
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA.-]+\.[a-zA-Z]{2,}$/;
            const domain = email.split("@")[1];
            if (!emailRegex.test(email) || !allowedDomains.includes(domain))
            {
                alert("Please enter a valid email address from a supported domain (e.g., gmail.com, yahoo.com, outlook.com).");
                return false;
            }
            // Validate password length
            const password = passwordInput.value;
            if (password.length < 8 || password.length > 10)
            {
                alert("Password must be between 8 to 10 characters in length.");
                return false;
            }

            // If both email and password are valid
            return true;
        }
    </script>

    <script>
        var AndraPradesh = ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Krishna", "Kurnool", "Prakasam",
            "Nellore", "Srikakulam", "Visakhapatnam", "Vizianagaram", "West Godavari"
        ];
        var ArunachalPradesh = ["Anjaw", "Changlang", "Dibang Valley", "East Kameng", "East Siang", "Kra Daadi",
            "Kurung Kumey", "Lohit", "Longding", "Lower Dibang Valley", "Lower Subansiri", "Namsai", "Papum Pare",
            "Siang", "Tawang", "Tirap", "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang", "Itanagar"
        ];
        var Assam = ["Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo", "Chirang", "Darrang", "Dhemaji",
            "Dhubri", "Dibrugarh", "Goalpara", "Golaghat", "Hailakandi", "Hojai", "Jorhat", "Kamrup Metropolitan",
            "Kamrup (Rural)", "Karbi Anglong", "Karimganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon", "Nagaon",
            "Nalbari", "Dima Hasao", "Sivasagar", "Sonitpur", "South Salmara Mankachar", "Tinsukia", "Udalguri",
            "West Karbi Anglong"
        ];
        var Bihar = ["Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur", "Buxar", "Darbhanga",
            "East Champaran", "Gaya", "Gopalganj", "Jamui", "Jehanabad", "Kaimur", "Katihar", "Khagaria", "Kishanganj",
            "Lakhisarai", "Madhepura", "Madhubani", "Munger", "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia",
            "Rohtas", "Saharsa", "Samastipur", "Saran", "Sheikhpura", "Sheohar", "Sitamarhi", "Siwan", "Supaul",
            "Vaishali", "West Champaran"
        ];
        var Chhattisgarh = ["Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara", "Bijapur", "Bilaspur", "Dantewada",
            "Dhamtari", "Durg", "Gariaband", "Janjgir Champa", "Jashpur", "Kabirdham", "Kanker", "Kondagaon", "Korba",
            "Koriya", "Mahasamund", "Mungeli", "Narayanpur", "Raigarh", "Raipur", "Rajnandgaon", "Sukma", "Surajpur",
            "Surguja"
        ];
        var Goa = ["North Goa", "South Goa"];
        var Gujarat = ["Ahmedabad", "Amreli", "Anand", "Aravalli", "Banaskantha", "Bharuch", "Bhavnagar", "Botad",
            "Chhota Udaipur", "Dahod", "Dang", "Devbhoomi Dwarka", "Gandhinagar", "Gir Somnath", "Jamnagar", "Junagadh",
            "Kheda", "Kutch", "Mahisagar", "Mehsana", "Morbi", "Narmada", "Navsari", "Panchmahal", "Patan", "Porbandar",
            "Rajkot", "Sabarkantha", "Surat", "Surendranagar", "Tapi", "Vadodara", "Valsad"
        ];
        var Haryana = ["Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gurugram", "Hisar", "Jhajjar",
            "Jind", "Kaithal", "Karnal", "Kurukshetra", "Mahendragarh", "Mewat", "Palwal", "Panchkula", "Panipat",
            "Rewari", "Rohtak", "Sirsa", "Sonipat", "Yamunanagar"
        ];
        var HimachalPradesh = ["Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur", "Kullu", "Lahaul Spiti", "Mandi",
            "Shimla", "Sirmaur", "Solan", "Una"
        ];
        var JammuKashmir = ["Anantnag", "Bandipora", "Baramulla", "Budgam", "Doda", "Ganderbal", "Jammu", "Kargil",
            "Kathua", "Kishtwar", "Kulgam", "Kupwara", "Leh", "Poonch", "Pulwama", "Rajouri", "Ramban", "Reasi",
            "Samba", "Shopian", "Srinagar", "Udhampur"
        ];
        var Jharkhand = ["Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum", "Garhwa", "Giridih", "Godda",
            "Gumla", "Hazaribagh", "Jamtara", "Khunti", "Koderma", "Latehar", "Lohardaga", "Pakur", "Palamu", "Ramgarh",
            "Ranchi", "Sahebganj", "Seraikela Kharsawan", "Simdega", "West Singhbhum"
        ];
        var Karnataka = ["Bagalkot", "Bangalore Rural", "Bangalore Urban", "Belgaum", "Bellary", "Bidar", "Vijayapura",
            "Chamarajanagar", "Chikkaballapur", "Chikkamagaluru", "Chitradurga", "Dakshina Kannada", "Davanagere",
            "Dharwad", "Gadag", "Gulbarga", "Hassan", "Haveri", "Kodagu", "Kolar", "Koppal", "Mandya", "Mysore",
            "Raichur", "Ramanagara", "Shimoga", "Tumkur", "Udupi", "Uttara Kannada", "Yadgir"
        ];
        var Kerala = ["Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam", "Kottayam", "Kozhikode",
            "Malappuram", "Palakkad", "Pathanamthitta", "Thiruvananthapuram", "Thrissur", "Wayanad"
        ];
        var MadhyaPradesh = ["Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat", "Barwani", "Betul", "Bhind",
            "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara", "Damoh", "Datia", "Dewas", "Dhar", "Dindori", "Guna",
            "Gwalior", "Harda", "Hoshangabad", "Indore", "Jabalpur", "Jhabua", "Katni", "Khandwa", "Khargone", "Mandla",
            "Mandsaur", "Morena", "Narsinghpur", "Neemuch", "Panna", "Raisen", "Rajgarh", "Ratlam", "Rewa", "Sagar",
            "Satna",
            "Sehore", "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri", "Sidhi", "Singrauli", "Tikamgarh",
            "Ujjain", "Umaria", "Vidisha"
        ];
        var Maharashtra = ["Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara", "Buldhana", "Chandrapur",
            "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon", "Jalna", "Kolhapur", "Latur", "Mumbai City",
            "Mumbai Suburban", "Nagpur", "Nanded", "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune",
            "Raigad", "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane", "Wardha", "Washim", "Yavatmal"
        ];
        var Manipur = ["Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West", "Jiribam", "Kakching",
            "Kamjong", "Kangpokpi", "Noney", "Pherzawl", "Senapati", "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"
        ];
        var Meghalaya = ["East Garo Hills", "East Jaintia Hills", "East Khasi Hills", "North Garo Hills", "Ri Bhoi",
            "South Garo Hills", "South West Garo Hills", "South West Khasi Hills", "West Garo Hills",
            "West Jaintia Hills", "West Khasi Hills"
        ];
        var Mizoram = ["Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip", "Aizawl",
            "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip"
        ];
        var Nagaland = ["Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren", "Phek", "Tuensang",
            "Wokha", "Zunheboto"
        ];
        var Odisha = ["Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack", "Debagarh", "Dhenkanal",
            "Gajapati", "Ganjam", "Jagatsinghpur", "Jajpur", "Jharsuguda", "Kalahandi", "Kandhamal", "Kendrapara",
            "Kendujhar", "Khordha", "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur", "Nayagarh", "Nuapada", "Puri",
            "Rayagada", "Sambalpur", "Subarnapur", "Sundergarh"
        ];
        var Punjab = ["Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka", "Firozpur", "Gurdaspur",
            "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana", "Mansa", "Moga", "Mohali", "Muktsar", "Pathankot",
            "Patiala", "Rupnagar", "Sangrur", "Shaheed Bhagat Singh Nagar", "Tarn Taran"
        ];
        var Rajasthan = ["Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara", "Bikaner", "Bundi",
            "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur", "Ganganagar", "Hanumangarh", "Jaipur", "Jaisalmer",
            "Jalore", "Jhalawar", "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur", "Pali", "Pratapgarh",
            "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Tonk", "Udaipur"
        ];
        var Sikkim = ["East Sikkim", "North Sikkim", "South Sikkim", "West Sikkim"];
        var TamilNadu = ["Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul", "Erode", "Kanchipuram",
            "Kanyakumari", "Karur", "Krishnagiri", "Madurai", "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur",
            "Pudukkottai", "Ramanathapuram", "Salem", "Sivaganga", "Thanjavur", "Theni", "Thoothukudi",
            "Tiruchirappalli", "Tirunelveli", "Tiruppur", "Tiruvallur", "Tiruvannamalai", "Tiruvarur", "Vellore",
            "Viluppuram", "Virudhunagar"
        ];
        var Telangana = ["Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagtial", "Jangaon", "Jayashankar", "Jogulamba",
            "Kamareddy", "Karimnagar", "Khammam", "Komaram Bheem", "Mahabubabad", "Mahbubnagar", "Mancherial", "Medak",
            "Medchal", "Nagarkurnool", "Nalgonda", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla",
            "Ranga Reddy", "Sangareddy", "Siddipet", "Suryapet", "Vikarabad", "Wanaparthy", "Warangal Rural",
            "Warangal Urban", "Yadadri Bhuvanagiri"
        ];
        var Tripura = ["Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura", "Unakoti",
            "West Tripura"
        ];
        var UttarPradesh = ["Agra", "Aligarh", "Allahabad", "Ambedkar Nagar", "Amethi", "Amroha", "Auraiya", "Azamgarh",
            "Baghpat", "Bahraich", "Ballia", "Balrampur", "Banda", "Barabanki", "Bareilly", "Basti", "Bhadohi",
            "Bijnor", "Budaun", "Bulandshahr", "Chandauli", "Chitrakoot", "Deoria", "Etah", "Etawah", "Faizabad",
            "Farrukhabad", "Fatehpur", "Firozabad", "Gautam Buddha Nagar", "Ghaziabad", "Ghazipur", "Gonda",
            "Gorakhpur", "Hamirpur", "Hapur", "Hardoi", "Hathras", "Jalaun", "Jaunpur", "Jhansi", "Kannauj",
            "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi", "Kheri", "Kushinagar", "Lalitpur", "Lucknow",
            "Maharajganj", "Mahoba", "Mainpuri", "Mathura", "Mau", "Meerut", "Mirzapur", "Moradabad", "Muzaffarnagar",
            "Pilibhit", "Pratapgarh", "Raebareli", "Rampur", "Saharanpur", "Sambhal", "Sant Kabir Nagar",
            "Shahjahanpur", "Shamli", "Shravasti", "Siddharthnagar", "Sitapur", "Sonbhadra", "Sultanpur", "Unnao",
            "Varanasi"
        ];
        var Uttarakhand = ["Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar", "Nainital", "Pauri",
            "Pithoragarh", "Rudraprayag", "Tehri", "Udham Singh Nagar", "Uttarkashi"
        ];
        var WestBengal = ["Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur", "Darjeeling", "Hooghly",
            "Howrah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata", "Malda", "Murshidabad", "Nadia",
            "North 24 Parganas", "Paschim Bardhaman", "Paschim Medinipur", "Purba Bardhaman", "Purba Medinipur",
            "Purulia", "South 24 Parganas", "Uttar Dinajpur"
        ];
        var AndamanNicobar = ["Nicobar", "North Middle Andaman", "South Andaman"];
        var Chandigarh = ["Chandigarh"];
        var DadraHaveli = ["Dadra Nagar Haveli"];
        var DamanDiu = ["Daman", "Diu"];
        var Delhi = ["Central Delhi", "East Delhi", "New Delhi", "North Delhi", "North East Delhi", "North West Delhi",
            "Shahdara", "South Delhi", "South East Delhi", "South West Delhi", "West Delhi"
        ];
        var Lakshadweep = ["Lakshadweep"];
        var Puducherry = ["Karaikal", "Mahe", "Puducherry", "Yanam"];


        $("#inputState").change(function () {
            var StateSelected = $(this).val();
            var optionsList;
            var htmlString = "";

            switch (StateSelected)
            {
                case "Andra Pradesh":
                    optionsList = AndraPradesh;
                    break;
                case "Arunachal Pradesh":
                    optionsList = ArunachalPradesh;
                    break;
                case "Assam":
                    optionsList = Assam;
                    break;
                case "Bihar":
                    optionsList = Bihar;
                    break;
                case "Chhattisgarh":
                    optionsList = Chhattisgarh;
                    break;
                case "Goa":
                    optionsList = Goa;
                    break;
                case "Gujarat":
                    optionsList = Gujarat;
                    break;
                case "Haryana":
                    optionsList = Haryana;
                    break;
                case "Himachal Pradesh":
                    optionsList = HimachalPradesh;
                    break;
                case "Jammu and Kashmir":
                    optionsList = JammuKashmir;
                    break;
                case "Jharkhand":
                    optionsList = Jharkhand;
                    break;
                case "Karnataka":
                    optionsList = Karnataka;
                    break;
                case "Kerala":
                    optionsList = Kerala;
                    break;
                case "Madya Pradesh":
                    optionsList = MadhyaPradesh;
                    break;
                case "Maharashtra":
                    optionsList = Maharashtra;
                    break;
                case "Manipur":
                    optionsList = Manipur;
                    break;
                case "Meghalaya":
                    optionsList = Meghalaya;
                    break;
                case "Mizoram":
                    optionsList = Mizoram;
                    break;
                case "Nagaland":
                    optionsList = Nagaland;
                    break;
                case "Orissa":
                    optionsList = Orissa;
                    break;
                case "Punjab":
                    optionsList = Punjab;
                    break;
                case "Rajasthan":
                    optionsList = Rajasthan;
                    break;
                case "Sikkim":
                    optionsList = Sikkim;
                    break;
                case "Tamil Nadu":
                    optionsList = TamilNadu;
                    break;
                case "Telangana":
                    optionsList = Telangana;
                    break;
                case "Tripura":
                    optionsList = Tripura;
                    break;
                case "Uttaranchal":
                    optionsList = Uttaranchal;
                    break;
                case "Uttar Pradesh":
                    optionsList = UttarPradesh;
                    break;
                case "West Bengal":
                    optionsList = WestBengal;
                    break;
                case "Andaman and Nicobar Islands":
                    optionsList = AndamanNicobar;
                    break;
                case "Chandigarh":
                    optionsList = Chandigarh;
                    break;
                case "Dadar and Nagar Haveli":
                    optionsList = DadraHaveli;
                    break;
                case "Daman and Diu":
                    optionsList = DamanDiu;
                    break;
                case "Delhi":
                    optionsList = Delhi;
                    break;
                case "Lakshadeep":
                    optionsList = Lakshadeep;
                    break;
                case "Pondicherry":
                    optionsList = Pondicherry;
                    break;
            }


            for (var i = 0; i < optionsList.length; i++)
            {
                htmlString = htmlString + "<option value=" + optionsList[i] + ">" + optionsList[i] + "</option>";
            }
            $("#inputDistrict").html(htmlString);

        });

    </script>

    <?php
    function singup()
        {
        require ('_DB.php');

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["donorPhoto"])) {
            $donorName = $_POST['donorName'];
            $donorDob = $_POST['donorDob'];
            $donorGender = $_POST['donorGender'];
            $donorBloodGrp = $_POST['donorBloodGrp'];
            $donorMobile = $_POST['donorMobile'];
            $donorEmail = $_POST['donorEmail'];
            $donorPincode = $_POST['donorPincode'];
            $donorState = $_POST['donorState'];
            $donorDistrict = $_POST['donorDistrict'];
            $donorAddress = $_POST['donorAddress'];
            $donorPassword = $_POST['donorPassword'];
            $donorAltNo = $_POST['donorAltNo'];
            $imageData = $_FILES["donorPhoto"]["name"];
            $imagetmp = $_FILES["donorPhoto"]["tmp_name"];

            //            error_get_last();
    

            // Validate name
            if (empty($donorName) || empty($donorEmail) || empty($donorAltNo) || ! filter_var($donorEmail, FILTER_VALIDATE_EMAIL) || empty($donorDob) || empty($donorGender) || empty($donorBloodGrp) || empty($donorMobile) || empty($donorState) || empty($donorPincode) || empty($donorDistrict) || empty($donorPassword) || empty($donorAddress)) {

                echo " 
                <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Please Fill up everything correctly !!
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
    }
    $(document).ready(function() {
        $('#messageSentModal').modal('show');
    });
    </script>
                ";
                }


            // Query database to check if account already exists
    
            $ifExt_query = "SELECT COUNT(*) FROM donor_info WHERE donorEmail = $1";
            $param = array($donorEmail);
            $result = pg_query_params($db_connect, $ifExt_query, $param);
            $row = pg_fetch_row($result);
            $count = intval($row[0]);

            if ($count > 0) {
                echo " 
                <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        An account with this email address already exists.
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
    }
    $(document).ready(function() {
        $('#messageSentModal').modal('show');
    });
    </script>
";
                $login_signal = true;
                $signup_signal = false;
                $logout_signal = false;
                } else {
                // Process form data (e.g., store in database)
                echo "
                <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Form submitted succesfully!
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
    }
    $(document).ready(function() {
        $('#messageSentModal').modal('show');
    });
    </script>
                ";

                try {
                    // -----------------  Sanitize code here----------------
                    $donorName = pg_escape_string($db_connect, $donorName);
                    $donorDob = pg_escape_string($db_connect, $donorDob);
                    $donorGender = pg_escape_string($db_connect, $donorGender);
                    $donorBloodGrp = pg_escape_string($db_connect, $donorBloodGrp);
                    $donorMobile = pg_escape_string($db_connect, $donorMobile);
                    $donorEmail = pg_escape_string($db_connect, $donorEmail);
                    $donorPincode = pg_escape_string($db_connect, $donorPincode);
                    $donorState = pg_escape_string($db_connect, $donorState);
                    $donorDistrict = pg_escape_string($db_connect, $donorDistrict);
                    $donorAddress = pg_escape_string($db_connect, $donorAddress);
                    $donorAltNo = pg_escape_string($db_connect, $donorAltNo);
                    $donorPassword = pg_escape_string($db_connect, $donorPassword);
                    $password_hash = password_hash($donorPassword, PASSWORD_DEFAULT);

                    $img_ex = pathinfo($imageData, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    $allow_extn = array("jpg", "jpeg", "png");
                    if (in_array($img_ex_lc, $allow_extn)) {
                        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                        $img_upload_path = 'uploads/' . $new_img_name;
                        move_uploaded_file($imagetmp, $img_upload_path);
                        }

                    //  -- Inserting a sample entry into the Customer_Info table
                    $SqlQuery = "INSERT INTO donor_info (donorname, donordob, donorgender, donorbloodgrp, donormobile, donoremail, donorpincode, donorstate, donordistrict, donoraltno, donorpassword, donorphoto, donoraddress) VALUES($1, $2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12, $13)";

                    $param = array($donorName, $donorDob, $donorGender, $donorBloodGrp, $donorMobile, $donorEmail, $donorPincode, $donorState, $donorDistrict, $donorAltNo, $password_hash, $new_img_name, $donorAddress);
                    $result = pg_query_params($db_connect, $SqlQuery, $param);
                    } catch (Exception $E) {
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
    </script>";
                    }
                ;

                if (! $result) {
                    // Handle the case where the query execution failed
                    echo "
                    <div class='modal fade' id='messageSentModal' tabindex='-1' aria-labelledby='messageSentModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='messageSentModalLabel'>Message Sent</h5>
        <button type='button' class='btn-close' onclick='dismissModalAndRedirect() aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Server is down.<br>Please try again after sometime.
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
    }
    $(document).ready(function() {
        $('#messageSentModal').modal('show');
    });
    </script>
                    ";
                    } else {
                    // Close the database connection
                    pg_close($db_connect);
                    echo '<script>
         $(document).ready(function(){
            // Set a delay of 3 seconds (3000 milliseconds)
            setTimeout(function(){
              // Redirect to Signup.php
                window.location.href="Signup.php";
            }, 5000); 
            // Change the delay time as needed (in milliseconds)
          });
        </script>
';
                    }
                }
            }
        }
    singup()
        ?>
    <?php
    include ("footer.php");
    ?>
</body>

</html>