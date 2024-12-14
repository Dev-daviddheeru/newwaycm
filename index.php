<!DOCTYPE html>
<html lang="en">
<?php
// Check for the status query parameter
if (isset($_GET['status'])) {
  // Get the status value
  $status = $_GET['status'];

  // Set notification message based on the status
  if ($status == 'success') {
    $notification = "Your message has been sent successfully!";
  } elseif ($status == 'error') {
    $notification = "There was an error while sending your message. Please try again.";
  } else {
    $notification = '';
  }
} else {
  $notification = '';
}
// header("Location: index");
?>

<head>
  <!-- external header start from here -->
  <?php include 'include/externalHeaderLinks.php' ?>
  <!-- external header end from here -->
  <style>
    /* Notification styling */
    .notification {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: #28a745;
      color: white;
      padding: 15px;
      border-radius: 5px;
      font-size: 16px;
      display: none;
      z-index: 9999;
    }

    .notification p {
      margin: 0;
      color: #fff;
    }
  </style>
</head>

<body id="index">
  <div class="body-inner">
    <!-- Notification Popup -->
    <?php if ($notification != '') : ?>
      <div id="notification" class="notification">
        <p><?php echo $notification; ?></p>
      </div>
    <?php endif; ?>
    <!-- navbar biggen -->
    <?php include 'include/navigation.php'; ?>
    <!-- navbar end here -->
    <div class="banner-carousel banner-carousel-1 mb-0">
      <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg1.jpg)">
        <div class="slider-content">
          <div class="container h-100">
            <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft">Years of excellence in</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">Construction Industry</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                  <a href="#" class="slider btn btn-primary">Our Services</a>
                  <a href="#" class="slider btn btn-primary border">Contact Now</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg2.jpg)">
        <div class="slider-content text-left">
          <div class="container h-100">
            <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2>
                <h3 class="slide-title" data-animation-in="fadeIn">When Service Matters</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Welcome to New way of investing in property
                  with Newway company.</h3>
                <p data-animation-in="slideInRight">
                  <a href="#" class="slider btn btn-primary border">Our Services</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg3.jpg)">
        <div class="slider-content text-right">
          <div class="container h-100">
            <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title" data-animation-in="slideInDown">Meet Our Engineers</h2>
                <h3 class="slide-sub-title" data-animation-in="fadeIn">We believe sustainability</h3>
                <p class="slider-description lead" data-animation-in="slideInRight">We will deal with your failure that
                  determines how you achieve success.</p>
                <div data-animation-in="slideInLeft">
                  <a href="#" class="slider btn btn-primary" aria-label="contact-with-us">Stay in touch</a>
                  <a href="#" class="slider btn btn-primary border" aria-label="learn-more-about-us">See more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="call-to-action-box no-padding">
      <div class="container">
        <div class="action-style-box">
          <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">We understand your needs on construction</h3>
              </div>
            </div><!-- Col end -->
            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark bg-dark" href="#">Think Once</a>
              </div>
            </div><!-- col end -->
          </div><!-- row end -->
        </div><!-- Action style box -->
      </div><!-- Container end -->
    </section><!-- Action end -->

    <section id="ts-features" class="ts-features">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="ts-intro">
              <h2 class="into-title">About Us</h2>
              <h3 class="into-sub-title">We deliver</h3>
              <p>Newway does all the work from choosing a good property to giving you good benefits and making you a
                property owner.</p>
            </div><!-- Intro box end -->

            <div class="gap-20"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fas fa-trophy"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3 class="service-box-title">Assisting in buying property according to oppertunities</h3>
                  </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <!-- col end -->
            </div><!-- Content row 1 end -->

            <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fas fa-thumbs-up"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3 class="service-box-title">"Sell" at Good Market Price.</h3>
                  </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fas fa-users"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3 class="service-box-title">Make good profit by selling property.</h3>
                  </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
            </div><!-- Content row 1 end -->
          </div><!-- Col end -->

          <div class="col-lg-6 mt-4 mt-lg-0">
            <h3 class="into-sub-title">Our Values</h3>
            <p>"Newway is your own company to help you choose your property by becoming a property advisor"</p>

            <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Safety
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                  <div class="card-body">
                    We believe in keeping you safe
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Customer Service
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                  <div class="card-body">
                    We providing to 24X7 seervices and commitment to delever.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Integrity
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                  <div class="card-body">
                    Listen with cusiosity..<br>
                    Speak with honesty..<br>
                    Act with integrity..
                  </div>
                </div>
              </div>
            </div>
            <!--/ Accordion end -->

          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </section><!-- Feature are end -->

    <section id="facts" class="facts-area dark-bg">
      <div class="container">
        <div class="facts-wrapper">
          <div class="row">
            <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp">Soon</span></h2>
                <h3 class="ts-facts-title">Total Projects</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="10">0</span></h2>
                <h3 class="ts-facts-title">Staff Members</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp">24X7</span></h2>
                <h3 class="ts-facts-title">Support</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="100">0</span>%</h2>
                <h3 class="ts-facts-title">Happyness</h3>
              </div>
            </div><!-- Col end -->

          </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Facts end -->

    <section id="ts-service-area" class="ts-service-area pb-0">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">We Are Specialists In</h2>
            <h3 class="section-sub-title">What We Do</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
          <div class="col-lg-4">
            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Home Construction</a></h3>
                <p>A house is made of <b>Breaks & Beams</b>
                  A home is made of <i>Hopes & Dreams</i></p>
              </div>
            </div><!-- Service 1 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Building Remodels</a></h3>
                <p>"We listen to your needs, design it to your specificatios, and build it to your DREAMS!"</p>
              </div>
            </div><!-- Service 2 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon3.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Interior Design</a></h3>
                <p>Comming Soon..</p>
              </div>
            </div><!-- Service 3 end -->

          </div><!-- Col end -->

          <div class="col-lg-4 text-center">
            <img loading="lazy" class="img-fluid" src="images/services/service-center.jpg" alt="service-avater-image">
          </div><!-- Col end -->

          <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Exterior Design</a></h3>
                <p>...A dirty exterior is a great enemy to beauty of all descriptrions</p>
              </div>
            </div><!-- Service 4 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon5.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Renovation</a></h3>
                <p>When it's time to makeover your house again, give up a shout. we'd love to help your home (and
                  wallet) happy</p>
              </div>
            </div><!-- Service 5 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon6.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Safety Management</a></h3>
                <p>
                <blockquote>"Safety is something that happens between your ears, not something you hold in your hands.”
                  Be safe</blockquote>
                </p>
              </div>
            </div><!-- Service 6 end -->
          </div><!-- Col end -->
        </div><!-- Content row end -->

      </div>
      <!--/ Container end -->
    </section><!-- Service end -->

    <section id="project-area" class="project-area solid-bg">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12">
            <h2 class="section-title">Work of Excellence</h2>
            <h3 class="section-sub-title">Plots saller</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
          <div class="col-12">
            <div class="shuffle-btn-group">
              <label class="active" for="all">
                <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
              </label>
              <label for="commercial">
                <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Commercial
              </label>

              <label for="infrastructure">
                <input type="radio" name="shuffle-filter" id="infrastructure" value="infrastructure">Infrastructure
              </label>
              <label for="residential">
                <input type="radio" name="shuffle-filter" id="residential" value="residential">Residential
              </label>
              <!--  <label for="healthcare">
            <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Healthcare
          </label> -->
            </div><!-- project filter end -->


            <div class="row shuffle-wrapper">
              <div class="col-1 shuffle-sizer"></div>

              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/project1.jpg" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/project1.jpg" alt="project-img">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="#">Capital Teltway Building</a>
                      </h3>
                      <p class="project-cat">Commercial, Interiors</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 1 end -->

              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/project2.jpg" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/project2.jpg" alt="project-img">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="#">Ghum Touch Hospital</a>
                      </h3>
                      <p class="project-cat">Healthcare</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 2 end -->

              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/project3.jpg" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/project3.jpg" alt="project-img">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="#">TNT East Facility</a>
                      </h3>
                      <p class="project-cat">Government</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 3 end -->

              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/project4.jpg" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/project4.jpg" alt="project-img">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="#">Narriot Headquarters</a>
                      </h3>
                      <p class="project-cat">Infrastructure</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 4 end -->

              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/project5.jpg" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/project5.jpg" alt="project-img">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="#">Kalas Metrorail</a>
                      </h3>
                      <p class="project-cat">Infrastructure</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 5 end -->

              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;residential&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/project6.jpg" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/project6.jpg" alt="project-img">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="#">Ancraft Avenue House</a>
                      </h3>
                      <p class="project-cat">Residential</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 6 end -->
            </div><!-- shuffle end -->
          </div>

          <div class="col-12">
            <div class="general-btn text-center">
              <a class="btn btn-primary" href="#">View All Projects</a>
            </div>
          </div>

        </div><!-- Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Project area end -->

    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <h3 class="column-title">Our Thoughts</h3>
            <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                  <span class="quote-text">
                    The best... Reliable and reliable investment in this land... is the land itself
                  </span>

                  <div class="quote-item-footer">
                    <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonials2.jpg" alt="testimonial">
                    <div class="quote-item-info">
                      <h3 class="quote-author">Tarun Pawar</h3>
                      <span class="quote-subtext">M.D</span>
                    </div>
                  </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                  <span class="quote-text">
                    No factory in the world can produce land, The population is Increasing, as much land is falling
                    short, invest in land. its prices will always go up.
                  </span>

                  <div class="quote-item-footer">
                    <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.jpg" alt="testimonial">
                    <div class="quote-item-info">
                      <h3 class="quote-author">Vipin Kushwaha</h3>
                      <span class="quote-subtext">Sales Director </span>
                    </div>
                  </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->

              <div class="item">
                <div class="quote-item">
                  <span class="quote-text">
                    We build the trust because The world most expensive thing is trust. Cheap people can't afford it
                  </span>

                  <div class="quote-item-footer">
                    <img loading="lazy" class="testimonial-thumb" src="images/clients/harsat.png" alt="testimonial">
                    <div class="quote-item-info">
                      <h3 class="quote-author"></h3>
                      <span class="quote-subtext">...</span>
                    </div>
                  </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->

            </div>
            <!--/ Testimonial carousel end-->
          </div><!-- Col end -->



        </div>
        <!--/ Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Content end -->

    <section class="subscribe no-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="subscribe-call-to-acton">
              <h3>We are just one call away</h3>
              <h4>+91 8349187247</h4>
            </div>
          </div><!-- Col end -->

          <div class="col-md-8">
            <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                <p class="text-white">Latest updates and news</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="#" method="post">
                  <div class="form-group">
                    <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                    <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
                  </div>
                </form>
              </div>
            </div><!-- Newsletter end -->
          </div><!-- Col end -->

        </div><!-- Content row end -->
      </div>
      <!--/ Container end -->
    </section>
    <!--/ subscribe end -->

    <section id="news" class="news">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Work of Excellence</h2>
            <h3 class="section-sub-title">Upcomming Projects</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
              <div class="latest-post-media">
                <a href="#" class="latest-post-img">
                  <img loading="lazy" class="img-fluid" src="images/news/news1.jpg" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                  <a href="#" class="d-inline-block"></a>
                </h4>
                <div class="latest-post-meta">
                  <span class="post-item-date">
                    <i class="fa fa-clock-o"></i>
                  </span>
                </div>
              </div>
            </div><!-- Latest post end -->
          </div><!-- 1st post col end -->

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
              <div class="latest-post-media">
                <a href="#" class="latest-post-img">
                  <img loading="lazy" class="img-fluid" src="images/news/news2.jpg" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                  <a href="#" class="d-inline-block"></a>
                </h4>
                <div class="latest-post-meta">
                  <span class="post-item-date">
                    <i class="fa fa-clock-o"></i>
                  </span>
                </div>
              </div>
            </div><!-- Latest post end -->
          </div><!-- 2nd post col end -->

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
              <div class="latest-post-media">
                <a href="#" class="latest-post-img">
                  <img loading="lazy" class="img-fluid" src="images/news/news3.jpg" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                  <a href="#" class="d-inline-block"></a>
                </h4>
                <div class="latest-post-meta">
                  <span class="post-item-date">
                    <i class="fa fa-clock-o"></i>
                  </span>
                </div>
              </div>
            </div><!-- Latest post end -->
          </div><!-- 3rd post col end -->
        </div>
        <!--/ Content row end -->

        <div class="general-btn text-center mt-4">
          <a class="btn btn-primary" href="#">See All Posts</a>
        </div>
      </div>
      <!--/ Container end -->
    </section>
    <!--/ News end -->

    <!-- Start of Footer section-->
    <?php include 'include/footer.php'; ?>
    <!-- Footer end -->
    <script>
      <?php if ($notification != '') { ?>
        // Show the notification
        document.getElementById('notification').style.display = 'block';

        // Automatically hide the notification after 5 seconds
        setTimeout(function() {
          document.getElementById('notification').style.display = 'none';
        }, 5000);
      <?php } ?>
    </script>
</body>

</html>