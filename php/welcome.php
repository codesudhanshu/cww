<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>


<<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome In CWW</title>

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  
   <!-- whatsapp  -->
   <link rel="stylesheet" href="../assets/css/whatsapp.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center bg-primary">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Coffee With Worker</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="../index.html">Home</a></li>
          <li><a href="blog/blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Helps</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../karigar/karigar.html">Karigar</a></li>
              <li><a href="../plumber/plumber.html">Plumber</a></li>
              <li><a href="../electrician/electrician.html">Electrician</a></li>
              <li><a href="../dishwaser/dishwaser.html">Dishwasher</a></li>
              <li><a href="../labour/labour.html">Labour</a></li>
              <li><a href="../rotimaker/rotimaker.html">Rotimaker</a></li>
              <li><a href="../cleaner/cleaner.html">Cleaner</a></li>
              <li><a href="../driver/driver.html">Driver</a></li>
              <li><a href="../makeupartist/makeupartist.html">makeupartist</a></li>
              <li><a href="../carpainter/carpainter.html">Carpainter</a></li>
              <li><a href="../chef/chef.html">Chef</a></li>
              <li><a href="../beldar/beldar.html">Beldar</a></li>
              <li><a href="../waiter/waiter.html">Waiter</a></li>
              <li><a href="../painter/painter.html">Painter</a></li>
              <li><a href="../gas/gas.html">Gas</a></li>
              <li><a href="../jamadar/jamadar.html">jamadar</a></li>
              <li><a href="../laundary/laundary.html">Laundary</a></li>
              <li><a href="../babysitter/babysitter.html">Babysitter</a></li>
              <li><a href="../cameraman/cameraman.html">Cameraman</a></li>
              <li><a href="../pandit/pandit.html">Pandit</a></li>
              <li><a href="../maid/maid.html">maid</a></li>
            </ul>
            <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
            <li class="dropdown"><a href="#"><?php echo 'Welcome,'. $_SESSION['username'] ;?><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="logout.php">logout</a></li>
            </ul>
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1 class="text-dark">Bettter Service experience with coffeewithworker</h1>
          <h2 class="text-dark">We are a team that will help you in every moment of your life</h2>
          <a href="#services" class="btn-get-started scrollto">Find Your Soloution Here</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="services" class="portfolio bg-dark">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Our Services</h2>
        </div>
        <div class="row portfolio-container text-center" data-aos="fade-up" data-aos-delay="200">


          <!-- karigar -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../images/karigar.jpg" class="img-fluid" alt="karigar">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../karigar/karigar.html" title="More Details"><i class="bx bx-link"></i></a>
                  <h4>karigar</h4>
                </div>
              </div>
            </div>
            <a href="../karigar/karigar.html" class="text-white">
              <h5>karigar</h5>
            </a>
          </div>

          <!-- plumber -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../images/plumber.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../plumber/plumber.html" title="More Details"><i class="bx bx-link"></i></a>
                  <h4>Plumber</h4>
                </div>
              </div>
            </div>
            <a href="../plumber/plumber.html" class="text-white">
              <h5>Plumber</h5>
            </a>
          </div>

          <!-- Electrician -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../images/electairn.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../electrician/electrician.html" title="More Details"><i class="bx bx-link"></i></a>
                  <h4>Electrician</h4>
                </div>
              </div>
            </div>
            <a href="../electrician/electrician.html" class="text-white">
              <h5>Electrician</h5>
            </a>
          </div>

          <!-- dishwaser -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../images/dish.jpg" class="img-fluid" alt="Dishwasher">
              <div class="portfolio-info">
                <h4>Dishwasher</h4>
                <div class="portfolio-links">
                  <a href="../dishwaser/dishwaser.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
            <a href="../dishwaser/dishwaser.html" class="text-white">
              <h5>Dishwasher</h5>
            </a>
          </div>

          <!-- labour -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../images/lobour.jpg" class="img-fluid" alt="labour">
              <div class="portfolio-info">
                <h4>Labour</4>
                  <div class="portfolio-links">
                    <a href="../labour/labour.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
              </div>
            </div>
            <a href="../labour/labour.html" class="text-white">
              <h5>Labour</h5>
            </a>
          </div>

          <!-- Rotimaker -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../images/rotimaker.jpg" class="img-fluid" alt="rotimaker">
              <div class="portfolio-info">
                <h4>Rotimaker</4>
                  <div class="portfolio-links">
                    <a href="../rotimaker/rotimaker.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
              </div>
            </div>
            <a href="../rotimaker/rotimaker.html" class="text-white">
              <h5>Rotimaker</h5>
            </a>
          </div>

       

    <!-- cleaner -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="../images/cleaner.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="../cleaner/cleaner.html" title="More Details"><i class="bx bx-link"></i></a>
            <h4>cleaner</h4>
          </div>
        </div>
      </div>
      <a href="../cleaner/cleaner.html" class="text-white">
        <h5>cleaner</h5>
      </a>
    </div>

    <!-- driver -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="../images/driver.jpg" class="img-fluid" alt="driver">
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="../driver/driver.html" title="More Details"><i class="bx bx-link"></i></a>
            <h4>Driver</h4>
          </div>
        </div>
      </div>
      <a href="../driver/driver.html" class="text-white">
        <h5>Driver</h5>
      </a>
    </div>

    <!-- makeupartist -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="../images/makeupartist.jpg" class="img-fluid" alt="makeupartist">
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="../makeupartist/makeupartist.html" title="More Details"><i class="bx bx-link"></i></a>
            <h4>Makeup Artist</h4>
          </div>
        </div>
      </div>
      <a href="../makeupartist/makeupartist.html" class="text-white">
        <h5>Makeup Artist</h5>
      </a>
    </div>

    <!-- carpainter -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="../images/carpainter.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="../carpainter/carpainter.html" title="More Details"><i class="bx bx-link"></i></a>
            <h4>carpainter</h4>
          </div>
        </div>
      </div>
      <a href="../carpainter/carpainter.html" class="text-white">
        <h5>Carpainter</h5>
      </a>
    </div>



    <!-- chef -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="../images/chef.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="../chef/chef.html" title="More Details"><i class="bx bx-link"></i></a>
            <h4>Chef</h4>
          </div>
        </div>
      </div>
      <a href="../chef/chef.html" class="text-white">
        <h5>Chef</h5>
      </a>
    </div>


    <!-- beldar -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="../images/beldar.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="../beldar/beldar.html" title="More Details"><i class="bx bx-link"></i></a>
            <h4>Beldar</h4>
          </div>
        </div>
      </div>
      <a href="../beldar/beldar.html" class="text-white">
        <h5>Beldar</h5>
      </a>
    </div>


    <!-- waiter -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="../images/waiter.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="../waiter/waiter.html" title="More Details"><i class="bx bx-link"></i></a>
            <h4>Waiter</h4>
          </div>
        </div>
      </div>
      <a href="../waiter/waiter.html" class="text-white">
        <h5>Waiter</h5>
      </a>
    </div>

    <!-- painter -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="../images/painter.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="../painter/painter.html" title="More Details"><i class="bx bx-link"></i></a>
            <h4>Painter</h4>
          </div>
        </div>
      </div>
      <a href="../painter/painter.html" class="text-white">
        <h5>Painter</h5>
      </a>
    </div>

    <!-- gas Cylinder -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="../images/gasd.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Gas Cylinder</4>
            <div class="portfolio-links">
              <a href="../gas/gas.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
        </div>
      </div>
      <a href="../gas/gas.html" class="text-white">
        <h5>Gas Cylinder</h5>
      </a>
    </div>

    <!-- jamadar -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="../images/jamadar.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="../jamadar/jamadar.html" title="More Details"><i class="bx bx-link"></i></a>
            <h4>jamadar</h4>
          </div>
        </div>
      </div>
      <a href="../jamadar/jamadar.html" class="text-white">
        <h5>jamadar</h5>
      </a>
    </div>

    <!-- laundary -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="../images/laundary.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="../laundary/laundary.html" title="More Details"><i class="bx bx-link"></i></a>
            <h4>Laundary</h4>
          </div>
        </div>
      </div>
      <a href="../laundary/laundary.html" class="text-white">
        <h5>Laundary</h5>
      </a>
    </div>

    <!-- babysitter -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="../images/babysitter.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Babysitter</h4>
          <div class="portfolio-links">
            <a href="../babysitter/babysitter.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>
      <a href="../babysitter/babysitter.html" class="text-white">
        <h5>Babysitter</h5>
      </a>
    </div>

    <!-- cameraman -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="../images/cameraman.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>CameraMan</4>
            <div class="portfolio-links">
              <a href="../cameraman/cameraman.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
        </div>
      </div>
      <a href="../cameraman/cameraman.html" class="text-white">
        <h5>CameraMan</h5>
      </a>
    </div>

    <!-- pandit  -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="../images/pandit.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Pandit</h4>
          <div class="portfolio-links">
            <a href="../pandit/pandit.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>
      <a href="../pandit/pandit.html" class="text-white">
        <h5>Pandit</h5>
      </a>
    </div>

    <!-- maid -->
    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="../images/maid.jpg" class="img-fluid" alt="maid">
        <div class="portfolio-info">
          <h4>Maid</4>
            <div class="portfolio-links">
              <a href="../maid/maid.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
        </div>
      </div>
      <a href="../maid/maid.html" class="text-white">
        <h5>Maid</h5>
      </a>
    </div>

    </div>

  </div>
 </section><!-- End Portfolio Section -->

    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabs">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                  </li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                    pariatur.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                  voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                  sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
         

        </div>
    </section><!-- End Tabs Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Voluptatem dignissimos provident quasi</h3>
              <p>
                We are a team that uplifts the experience workers sitting at home for all the small and big tasks that
                you study at your home, which saves your time, money and energy and you take advantage of a good work.
                please try it once……….
              </p>
              <a href="#about" class="about-btn text-dark"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->






    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>  End testimonial item -->

    <!-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div> -->
    <!-- End testimonial item -->

    <!-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div> -->
    <!-- End testimonial item -->

    <!-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div> -->
    <!-- End testimonial item -->

    <!-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div> -->
    <!-- End testimonial item -->

    <!-- </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->




    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Alone we can do so little together we can do so much.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-8 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Shiv Tiwari</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ansh Kayashth Lala</h4>
                <span>service Manager/ Accountant</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>kartik Shukla</h4>
                <span>Chief Technology Officer</span>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Swaraj Colony Civil Line Banda, 210001, Uttar Pradesh India</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>coffeewithworker@gmail.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+91 9140667231<br>+91 9140667261</p>
                </div>
              </div>
            </div>

          </div>

  

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <a href="https://wa.me/+919140667231" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
 
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>coffeewithworker</h3>
            <p>
              Swaraj Colony Civil Line <br>
              Banda, 210001<br>
              Uttar Pradesh, India<br><br>
              <strong>Phone:</strong>+91 9140667231<br>
              <strong>Email:</strong>coffeewithworker@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="blog.html">Blogs</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="termsofservice.html">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacypolicy.html">Privacy policy</a></li> -->
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="../karigar/karigar.html">Karigar</a></li>
              <li><a href="../plumber/plumber.html">Plumber</a></li>
              <li><a href="../electrician/electrician.html">Electrician</a></li>
              <li><a href="../dishwaser/dishwaser.html">Dishwasher</a></li>
              <li><a href="../labour/labour.html">Labour</a></li>
              <li><a href="../rotimaker/rotimaker.html">Rotimaker</a></li>
              <li><a href="../cleaner/cleaner.html">Cleaner</a></li>
              <li><a href="../driver/driver.html">Driver</a></li>
              <li><a href="../makeupartist/makeupartist.html">makeupartist</a></li>
              <li><a href="../carpainter/carpainter.html">Carpainter</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="../chef/chef.html">Chef</a></li>
              <li><a href="../beldar/beldar.html">Beldar</a></li>
              <li><a href="../waiter/waiter.html">Waiter</a></li>
              <li><a href="../painter/painter.html">Painter</a></li>
              <li><a href="../gas/gas.html">Gas</a></li>
              <li><a href="../jamadar/jamadar.html">jamadar</a></li>
              <li><a href="../laundary/laundary.html">Laundary</a></li>
              <li><a href="../babysitter/babysitter.html">Babysitter</a></li>
              <li><a href="../cameraman/cameraman.html">Cameraman</a></li>
              <li><a href="../pandit/pandit.html">Pandit</a></li>
              <li><a href="../maid/maid.html">maid</a></li>
            </ul>../
          </div>



        </div>
      </div>
    </div>





    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>coffeewithworker</span></strong> All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="index.html">coffeewithworker</a>
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="https://twitter.com/coffeewithwork" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/Coffeewithworker/" class="facebook" target="_blank"><i
            class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/coffeewithworker/" class="instagram" target="_blank"><i
            class="bx bxl-instagram"></i></a>
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
        <a href="https://www.linkedin.com/in/coffee-with-worker-0bb436230/" class="linkedin" target="_blank"><i
            class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
  
  
  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a> -->


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>