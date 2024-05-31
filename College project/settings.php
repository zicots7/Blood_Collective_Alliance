
<!doctype html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="SignUp.css">
    <title>Sign Up</title> -->
<link rel="stylesheet" href="settings.css">
<link href="/HIS/hisglobal/bootstrap5/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="../hisglobal/bbpublic/assets/custom/portalBBpublic.js" type="text/javascript"></script>
<link href="../hisglobal/bbpublic/assets/elements/css/bootstrap.css" rel="stylesheet">
<link href="../hisglobal/bbpublic/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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
<title>Settings</title>
</head>

<?php

include ('_nav.php');
include ('_DB.php');

$donorEmail = $_SESSION['donorEmail'];
$donorPhoto=$_SESSION['donorphoto'];
$sql = "SELECT donorname,donordob,donorgender,donorbloodgrp,donormobile,donorEmail,donorpincode,donorstate,donordistrict,donoraddress,donoraltno FROM donor_info WHERE donoremail = $1";
$result = pg_query_params($db_connect, $sql, array($donorEmail));
//fetching data from database using session 

if ($result) {
    $row = pg_fetch_assoc($result);
       
        $donorName = $row['donorname'];
        $donorDob = $row['donordob'];
        $donorGender = $row['donorgender'];
        $donorBloodGrp = $row['donorbloodgrp'];
        $donorMobile = $row['donormobile'];
        $donorpincode = $row['donorpincode'];
        $donorState = $row['donorstate'];
        $donorDistrict = $row['donordistrict'];
        $donorAddress = $row['donoraddress'];
        $donorAltNo = $row['donoraltno'];
       
        
  
    }
?>


<body>

<div class="mainsec">
    <span class="SPAN">
    <form id="editForm" method="POST" action="settings.php" autocomplete="off"  enctype="multipart/form-data">
        <div class="container mt-5 mb-5 d-flex justify-content-center align-items-center min-vh-100">
            <div class="container">
                <div class="card card-container"style="padding: 40px; background: #ffffff; border: 2px; border-radius: 20px; ">
                    <div class="form-group">
                    <div class="d-flex justify-content-center mb-4">
                                    <img id="preview" name="image"  src="<?php echo $donorPhoto;?>" alt="Image Preview"
                                        class="rounded-circle" style="width: 200px; height: 200px; object-fit: cover;">
                                </div>
                        <div class="d-flex justify-content-center">
                           <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
                                        <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                                        <input type="file" class="form-control d-none" id="customFile2" name="image"
                                            onchange="displaySelectedImage(event, 'preview')" />
                                        <input type="file" name="image" id="image" src="" accept="image/*"
                                            onchange="previewImage(event)">

                                        <script>
                                            function previewImage(event) {
                                                var preview = document.querySelector('#preview');
                                                var file = event.target.files[0];
                                                var reader = new FileReader();

                                                reader.onloadend = function () {
                                                    preview.src = reader.result;
                                                }

                                                if (file) {
                                                    reader.readAsDataURL(file);
                                                } else {
                                                    preview.src = " $donorPhoto;";
                                                }
                                            }

                                            function displaySelectedImage(event, targetId) {
                                                var preview = document.getElementById(targetId);
                                                var file = event.target.files[0];
                                                var reader = new FileReader();

                                                reader.onloadend = function () {
                                                    preview.src = reader.result;
                                                }

                                                if (file) {
                                                    reader.readAsDataURL(file);
                                                } else {
                                                    preview.src = "$donorPhoto;";
                                                }
                                            }
                                        </script>

                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                            <label for="name">Name:</label>
                                        <input type="text" name="newDonorName" maxlength="50" value="<?php echo $donorName; ?>"
                                            onkeypress="return validateAlphaOnlyWithDotAndSpace(event)"
                                            class="form-control" id="txtBbFName" name="newDonorName"
                                            placeholder="e.g.: Robin Hood" >
                                    </div>
                            <div class="col-sm-6">
                                <label for="txtBbEmail">Email: </label>
                                <input type="email" name="newDonorEmail" maxlength="254"
                                    value="<?php echo $donorEmail; ?>" class="form-control" id="txtBbEmail"
                                    autocomplete="off" placeholder="e.g.: xyz@gmail.com" disabled>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="selectDob">Date of Birth: </label>
                                <font color="red">*</font>
                                <input type="date" name="newDonorDob" maxlength="2" value="<?php echo $donorDob; ?>"
                                    onkeypress="return validateNumeric(event)" class="form-control" autocomplete="off"
                                    >
                            </div>
                            <div class="col-sm-6">
                                <label for="selectGender">Gender: </label>
                                <font color="red">*</font>
                                <select name="newDonorGender" class="form-control" >
                                    <option value="<?php echo $donorGender; ?>"><?php echo $donorGender; ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="txtBbMobile">Mobile: </label>
                                <font color="red">*</font>
                                <input type="tel" class="form-control" name="newDonorMobile" id="txtBbMobile"
                                    placeholder="e.g.: 0125245628" maxlength="10" value="<?php echo $donorMobile; ?>"
                                    onkeypress="return validateNumeric(event)" pattern="[0-9]{10}" autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <label for="txtBbAltMobile">Alternative No: </label>
                                <input type="tel" name="newDonorAltNo" maxlength="10" value="<?php echo $donorAltNo; ?>"
                                    class="form-control" id="txtBbAltMobileNo" autocomplete="off"
                                    placeholder="535363778">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="donorBloodGrp">Blood Group:</label>
                                <font color="red">*</font>
                                <select name="newDonorBloodGrp" class="form-control" id="newDonorBloodGrp"
                                    placeholder="e.g.: A+" >
                                    <option value="<?php echo $donorBloodGrp; ?>"><?php echo $donorBloodGrp; ?></option>
                                    <option value="AB-Ve">AB-Ve</option>
                                    <option value="AB+Ve">AB+Ve</option>
                                    <option value="A-Ve">A-Ve</option>
                                    <option value="A+Ve">A+Ve</option>
                                    <option value="B-Ve">B-Ve</option>
                                    <option value="B+Ve">B+Ve</option>
                                    <option value="Oh-Ve">Oh-VE</option>
                                    <option value="Oh+Ve">Oh+VE</option>
                                    <option value="O-Ve">O-Ve</option>
                                    <option value="O+Ve">O+Ve</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="txtBbPincode" class="mb-2">PinCode: </label>
                                <font color="red">*</font>
                                <input type="text" class="form-control" name="newDonorpincode" id="txtBbPincode"
                                    placeholder="Pin Code" maxlength="6" value="<?php echo $donorpincode; ?>"
                                    onkeypress="return validateNumeric(event)" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="inputState">State</label>
                                <select class="form-control" id="inputState" name="newDonorState">
                                    <option value="<?php echo $donorState; ?>"><?php echo $donorState; ?></option>
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
                            <div class="col-sm-6">
                                <label for="inputDistrict">District</label>
                                <select class="form-control" id="inputDistrict" name="newDonorDistrict">
                                    <option value="<?php echo $donorDistrict; ?>"><?php echo $donorDistrict; ?></option>
                                </select>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Address:</label>
                        <textarea class="form-control" name="newDonorAddress" id="addrew" rows="2" cols="20" maxlength="100" style="resize: none;"
                            value=""><?php echo $donorAddress; ?></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger text-nowrap btn-lg">Update</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
    </span>
</div>


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


    $("#inputState").change(function() {
        var StateSelected = $(this).val();
        var optionsList;
        var htmlString = "";

        switch (StateSelected) {
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


        for (var i = 0; i < optionsList.length; i++) {
            htmlString = htmlString + "<option value=" + optionsList[i] + ">" + optionsList[i] + "</option>";
        }
        $("#inputDistrict").html(htmlString);

    });
    </script>


</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $newDonorName = $_POST['newDonorName'];
    $newDonorDob = $_POST['newDonorDob'];
    $newDonorGender = $_POST['newDonorGender'];
    $newDonorBloodGrp = $_POST['newDonorBloodGrp'];
    $newDonorMobile = $_POST['newDonorMobile'];
    $newDonorpincode = $_POST['newDonorpincode'];
    $newDonorState = $_POST['newDonorState'];
    $newDonorDistrict = $_POST['newDonorDistrict'];
    $newDonorAddress = $_POST['newDonorAddress'];
    $newDonorAltNo = $_POST['newDonorAltNo'];
    $Crnt_imageData = $_FILES["image"]["name"];
    $Crnt_imagetmp = $_FILES["image"]["tmp_name"];
    
    // Sanitize input here

    // Update the donor photo only if a new image is uploaded
    $new_img_name = $Crnt_imageData; // Default to the existing image data
    if ($_FILES['image']['name']) {
        $new_img_name = '';
        $Crnt_imageData = $_FILES['image']['name'];
        $img_ex = pathinfo($Crnt_imageData, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allow_extn = array("jpg", "jpeg", "png","gif");

        if (in_array($img_ex_lc, $allow_extn)) {
            $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
            $img_upload_path = 'uploads/' . $new_img_name;
            move_uploaded_file($_FILES['image']['tmp_name'], $img_upload_path);
            
            // Fetch existing donor photo filename
            $query_fetch_photo = "SELECT donorphoto FROM donor_info WHERE donoremail='$donorEmail'";
            $result_fetch_photo = pg_query($db_connect, $query_fetch_photo);
            if ($row = pg_fetch_assoc($result_fetch_photo)) {
                $old_img_name = $row['donorphoto'];
                
                // Delete the old photo from the database
                $query_delete_photo = "UPDATE donor_info SET donorphoto = '$new_img_name' WHERE donoremail= '$donorEmail'";
                pg_query($db_connect, $query_delete_photo);
                
                // Delete the old photo from the folder
                if (!empty($old_img_name)) {
                    $old_img_path = 'uploads/' . $old_img_name;
                    if (file_exists($old_img_path)) {
                        unlink($old_img_path);
                    }
                }
            }
        }
    } else {
        // If no new image is uploaded, retain the existing image data
        $new_img_name = $Crnt_imageData;
    }

    // Prepare the SQL query and parameters
    $query = "UPDATE donor_info SET donorname=$1, donordob=$2, donorgender=$3, donorbloodgrp=$4, donormobile=$5, donoraltno=$6, donorpincode=$7, donorstate=$8, donordistrict=$9, donoraddress=$10";
    $parameters = array($newDonorName, $newDonorDob, $newDonorGender, $newDonorBloodGrp, $newDonorMobile, $newDonorAltNo, $newDonorpincode, $newDonorState, $newDonorDistrict, $newDonorAddress);

    // Add donorphoto parameter if new image is provided
    if ($_FILES['image']['name']) {
        $parameters[] = $new_img_name;
        $query .= ", donorphoto=$" . (count($parameters));
    }

    // Execute the query
    $result2 = pg_query_params($db_connect, $query, $parameters);
}





        // update  the main data (e.g., store in database)
    
            // echo " <div class='container-top '>
            // <div class='alert alert-success' role='alert' id='myAlert'>
            // Updated successfully!
            //      </div>
            //      </div>
            //      <style>
            //      .container-top {
            //          position: fixed;
            //          top: 38px;
            //          width: 100%;
            //          padding: 20px;
            //          text-align: center;
            //          z-index: 1000; /* Ensure the container appears above other elements */
            //      }
            //  </style>
            //  <script>
            //  $(document).ready(function(){
            //     // Set a delay of 3 seconds (3000 milliseconds)
            //     setTimeout(function(){
            //       // Redirect to Signup.php
            //       window.location.replace('settings.php');
            //     }, 5000); 
            //     // Change the delay time as needed (in milliseconds)
            //   });
            // </script>";





      // $ifExt_query = "SELECT COUNT(*) FROM donor_info WHERE donormobile=$1";
            // $param = array($newDonorMobile);
            // $result = pg_query_params($db_connect, $ifExt_query, $param);
            // $row = pg_fetch_row($result);
            // $count = intval($row[0]);
            // if ($count > 0) {
    //             echo " <div class='container-top '>
    //             <div class='alert alert-warning' role='alert' id='myAlert'>
    //             An account with this  phone number already exists, try different .
    //              </div>
    //              </div>
    //              <style>
    //              .container-top {
    //                  position: fixed;
    //                  top: 38px;
    //                  width: 100%;
    //                  padding: 20px;
    //                  text-align: center;
    //                  z-index: 1000; /* Ensure the container appears above other elements */
    //              }
    //          </style>
    //           <script>
    //          $(document).ready(function(){
    //             // Set a delay of 3 seconds (3000 milliseconds)
    //             setTimeout(function(){
    //               // Redirect to Signup.php
    //               window.location.replace('settings.php');
    //             }, 5000); 
    //             // Change the delay time as needed (in milliseconds)
    //           });
    //         </script>
    // ";
    
            


//  Close the database connection



?>

<?php
include 'footer.php';
?>