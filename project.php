<!DOCTYPE html>
<html lang="en">

<head>
  <!-- external header start from here -->
  <?php include 'include/externalHeaderLinks.php' ?>
  <!-- external header end from here -->
</head>

<body>
  <div class="body-inner">
   <!-- navbar biggen -->
   <?php include 'include/navigation.php'; ?>
    <!-- navbar end here -->

    <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Project</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Projects</a></li>
                  </ol>
                </nav>
              </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Banner text end -->
    </div><!-- Banner area end -->
    <!-- project detail start here -->
    <br><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-5">
          <div class="banner-carousel banner-carousel-1 mb-0">
            <div class="banner-carousel-item" style="background-image:url(images/projects/project1.jpg)">
            </div>

            <div class="banner-carousel-item" style="background-image:url(images/projects/project2.jpg)">
            </div>

            <div class="banner-carousel-item" style="background-image:url(images/projects/project3.jpg)">
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <h3 class="project-main-heading">CAPITAL TELTWAY BUILDING</h3>
          <p class="project-main-para">Morbi turpis nisl, auctor ut nisl vel, pellentesque euismod nunc nunc accumsan imperdiet.</p>
          <p class="project-subheading">Client</p>
          <p class="project-subpara">Pransbay Powers Authority</p>
          <p class="project-subheading">Architect</p>
          <p class="project-subpara">Dlarke Pelli Incorp</p>
          <p class="project-subheading">Location</p>
          <p class="project-subpara">McLean, VA</p>
          <p class="project-subheading">Size</p>
          <p class="project-subpara">65,000 SF</p>
          <p class="project-subheading">Year Completed</p>
          <p class="project-subpara">2015</p>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
    <br><br>
    <!-- Start of Footer section-->
    <footer id="footer" class="footer bg-overlay">
      <div class="footer-main">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 footer-widget footer-about">
              <h3 class="widget-title">About Us</h3>

              <p>Newway does all the work from choosing a good property to giving you good benefits and making you a property owner.</p>
              <div class="footer-social">
                <ul>
                  <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>
                </ul>
              </div><!-- Footer social end -->
            </div><!-- Col end -->

            <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
              <h3 class="widget-title">Working Hours</h3>
              <div class="working-hours">
                We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our Hotline and Contact form.
                <br><br> Monday - Friday: <span class="text-right">10:00 - 18:00 </span>
                <br> Saturday: <span class="text-right">10:00 - 18:00 </span>
                <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
              </div>
            </div><!-- Col end -->

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
              <h3 class="widget-title">Services</h3>
              <ul class="list-arrow">
                <li><a href="#">Pre-Construction</a></li>
                <li><a href="#">General Contracting</a></li>
                <li><a href="#">Construction Management</a></li>
                <li><a href="#">Design and Build</a></li>
                <li><a href="#">Self-Perform Construction</a></li>
              </ul>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Footer main end -->

      <div class="copyright">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="copyright-info text-center text-md-left">
                <span>Copyright &copy; <script>
                    document.write(new Date().getFullYear())
                  </script>, Designed &amp; Developed by <a href="#">ThinkBoa</a></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="footer-menu text-center text-md-right">
                <ul class="list-unstyled">
                  <li><a href="index">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Vision</a></li>
                  <li><a href="contact">Contact</a></li>
                </ul>
              </div>
            </div>
          </div><!-- Row end -->

          <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
            <button class="btn btn-primary" title="Back to Top">
              <i class="fa fa-angle-double-up"></i>
            </button>
          </div>

        </div><!-- Container end -->
      </div><!-- Copyright end -->
    </footer><!-- Footer end -->
  </div>
  <!-- project detail end here -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>
</body>

</html>