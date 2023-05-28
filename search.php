<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="vastyle.css">
  <link rel="shortcut icon" href="./images/20221101_221428-removebg-preview.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="vascript.js"></script>
  <style>
    .custom-card {
      width: 18rem;
    }

    a {
      color: black;
      text-decoration: none !important;
    }

    @media only screen and (max-width: 600px) {
      .custom-card {
        width: 26rem;
      }
    }
  </style>
  <title>VidyarthiAdda</title>
</head>

<body>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CV6W6S3TJN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CV6W6S3TJN');
</script>
  <!-- header -->
  <script language="javascript" type="text/javascript"src="header.txt"></script>

 
  <div class="my-3  d-flex flex-row row">
  <?php

include 'dbconn.php';

$search = $_GET['search'];
if(empty($search)){
  header('Location:index.php');
}

$sql = "select * from college_details where name like '%$search%' OR city like '%$search%' OR  course like'%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       // echo $row["name"] . "  " . $row["city"] . "  " . $row["dist"] . "<br>";

        // else {
// 	echo "0 records";
// }

        // $conn->close();

?>
    <div class="card custom-card mx-2 my-2">
      <a href="<?php
        $idvar = $row['ID'];
        echo "landing.php?" . $idvar ?> ">
        <img src="<?php echo $row['image']; ?>" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <p><b>College Name :</b>
            <?php echo $row['name'] . "<br>"; ?>
          </p>
          <p><b>City :</b>
            <?php echo $row['city'] . "<br>"; ?>
          </p>
          <p><b>Highest Package :</b>
            <?php echo $row['highpkg'] . "<br>"; ?>
          </p>
          <p><b>Average Package :</b>
            <?php echo $row['avgpkg'] . "<br>"; ?>
          </p>

          </p>
        </div>
      </a>
    </div>


    <?php }
} ?>
  </div>