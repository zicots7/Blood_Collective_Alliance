<?php
session_start();

session_unset();
session_destroy();
header("location:Login.php");

exit
// '<script>
//          $(document).ready(function(){
//             // Set a delay of 3 seconds (3000 milliseconds)
//             setTimeout(function(){
//               // Redirect to Signup.php
//               window.location.replace("Login.php");
//             }, 5000); 
//             // Change the delay time as needed (in milliseconds)
//           });
//         </script>';
?>