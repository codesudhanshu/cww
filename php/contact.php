<?php
include 'dbconn.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $err = "";
   $username = $_POST['username'];
   $usermail = $_POST['usermail'];
   $userpnumber = $_POST['userpnumber'];
   $message = $_POST['message'];

   $sql = "INSERT INTO `contact` ( `username`, `usermail`, `userpnumber`, `message`, `time`) VALUES ( '$username', '$usermail', '$userpnumber', '$message', current_timestamp());" ; 

$usermessage = mysqli_query($conn, $sql);
$showalert = "false";
$showerror = "false";

if($usermessage)
{
    $showalert = "true";
}
else
{
    $showerror = "error";
}


}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ContactUs</title>

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
 
   <style>
       #img{
           background-image: url(../images/contact.jpg);
           background-repeat: no-repeat;
           background-size: cover;
       }
    </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center bg-primary">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Coffee With Worker</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Helps</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="karigar/karigar.html">Karigar</a></li>
              <li><a href="plumber/plumber.html">Plumber</a></li>
              <li><a href="electrician/electrician.html">Electrician</a></li>
              <li><a href="dishwaser/dishwaser.html">Dishwasher</a></li>
              <li><a href="labour/labour.html">Labour</a></li>
              <li><a href="rotimaker/rotimaker.html">Rotimaker</a></li>
              <li><a href="cleaner/cleaner.html">Cleaner</a></li>
              <li><a href="driver/driver.html">Driver</a></li>
              <li><a href="makeupartist/makeupartist.html">makeupartist</a></li>
              <li><a href="carpainter/carpainter.html">Carpainter</a></li>
              <li><a href="chef/chef.html">Chef</a></li>
              <li><a href="beldar/beldar.html">Beldar</a></li>
              <li><a href="waiter/waiter.html">Waiter</a></li>
              <li><a href="painter/painter.html">Painter</a></li>
              <li><a href="gas/gas.html">Gas</a></li>
              <li><a href="jamadar/jamadar.html">jamadar</a></li>
              <li><a href="laundary/laundary.html">Laundary</a></li>
              <li><a href="babysitter/babysitter.html">Babysitter</a></li>
              <li><a href="cameraman/cameraman.html">Cameraman</a></li>
              <li><a href="pandit/pandit.html">Pandit</a></li>
              <li><a href="maid/maid.html">maid</a></li>
            </ul>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<br><br><br>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block" id="img"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">ContactUs</h1>
                        </div>
                        <form  action="" method="POST"  class="user">
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3">
                                    <input type="text" class="form-control form-control-user" name="username" id="username"  placeholder="Enter Name" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control form-control-user"   name="usermail" id="usermail" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control form-control-user" name="userpnumber" id="userpnumber"  placeholder="Enter Phone Number" required>
                            </div>
                            <div class="form-group mb-3">
                               <textarea class="form-control " name="message" id="message" cols="70" rows="5" placeholder="Enter The Message"></textarea>
                            </div>
                       <button class="btn btn-primary btn-user btn-block mb-3">ContactUs</button> 
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




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
              <li><i class="bx bx-chevron-right"></i> <a href="../index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../blog/blog.html">Blogs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../php/contact.php">Contact</a></li>
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
              <li><a href="../chef/chef.html">Chef</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
             
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
          Designed by <a href="../index.html">coffeewithworker</a>
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