<?php /* Template Name: About */ ?>

<?php get_header(); ?>

 <!-- About Section
   ================================================== -->
    <section id="about">

        <div class="row">

            <div class="three columns">
                <img class="profile-pic"  src="<?php echo get_bloginfo('template_directory'); ?>/images/profilepic.jpg" alt="" />
            </div>

            <div class="nine columns main-col">
                <h2>
                    <?php the_field( 'title_1' ) ?>
                </h2>
                <p>
                    <?php the_field( 'content_1' ) ?>
                </p>

                <div class="row">

                    <div class="columns contact-details">

                        <h2><?php the_field( 'title_2' ) ?></h2>
                        <p class="address">
                                <span><?php the_field( 'content_2' ) ?></span><br>
                        </p>
                    </div>

                    <div class="columns download">
                        <p>
                        
                        
                            <a href="<?php the_field( 'download_cv' ) ?>" class="button" target="_blank"><i class="fa fa-download"></i>Download CV</a>
                        </p>
                    </div>

                </div> <!-- end row -->

            </div> <!-- end .main-col -->

        </div>

    </section> <!-- About Section End-->


<?php get_footer(); ?>
