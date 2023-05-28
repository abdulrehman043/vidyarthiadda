<?php
include "dbconn.php";

if($_SERVER["HTTPS"] != "on") {
  header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
  exit();
}

$name = $_POST['name'];
$contact = $_POST['contact'];
$course = $_POST['crs'];
$city = $_POST['city'];
$email = $_POST['email'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO `entries` (`name`, `contact`, `course`, `city`, `email`) VALUES ('$name', '$contact', '$course', '$city', '$email')";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5KC443N');</script>
<!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="vastyle.css">
  <link rel="shortcut icon" href="./images/20221101_221428-removebg-preview.png" type="image/x-icon">
  <link rel="stylesheet" href="footer.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Finding best colleges around India">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <!-- <script src="jquery-3.6.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="vascript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <style>
    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .sq2 {
      width: 100%;
      background-color: #000;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .card:hover {
      box-shadow: 0px 0px 13px 4px rgba(0, 0, 0, 0.5) !important;
      background-color: #ffc400;
      transition: 0.5s;
    }

    .card {
      transition: 0.5s;
    }
  </style>

  <title>VidyarthiAdda</title>

  <link rel="stylesheet" href="exploreMore.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="overflow-x: hidden !important;">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KC443N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CV6W6S3TJN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-CV6W6S3TJN');
  </script>


  <!-- header -->
  <!-- <script language="javascript" type="text/javascript"src="header.txt"></script> -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid"><a class="navbar-brand" href="index.php"><img src="./images/20221102_105613.png"
          class="nav-logo w-100 h-30" /></a><button class="navbar-toggler collapsed bg-warning" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
          <li class="nav-item"><a class="nav-link active text-light" aria-current="page" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link active text-light" aria-current="page"
              href="top-management-colleges.php">Management</a></li>
          <li class="nav-item"><a class="nav-link active text-light" aria-current="page"
              href="top-engineering-colleges.php">Engineering</a></li>
          <li class="nav-item"><a class="nav-link active text-light" aria-current="page"
              href="top-it-colleges.php">IT</a></li>
          <li class="nav-item"><a class="nav-link active text-light" aria-current="page"
              href="top-pharamcy-colleges.php">Pharmacy</a></li>
          <li class="nav-item"><a class="nav-link active text-light" aria-current="page"
              href="top-finance-colleges.php">Finance</a>
          </li>
          <li class="nav-item"><a class="nav-link active text-light" aria-current="page"
              href="top-education-colleges.php">Education</a></li>
          <li class="nav-item"><a class="nav-link active text-light" aria-current="page"
              href="top-law-colleges.php">Law</a></li>
        </ul>
        <form action="search.php" method="GET" class="d-flex"><input class="form-control me-2 Psearch" name="search"
            type="search" placeholder="Search" aria-label="Search"><button
            class="btn btn-outline-dark bg-warning Psearch" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!-- The slideshow/carousel -->

    <div class="carousel-inner">
      <!-- searchbar phone ke lea -->
      <form action="search.php" method="GET" class="d-flex Wsearch">
        <input class="form-control me-2 Wsearch" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark bg-warning Wsearch" type="submit">Search</button>
      </form>
      <div class="carousel-item active sq2">
        <img src="/images/collegeonhome.png" alt="" class="d-block w-100">
        <div class="carousel-caption res-slide">
          <h3 class="h3-res">APPLY IN THE BEST COLLEGES</h3>
          <p class="fs-6">Need help? Talk to our Counsellor</p><button type="button" class="btn btn-warning btn-sm"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Click here</button>
        </div>
      </div>
      <div class="carousel-item sq2">
        <img src="/images/Forwebsite2.png" alt="" class="d-block w-100">
        <div class="carousel-caption res-slide">
          <h3 class="h3-res">APPLY IN THE BEST COLLEGES</h3>
          <p class="fs-6">Need help? Talk to your Counsellor</p><button type="button" class="btn btn-warning btn-sm"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Click here</button>
        </div>
      </div>
      <div class="carousel-item sq2">
        <img src="/images/Forwebsite.png" alt="" class="d-block w-100">
        <div class="carousel-caption res-slide">
          <h3 class="h3-res">APPLY IN THE BEST COLLEGES</h3>
          <p class="fs-6">Need help? Talk to our Counsellor</p>
          <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">Click here</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade popup_modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content  popup_modal">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Book Counselling</h1>
          <button type="button" class="btn-close close-mod" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- yaha se form hai -->
          <form class="row g-3" method="post" id="myLead">
            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="E.g : Varun">
            </div>
            <div class="col-12">
              <label for="contact" class="form-label">Contact</label>
              <input type="text" name="contact" class="form-control" id="contact" placeholder="+91 9999999999">
            </div>
            <div class="col-12">
              <label for="E-Mail" class="form-label">E-Mail</label>
              <input type="email" name="email" class="form-control" id="E-Mail" placeholder="contact@vidyarthiadda.com">
            </div>
            <div class="col-12">
              <label for="lookingfor" class="form-label">Course Intrested In</label>
              <input type="text" name="crs" class="form-control" id="lookingfor" placeholder="E.g : B.Tech, MBA">
            </div>
            <div class="col-md-12">
              <label for="city" class="form-label">City</label>
              <input type="text" name="city" class="form-control" id="city" placeholder="E.g : Delhi">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary form_sb" name="submit-btn">Book Your Session</button> <br>
              <small class="text-success">Our expert counsellor will call you within 24 Hours.</small>
              <?php
              if(!empty($_POST['name']) && !empty($_POST['contact']) && !empty($_POST['crs']) && !empty($_POST['city']) && !empty($_POST['email'])){
              if (mysqli_query($conn, $sql)) {
                echo '<small class="text-success">Thanks For Submitting</small>';
                // $conn->close();
                mysqli_close($conn);
                unset($_POST);
                // exit; 
              }
            }

              ?>
            </div>
          </form>
         
          <!-- yaha form pada hai -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning close-mod" data-bs-dismiss="modal" aria-label="Close">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap Modal For Success -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="successModalLabel">Success!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-success">
        Form submitted successfully!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-warning" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!-- yaha model katam -->
  <!-- card katam image wala -->
  <!-- yaha se mai edit kiya hu  -->
  <div class="my-2 shadow p-3 mb-5 bg-dark" style="text-align:center;color:#ffc400;">
    <h3 class=" text-center my-2">Explore Colleges</u>
    </h3>
  </div>
  <div class="row g-0">
    <div class="col my-4">
      <div class="card mx-auto" style="width: 9rem;">

        <a href="top-management-colleges.php" class="text-dark" style="text-decoration:none;">

          <img src="./images/management.png" class="card-img-top  px-3 py-3" alt="...">
          <div class="card-body">
            <p class="card-text text-center">Management</p>
        </a>

      </div>
    </div>
  </div>
  <div class="col my-4">
    <div class="card mx-auto" style="width: 9rem;">
      <a href="top-engineering-colleges.php" class="text-dark" style="text-decoration:none;">
        <img src="./images/engineering.png" class="card-img-top px-3 py-3" alt="...">
        <div class="card-body">
          <p class="card-text text-center">Engineering</p>
      </a>
    </div>
  </div>
  </div>
  <div class="col my-4">
    <div class="card mx-auto" style="width: 9rem;">
      <a href="top-it-colleges.php" class="text-dark" style="text-decoration:none;">
        <img src="./images/itcs.png" class="card-img-top Circle px-3 py-3" alt="...">
        <div class="card-body">
          <p class="card-text text-center">IT/CS</p>
      </a>
    </div>
  </div>
  </div>
  <div class="col my-4">
    <div class="card mx-auto" style="width: 9rem;">
      <a href="top-pharamcy-colleges.php" class="text-dark" style="text-decoration:none;">
        <img src="./images/pharmacy.png" class="card-img-top px-3 py-3" alt="...">
        <div class="card-body">
          <p class="card-text text-center">Pharmacy</p>
      </a>
    </div>
  </div>
  </div>
  <div class="col my-4">
    <div class="card mx-auto" style="width: 9rem;">
      <a href="top-finance-colleges.php" class="text-dark" style="text-decoration:none;">
        <img src="./images/finance.png" class="card-img-top px-3 py-3" alt="...">
        <div class="card-body">
          <p class="card-text text-center">Finance</p>
      </a>
    </div>
  </div>
  </div>
  <div class="col my-4">
    <div class="card mx-auto" style="width: 9rem;">
      <a href="top-law-colleges.php" class="text-dark" style="text-decoration:none;">
        <img src="./images/law.png" class="card-img-top px-3 py-3" alt="...">
        <div class="card-body">
          <p class="card-text text-center">Law</p>
      </a>
    </div>
  </div>
  </div>
  </div>
  <!-- Yahan se top 5 state collges hain -->
  <div class="my-2 shadow p-3 mb-5 bg-dark" style="text-align:center;color:#ffc400;">
    <h3 class=" text-center my-2">Find college by cities</u>
    </h3>
  </div>
  <div class="row g-0">
    <div class="col my-4">
      <div class="card mx-auto" style="width: 9rem;">

        <a href="delhicolleges.php" class="text-dark" style="text-decoration:none;">

          <img src="./images/delhimerijaan.png" class="card-img-top py-3" alt="...">
          <div class="card-body">
            <p class="card-text text-center">Delhi</p>
        </a>

      </div>
    </div>
  </div>
  <div class="col my-4">
    <div class="card mx-auto" style="width: 9rem;">
      <a href="mumbai_colleges.php" class="text-dark" style="text-decoration:none;">
        <img src="./images/bombaymerijaan.png" class="card-img-top py-3" alt="...">
        <div class="card-body">
          <p class="card-text text-center">Mumbai</p>
      </a>
    </div>
  </div>
  </div>
  <div class="col my-4">
    <div class="card mx-auto" style="width: 9rem;">
      <a href="banglore_colleges.php" class="text-dark" style="text-decoration:none;">
        <img src="./images/bangluru.jpeg" class="card-img-top Circle py-3" alt="...">
        <div class="card-body">
          <p class="card-text text-center">Banglore</p>
      </a>
    </div>
  </div>
  </div>
  <div class="col my-4">
    <div class="card mx-auto" style="width: 9rem;">
      <a href="chennai_colleges.php" class="text-dark" style="text-decoration:none;">
        <img src="./images/chennaitn.png" class="card-img-top py-3" alt="...">
        <div class="card-body">
          <p class="card-text text-center">Chennai</p>
      </a>
    </div>
  </div>
  </div>
  <div class="col my-4">
    <div class="card mx-auto" style="width: 9rem;">
      <a href="kolkata_colleges.php" class="text-dark" style="text-decoration:none;">
        <img src="./images/kolkata.png" class="card-img-top py-3" alt="...">
        <div class="card-body">
          <p class="card-text text-center">Kolkata</p>
      </a>
    </div>
  </div>
  </div>
  <div class="col my-4">
    <div class="card mx-auto" style="width: 9rem;">
      <a href="hydrabad_colleges.php" class="text-dark" style="text-decoration:none;">
        <img src="./images/hydrabad.png" class="card-img-top py-3" alt="...">
        <div class="card-body">
          <p class="card-text text-center">Hyderabad</p>
      </a>
    </div>
  </div>
  </div>
  </div>

  <!-- Top 5 state block khatam -->

  <video class="w-100" autoplay loop muted>
    <source src="./images/333.mp4" type="video/mp4" />
  </video>
  <div class="my-2 shadow p-3 mb-5 bg-dark" style="text-align:center;color:#ffc400;">
    <h1 class="text-center my-2">Explore More</u></h1>
  </div>
  <!-- yaha se manas edit kiya hai -->
  <!-- Carousel -->
  <!-- phone view start here //comment by saleem -->
  <div id="demo" class="carousel slide Wcarousel" data-bs-ride="carousel">

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container  my-3 rounded">
          <a href="whyva.html">
            <img class="card-img-top" src="http://vidyarthiadda.com/images/Whyvidyarthiadda.jpeg" alt="Card image cap">
          </a>
        </div>

      </div>
      <div class="carousel-item">
        <div class="container  my-3 rounded">
          <a href="">
          <img class="card-img-top" src="http://vidyarthiadda.com/images/Blogs.png" alt="Card image cap">
            </a>
        </div>

      </div>
      <div class="carousel-item">
        <div class="container  my-3 rounded">
          <a href="career.html">
          <img class="card-img-top" src="http://vidyarthiadda.com/images/career.png" alt="Card image cap"></a>
        </div>

      </div>
      <div class="carousel-item">
        <div class="container  my-3 rounded">
          <a href="">
          <img class="card-img-top" src="http://vidyarthiadda.com/images/study.png" alt="Card image cap"></a>
        </div>

      </div>
    </div>
  </div>
  <!-- phone view end here //comment by saleem -->
  <!-- yaha se mai edit kiya hu -->
  <!-- window view start here //comment by saleem -->
  <div class="d-lg-flex d-sm-block">
    <div class="container my-3 rounded">
        <a href="whyva.html">
        <img class="card-img-top Pcarousel" src="http://vidyarthiadda.com/images/Whyvidyarthiadda.jpeg" alt="Card image cap">
      </a>
      </div>
    <div class="container my-3 rounded">
      <a href="career.html">
      <img class="card-img-top Pcarousel" src="http://vidyarthiadda.com/images/career.png" alt="Card image cap">
    </a>
    </div>
    <div class="container my-3 rounded">
      <a href="">
      <img class="card-img-top Pcarousel" src="http://vidyarthiadda.com/images/Blogs.png" alt="Card image cap">
    </a>
    </div>
    <div class="container my-3 rounded">
      <a href="">
      <img class="card-img-top Pcarousel" src="http://vidyarthiadda.com/images/study.png" alt="Card image cap">
    </a>
    </div>
  </div>

  <!-- window view end here //comment by saleem -->
  <video class="w-100" autoplay loop muted>
    <source src="./images/22.mp4" type="video/mp4" />
  </video>
  <!-- naya wala why choose vidyarthiAdda? wala dalke window wala hata denge -->
  <!-- ye naya hai  -->
  <div class="row mb-5 px-3 Pcarousel g-0" style="background-color: blueviolet;
    background: -moz-linear-gradient(-45deg, #6800A4 0%, #510075 100%);
    background: -webkit-linear-gradient(-45deg, #6800A4 0%, #510075 100%);
    background: linear-gradient(135deg, #6800A4 0%, #510075 100%);">


    <h2 class="text-light text-center mb-5 mt-5 my-2 shadow p-3 mb-5" style=" color:white; ">Why Choose VidyarthiAdda?
    </h2>

    <div class="col">


      <div class="card border-dark mx-2" style="width: auto;box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.35); ">
        <div class="container col-md-4 mt-5" style="width: 9rem; height: 14rem; margin-bottom: -60px;">
          <img src="./images/loupe.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="card-header text-center">
          <b>EXPLORE COLLEGE</b>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Choose the best college</li>
          <li class="list-group-item">500+ colleges</li>
          <li class="list-group-item">We help you selecting the right one</li>
        </ul>
      </div>



    </div>
    <div class="col">


      <div class="card border-dark mx-2 mb-5" style="width: auto;box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.35);">
        <div class="container col-md-4 mt-5" style="width: 9rem;height: 14rem; margin-bottom: -60px;">
          <img src="./images/promotion.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="card-header text-center">
          <b>EXPLORE CAREER</b>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Career counseling</li>
          <li class="list-group-item">200+ career options</li>
          <li class="list-group-item">Choose career that suits your profile</li>
        </ul>
      </div>


    </div>
    <div class="col">


      <div class="card border-dark mx-2" style="width: auto;box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.35);">
        <div class="container col-md-4 mt-5" style="width: 9rem;height: 14rem; margin-bottom: -60px;">
          <img src="./images/asddasdas.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="card-header text-center">
          <b>FULL SUPPORT</b>
        </div>
        <ul class="list-group list-group-flush" style="list-style-type: style type circle;">
          <li class="list-group-item">Course and College selection</li>
          <li class="list-group-item">Hassle free admission</li>
          <li class="list-group-item">Full support at every step</li>
        </ul>
      </div>



    </div>
    <div class="col">


      <div class="card border-dark mx-2" style="width: auto;box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.35);">
        <div class="container col-md-4 mt-5" style="width: 9rem;height: 14rem; margin-bottom: -60px;">
          <img src="./images/clipboard.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="card-header text-center">
          <b>APPLICATION FORM</b>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Fill one form for multiple colleges</li>
          <li class="list-group-item">Zero Application fee</li>
          <li class="list-group-item">Free counselling</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- yaha katam -->
  <div class="bg-white rounded Wcarousel">
    <div class="container">
      <div class="my-2 shadow p-3 bg-dark" style="text-align:center;color:#ffc400;">
        <h3 class=" text-center my-2">Why Choose VidyarthiAdda?</u>
        </h3>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- yaha se card hai -->
            <!-- phone view start here //comment by saleem -->
            <div class="card mb-3 mx-auto Wcarousel ">
              <div class="row g-0">
                <div class="container col-md-4 mx-auto" style="width: 9rem;">
                  <img src="./images/loupe.png" class="img-fluid rounded-start py-4" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title text-center">EXPLORE COLLEGE</h5>
                    <p class="card-text">Choose the <b>best</b> college </p>
                    <p class="card-text"><b>500+</b> colleges </p>
                    <p class="card-text">We help you selecting the <span class="nbspdpn"> </span><b>right one</b></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <!-- yaha se card hai -->
            <div class="card mb-3 mx-auto Wcarousel">
              <div class="row g-0">
                <div class="container col-md-4 mx-auto" style="width: 9rem;">
                  <img src="./images/promotion.png" class="img-fluid rounded-start py-4" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body ">
                    <h5 class="card-title text-center">EXPLORE CAREER</h5>
                    <p class="card-text"><b>Career counseling</b></p>
                    <p class="card-text"><b>200+</b> career <span class="nbspdpn">
                      </span>options </p>
                    <p class="card-text">Choose the career that <span class="nbspdpn"> </span>
                      <b>suits</b> your profile
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <!-- yaha se card hai -->
            <div class="card mb-3 mx-auto Wcarousel">
              <div class="row g-0">
                <div class="container col-md-4 mx-auto" style="width: 9rem;">
                  <img src="./images/asddasdas.png" class="img-fluid rounded-start py-4" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title text-center">FULL SUPPORT</h5>
                    <p class="card-text">Course and <b>College</b> <span class="nbspdpn">
                      </span> selection
                    </p>
                    <p class="card-text"><b>Hassle free </b> admission </p>
                    <p class="card-text">Full <b>support</b> at every step </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <!-- yaha se card hai -->
            <div class="card mb-3 mx-auto Wcarousel">
              <div class="row g-0">
                <div class="container col-md-4 mx-auto" style="width: 9rem;">
                  <img src="./images/clipboard.png" class="img-fluid rounded-start  py-4" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body ">
                    <h5 class="card-title text-center">APPLICATION FORM</h5>
                    <p class="card-text">Fill <b>one form </b> for multiple <span class="nbspdpn">
                      </span>colleges </p>
                    <p class="card-text"><b>Zero</b> Application fee </p>
                    <p class="card-text"><b>Free</b> Counselling</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- phone view end here // comment by saleem-->

  <video class="w-100" autoplay loop muted>
    <source src="./images/11.mp4" type="video/mp4" />
  </video>
  <!-- new section start provides facilities create by manas-->
  <div class="card border-light my-3 mx-0" style="max-width: 100rem;">
    <div class="card-header shadow bg-dark " style="text-align:center;color:#ffc400;">
      <div class="card-title my-2">
        <h3>Our Facilities</h3>
      </div>
    </div>
    <!-- ye hai pura provide facilities wala card -->
    <div class="card my-2">

      <div id="cardhai" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- yaha ek image -->
            <img src="/images/facility1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <!-- yaha ek image -->
            <img src="/images/facility2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <!-- yaha ek image -->
            <img src="/images/facility3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="text-center text-white bg-dark" style="background-color: #474747;">
    <!-- Grid container -->
    <div class="container pt-4">
      <div class="row">
        <div class="col d-flex fnav">

          <a href="index.php" class="nav-link px-2 text-center "><span style="color: white;">Home</span></a>
          <a href="about.php" class="nav-link px-2 "><span style="color: white;">About</span></a>
          <a href="faq.html" class="nav-link px-2 "><span style="color: white;">FAQs</span></a>
          <a href="privacy-policy.html" class="nav-link px-2 "><span class="fnav"
              style="color: white;">Policy</span></a>
        </div>
        <div class="col p-icons">
          <!-- Section: Social media -->
          <section class="mb-4 p-icons">
            <!-- Facebook -->
            <span><a class="btn btn-link btn-floating btn-lg text-dark m-1 sm-icons"
                href="https://www.facebook.com/profile.php?id=100087457449318&mibextid=ZbWKwL" target="_blank"
                role="button" data-mdb-ripple-color="dark"><span class="fa fa-facebook-f social"></span></a></span>

            <!-- Instagram -->
            <span><a class="btn btn-link btn-floating btn-lg text-dark m-1 sm-icons "
                href="https://www.instagram.com/vidyarthi_adda/" target="_blank" role="button"
                data-mdb-ripple-color="dark"><span class="fa fa-instagram social"></span></a></span>

            <!-- Linkedin -->
            <span><a class="btn btn-link btn-floating btn-lg text-dark m-1 sm-icons "
                href="https://www.linkedin.com/company/vidyarthiadda-private-limited/" target="_blank" role="button"
                data-mdb-ripple-color="dark"><span class="fa fa-linkedin social"></span></a></span>
            <!-- YouTube -->
            <span><a class="btn btn-link btn-floating btn-lg text-dark m-1 sm-icons "
                href="https://youtube.com/@vidyarthiadda10" target="_blank" role="button"
                data-mdb-ripple-color="dark"><span class="fa fa-youtube social"></span></a></span>
          </section>
          <!-- Section: Social media -->
        </div>
      </div>
    </div>
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(32, 32, 32, 0.281);">
      <span style="color: white;"> © 2022 Copyright:</span>
      <a class="text-dark" href="https://vidyarthiadda.com/"><span style="color: white;">VidyarthiAdda.com</span></a>
    </div>
    <!-- Copyright -->
  </footer>

<script>
 
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
                      }
        window.onload = function () {
      setTimeout(function () {
          $('#staticBackdrop').modal('show');
      }, 5000);
  }

$(document).ready(function(){
    
$("#myLead").submit(function(e) {
    e.preventDefault(); // prevent form from submitting normally
    $.ajax({
      type: "POST",
      url: "index.php",
      data: $("#myLead").serialize(),
      success: function(data) {
       
        $('#successModal').modal('show'); // show success modal
        $('.close-mod').click();
        $("#myLead").find(":input").val("");
        
      }
    });
  });
      
   
    });
   
</script>



<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '207000655341263');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=207000655341263&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</body>

</html>