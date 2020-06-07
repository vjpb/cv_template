<?php /* Template Name: About */ ?>
 <!--
 * Template Name:  page-about.php
 *
 * This template works to complete the custom fields of the about page. This template receive the information with the help of the "Custom Fields" plugin. The variables used are:
  - the_field(profile_pic): the profile picture, the_field(title_1): the title, the_field(content_1): description , the_field(title_2) and the_field(content_2): for contact details, the_field(donwnload): to choose the file to download  . 
 *
 * @CV-Template
 * @since version 1.0 -->

<?php get_header(); ?>

 <!-- About Section
   ================================================== -->
    <section id="about">

        <div class="row">

            <div class="three columns">
                <img class="profile-pic"  src="<?php the_field( 'profile_pic' ) ?>" />
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
