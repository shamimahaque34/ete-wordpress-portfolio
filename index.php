
<?php get_header(); ?>

<?php
	/*
	   Template Name:Home Page
   */
		?>
<body <?php body_class();?>>

<!--Preloader Starts Here-->
<!-- <div id="loading"></div> -->
<!--Preloader Ends Here-->

<!--Header Starts Here-->
<header>
    <div class="container main-menu">
        <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand logo" href="<?php home_url('/');?>">
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!--       <h2>Shamima Haque</h2>-->
        </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php wp_nav_menu(array(
	'theme_location'=>'header_menu',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse menu',
    'container_id'    => 'navbarSupportedContent',
    'menu_class'      => 'navbar-nav ml-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
	));?>

  <!-- <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="">Portfolio</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="">Contact</a>
      </li>
    </ul>
  </div> -->
</nav>
    </div>
</header>
<!--Header Ends Here-->

<!--Banner Starts Here-->
<div class="container section-padding banner">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 banner-content">

           <h3>Looking for...</h3>

            <h1>
                <span class="type"></span>
            </h1>


                <p>Let me provide <span>High-Quality</span> web developement services  <br>
                   at an <span>Affordable</span> cost.
                </p>

            <a href="about.html"><button type="button" class="main-button">About</button></a>
            <a href="portfolio.html">
            <button type="button" class="another-button"> Recent Projects</button></a>

        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 banner-img">
            <img src="<?php echo get_template_directory_uri();?>/images/banner-img.svg" alt="img">
        </div>
    </div>
</div>
<!--Banner Ends Here-->

<!--Project-idea Starts Here-->
    <section class="project-idea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 promote-content">
                    <h3>Have any project idea?</h3>
                    <p>Let's bring it to life together. I thrive on turning visions into reality. Whether you're an individual with a groundbreaking concept or a business seeking innovative solutions, we're here to transform ideas into impactful projects.Get in touch today and let's make your project idea a resounding success."</p>
                        <a href="contact.html">
                           <button type="button" class="main-button">Get A Quote</button>
                        </a>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 content-preview">
                    <div class="d-flex justify-content-end">
                        <div class="content-preview-thumb">
                        <img src="<?php echo get_template_directory_uri();?>/images/project-idea.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--Project-idea Ends Here-->

<!--Testimonial Starts Here-->
 <div class="container section-padding">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                    <div class="client">
                        <img src="<?php echo get_template_directory_uri();?>/images/profile.jpeg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <p class="description">
                          I'm a Web Developer, based in Dhaka, Bangladesh. I did my bachelor
                          in Computer Science and Engineering. I also underwent several
                          trainings in Web Development at various renowned training
                          institutions. I'm expert in HTML/HTML5, CSS/CSS3, Bootstrap 4,
                          Wordpress Theme Customization, JavaScript, Php, Laravel and more.
                        </p>
                        <h3 class="client-title">Shamima
                            <small class="post">Web Developer</small>
                        </h3>
                    </div>
                </div>

                <div class="testimonial">
                    <div class="client">
                        <img src="<?php echo get_template_directory_uri();?>/images/profile.jpeg"b alt="">
                    </div>
                    <div class="testimonial-content">
                        <p class="description">
                          I'm a Web Developer, based in Dhaka, Bangladesh. I did my bachelor
                          in Computer Science and Engineering. I also underwent several
                          trainings in Web Development at various renowned training
                          institutions. I'm expert in HTML/HTML5, CSS/CSS3, Bootstrap 4,
                          Wordpress Theme Customization, JavaScript, Php, Laravel and more.
                        </p>
                        <h3 class="client-title">Shamima
                            <small class="post">Web Developer</small>
                        </h3>
                    </div>
                </div>

                <div class="testimonial">
                    <div class="client">
                        <img src="<?php echo get_template_directory_uri();?>/images/profile.jpeg"b alt="">
                    </div>
                    <div class="testimonial-content">
                        <p class="description">
                          I'm a Web Developer, based in Dhaka, Bangladesh. I did my bachelor
                          in Computer Science and Engineering. I also underwent several
                          trainings in Web Development at various renowned training
                          institutions. I'm expert in HTML/HTML5, CSS/CSS3, Bootstrap 4,
                          Wordpress Theme Customization, JavaScript, Php, Laravel and more.
                        </p>
                        <h3 class="client-title">Shamima
                            <small class="post">Web Developer</small>
                        </h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Portfolio Ends Here-->

<?php get_footer(); ?>



