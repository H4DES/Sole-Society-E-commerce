

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-LEARNING</title>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/style.css" />
  </head>
  <body class="">
    <!--NAVBAR - START-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">E-LEARNING</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
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
              <a class="nav-link" href="#courses">Best Courses</a>
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
              <a class="nav-link" href="#blog">Blogs</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Contact Us</a>
            </li>
          </ul>

          <a href="./register2.php" class="btn btn-primary">Create Account</a>
          <a href="./index2.php" class="btn btn-brand">Login Account</a>
          
          <!-- <a href="#" class="profile-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <div class="rounded-circle profile-image">
              <img src="assets/images/User profile.png" class="w-100 h-100" alt="Profile Picture">
            </div>
          </a> -->
          
        </div>
      </div>
    </nav>
<!-- MODAL -->
<div class="container">
      <!-- Modal -->
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
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=bernardporlas93@gmail.com&body=Hello,%20Syntax%20Tech%20Development%20Team!%0D%0A%0D%0AI'm%20interested%20in%20learning%20more%20about%20the%20automation%20services%20your%20company%20provides.%0D%0A%0D%0AI%20TEST" target="_blank" class="btn btn-dark">Send mail</a>
              </div>
          </div>

        <div class="card text-center" style="width: 18rem;">
          <img src="./assets/images/GIT HUB.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">GitHub</h5>
              <!-- <p class="card-text"></p> -->
              <a href="https://github.com/H4DES/Syntax-Tech." class="btn btn-dark">Collaborate</a>
             </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

            
      <!-- PROFILE MODAL START -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel"><h3><span class="badge bg-secondary mt-2 ms-1">Profile Settings</span></h3></h5>
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
          <p class="text-center">Country: <b><?php echo $res_country ?></b></p>
        </div>

        <!-- <a href="#" id="bookmarkLink"><i class="ri-bookmark-3-line" id="icon" style="font-size: 30px;"></i></a> -->
          <!-- <div class="alert alert-dark" role="alert">
            <p id="courseCompletedText" class="text-center">Course Completed: 0</p>
          </div> -->

        <div class="alert alert-dark" role="alert">
          <p class="text-center">Account Created: <b><?php echo $formatted_res_created ?></b></p>
        </div>
        
          <!-- <p>
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Button with data-bs-target
            </button>
          </p> -->

        <a href="logout.php"> <button type="button" class="btn btn-dark mt-3">Account Logout</button> </a>
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
                <h6>THIS IS E-LEARNING</h6>
                <h1 class="display-1 fw-bold">Develop your skills</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item text-center bg-primary bg-cover vh-100 slide-2" data-bs-interval="2500">
          <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h6>THIS IS E-LEARNING</h6>
                <h1 class="display-1 fw-bold">
                  Always Upskill
                </h1>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item text-center bg-primary bg-cover vh-100 slide-3" data-bs-interval="2500">
          <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h6>THIS IS E-LEARNING</h6>
                <h1 class="display-1 fw-bold">
                  Trust the process
                </h1>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item text-center bg-primary bg-cover vh-100 slide-4" data-bs-interval="2500">
          <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h6>THIS IS E-LEARNING</h6>
                <h1 class="display-1 fw-bold">
                  Enjoy Learning
                </h1>
              </div>
            </div>
          </div>
        </div>

      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#heroSlider"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#heroSlider"
        data-bs-slide="next"
      >
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
            <img src="assets/images/Syntax Tech Logo.png" alt="" />
          </div>
          <div class="col-lg-7">
            <h1>About us</h1>
            <div class="divider my-4"></div>
            <p>
            Welcome to Syntax Technology Development Team! We're a group of students passionate about web development, and we're excited to introduce our latest project: E-LEARNING. A web app to discover the best programming courses online.
            </p>
            <p>
            At Syntax Tech, we understand the challenge of navigating countless resources. That's why we've curated top-quality programming courses to streamline your learning journey.
            </p>
            <p>
            Our platform is intuitive, informative, and accessible to all levels of learners. From beginners to seasoned developers, our web app supports you every step of the way. Join us as we combine our love for coding with our commitment to education, making learning programming more accessible and enjoyable for everyone.
            </p>
            <!-- Button trigger modal -->
            <a href="#" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#team" >Our Team</a>
            <!-- Button trigger modal -->

            <!-- Modal -->
<div class="modal fade" id="team" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Syntax Technology Development Team</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

    <div class="modal-body">
      <div class="team">
        <div class="container">
          <div class="section-title text-center">
            <h2>TEAM</h2>
              <div class="underline"></div>
              <p>We are syntax technology development team.</p>
         </div>
                <!-- PERSON 1 101 x 102 orig size: 342 x 342-->
          <div class="row">
            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="teampic"><img src="./assets/images/person1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Bernard Raine B. Porlas</h4>
                    <span>Fullstack Web Developer</span>
          
                    <p>My role is to develop the website from front-end to back-end of our website.</p>
                      <div class="social">
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        <a href=""> <i class="bi bi-whatsapp"></i> </a>
                      </div>
                  </div>
              </div>
            </div>

            <!-- PERSON 2 -->
    <div class="col-lg-6 mt-4 mt-lg-0">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person2.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Messy Bensorto</h4>
          <span>Web Developer</span>
          <p>My role is also to develop the website and make website responsive.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 3 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person3.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Rico P. Teodoro</h4>
          <span>UI/UX Designer</span>
          <p>My role is to make a primary design to our website and make it interactive.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 4 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person4.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Genevive Cruz</h4>
          <span>UI/UX Designer</span>
          <p>My role is to make the website more user friendly and make it presentable.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 5 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person5.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Norie Jane G. Tubera</h4>
          <span>Content Writer</span>
          <p>My role as content writer is to write the content about the website and the courses.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 6 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person6.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Norsamie K. Akmad</h4>
          <span>Content Writer</span>
          <p>My role as content writer is to gather all resources like image and url of the website.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 7 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person7.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Summer D. Ballesteros</h4>
          <span>Content Writer</span>
          <p>My role as content writer is to support the gathering of url and the images of website.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 8 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person8.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Jubani Usman</h4>
          <span>Content Writer</span>
          <p>My role as content writer is to gather description of the courses.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 9 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person9.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Jude Jovenal</h4>
          <span>Content Writer</span>
          <p>My role as a content writer is to support also the gathering of description of the courses that website used.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
        </div>
                      </div>

                    </div>
                </div>
              </div>
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
            <h1>The Best Programming Courses</h1>
            <p>
            Discover the best programming courses online with Syntax Tech!
            </p>
          </div>
        </div>
      </div>

     <div class="container d-flex justify-content-center">
     <div class="card border-dark mb-3 text-center" style="max-width: 50rem;">
  <div class="card-header">SYNTAX TECHNOLOGY</div>
  <div class="card-body text-dark">
    <h5 class="card-title">Create an account!</h5>
    <p class="card-text">Interested in expanding your knowledge? Create an account today to explore our extensive catalog of top-rated courses and begin your learning journey for free! Whether you're looking to advance your career, develop new skills, or pursue a passion, our platform has something for everyone. Join our community of learners and start unlocking your potential now!</p>
  </div>
     </div>
          
      </section>
    <!--COURSES - END-->

    <!--Blog Post - START-->
      <section id="blog">
        <div class="container">
          <div class="row">
            <div class="col-12 intro-text">
                <h1>Technology Blogs</h1>
                <p>All blogs and article about latest technology.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="blog-post d-flex shadow-on-hover">
                <img src="./assets/images/Claude AI blog.png" alt="">
                <div class="blog-post-content p-4">
                  <p>Article from AutoGPT · February 17, 2024</p>
                  <h4><a href="#">Claude AI by Anthropic AI: Breaking Down Barriers and Limitations</a></h4>
                  <!-- <p>Claude AI, developed by Anthropic AI, is an AI chatbot that excels in tasks like summarization, editing, Q&A, decision-making, and code-writing?</p> -->
                  <a target="_blank" href="https://autogpt.net/claude-ai-breaking-down-barriers-and-limitations/">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="blog-post d-flex shadow-on-hover">
                <img src="./assets/images/Devin AI.png" alt="">
                <div class="blog-post-content p-4">
                  <p>Article from The Economic Times · March 20, 2024</p>
                  <h4><a href="#">The new AI disruption tool: Devin(e) or Devil for software engineers?</a></h4>
                  <a target="_blank" href="https://economictimes.indiatimes.com/news/company/corporate-trends/the-new-ai-disruption-tool-devine-or-devil-for-software-engineers/articleshow/108654112.cms?from=mdr">Read More</a>
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
                      <h2>E-LEARNING</h2>
                      <div class="line"></div>
                      <p>We're a group of students passionate about web development</p>
                      <div class="social-icons">
                          <a href="#"><i class="ri-twitter-fill"></i></a>
                          <a href="#"><i class="ri-instagram-fill"></i></a>
                          <a href="#"><i class="ri-github-fill"></i></a>
                          <a href="#"><i class="ri-dribbble-fill"></i></a>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <h5 class="mb-0 text-white">SERVICES</h5>
                      <div class="line"></div>
                      <ul>
                          <li><a href="#">Web Development</a></li>
                          <li><a href="#">Front End Development</a></li>
                          <li><a href="#">Back End Development</a></li>
                          <li><a href="#">Desktop Software Develoment</a></li>
                          <li><a href="#">Machine Learning</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <h5 class="mb-0 text-white">Programming Websites</h5>
                      <div class="line"></div>
                      <ul>
                          <li><a href="https://www.freecodecamp.org/">freeCodeCamp</a></li>
                          <li><a href="https://www.sololearn.com/en/">Sololearn</a></li>
                          <li><a href="https://www.hackerrank.com/">Hackerrank</a></li>
                          <li><a href="https://leetcode.com/">Leetcode</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <h5 class="mb-0 text-white">CONTACT</h5>
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
                      <p class="mb-0">© Copyright Syntax Tech. All Rights Reserved</p>
                  </div>
              </div>
          </div>
      </div>
  </footer>

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
