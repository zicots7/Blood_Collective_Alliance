
	<?php
function show_carsoule(){
  echo"
    <div class='container-fluid bg-dark col pb-1 pt-3 px-md-5'> 
      <p style='background-color: #D9CCA4;padding: 15px; text-align: center;' class='text-center fw-bolder'>
         Welcome to the Blood Collective Alliance, where donating and requesting blood is easier than ever. Using state-of-the-art technology and an intuitive interface, the Blood Collective Alliance connects donors directly with those in need. Whether you're looking to contribute or require blood, our streamlined system helps you effortlessly through every step. Our goal is to make sure anybody can donate and request for blood if required without delay, we facilitate life-saving donations swiftly and effectively. Experience the ease and impact of the Blood Collective Alliance today, ensuring that vital blood supplies reach those who need them most, precisely when they need them. Together, we can make a difference in healthcare and save lives.
      </p>
    </div>
  ";
  echo'
    <div id="carouselExampleRide" class="carousel carousel-dark slide carousel-fade" data-bs-ride="true" data-bs-touch="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1280" height="400" src="Banner1.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="#777"></rect>
        </img>
      </div>
      <div class="carousel-item " data-bs-interval="3000">
        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1280" height="400" src="Banner2.png" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="#777"></rect>
        </img>
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1280" height="400" src="Banner3.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="#777"></rect>
        </img>
      </div>
      </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      
    </div>
  ';
}
show_carsoule();
    ?>







