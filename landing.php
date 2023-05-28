<?php
include('dbconn.php');
include 'collegedetails.php';
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";

$url .= $_SERVER['HTTP_HOST'];


$url .= $_SERVER['REQUEST_URI'];


$whatIWant = substr($url, strpos($url, "?") + 1);
$getdetails = "SELECT  *FROM college_details WHERE ID= $whatIWant";

$result_new = $conn->query($getdetails);
$college_array = (mysqli_fetch_array($result_new));
// print_r($college_array);
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
    <style>
        .p-view {
            display: none;
        }

        @media(max-width:576px) {
            .w-view {
                display: none;
            }

            .p-view {
                display: inline-block;
            }
        }
    </style>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>About college</title>
    <style>
        .custom-card {
            display: none;
        }
    </style>
</head>
<script>
       if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                                          }
                            window.onload = function () {
                          setTimeout(function () {
                              $('.modal').modal('show');
                          }, 5000);
                      }
    </script>
<body>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CV6W6S3TJN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-CV6W6S3TJN');
    </script>

    <!-- page ka heading -->
    <div class="container-fluid text-center mt-5">
        <h1>
            <?php echo $college_array[2]; ?>
        </h1>
    </div>
    <!-- bas yahi div katam bro chill -->



    <!-- yaha 2 sections hai jo adjust kar sakate ho -->
    <div class="container-fluid text-justify">
        <div class="row">
            <div class="col-sm-8 bg-light">
                <!-- card hai bro mat chedhna jyada -->
                <p>
                <div class="card">
                    <!-- ye bas band kiya hu bro image ki size flexible rahe iselea-->
                    <!-- <div class="card" style="width:500px"> -->
                    <!-- COLLEGE IMAGE AREA BRO YAHA HAI -->
                    <img class="card-img-top" src="<?php echo $college_array[13] ?>" alt="Card image">
                    <div class="card-img-overlay text-white">
                        <!-- overlay ki tarah jo daalna ho daal sakate ho bhai koi dikat nahi hai bas OVERFLOW HO JATA HAI YAHA to choti cheej daalna-->
                        <a class="btn btn-primary" href="form.php" target="_blank">Apply Now</a>
                    </div>
                </div>
                </p>

                <!-- card katam image wala -->

                <!-- phone view //by saleem -->
                <div class="p-view">
                    <div class="container mt-3">
                        <h2>Information About the college</h2>
                        <div class="list-group bg-dark text-white rounded">
                            <!-- similar college list bro agar man ho to -->
                            <a href="#" class="list-group-item list-group-item-action"><b> State and City :</b>
                            <b><?php echo $college_array[3]; ?></b>,
                                <?php echo  $college_array[5]; ?>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Courses available :</b>
                                <?php echo $college_array[6]; ?>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Highest and Average Package :</b>
                                <?php echo $college_array[11] . '-' . $college_array[12]; ?>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Courses offered :</b>
                                <?php echo $college_array[10]; ?>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Approved By :</b>
                                <?php echo $college_array[9]; ?>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Year of establishment :</b>
                                <?php echo $college_array[8]; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- phone view end //by saleem  -->


                <!-- yaha se detail me college ke bare me likho -->
                <div class="container mt-3 text-center">
                    <!-- jo man head daal sakate ho yaha pe  -->
                    <!-- <h2>about college</h2> -->
                    <!-- container shuru bro black border wala -->
                    <div class="mt-4 p-5 border border-dark rounded">
                        <h1>About College</h1>
                        <p class="text-justify">
                            <?php echo $college_array[14]; ?>
                        </p>
                    </div>
                </div>
                <!-- yaha college discription katam bhai  -->
            </div>
            <!-- yaha ek section katam aab SIDE wala section hai -->


            <!-- yaha side wale me agar kuch daalna hai to -->
            <div class="col-sm-4 bg-light">
                <p>

                    <!--window view //by saleem  -->
                <div class="w-view">
                    <div class="container mt-3">
                        <h2>Information About the college</h2>
                        <div class="list-group bg-dark text-white rounded">
                            <!-- similar college list bro agar man ho to -->
                            <a href="#" class="list-group-item list-group-item-action"><b> State and City :</b>
                               <b><?php echo $college_array[3]; ?></b>,
                                <?php echo  $college_array[5]; ?>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Courses available :</b>
                                <?php echo $college_array[6]; ?>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Highest and Average Package :</b>
                                <?php echo $college_array[11] . '-' . $college_array[12]; ?>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Courses offered :</b>
                                <?php echo $college_array[10]; ?>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Approved By :</b>
                                <?php echo $college_array[9]; ?>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Year of establishment :</b>
                                <?php echo $college_array[8]; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- window view end // by saleem -->
                <div class="mt-4 p-5 bg-dark text-white rounded">
                    <h1>VidyarthiAdda Services :</h1>
                    <ul>
                        <li>Book your counselling session
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Click here</button> 
                        </li>
 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Book Counselling</h1>
          <button type="button" class="btn-close close-mod" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- yaha se form hai -->
          <form class="row g-3" method="post">
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
              <button type="submit" class="btn btn-primary" name="submit-btn">Book Your Session</button> <br>
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
  <!-- yaha model katam -->
                        <li>Apply in colleges through us and get a scholorship upto Rs. 25,0000</li>
                        <li>Apply in various colleges with single application form for free.</li>
                        <li>Hassale free admission process with less formalities.</li>
                    </ul>
                </div>
            </div>

            </p>
        </div>
        <!-- side wala section katam bro chill -->
    </div>
    </div>
    <!-- itana discription dekh ke hasna mat maze me kaam karna chahiye warna kaam acha nahi hota abhi bhi phadh rahe ho bas karo bro -->




    <!-- yaha se footer hai boss -->
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="faq.html" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="privacy-policy.html" class="nav-link px-2 text-muted">Policy</a></li>
        </ul>
        <p class="text-center text-muted">© 2022 VidyarthiAdda</p>
    </footer>
    <!-- footer katam -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>