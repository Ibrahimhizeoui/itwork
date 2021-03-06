 <?php 
get_header();?>
 <header style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg');">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Your Favorite Source of Free Bootstrap Themes</h1>
                <hr>
                <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    
        <?php
        // The Query
        $args=array('page_id'=>47);
        $the_query = new WP_Query( array( 'page_id' => 47 ) );
        //var_dump($the_query);
        // The Loop
        if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) { $the_query->the_post();
            the_content();
         }
        wp_reset_postdata();}


          ?>


          ?>
           

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter ">
                <?php
 

                 $args = array(
                'post_type' => 'post',
                
                'author_name' => 'ibrahimhizeoui',
                 'category_name' => 'portfolio',
                 );
 
                 // Instantiate new query instance.
                 $my_query = new WP_Query( $args );
                 
                 if ( $my_query->have_posts() ){
 
                  while ( $my_query->have_posts() ){ $my_query->the_post();
 
                  ?>
                 <div class="col-lg-4 col-sm-6">
                    <a href="<?php the_permalink(); ?> " class="portfolio-box">
                        <?php the_post_thumbnail('small_thumbnail');?>
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    <?php the_title(); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                  <?php
                  }
                  }
              
 
                 // Reset the `$post` data to the current post in main query.
                  wp_reset_postdata();
                 ?>
                
                
                
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i><br><br><br>
                      <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <?php echo do_shortcode('[contact-form-7 id="50" title="Contact form 1"]' );?>
                  </form>

                  <hr>
                    <h3>Our Social Sites</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
                  </ul>
                </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>