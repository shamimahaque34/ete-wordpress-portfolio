<?php get_header();?>

<?php
			/*
				Template Name:Contact Page
			*/
		?>




  <body onload="myFunction()">
    <!--Preloader Starts Here-->
    <!-- <div id="loading"></div> -->
    <!--Preloader Ends Here-->

    <!--Header Starts Here-->
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand logo" href="index.html">
            <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo" />
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="collapse navbar-collapse menu"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="portfolio.html">Portfolio</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!--Header Ends Here-->

    <!--Page Title Starts Here-->
    <div class="container section-padding">
      <div class="row">
        <div class="col-md-12 page-title">
          <h3>Contact Me</h3>
        </div>
      </div>
    </div>
    <!--Page Title Ends Here-->

    <!--Contact-Me Starts Here-->

    <div class="container">
      <div class="row">
        <div class="col-md-6 details-left connect-info">
          <div class="info-item">
            <strong>Phone</strong>
            <p class="mb-0">+880 1313 924 759</p>
          </div>

          <div class="info-item">
            <strong>Email</strong>
            <p class="mb-0">haqueshamima34@gmail.com</p>
          </div>

          <div class="info-item">
            <strong>Address</strong>
            <p class="mb-0">68/8-B,Zigatola,Dhanmondi,Dhaka-1209,Bangladesh</p>
          </div>
        </div>

        <div class="col-md-6">
          <form class="contact-form">
            <input type="text" name="name" placeholder="Your name" />
            <input type="text" name="email" placeholder="Your email" />
            <textarea
              name="message"
              rows="4"
              placeholder="Your message"
            ></textarea>

            <button type="submit" name="send" class="main-button">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
    <!--Contact-Me Ends Here-->

    <!--Map Starts Here-->
    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.371779751612!2d90.36717958770684!3d23.740749685671897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4a5de53a75%3A0xf27ef22645e193c6!2sJigatola%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1720636046317!5m2!1sen!2sbd"
        width="100%"
        height="450"
        frameborder="0"
        style="border: 0;"
        allowfullscreen=""
      ></iframe>
    </div>
    <!--Map Ends Here-->

    <?php get_footer();?>
