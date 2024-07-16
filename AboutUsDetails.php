<?php
function aboutus_show(){
echo "
<main role='main'>
<style>
        .gradient-bg {
            background-color: #f5df2e;
background-image: linear-gradient(315deg, #f5df2e 0%, #f07654 74%);
        }
        .card-body p a{
        text-decoration: none;
        }
        .card-body p a:hover{
        color: red;
        }
    </style>
    <div class='album py-5 gradient-bg'>
        <div class='container-md' >
            <div class='row'>
                <div class='col-md-4 my-2  px-md-1'>
                    <div class='card box-shadow'>
                        <img class='card-img-top'
                            alt='Picture' style='height: 230px; width: 100%; object-fit: cover;' 
                            data-holder-rendered='true' src='M5320856.jpg'> <!-- display: block; --!>
                        <div class='card-body'>
                            <p class='card-title text-center fw-bolder'>Uniting for Hope: Supporting Individuals with Thalassemia through Blood Donation</p>
                            <p class='card-text text-justify'>Thalassemia is a life-threatening condition, urgently needing blood. Our website simplifies finding nearby donors with just a click. Join us to ensure no one with thalassemia fights alone. Every drop counts — use our site to find donors nearby.
                            <a href='https://bloodcollectivealliance.blogspot.com/2024/06/uniting-for-hope-supporting-individuals.html' class='stretched-link'> Read More</a>  <!-- btn btn-primary --!>
                            </p>
                        </div> 
                    </div>
                </div>
                <div class='col-md-4 my-2  px-md-2'>
                    <div class='card box-shadow'>
                        <img class='card-img-top'
                            alt='Picture' style='height: 230px; width: 100%; object-fit: cover;'
                            data-holder-rendered='true' src='hematologyclinichero.jpg'>
                        <div class='card-body '>
                            <p class='card-title text-center fw-bolder'>Unlock the Power of Every Drop: Unveil Hemophilia Heroes on Our Website!</p>
                            <p class='card-text  text-justify'>
                            Hemophilia is a challenging journey, where time is crucial for the right blood. Finding donors can be like searching for a needle in a haystack. With our website, we connect patients and donors swiftly and efficiently.
                            <a href='https://bloodcollectivealliance.blogspot.com/2024/06/uniting-for-hemophilia-power-of-blood.html' class='stretched-link'>Read More</a>  <!-- btn btn-primary --!>
                            </p>
                        </div>
                    </div>
                </div>
                <div class='col-md-4 my-2 px-md-2'>
                    <div class='card box-shadow'>
                        <img class='card-img-top'
                            alt='Picture' style='height: 230px; width: 100%; object-fit: cover;'
                            data-holder-rendered='true' src='Untitled.jpeg'>
                        <div class='card-body'>
                            <p class='card-title text-center fw-bolder'>
                            Be a Lifesaver: Donate Blood, Fight against Leukemia Blood Cancer
                            </p>
                            <p class='card-text  text-justify'>
                            Leukemia is a blood cancer, that targets your body's defenders—White Blood Cells. From now! you can discover nearby compatible donors instantly with our website. Join our vision empowering nearby donor finder facility for Leukemia patients.
                            <a href='https://bloodcollectivealliance.blogspot.com/2024/06/fighting-leukemia-together-vital-role.html' class='stretched-link'>Read More</a>  <!-- btn btn-primary --!>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
";
}
aboutus_show();
?>