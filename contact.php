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
                <h1 class="banner-title">Contact</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                  </ol>
                </nav>
              </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
      <div class="container">

        <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Reaching our Office</h2>
            <h3 class="section-sub-title">Find Our Location</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
          <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
              <span class="ts-service-icon icon-round">
                <i class="fas fa-map-marker-alt mr-0"></i>
              </span>
              <div class="ts-service-box-content">
                <h4>Visit Our Office</h4>
                <p>Indore</p>
              </div>
            </div>
          </div><!-- Col 1 end -->

          <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
              <span class="ts-service-icon icon-round">
                <i class="fa fa-envelope mr-0"></i>
              </span>
              <div class="ts-service-box-content">
                <h4>Email Us</h4>
                <p><a href="mailto:newwaycm1@gmail.com">newwaycm1@gmail.com</a></p>
              </div>
            </div>
          </div><!-- Col 2 end -->

          <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
              <span class="ts-service-icon icon-round">
                <i class="fa fa-phone-square mr-0"></i>
              </span>
              <div class="ts-service-box-content">
                <h4>Call Us</h4>
                <p><a href="tel:(+91) 8349187247">(+91) 8349187247</a></p>
              </div>
            </div>
          </div><!-- Col 3 end -->

        </div><!-- 1st row end -->

        <div class="gap-60"></div>

        <div class="gap-40"></div>

        <div class="row">
          <div class="col-md-12">
            <h3 class="column-title">We love to hear</h3>
            <form id="contact-form" action="sentMail.php" method="post" role="form">
              <div class="error-container"></div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Subject</label>
                    <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
              </div>
              <div class="text-right"><br>
                <button class="btn btn-primary solid blank" type="submit">Send Message</button>
              </div>
            </form>
          </div>

        </div><!-- Content row -->
      </div><!-- Conatiner end -->
    </section><!-- Main container end -->

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
                  <li><a href="#">Contact</a></li>
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

    <!-- Javascript Files -->

    <!-- initialize jQuery Library -->
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

  </div><!-- Body inner end -->
</body>

</html>