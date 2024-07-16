
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="Contribution.css">
</head>
<body>
<?php
function display_contributers(){
echo"
<div class='bg-dark col-fluid py-5 px-md-5'>
  <div>
    <h1 style='color:white;' class='text-center fw-bolder fs-1 my-3'>
      CONTRIBUTION
    </h1>
  </div>
  <div class='container-md justify-align-items-center'>
  
    <ul class='team '>
    
    <!-- Sudip's Bio --!>
      <li class='member'>
        <div class='thumb'>
          <img src='Sudip.jpg' alt='Sudip's Photo'>
        </div>
        <div class='container-md description-odd'>
          <p class='text-justify fs-5'>
            Sudip, a final-year BCA student at Burdwan Raj College, took the lead in creating the 'Blood Collective Alliance' website with his teammate. His expertise lies in Java, Dart, PHP, PostgreSQL, and Flutter. Together with Trinankur, he managed both the frontend design and backend database using HTML, CSS, Bootstrap, PHP and PostgreSQL. Beyond academia, Sudip worked as a Hybrid App Developer at Elphill Technology Private Ltd., where he focused on his passion for mobile app development. Sudip's dedication to bridging technology with practical solutions underscores his commitment to innovation and excellence in web and mobile app development.
            <br>
            <a href='https://www.linkedin.com/in/sudip-howlader-7638532a9'>@Sudip Howlader</a>
          </p>
        </div>
      </li>
      
      <!-- Trinankur's Bio --!> 
       <li class='member'>
            <div class='thumb'>
                <img src='trinankur.png'>
            </div>
            <div class='container-md description-odd'>
                <p class='text-justify fs-5'>
                    Trinankur, a final-year BCA student at Burdwan Raj College, played a crucial role in bringing the 'Blood Collective Alliance' website to life. His expertise spans C/C++, C#, .NET, Python, Data science, and PHP. In collaboration with Sudip Howlader, Trinankur took charge of backend development using PHP and SQL, providing essential guidance and technical leadership throughout the project. Trinankur was instrumental in transforming Sudip's idea into a tangible reality, leveraging his skills to ensure the project's success. His proficiency in backend technologies and collaborative spirit were pivotal in the development and implementation of the website.Visit linkedin profile for more information about Trinankur.
                    <br>
                    <a href='https://www.linkedin.com/in/trinankur-samanta-3ab687150'>@Trinankur Samanta</a>
                </p>
            </div>
       </li>
       
     </ul>
     
   </div>
</div>

";
}
display_contributers();
?>
</body>
</html>




