<?php /* Template Name: Resume */ ?>

<?php get_header(); ?>

<!-- Resume Section
================================================== -->
<section id="resume">

    <!-- Education
    ----------------------------------------------- -->
    <div class="row education">

        <div class="three columns header-col">
            <h1><span>Education</span></h1>
        </div>

        <div class="nine columns main-col">
            <?php $query = new WP_Query( 'cat= 2' ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>         
                <div class="row item">
                    <div class="twelve columns">
                        <h3>
                            <?php the_field( 'university' ) ?> 
                        </h3>
                        <p class="info"> 
                            <?php the_field( 'degree' ) ?> 
                            <span>
                                &bull;
                            </span> 
                            <em class="date">
                                <?php the_field( 'start_study' ) ?> - 
                                <?php the_field( 'graduation_date' ) ?>
                            </em>
                        </p>
                        <p>
                            <?php the_field( 'description' ) ?>
                        </p>   
                    </div>
                </div> <!-- item end -->
                <?php endwhile; wp_reset_postdata(); endif; ?>

        </div> <!-- main-col end -->

    </div> <!-- End Education -->


    <!-- Work
    ----------------------------------------------- -->
    <div class="row work">

        <div class="three columns header-col">
            <h1><span>Work</span></h1>
        </div>

        <div class="nine columns main-col">
            <?php $query = new WP_Query( 'cat= 6' ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>   

            <div class="row item">

                <div class="twelve columns">

                    <h3> <?php the_field( 'name_work' ) ?> </h3>
                    <p class="info">
                        <?php the_field( 'job' ) ?> 
                        <span>
                            &bull;
                        </span> 
                        <em class="date">
                            <?php the_field( 'start_date' ) ?> - 
                            <?php the_field( 'finish_date' ) ?> 
                            <?php the_field( 'current_job' ) ?>

                        </em>
                    </p>
                    <p>
                        <?php the_field( 'responsibility' ) ?>
                    </p>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>

            </div> <!-- item end -->

        </div> <!-- main-col end -->

    </div> <!-- End Work -->


    <!-- Skills
    ----------------------------------------------- -->
    <div class="row skill">

        <div class="three columns header-col">
            <h1><span>Skills</span></h1>
        </div>

        <div class="nine columns main-col">

            <p> 
                <?php the_field( 'skills_description' ) ?>
            </p>

            <div class="bars">

                <ul class="skills">
                    <?php $query = new WP_Query( 'cat= 3' ); ?>
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>         
       
                        <li>
                            <span class="bar-expand" style="width: 
                                <?php the_field( 'porcent' ) ?>%;">
                            </span>
                            <em>
                                 <?php the_title() ?>
                            </em>
                        </li>
                        
                    <?php endwhile; wp_reset_postdata(); endif; ?>

                        <!-- <li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
                        <li><span class="bar-expand wordpress"></span><em>Wordpress</em></li>
                        <li><span class="bar-expand css"></span><em>CSS</em></li>
                        <li><span class="bar-expand html5"></span><em>HTML5</em></li>
                        <li><span class="bar-expand jquery"></span><em>jQuery</em></li> -->
                </ul>

            </div><!-- end skill-bars -->

        </div> <!-- main-col end -->

    </div> <!-- End skills -->

</section> <!-- Resume Section End-->

<?php get_footer(); ?>
