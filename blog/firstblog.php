<?php

include 'dbconn.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$err = "";
$username = $_POST['username'];
$usermail = $_POST['usermail'];
$comment = $_POST['comment'];

$sql = "INSERT INTO `blog` ( `username`, `usermail`, `comment`, `time`) VALUES ( '$username', '$usermail', '$comment', current_timestamp());";

$result = mysqli_query($conn,$sql);

$showalert= "false";
$showerror = "false";

if($result)
{
echo 'Successfully Add Your Comment';
}
else
{
$showerror = "errror";
}

}

?>







<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>First - Blog</title>
  

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
          
          <li><a href="blog.html">Blog</a></li>
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

          <li><a class="nav-link scrollto" href="../php/contact.php">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../index.html">Home</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li>Blog </li>
        </ol>
        <h2>Blog Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                </p>

                <p>
                  Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                </p>

                <blockquote>
                  <p>
                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                  </p>
                </blockquote>

                <p>
                  Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                  Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                  Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                </p>

                <h3>Et quae iure vel ut odit alias.</h3>
                <p>
                  Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                  Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                  Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                </p>
                <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

                <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                <p>
                  Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                  Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                </p>
                <p>
                  Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                </p>

              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>

            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div><!-- End blog author bio -->

            <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block"></div> -->
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Queries</h1>
                        </div>
                        <form  action="" method="POST" class="user">
                           
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control form-control-user" name="username" id="username"  placeholder="Enter Name" required>
                                </div>
                            
                            <div class="form-group mb-3">
                                <input type="email" class="form-control form-control-user"   name="usermail" id="usermail" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group mb-3">
                               <textarea class="form-control " name="comment" id="comment" cols="70" rows="5" placeholder="Enter The Message"></textarea>
                            </div>
                       <button class="btn btn-primary btn-user btn-block mb-3">Leave a Comment</button> 
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

    

          </div><!-- End blog entries list -->



          
          <div class="col-lg-4">

            <div class="sidebar">

              

             

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                  <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                  <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->

            

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

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