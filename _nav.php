<?php
session_start();

function start_nav(){

    if (isset($_SESSION['LoggedIn']) && ($_SESSION['LoggedIn'] == true)) {
        return true;
    } else {
        return false;
    }
}

function display_nav(){
    echo'
<style>

.navbar .navbar-nav .nav-link:hover{
background-color: #FF8D6D;
transition: all .5s;
}
.navbar-brand {

  overflow: hidden;
  // text-overflow: ellipsis;
  word-break: break-all;
  white-space: nowrap;

}

.navbar{
background-color: #FFC017 !important;

}

.nav-link {
    text-decoration: none; 
}

/* Color of the navbar BEFORE scroll */
.navbar-scroll {
  background-color:  #FFC017 !important;
}

/* Color of the links BEFORE scroll */
.navbar-scroll .nav-link,
.navbar-scroll .navbar-toggler-icon,
.navbar-scroll .navbar-brand {
  color: black !important;
}

/* An optional height of the navbar AFTER scroll */
.navbar.navbar-scroll{
  padding-top: auto;
  padding-bottom: auto;
}

.navbar-dark .navbar-toggler-icon {
  color: black !important;
}

</style>

<nav class="navbar navbar-expand-lg  shadow-5 bg-body-tertiary mt-0 py-0 sticky-top"> 
<div class=" container-fluid d-flex navbar-scroll"> <!--bg-danger--!>
  <a class="navbar-brand fs-4 fs-md-3 fs-sm-2 mx-2" href="#"><strong>BLOOD COLLECTIVE ALLIANCE</strong></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse mb-lg-0 justify-content-center align-items-center" id="navbarNav">
    <ul class="navbar-nav ms-auto mb-lg-0">
    <li class="nav-item">
        <a class=" nav-link active text-white fs-5 mx-3 "  href="main.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class=" nav-link active text-white fs-5 mx-3 "  href="AboutUs.php">ABOUT</a>
      </li>
      <li class="nav-item ">
        <a class="  nav-link active text-white fs-5 mx-3" href="ContactUs.php">CONTACT</a>
      </li>
      </ul>';
    if ( !start_nav() ) {
        echo '
     <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pb-2 pt-2">
<li class="nav-item">
        <a class="nav-link active text-white fs-5 btn btn-success mx-3 my-1" href="Login.php">
            LOGIN
        </a> 
</li>
      <li class="nav-item ">
        <a class="nav-link active text-white fs-5 btn btn-primary mx-3 my-1" href="Signup.php" >REGISTER</a>
      </li>
    </ul>
    ';
    }

    if ( start_nav() ) {
        echo'
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pb-2 pt-2">
    <li class="nav-item dropdown show">
        <a class="nav-link dropdown-toggle btn fs-4 mx-3 my-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        <img id="image-container" class="rounded-circle" style="width: 50px; height: 60px; border-radius: 500%; object-fit: fill;"
        src= "'.getImageSrc().'"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <h6 class="dropdown-header">'.$_SESSION['donorName'].'</h6>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="settings.php">Profile</a>
        <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
    </li>
    </ul>
  ';
    }
    echo'
</div>
</div>
</nav>';
}
display_nav();
?>

<?php

// Function to fetch and return the image source

function getImageSrc() {
    include( "_DB.php" );
    $donorEmail = $_SESSION['donorEmail'];
    $query = "SELECT donorname, donorphoto FROM donor_info WHERE donoremail = $1";
    $result = pg_query_params( $db_connect, $query, array( $donorEmail ) );
    if ( $result ) {
        $row = pg_fetch_assoc( $result );
        if ( $row ) {
            $_SESSION['donorName'] = $row['donorname'];
            // Construct the data URI
            $src = 'uploads/'.$row['donorphoto'].'';
            $_SESSION['donorphoto'] = $src;
            return $src;
        } else {
            return "Photo not found.";
        }
    } else {
        return "Error fetching photo, Please contact support.";// . pg_last_error( $db_connect );
    }
}
?>

<!-- Bootstrap JS and dependencies -->
<script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin = "anonymous">
</script>
<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet"
      integrity = "sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin = "anonymous">
<link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel = "stylesheet">
<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity = "sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin = "anonymous">


<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous">
</script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity = "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin = "anonymous">
</script>
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity = "sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin = "anonymous">
</script>

<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous">
</script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity = "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin = "anonymous">
</script>
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity = "sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin = "anonymous">
</script>

<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous">
</script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity = "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin = "anonymous">
</script>
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity = "sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin = "anonymous">
</script>

<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous">
</script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity = "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin = "anonymous">
</script>
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity = "sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin = "anonymous">
</script>