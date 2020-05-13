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

            <div class="row item">

                <div class="twelve columns">

                    <h3>Awesome Design Studio</h3>
                    <p class="info">Senior UX Designer <span>&bull;</span> <em class="date">March 2010 - Present</em></p>

                    <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                    ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Nullam dictum felis eu pede mollis pretium.
                    </p>

                </div>

            </div> <!-- item end -->

            <div class="row item">

                <div class="twelve columns">

                    <h3>Super Cool Studio</h3>
                    <p class="info">UX Designer <span>&bull;</span> <em class="date">March 2007 - February 2010</em></p>

                    <p>
                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                    nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                    ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat
                    </p>

                </div>

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

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
            voluptatem sequi nesciunt.
            </p>

            <div class="bars">

                <ul class="skills">
                    <li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
                    <li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
                    <li><span class="bar-expand wordpress"></span><em>Wordpress</em></li>
                    <li><span class="bar-expand css"></span><em>CSS</em></li>
                    <li><span class="bar-expand html5"></span><em>HTML5</em></li>
                    <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
                </ul>

            </div><!-- end skill-bars -->

        </div> <!-- main-col end -->

    </div> <!-- End skills -->

</section> <!-- Resume Section End-->

<?php get_footer(); ?>
