<?php /* Template Name: Work */ ?>
<!--
 * Template Name:  page-work.php
 *
 * This template works to complete the custom fields of the work page. This template receive the information with the help of the "Custom Fields" plugin and loop with conditon "i++" for modals. The variables used are: 
 - the_field ('work_title'): section title, the_field(picture_1): add pictures of work, the_field( 'picture_title_1' ): to add title for the picture, the_field( 'description_of_work_1' ): to add  description of work.
 - the_field(picture_1): add pictures of work, the_field( 'picture_title_1' ): to add title for the picture, the_field( 'text_description_1' ): to add description for the picture, the_field( 'tags_1' ): to add  tags of work, the_field( 'url_description_1' ): to add URL of the work.
 *
 * @CV-Template
 * @since version 1.0 -->

<?php get_header(); ?>
<!-- Portfolio Section
================================================== -->
<section id="portfolio">

    <div class="row">

        <div class="twelve columns collapsed">
 
            <h1>
                <?php the_field ('work_title') ?>
            </h1>
            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

      
                    
                <?php $query = new WP_Query( 'cat= 10' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $count1++;?> 
                    <div class="columns portfolio-item">
                        <div class="item-wrap">

                            <a href="#modal-0<?php echo $count1 ?>" title=""> 
                                <img alt="" src="<?php the_field( 'picture_1' ) ?>">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>
                                            <?php the_field( 'picture_title_1' ) ?>
                                        </h5>
                                        <p>
                                            <?php the_field( 'description_of_work_1' ) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="link-icon"><i class="icon-plus"></i></div>
                            </a>

                        </div>
                    </div> <!-- item_1 end -->
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>

        </div> <!-- twelve columns end -->


        <!-- Modal Popup
        --------------------------------------------------------------- -->
        <?php $query = new WP_Query( 'cat= 10' ); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $count++;?> 

            <div id="modal-0<?php echo $count ?>" class="popup-modal mfp-hide">
                                
                <img class="scale-with-grid" src="<?php the_field( 'picture_1' ) ?>">

                <div class="description-box">
                    <h4>
                        <?php the_field( 'picture_title_1' ) ?>
                    </h4>
                    <p>
                        <?php the_field( 'text_description_1' ) ?>                    
                    </p>
                    <span class="categories"><i class="fa fa-tag"></i><?php the_field( 'tags_1' ) ?> </span>
                </div>
                <div class="link-box">
                    <a href="<?php the_field( 'url_1' ) ?> " target="_blank"><?php the_field( 'url_description_1' ) ?> </a>
                    <a class="popup-modal-dismiss">Close</a>
                </div>
            </div><!-- modal-01 End -->
        <?php endwhile; wp_reset_postdata(); endif; ?>

    </div> <!-- row End -->

</section> <!-- Portfolio Section End-->


<?php get_footer(); ?>
