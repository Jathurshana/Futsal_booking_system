<?php

@include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PLAYME - NEWS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">playme@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+94 74 123 55 88</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        
        <h1>PlayMe<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="index.html">About</a></li>
          <li><a href="#grounds">Grounds</a></li>
          <li><a href="index.html">Crew</a></li>
          <li><a href="index.html">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>PLAYME - NEWS</h2>
              <p>In this page you can read about latest sports news. </p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="uploaded_img/<?php echo $row['main_image']; ?>" height="100" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php echo $row['title']; ?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?php echo $row['writer']; ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01"><?php echo $row['date']; ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#"><?php echo $row['comments']; ?></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                 <?php echo $row['p1']; ?>
                </p>

                <p>
                 <?php echo $row['p2']; ?>
                </p>

                <blockquote>
                  <p>
                   <?php echo $row['block']; ?>
                  </p>
                </blockquote>

                <p>
                  <?php echo $row['p3']; ?>
				</p>
					
				<p>	
				  <?php echo $row['p4']; ?>
                </p>
				  

                <h3><?php echo $row['heding1']; ?></h3>
				  
                <p>
                 <?php echo $row['p5']; ?>
				</p>
				  
				<p>
				 <?php echo $row['p6']; ?>
					
                </p>
                <img src="uploaded_img/<?php echo $row['main_image']; ?>" height="100" alt="" class="img-fluid">

                <h3><?php echo $row['heading2']; ?></h3>
                <p>
                  <?php echo $row['h7']; ?>
                </p>
               

              </div><!-- End post content -->

              <div class="meta-bottom">
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
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

            <!-- End post author -->

            <div class="comments">
<!-- reply want to display here -->
              <div class="reply-form">

                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. </p>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input name="website" type="text" class="form-control" placeholder="Your Website">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment" required></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div>

            </div><!-- End blog comments -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">Cricket <span>(25)</span></a></li>
                  <li><a href="#">Foot Ball <span>(12)</span></a></li>
                  <li><a href="#">Tennis <span>(5)</span></a></li>
                  <li><a href="#">Badminton <span>(22)</span></a></li>
                  <li><a href="#">Chess <span>(8)</span></a></li>
                  <li><a href="#">Basket Ball <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="assets/img/asiacup.webp" alt="">
                    <div>
                      <h4><a href="blog-details.html">Sri Lankans Won the ASIA</a></h4>
                      <time datetime="2020-01-01">Sept 11, 2022</time>
                    </div>
                  </div><!-- End recent post item-->

                  <!-- End recent post item-->
					<br>
					<br>
					<br>
					
                  <div class="post-item">
                    <img src="assets/img/indvssa1.jpg" alt="">
                    <div>
                      <h4><a href="blog-details_2.html">Ind vs SA</a></h4>
                      <time datetime="2020-01-01">Oct 09, 2022</time>
                    </div>
                  </div><!-- End recent post item-->

                  <!-- End recent post item-->
					<br>
					<br>
					<br>
					
                  <div class="post-item">
                    <img src="assets/img/ausvseng1.jpg" alt="">
                    <div>
                      <h4><a href="blog-details_3.html">Aus vs Eng</a></h4>
                      <time datetime="2020-01-01">Oct 10, 2022</time>
                    </div>
                  </div><!-- End recent post item-->

                </div>

              </div><!-- End sidebar recent posts-->

             <!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>PLAYME</span>
          </a>
          <p>PLAYME futsal booking system , created for book grounds as an easyway for players and now it's have many offers and promotions too. You can enjoy with your teams.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="index.html">About</a></li>
            <li><a href="index.html">Grounds</a></li>
            <li><a href="index.html">Crew</a></li>
            <li><a href="index.html">Contact</a></li>
          </ul>
        </div>

        

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Main Street <br>
            COolombo 01<br>
            Sri Lanka <br><br>
            <strong>Phone:</strong> +94 74 123 55 88<br>
            <strong>Email:</strong> playme@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>PLAYME</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="index.html">PLAYME</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
