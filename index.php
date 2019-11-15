<!doctype html>
<html lang="en">
  <head>
	  <title>MACHAKOS UNIVESITY</title>
	  <link href="./css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
      .myStyle{
        background-color: #f4f4f4;
        cursor: pointer; 
      }
      p{
        color: #000;
      }
      small{
       color: #000; 
      }
    </style>
  </head>
  <body>
<?php include("nav.html") ?>
<br>
<br>
<br>
<br>
<section class="main">
<div class="container mt-4">
    <h1 class="text-center mb-4 p-4 text-secondary">Trending News</h1>
      <div class="row">

   <div class="card-columns">
  <div class="card shadow border-0 myStyle">
    <img class="card-img-top" src="./img/hunan.jpg" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">EXPLORATORY VISIT TO ESTABLISH STRATEGIC LINKA</p>
	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <div class="card shadow border-0 myStyle">
    <img class="card-img-top" src="./img/daad.jpg" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">COURTSEY CALL ON DAAD REGIONAL OFFICES</p>
      <p class="card-text"><small class="text-muted">Last updated 8 hrs ago</small></p>
    </div>
  </div>
  <div class="card shadow border-0 myStyle">
    <img class="card-img-top" src="./img/staff.jpg" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">A SENIOR STAFF TRAINING SESSION ON QMS AND ISO</p>
      <p class="card-text"><small class="text-muted">Last updated 2 days ago</small></p>
    </div>
  </div>
</div>
</div>
</div>
</section>
   
   <!-- Header -->
<header class="bg-primary text-center py-2 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">DISCOVER MACHAKOS UNIVERSITY</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow myStyle">
        <img src="./img/humanities.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Students Experience</h5>
          <div class="card-text text-black-50">We endeavor to develop innovative approaches to enhancing student experience, learning and well being. </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow myStyle">
        <img src="./img/under.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Collaborations & Linkages</h5>
          <div class="card-text text-black-50">Machakos University has an effective collaboration and sharing of experiences with other institution</div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow myStyle">
        <img src="./img/research.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Research</h5>
          <div class="card-text text-black-50">Research and Innovation is a key strategic component at Machakos University for our students and staff.</div>
        </div>
      </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow myStyle">
        <img src="./img/lib.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">University Library</h5>
          <div class="card-text text-black-50">At Machakos University we are made for the library, not the classroom. Visit our information Center.</div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include("footer.html") ?>
  </body>
</html>
