
<?php
session_start();
if(isset($_SESSION['LoggedIn'])&&($_SESSION['LoggedIn']==true)){
$LoggedIn=true;
}else{
  $LoggedIn=false;
}
echo'<nav class="navbar navbar-dark navbar-expand-lg bg-body-tertiary mt-0 py-0"> 
<!-- fixed-top -->
<div class="container-fluid bg-danger " >
  <a class="navbar-brand fs-3" href="main.php">Blood Collective Alliance</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ms-auto ">
      <li class="nav-item">
        <a class=" nav-link active text-white fs-3"  href="AboutUs.php">About Us</a>
      </li>
      <li class="nav-item ">
        <a class="  nav-link active text-white fs-3" href="ContactUs.php" >Contact Us</a>
      </li>';
     if(!$LoggedIn){
      echo '<li class="nav-item " >
        <a  class=" nav-link active text-white fs-3" href="Login.php" >Sign In </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link active text-white fs-3" href="Signup.php" >Sign Up</a>
      </li>
    </ul>';
    } 
   if($LoggedIn){
    echo'<li class="nav-item dropdown show">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="profile-picture.jpg" alt="Profile Picture" style="width: 30px; height: 30px; border-radius: 50%;">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="settings.php">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>';
   } 
echo'
  </div>
</div>
</nav>';
?>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
// require'Login.php';
?>
<?php
// require'Signup';
?>