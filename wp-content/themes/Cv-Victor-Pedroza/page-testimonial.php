<?php /* Template Name: Testimonial */ ?>
<?php get_header(); ?>
<!-- Call-To-Action Section
================================================== -->
<section id="call-to-action">

    <div class="row">

        <div class="two columns header-col">

            <h1><span> <?php the_field('movil_title') ?></span></h1>

        </div>

        <div class="seven columns">

            <h2><span class="lead"> <?php the_field('testimonial_title') ?></span></h2>
            <p><span class="lead"><?php the_field('testimonial_description') ?> </span></p>
        
        </div>

        <div class="three columns action"></div>

    </div>

</section> <!-- Call-To-Action Section End-->


    <!-- Testimonials Section
    ================================================== -->
<section id="testimonials">

    <div class="text-container">

        <div class="row">

            <div class="two columns header-col">

                <h1><span><?php the_field('client_title') ?> </span></h1>

            </div>

            <div class="ten columns flex-container">

                <div class="flexslider">

                    <ul class="slides">
                        <?php $query = new WP_Query( 'cat= 9' ); ?>
                        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                            <li>
                                <blockquote>
                                    <p>
                                        <?php the_field( 'client_review' ) ?>
                                    </p>
                                    <cite>
                                        <?php the_field( 'cliente_signature' ) ?>
                                    </cite>
                                </blockquote>
                            </li> <!-- slide ends -->

                        <?php endwhile; wp_reset_postdata(); endif; ?>

                    </ul>

                </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

        </div> <!-- row ends -->

    </div>  <!-- text-container ends -->

</section> <!-- Testimonials Section End-->

<?php get_footer(); ?>