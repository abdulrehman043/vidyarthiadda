<?php
include "dbconn.php";
if(!empty($_POST['name'])){
  $name = $_POST['name'];
}
if(!empty($_POST['contact'])){
  $contact = $_POST['contact'];
}
if(!empty($_POST['crs'])){
  $course = $_POST['crs'];
}
if(!empty($_POST['city'])){
  $city = $_POST['city'];
}
if(!empty($_POST['email'])){
  $email = $_POST['email'];
}

// Performing insert query execution
if (!empty($_POST)) {
  $sql = "INSERT INTO `entries` (`name`, `contact`, `course`, `city`, `email`) VALUES ('$name', '$contact', '$course', '$city', '$email')";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
<script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
  <style>
    .card:hover {
      box-shadow: 0px 0px 13px 4px rgba(0, 0, 0, 0.5) !important;
      background-color: #ffc400;
      transition: 0.5s;
    }
    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
    /* .card {
      transition: 0.5s;
      margin: auto;
    } */
    
    @media(min-width:900px){
      .bg-image{
        background-image: url(images/FAREFIELD.jpg);
        filter: blur(5px);
        height: 100%; 
          /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
      
      }
      .abs-form{
        position: absolute;
        top: 100px;
        margin-left: 40% !important;
         margin-right: 40% !important;
      }
    }
  

      .card{
        margin: 7%;
        
    }
    
  </style>

  <title>VidyarthiAdda</title>

  <link rel="stylesheet" href="exploreMore.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="overflow-x: hidden;">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CV6W6S3TJN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-CV6W6S3TJN');
  </script>
  <!-- header -->
  <script language="javascript" type="text/javascript" src="../header.txt"></script>
  <div class="bg-image"></div>
    
  
  <div class="card mt-3 abs-form" style=" width: 22rem;">
    <div class="card-header bg-dark  text-center" style="color: #ffc400;">
      <h1>Form</h1>
    </div>
    <form class="row g-3 container" method="post">
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
        <button type="submit" class="btn btn-primary">Book Your Session</button> <br>
        <small class="text-success">Our expert counsellor will call you within 24 Hours.</small>
        <?php
        if (mysqli_query($conn, $sql)) {
          echo '<small class="text-success">Thanks For Submitting</small>';
          $conn->close();
          mysqli_close($conn);

          // exit;
        
        }

        ?>
      </div>
    </form>
  </div>
  

</body>

</html>