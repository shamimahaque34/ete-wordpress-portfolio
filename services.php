<?php get_header(); ?>

<?php
			/*
				Template Name:Services Page
			*/
		?>




    <!--Page Title Starts Here-->
    <div class="container section-padding">
        <div class="row">
            <div class="col-md-12 page-title">
                <h3>My Services</h3>
            </div>
        </div>
    </div>
    <!--Page Title Ends Here-->

    <!--Services Starts Here-->
    <div class="container services-section-padding">
        <div class="row">
            <?php  $options = get_option( 'my_framework' ); 
            $hello_values = $options['opt-group-1'];
            
                foreach($hello_values as $hello_key1=> $hello){ ?>

            <div class="col-md-4">
                <div class="single-service">
                    <div class="service-icon">
                        <i class="<?php echo $hello['opt-icon-1']; ?>"></i>
                    </div>
                    <h4><?php echo $hello['opt-text']; ?></h4>
                    <p><?php echo $hello['opt-textarea']; ?></p>
                    <div class="service-hover"></div>
                </div>
            </div>

            <?php
            }
     
			?>

        </div>
        
    </div>

    <!--Services Ends Here-->

    <!--Project-idea Starts Here-->
    <section class="project-idea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 promote-content">
                    <h3>Have any project idea?</h3>
                    <p>Let's bring it to life together. I thrive on turning visions into reality. Whether you're an individual with a groundbreaking concept or a business seeking innovative solutions, we're here to transform ideas into impactful projects.Get in touch today and let's make your project idea a resounding success."</p>
                        <a href="contact.html">
                           <button type="button" class="main-button">Get A Quote</button>
                        </a>
                </div>

                <div class="col-12 col-md-6 content-preview">
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


    <?php get_footer(); ?>
