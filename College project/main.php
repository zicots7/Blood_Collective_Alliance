<?php
session_start();
if(!isset($_SESSION['LoggedIn'])||$_SESSION['LoggedIn']!=true){
header("location:Login.php");

    //     echo'<script>
//     $(document).ready(function(){
//        // Set a delay of 3 seconds (3000 milliseconds)
//        setTimeout(function(){
//          // Redirect to Signup.php
//          window.location.replace("Login.php");
//        }, 2000); 
//        // Change the delay time as needed (in milliseconds)
//      });
//    </script>';
}

?>
<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Blood Collective Alliance</title>
<?php include"_nav.php";
?>
    <!-- Replace YOUR_API_KEY with your actual Google Maps API key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <style>
        /* Set the size of the map container */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>

<body>
    <h1>Dashboard</h1>
    <!-- Map container -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <!-- Your content goes here -->
            <div id="map"></div>
    </div>
  

    <script>
        // Initialize and display the map
        function initMap() {
            // Specify the coordinates where you want to center the map
            var center = { lat: 40.7128, lng: -74.0060 }; // Example: New York City coordinates

            // Create a new map object centered at the specified location
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12, // Adjust the zoom level as needed
                center: center
            });

            // Optionally, you can add markers, shapes, or other features to the map here
            // Example:
            // var marker = new google.maps.Marker({
            //     position: center,
            //     map: map,
            //     title: 'Marker Title'
            // });
        }
    </script>

    <!-- Call the initMap function after the Google Maps API has loaded -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>
</html>

  
    
  <?php include("footer.php");
   ?>

