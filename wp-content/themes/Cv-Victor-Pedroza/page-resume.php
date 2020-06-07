<?php /* Template Name: Resume */ ?>
 <!--
 * Template Name:  page-resume.php
 *
 * This template works to complete the custom fields of the resume page. This template receive the information with the help of the "Custom Fields" plugin. The variables used are: 
    ---Skills
 - the_field(skills_description): for the skills description, the_field() using loop for to add skill title, the_field(porcent): using a loop to add the expandable bars.
    ---Education
 - the_field( 'university' ): using loop for to add educations fields, the_field('degree'): using loop to add degrees fields; the_field( 'start_study' ), the_field( 'graduation_date' ), the_field( 'studying' ): using to set data of start, finish or current, the_field( 'description' ): using to write description about study.
    ---Education
 - the_field( 'name_work' ): using loop for to add work fields, the_field('job'): using loop to add jobs fields; the_field( 'start_date' ), the_field( 'finish_date' ), the_field( 'current_job' ): using to set data of start, finish or current, the_field( 'responsibility' ): using to write description about work.
 *
 * @CV-Template
 * @since version 1.0 -->

<?php get_header(); ?>

<!-- Resume Section
================================================== -->
<section id="resume">

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

                </ul>

            </div><!-- end skill-bars -->

        </div> <!-- main-col end -->

    </div> <!-- End skills -->


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
                                <?php the_field( 'studying' ) ?>
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
            
            <div class="row item">
                <?php $query = new WP_Query( 'cat= 6' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>   

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



</section> <!-- Resume Section End-->

<?php get_footer(); ?>
