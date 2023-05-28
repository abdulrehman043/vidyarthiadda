<?php
include('dbconn.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="vastyle.css">
  <link rel="shortcut icon" href="./images/20221101_221428-removebg-preview.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
 <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
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
    .custom-card:hover{
      box-shadow: 0px 0px 13px 4px rgba(0,0,0,0.5) !important;
      transition: 0.5s;
    }
    .custom-card{
      transition: 0.5s;
    }

    @media only screen and (max-width: 600px) {
      .custom-card {
        width: 22rem;
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
    $query = 'SELECT  *FROM college_details WHERE code LIKE "%C12345%" OR code LIKE "%G12345%" OR code LIKE "%H12345%" OR code LIKE "%S12345%" OR code LIKE "%SD6789%"
    OR code LIKE "%VK6789%" OR code LIKE "%MS6789%" OR code LIKE "%SA6789%" OR code LIKE "%SH6789%" OR code LIKE "%MB6789%" OR code LIKE "%MD6789%" OR code LIKE "%P12345%"
    OR code LIKE "%M12345%" OR code LIKE "%B12345%" OR code LIKE "%GL6789%" OR code LIKE "%WD6789%"';
    $result = $conn->query($query);
    //$conn->close();
    while ($row = mysqli_fetch_array($result)) {
    ?>

    <div class="card custom-card mx-2 my-2">
      <a href="<?php
      $idvar = $row['ID'];
      echo "landing.php?" . $idvar ?> ">
        <img src="<?php echo $row['image']; ?>" class="card-img-top img-fluid mt-2" alt="...">
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


    <?php } ?>
  </div>