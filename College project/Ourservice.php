
<!doctype html>
<html lang="en">
<meta charset="utf-8">
<title>Blood Collective Alliance</title>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'
        integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
    <link rel='stylesheet' href='Ourservices.css'>
    <title>Our Services</title>

<?php
function show_oursrvc(){
  echo"
  <div>
  <section class='container-fluid service-grid pb-5 pt-5'>
  <div id= 'ourservice' class= 'album py-5 container'>
    <div class='row'>
      <div class='col-xl-12 text-center mb-4'>
        <div class='service-title'>
          <h4 class='head'>Our Services</h4>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-lg-4 col-md-6 text-center mb-3'>
        <div class='service-wrap <!--service-1-->'>
          <div class='service-icon'>
            <i class='fas fa-layer-group'></i>
          </div>
          <h4 id='headings'>Reliable platform</h4>
          <p class='paragaph text-center'>Our website has a proven track record of successful blood donor connections in real-world scenarios</p>
        </div>
      </div>
      <div class='col-lg-4 col-md-6 text-center mb-3'>
        <div class='service-wrap'>
          <div class='service-icon'>
            <i class='far fa-chart-bar'></i>
          </div>
          <h4 id='headings'>Direct Connect</h4>
          <p class='paragaph text-center'>Our platform allowing you to find and connect with verified blood donors diimmediately</p>
  
        </div>
      </div>
      <div class='col-lg-4 col-md-6 text-center mb-3'>
        <div class='service-wrap'>
          <div class='service-icon'>
            <i class='fas fa-database'></i>
          </div>
          <h4 id='headings'>Hassle-Free</h4>
          <p class='paragaph text-center'>Finding a blood donor shouldn't be a hassle anymore! Our site helps to connects with donors.</p>
        </div>
      </div>
      <div class='col-lg-4 col-md-6 text-center mb-3'>
        <div class='service-wrap'>
          <div class='service-icon'>
            <i class='fas fa-cogs'></i>
          </div>
          <h4 id='headings'>G-Map integration</h4>
          <p class='paragaph text-center'>Locate verified blood donors near you with ease and speed, thanks to our integrated G-Maps feature</p>
        </div>
      </div>
      <div class='col-lg-4 col-md-6 text-center mb-3'>
        <div class='service-wrap'>
          <div class='service-icon'>
            <i class='fas fa-chart-pie'></i>
          </div>
          <h4 id='headings'>24/7 Support</h4>
          <p class='paragaph text-center'>Need help?<br>Our 24/7 support team is just a click away. Contact us easily.</p>
        </div>
      </div>
      <div class='col-lg-4 col-md-6 text-center mb-3'>
        <div class='service-wrap'>
          <div class='service-icon'>
            <i class='fas fa-chart-pie'></i>
          </div>
          <h4 id='headings'>Real-time Update</h4>
          <p class='paragaph text-center'>
          Our platform provides most verified data, & access and manage information effortlessly
          </p>
        </div>
      </div>
      
    </div>
  </div>
  </section>
  </div>";
}
show_oursrvc();

?>