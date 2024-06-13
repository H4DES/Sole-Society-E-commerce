<?php
session_start();

include("./login-register/config.php");
if (!isset($_SESSION['valid'])) {
  header("Location: index2.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-LEARNING</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/style.css" />
</head>

<body class="">
  <!--NAVBAR - START-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Volcano Venture Ph</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#courses">Volcanoes</a>
          </li>
          <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Best Course
              </a>
              <ul
                class="dropdown-menu dropdown-menu-dark"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li>
                  <a class="dropdown-item" href="#webdevelopment">Web Development</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#frontend"
                    >Frontend Development</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#courses"
                    >Backend Development</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#courses"
                    >Desktop Development</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#courses" id="pills-machine-tab" data-bs-toggle="pill" data-bs-target="#pills-machine" >Machine Learning</a>
                </li>
              </ul>
            </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#blog">Article</a>
          </li>
        </ul>

        <!-- <a href="#" class="btn btn-primary">Create Account</a>
          <a href="#" class="btn btn-brand">Login Account</a> -->
        <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Profile</button> -->
        <a href="#" class="profile-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <div class="rounded-circle profile-image">
            <img src="assets/images/User profile.png" class="w-100 h-100" alt="Profile Picture">
          </div>
        </a>
        <h3><span class="badge bg-secondary mt-2 ms-1">Profile</span></h3>
      </div>
    </div>
  </nav>

  <div class="container">

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Contact us with:</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body d-flex justify-content-center px-5">
            <div class="card me-4 text-center" style="width: 18rem;">
              <img src="./assets/images/GMAIL.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gmail</h5>
                <!-- <p class="card-text">Facebook</p> -->
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=bernardporlas93@gmail.com&body=Hello,%20Syntax%20Tech%20Development%20Team!%0D%0A%0D%0AI'm%20interested%20in%20learning%20more%20about%20Programming!%20%0D%0A%0D%0A%20" target="_blank" class="btn btn-dark">Send mail</a>
              </div>
            </div>

            <div class="card text-center" style="width: 18rem;">
              <img src="./assets/images/GIT HUB.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">GitHub</h5>
                <!-- <p class="card-text"></p> -->
                <a href="https://github.com/H4DES/Syntax-Tech." target="_blank" class="btn btn-dark">Collaborate</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $user_id = $_SESSION['user_id'];
  $query = mysqli_query($con, "SELECT * FROM users WHERE user_id = $user_id");

  while ($result = mysqli_fetch_assoc($query)) {
    $res_Uname = $result['username'];
    $res_fullname = $result['fullname'];
    $res_email = $result['email'];
    $res_id = $result['user_id'];
  }

  // echo "<a href='edit.php'?id=$res_id'>Change Profile</a>";
  ?>

<!------------- FOR VOLCANOES QUERY ------------->
  <?php
  $query = mysqli_query($con, "SELECT volcano_id, name, location, type, status, last_eruption FROM volcanoes");

  $volcanoes = array();

  while ($result = mysqli_fetch_assoc($query)) {
    $volcanoes[$result['volcano_id']] = array(
      'name' => $result['name'],
      'location' => $result['location'],
      'type' => $result['type'],
      'status' => $result['status'],
      'last_eruption' => $result['last_eruption']
    );
  }

  ?>

<!------------- FOR ERUPTIONS QUERY ------------->  
<?php
  $query = mysqli_query($con, "SELECT volcano_id, eruption_times, eruption_type FROM eruptions");

  $eruptions = array();

  while ($result = mysqli_fetch_assoc($query)) {
    $eruptions[$result['volcano_id']] = array(
      'eruption_times' => $result['eruption_times'],
      'eruption_type' => $result['eruption_type']
    );
  }
 
  mysqli_close($con);
  ?>

  <!-- PROFILE MODAL START -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">
        <h3><span class="badge bg-secondary mt-2 ms-1">Profile Settings</span></h3>
      </h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body text-center">
      <div class="alert alert-dark" role="alert">
        <h4 class="text-center"><b><?php echo $res_Uname ?></b></h4>
      </div>

      <div class="alert alert-dark" role="alert">
        <p class="text-center"><b><?php echo $res_fullname ?></b></p>
      </div>

      <div class="alert alert-dark" role="alert">
        <p class="text-center"><?php echo $res_email?></p>
      </div>

      <div class="dropdown">
        <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          More Option
        </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <div class="d-grid gap-2">
                <button class="btn btn-dark" type="button"><a href="logout.php" style="color: #fff; text-decoration: none; transition: all 0.4s;">Account Logout</a></button>
                
              </div>
          </ul>
      </div>
      
      <!-- <p>
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Button with data-bs-target
            </button>
          </p> -->

      
      <!-- <button type="button" class="btn btn-dark">Account Logout</button> -->
    </div>
  </div>
  <!--NAVBAR - END-->

  <!--HERO SLIDER - START-->
  <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item text-center bg-primary bg-cover vh-100 active slide-1" data-bs-interval="3000">
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h6>Stratovolcano</h6>
              <h1 class="display-1 fw-bold">Mayon Volcano</h1>
              <a href="#courses" class="btn btn-dark">More Info</a>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item text-center bg-primary bg-cover vh-100 slide-2" data-bs-interval="2500">
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h6>Stratovolcano</h6>
              <h1 class="display-1 fw-bold">
                Mt. Matutum
              </h1>
              <a href="#courses" class="btn btn-dark">More Info</a>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item text-center bg-primary bg-cover vh-100 slide-3" data-bs-interval="2500">
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h6>Complex Volcano</h6>
              <h1 class="display-1 fw-bold">
                Taal Volcano
              </h1>
              <a href="#courses" class="btn btn-dark">More Info</a>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item text-center bg-primary bg-cover vh-100 slide-4" data-bs-interval="2500">
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h6>Stratovolcano</h6>
              <h1 class="display-1 fw-bold">
                Mount Banahaw
              </h1>
              <a href="#courses" class="btn btn-dark">More Info</a>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item text-center bg-primary bg-cover vh-100 slide-5" data-bs-interval="2500">
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h6>Stratovolcano</h6>
              <h1 class="display-1 fw-bold">
                Mount Makiling
              </h1>
              <a href="#courses" class="btn btn-dark">More Info</a>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item text-center bg-primary bg-cover vh-100 slide-6" data-bs-interval="2500">
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h6>Stratovolcano</h6>
              <h1 class="display-1 fw-bold">
                Mount Malindang
              </h1>
              <a href="#courses" class="btn btn-dark">More Info</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--HERO SLIDER - END-->

  <!--ABOUT US - START-->
  <section id="about">
    <div class="container">
      <div class="row gy-4 align-items-center">
        <div class="col-lg-5">
          <img src="images/Venture.png" alt="" />
        </div>
        <div class="col-lg-7">
          <h1>About us</h1>
          <div class="divider my-4"></div>
          <p>
          Volcano Venture PH is dedicated to providing comprehensive information about the volcanoes in the Philippines. Our mission is to educate and inform the public about the geological features, history, and current activity of these powerful natural formations, promoting awareness and preparedness for volcanic events.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!--ABOUT US - END-->

  <!--COURSES - START-->
  <section id="courses" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12 intro-text">
          <h1>Volcanoes in the Philippines</h1>
          <p>
            Here is the information of the volcanoes in the Philippines.
          </p>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
        <!-- WEB DEVELOPMENT NAV-ITEM -->
        <li class="nav-item pb-2" role="presentation">
          <button class="nav-link active" id="pills-mayon-tab" data-bs-toggle="pill" data-bs-target="#pills-mayon" type="button" role="tab" aria-controls="pills-mayon" aria-selected="true">Mayon Volcano</button>
        </li>

        <!-- FRONT END DEVELOPMENT NAV-ITEM -->
        <li class="nav-item pb-2" role="presentation">
          <button class="nav-link" id="pills-matutum-tab" data-bs-toggle="pill" data-bs-target="#pills-matutum" type="button" role="tab" aria-controls="pills-matutum" aria-selected="false">Mt. Matutum</button>
        </li>

        <!-- BACK END DEVELOPMENT NAV-ITEM -->
        <li class="nav-item pb-2" role="presentation">
          <button class="nav-link" id="pills-taal-tab" data-bs-toggle="pill" data-bs-target="#pills-taal" type="button" role="tab" aria-controls="pills-taal" aria-selected="false">Taal Volcano</button>
        </li>

        <!-- MACHINE LEARNING NAV-ITEM -->
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-banahaw-tab" data-bs-toggle="pill" data-bs-target="#pills-banahaw" type="button" role="tab" aria-controls="pills-banahaw" aria-selected="false">Mount Banahaw</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-makiling-tab" data-bs-toggle="pill" data-bs-target="#pills-makiling" type="button" role="tab" aria-controls="pills-makiling" aria-selected="false">Mount Makiling</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-malindang-tab" data-bs-toggle="pill" data-bs-target="#pills-malindang" type="button" role="tab" aria-controls="pills-malindang" aria-selected="false">Mount Malindang</button>
        </li>
      </ul>

      <!-- INTRO 4 COURSES -->
      <div class="tab-content" id="pills-tabContent">

        <!-- MOUNT MAYON -->
        <!-- FIRST -->
        <div class="tab-pane fade show active" id="pills-mayon" role="tabpanel" aria-labelledby="pills-mayon-tab">
          <div class="container d-flex justify-content-center">
            <div class="card mb-3">
              <img src="images/Mayon Background.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title text-center">Mayon Volcano</h2>
                <p class="card-text">Mayon Volcano, located in the province of Albay in the Bicol Region of the Philippines, is renowned for its almost perfect symmetrical cone shape, making it one of the most iconic volcanoes in the world. It is one of the most active volcanoes in the Philippines, having erupted over 50 times in the past 400 years, with its most destructive eruption occurring in 1814, which buried the town of Cagsawa. Mayon Volcano is part of the Pacific Ring of Fire, and its frequent activity is closely monitored, making it both a significant geological landmark and a major tourist attraction.</p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button type="button" data-bs-toggle="modal" href="#exampleModalToggle1" class="btn btn-outline-dark">Important Info</button>
                </div>



                <!-- START --- MODAL OF IMPORTANT INFO -->

                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                  </symbol>
                  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                  </symbol>
                </svg>

                <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel1">Important Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                      <?php
                         $id_to_access = 1; // Replace with the ID you want to access
                         if (isset($volcanoes[$id_to_access])) {
                           
                         } else {
                           echo "No volcano found with ID: " . $id_to_access;
                         }
                      ?>
                        <h6>Name:</h6>
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                            <?php echo " " . $volcanoes[$id_to_access]['name']; ?>
                          </div>
                        </div>
                        <h6>Location:</h6>
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                            <?php echo $volcanoes[$id_to_access]['location'];?>
                          </div>
                        </div>
                        <h6>Type:</h6>
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                          <?php echo $volcanoes[$id_to_access]['type'];?>
                          </div>
                        </div>
                        <h6>Status:</h6>
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                          <?php echo $volcanoes[$id_to_access]['status'];?>
                          </div>
                        </div>
                        <h6>Last Eruption:</h6>
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                          <?php echo $volcanoes[$id_to_access]['last_eruption'];?>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Next Info</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ---------- 2ND MODAL POP-UP -------- -->

                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Important Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                      Eruption Times:
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                            <?php echo $eruptions[$id_to_access]['eruption_times'];?>
                          </div>
                        </div>
                         Eruption Type:
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                          <?php echo $eruptions[$id_to_access]['eruption_type'];?>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END --- MODAL OF IMPORTANT INFO -->
              </div>
            </div>
          </div>
        </div>
        <!-- LAST -->

        <!-- MOUNT MATUTUM -->
        <div class="tab-pane fade" id="pills-matutum" role="tabpanel" aria-labelledby="pills-matutum-tab">
          <div class="container d-flex justify-content-center">
            <div class="card mb-3">
              <img src="images/Matutum Background.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title text-center">Mount Matutum</h2>
                <p class="card-text">Mount Matutum, an active stratovolcano located in South Cotabato province on the island of Mindanao, Philippines, stands at 2,286 meters above sea level and is known for its lush, forested slopes and rich biodiversity. Although it has not erupted in recorded history, it exhibits fumarolic activity and is considered potentially hazardous, prompting regular monitoring by volcanologists. The volcano is also a popular destination for hikers and nature enthusiasts, offering scenic views and the opportunity to experience the unique flora and fauna of the region.</p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button type="button" data-bs-toggle="modal" href="#secondModalToggle1" class="btn btn-outline-dark">Important Info</button>
                </div>

                <!-- SECOND MODAL SET -->

                <div class="modal fade" id="secondModalToggle1" aria-hidden="true" aria-labelledby="secondModalToggleLabel1" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="secondModalToggleLabel1">Important Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <?php
                         $id_to_access = 2; // Replace with the ID you want to access
                         if (isset($volcanoes[$id_to_access])) {
                           
                         } else {
                           echo "No volcano found with ID: " . $id_to_access;
                         }
                      ?>
                        <!-- Alert Messages -->
                         Name:
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                            <?php echo $volcanoes[$id_to_access]['name'];?>
                          </div>
                        </div>
                        Location:
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                          <?php echo $volcanoes[$id_to_access]['location'];?>
                          </div>
                        </div>
                        Type:
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                          <?php echo $volcanoes[$id_to_access]['type'];?>
                          </div>
                        </div>
                        Status:
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                          <?php echo $volcanoes[$id_to_access]['status'];?>
                          </div>
                        </div>
                        Last Eruption
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                          <?php echo $volcanoes[$id_to_access]['last_eruption'];?>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#secondModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Next Info</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal fade" id="secondModalToggle2" aria-hidden="true" aria-labelledby="secondModalToggleLabel2" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="secondModalToggleLabel2">More Important Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- Alert Messages -->
                         Eruption Times:
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                          <?php echo $eruptions[$id_to_access]['eruption_times'];?>
                          </div>
                        </div>
                        Eruption Type:
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                          </svg>
                          <div>
                          <?php echo $eruptions[$id_to_access]['eruption_type'];?>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#secondModalToggle1" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- END --- SECOND MODAL SET -->

              </div>
            </div>
          </div>
        </div>

        <!-- 3rd course -->
        <div class="tab-pane fade" id="pills-taal" role="tabpanel" aria-labelledby="pills-taal-tab">
          <div class="container d-flex justify-content-center">
            <div class="card mb-3">
              <img src="images/Taal Volcano Background.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title text-center">Taal Volcano</h2>
                <p class="card-text">Taal Volcano, located in the province of Batangas, Philippines, is one of the most active and picturesque volcanoes in the country. Known for its unique setting with a crater lake within an island in a larger lake, Taal creates a stunning and unusual landscape. Its eruptions can have significant impacts on the surrounding regions, including ashfall and lava flows that affect nearby communities. The volcano's activity is closely monitored due to its potential threat to densely populated areas. Despite its dangers, Taal remains a popular tourist destination, attracting visitors with its natural beauty and geological significance.</p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#thirdModalToggle1" class="btn btn-outline-dark">Important Info</button>

                  <!-- Third Modal Set -->
                  <div class="modal fade" id="thirdModalToggle1" aria-hidden="true" aria-labelledby="thirdModalToggleLabel1" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="thirdModalToggleLabel1">Important Information</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        <?php
                         $id_to_access = 3; // Replace with the ID you want to access
                         if (isset($volcanoes[$id_to_access])) {
                           
                         } else {
                           echo "No volcano found with ID: " . $id_to_access;
                         }
                      ?>
                          Name:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['name'];?>
                            </div>
                          </div>
                          Location:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['location'];?>
                            </div>
                          </div>
                          Type:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['type'];?>
                            </div>
                          </div>
                          Status:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['status'];?>
                            </div>
                          </div>
                          Last Eruption:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['last_eruption'];?>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" data-bs-target="#thirdModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Next Info</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="thirdModalToggle2" aria-hidden="true" aria-labelledby="thirdModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="thirdModalToggleLabel2">Important Information</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Eruption Times:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $eruptions[$id_to_access]['eruption_times'];?>
                            </div>
                          </div>
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $eruptions[$id_to_access]['eruption_type'];?>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" data-bs-target="#thirdModalToggle1" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 4th course -->
        <div class="tab-pane fade" id="pills-banahaw" role="tabpanel" aria-labelledby="pills-banahaw-tab">
          <div class="container d-flex justify-content-center">
            <div class="card mb-3">
              <img src="images/Manahaw Background.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title text-center">Mount Banahaw</h2>
                <p class="card-text">Mount Banahaw, straddling the provinces of Laguna and Quezon in the Philippines, is a dormant volcano revered for both its natural beauty and spiritual significance. Standing at 2,170 meters, it is a popular destination for hikers and pilgrims who visit its numerous springs and caves considered sacred by local mystics. Despite being dormant, Mount Banahaw is closely monitored for any signs of volcanic activity. The mountain is also part of a protected national park, which aims to preserve its rich biodiversity and cultural heritage. Its lush forests and serene atmosphere make it a haven for nature enthusiasts and spiritual seekers alike.</p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#FourthModalToggle1" class="btn btn-outline-dark">Important Info</button>

                  <!-- Fourth Modal Set -->
                  <div class="modal fade" id="FourthModalToggle1" aria-hidden="true" aria-labelledby="FourthModalToggleLabel1" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="FourthModalToggleLabel1">Important Information</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        <?php
                         $id_to_access = 4; // Replace with the ID you want to access
                         if (isset($volcanoes[$id_to_access])) {
                           
                         } else {
                           echo "No volcano found with ID: " . $id_to_access;
                         }
                        ?>
                        Name:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['name'];?>
                            </div>
                          </div>
                          Location:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['location'];?>
                            </div>
                          </div>
                          Type:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['type'];?>
                            </div>
                          </div>
                          Status:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['status'];?>
                            </div>
                          </div>
                          Last Eruption:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['last_eruption'];?>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" data-bs-target="#FourthModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Next Info</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="FourthModalToggle2" aria-hidden="true" aria-labelledby="FourthModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="FourthModalToggleLabel2">Important Information</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Eruption Times:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $eruptions[$id_to_access]['eruption_times'];?>
                            </div>
                          </div>
                          Eruption Type:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $eruptions[$id_to_access]['eruption_type'];?>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" data-bs-target="#FourthModalToggle1" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="pills-makiling" role="tabpanel" aria-labelledby="pills-makiling-tab">
          <div class="container d-flex justify-content-center">
            <div class="card mb-3">
              <img src="images/Makiling Background.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title text-center">Mount Makiling</h2>
                <p class="card-text">Mount Makiling, located in Laguna, Philippines, is an inactive volcano renowned for its lush biodiversity and rich folklore. Standing at 1,090 meters, it is a popular spot for hiking, birdwatching, and ecological studies, offering a diverse array of flora and fauna. The mountain is also shrouded in local legends, often depicted as the mystical guardian spirit, Maria Makiling. As part of the Mount Makiling Forest Reserve, it plays a crucial role in conservation and environmental education. Its natural beauty and cultural significance make Mount Makiling a treasured landmark in the region.</p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#FifthModalToggle1" class="btn btn-outline-dark">Important Info</button>

                  <!-- Fifth Modal Set -->
                  <div class="modal fade" id="FifthModalToggle1" aria-hidden="true" aria-labelledby="FifthModalToggleLabel1" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="FifthModalToggleLabel1">Important Information</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        <?php
                         $id_to_access = 5;
                         if (isset($volcanoes[$id_to_access])) {
                           
                         } else {
                           echo "No volcano found with ID: " . $id_to_access;
                         }
                        ?>
                        Name:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['name'];?>
                            </div>
                          </div>
                          Location:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['location'];?>
                            </div>
                          </div>
                          Type:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['type'];?>
                            </div>
                          </div>
                          Status:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['status'];?>
                            </div>
                          </div>
                          Last Eruption:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['last_eruption'];?>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" data-bs-target="#FifthModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Next Info</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="FifthModalToggle2" aria-hidden="true" aria-labelledby="FifthModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="FifthModalToggleLabel2">Important Information</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Eruption Times:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $eruptions[$id_to_access]['eruption_times'];?>
                            </div>
                          </div>
                          Eruption Type:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $eruptions[$id_to_access]['eruption_type'];?>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" data-bs-target="#FifthModalToggle1" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="pills-malindang" role="tabpanel" aria-labelledby="pills-malindang-tab">
          <div class="container d-flex justify-content-center">
            <div class="card mb-3">
              <img src="images/Mount Malindang.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title text-center">Mount Malindang</h2>
                <p class="card-text">Mount Malindang, located in the Zamboanga Peninsula, Philippines, is a stratovolcano known for its rich biodiversity and ecological importance. Rising to an elevation of 2,425 meters, it is part of the Mount Malindang Range Natural Park, which is a protected area due to its diverse wildlife and unique ecosystems. The mountain's dense forests are home to numerous endemic species of flora and fauna, making it a critical site for conservation efforts. Mount Malindang is also culturally significant, with indigenous communities residing in its vicinity and relying on its natural resources. Its scenic landscapes and ecological value make it a vital natural heritage of the Philippines.</p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#sixthModalToggle1" class="btn btn-outline-dark">Important Info</button>

                  <!-- Fifth Modal Set -->
                  <div class="modal fade" id="sixthModalToggle1" aria-hidden="true" aria-labelledby="sixthModalToggleLabel1" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="sixthModalToggleLabel1">Important Information</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        <?php
                         $id_to_access = 6;
                         if (isset($volcanoes[$id_to_access])) {
                           
                         } else {
                           echo "No volcano found with ID: " . $id_to_access;
                         }
                        ?>
                        Name:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['name'];?>
                            </div>
                          </div>
                          Location:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['location'];?>
                            </div>
                          </div>
                          Type:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['type'];?>
                            </div>
                          </div>
                          Status:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div><?php echo $volcanoes[$id_to_access]['status'];?></div>
                          </div>
                          Last Eruption:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $volcanoes[$id_to_access]['last_eruption'];?>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" data-bs-target="#sixthModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Next Info</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="sixthModalToggle2" aria-hidden="true" aria-labelledby="sixthModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="sixthModalToggleLabel2">Important Information</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Eruption Times:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $eruptions[$id_to_access]['eruption_times'];?>
                            </div>
                          </div>
                          Eruption Type:
                          <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                            <?php echo $eruptions[$id_to_access]['eruption_type'];?>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" data-bs-target="#sixthModalToggle1" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ENDING OF TABS -->
      </div>
  </section>
  <!--COURSES - END-->

  <!--Blog Post - START-->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-12 intro-text">
          <h1>Volcanoes Articles</h1>
          <p>All blogs and article about volcanology news</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="blog-post d-flex shadow-on-hover">
            <img src="images/art1.png" alt="">
            <div class="blog-post-content p-4">
              <p>Updated: June 05, 2024 4:50 pm IST</p>
              <h4><a href="https://www.ndtv.com/world-news/pics-volcano-erupts-in-philippines-debris-sweeps-through-village-5823646/">Pics: Volcano Erupts In Philippines, Debris Sweeps Through Village</a></h4>
              <!-- <p>Claude AI, developed by Anthropic AI, is an AI chatbot that excels in tasks like summarization, editing, Q&A, decision-making, and code-writing?</p> -->
              <a target="_blank" href="https://www.ndtv.com/world-news/pics-volcano-erupts-in-philippines-debris-sweeps-through-village-5823646/">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="blog-post d-flex shadow-on-hover">
            <img src="images/art2.webp" alt="">
            <div class="blog-post-content p-4">
              <p>Updated: June 08, 2023 1:01 pm IST</p>
              <h4><a href="https://www.ndtv.com/world-news/phillipines-issues-alert-as-mount-mayon-volcano-spews-ash-4104179">Phillipines Issues Alert As Mount Mayon Volcano Spews Ash</a></h4>
              <a target="_blank" href="https://www.ndtv.com/world-news/phillipines-issues-alert-as-mount-mayon-volcano-spews-ash-4104179">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Post - END-->

  <!-- FOOTER -->
  <footer class="bg-dark">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-5">
          <div class="col-lg-3 col-sm-6">
            <!-- <a href="#"><img src="./assets/images/logo-white.svg" alt=""></a> -->
            <h2>Volcano Venture PH</h2>
            <div class="line"></div>
            <p>Volcano Venture PH is dedicated to providing comprehensive information about the volcanoes in the Philippines. </p>

          </div>
          <div class="col-lg-3 col-sm-6">
            <h5 class="mb-0 text-white">NDTV NEWS WEBSITE</h5>
            <div class="line"></div>
            <ul>
              <li><a href="https://www.ndtv.com/world">Ndtv.com</a></li>

            </ul>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h5 class="mb-0 text-white">PHIVOLCS WEBSITE</h5>
            <div class="line"></div>
            <ul>
              <li><a href="https://www.phivolcs.dost.gov.ph/">phivolcs.com</a></li>

            </ul>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h5 class="mb-0 text-white">Contact</h5>
            <div class="line"></div>
            <ul>
              <li>South Cotabato, Gensan 9500</li>
              <li>+63 965 918 3687</li>
              <li>bernardporlas93@gmail.com</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row g-4 justify-content-between">
          <div class="col-auto">
            <p class="mb-0">© Copyright Volcano Venture PH. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>