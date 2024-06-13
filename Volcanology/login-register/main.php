<?php
    session_start();

    include("config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: index2.php");
    }
?>

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
    <link rel="stylesheet" href="assets/style.css" />
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
            <li class="nav-item dropdown">
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
                  <a class="dropdown-item" href="#courses">Machine Learning</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
          <!-- <a href="#" class="btn btn-primary">Create Account</a>
          <a href="#" class="btn btn-brand">Login Account</a> -->
          <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Profile</button> -->
          <a href="#" class="profile-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <div class="rounded-circle profile-image">
              <img src="/assets/images/User profile.png" class="w-100 h-100" alt="Profile Picture">
            </div>
          </a>
          <h3><span class="badge bg-secondary mt-2 ms-1">Profile</span></h3>
        </div>
        
      </div>
      
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel"><h3><span class="badge bg-secondary mt-2 ms-1">Profile Settings</span></h3></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body text-center">
        <div class="alert alert-dark" role="alert">
          <h4 class="text-center">Hades</h4>
        </div>

        <div class="alert alert-dark" role="alert">
          <p class="text-center">Country: Philippines</p>
        </div>

        <div class="alert alert-dark" role="alert">
          <p class="text-center">Course Completed: 10</p>
        </div>

        <div class="alert alert-dark" role="alert">
          <p class="text-center">Account Created: 28/04/2024</p>
        </div>

        <button type="button" class="btn btn-dark">Account Logout</button>
      </div>
    </div>
    <!--NAVBAR - END-->
    
    <!--HERO SLIDER - START-->
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div
          class="carousel-item text-center bg-primary bg-cover vh-100 active slide-1"
        >
          <div
            class="container h-100 d-flex align-items-center justify-content-center"
          >
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h6>THIS IS E-LEARNING</h6>
                <h1 class="display-1 fw-bold">This is the Web Development</h1>
                <a href="#" class="btn btn-dark">Learn Now</a>
              </div>
            </div>
          </div>
        </div>

        <div
          class="carousel-item text-center bg-primary bg-cover vh-100 slide-2"
        >
          <div
            class="container h-100 d-flex align-items-center justify-content-center"
          >
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h6>THIS IS E-LEARNING</h6>
                <h1 class="display-1 fw-bold">
                  This is the Frontend Development
                </h1>
                <a href="#" class="btn btn-dark">Learn Now</a>
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
            <img src="/assets/images/Syntax Tech Logo.png" alt="" />
          </div>
          <div class="col-lg-7">
            <h1>About us</h1>
            <div class="divider my-4"></div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sed
              consequatur officiis provident atque impedit beatae.
            </p>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore
              ullam repudiandae optio eaque ex quae consequuntur!
            </p>
            <a href="#" class="btn btn-dark">Contact us</a>
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
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo
              quasi similique nobis.
            </p>
          </div>
        </div>
      </div>

      <div class="container">
        <ul
          class="nav nav-pills mb-5 justify-content-center"
          id="pills-tab"
          role="tablist"
        >
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-webdevelopment-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-webdevelopment"
              type="button"
              role="tab"
              aria-controls="pills-webdevelopment"
              aria-selected="true"
            >
              Web Development
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-frontend-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-frontend"
              type="button"
              role="tab"
              aria-controls="pills-frontend"
              aria-selected="true"
            >
              Front End
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-backend-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-backend"
              type="button"
              role="tab"
              aria-controls="pills-backend"
              aria-selected="true"
            >
              Back End
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-desktopdevelopment-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-desktopdevelopment"
              type="button"
              role="tab"
              aria-controls="pills-desktopdevelopment"
              aria-selected="true"
            >
              Desktop Develoment
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-machinelearning-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-machinelearning"
              type="button"
              role="tab"
              aria-controls="pills-machinelearning"
              aria-selected="true"
            >
              Machine Learning
            </button>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
          <div
            class="tab-pane fade show active"
            id="pills-webdevelopment"
            role="tabpanel"
            aria-labelledby="pills-webdevelopment-tab"
            tabindex="0"
          >
            <!-- <h4>Web Development</h4> -->
            <div class="row gy-5" id="webdevelopment">
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="tab-pane fade show"
            id="pills-frontend"
            role="tabpanel"
            aria-labelledby="pills-frontend-tab"
            tabindex="0"
          >
            <!-- <h4>Front End</h4> -->
            <div class="row gy-5" id="frontend">
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="/assets/images/Syntax Tech Logo.png" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="">Html 5</a></h5>
                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid modi dicta eius expedita id distinctio excepturi totam iste similique?</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="tab-pane fade show"
            id="pills-backend"
            role="tabpanel"
            aria-labelledby="pills-backend-tab"
            tabindex="0"
          >
            <h4>Back End</h4>
          </div>

          <div
            class="tab-pane fade show"
            id="pills-desktopdevelopment"
            role="tabpanel"
            aria-labelledby="pills-desktopdevelopment-tab"
            tabindex="0"
          >
            <h4>Desktop Development</h4>
          </div>

          <div
            class="tab-pane fade show"
            id="pills-machinelearning"
            role="tabpanel"
            aria-labelledby="pills-machinelearning-tab"
            tabindex="0"
          >
            <h4>Machine Learning</h4>
          </div>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, hic!</p>
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
