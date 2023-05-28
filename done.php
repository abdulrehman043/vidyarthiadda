<?php
include 'conn.php';


 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
         $url = "https://";   
    else  
         $url = "http://";   
  
    $url.= $_SERVER['HTTP_HOST'];   
    
       
    $url.= $_SERVER['REQUEST_URI'];    
      
   
    $whatIWant = substr($url, strpos($url, "?") + 1);  
  
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="vastyle.css">
  <link rel="shortcut icon" href="./images/20221101_221428-removebg-preview.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="vascript.js"></script>
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
<style>
    .card {
        display: none;
    }
    </style>

    <h6>ID : <?php  var_dump($idvar); ?>
      
    <?php 

    $getdetails =  "SELECT  *FROM college_details WHERE ID= $whatIWant"; 
    
    $result_new = $conn->query($getdetails);

    print_r(mysqli_fetch_array($result_new));
    ?>



</body>
</html>
    

