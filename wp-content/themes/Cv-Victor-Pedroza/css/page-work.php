<?php /* Template Name: Work */ ?>
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

                    <div class="columns portfolio-item">
                        <div class="item-wrap">

                            <a href="#modal-01" title=""> 
                                <img alt="" src="<?php the_field( 'picture_1' ) ?>">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>
                                            <?php the_field( 'picture_title_1' ) ?>
                                        </h5>
                                        <p>
                                            <?php the_field( 'kind_of_work_1' ) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="link-icon"><i class="icon-plus"></i></div>
                            </a>

                        </div>
                    </div> <!-- item_1 end -->

                    <div class="columns portfolio-item">
                        <div class="item-wrap">

                            <a href="#modal-02" title=""> 
                                <img alt="" src="<?php the_field( 'picture_2' ) ?>">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>
                                            <?php the_field( 'picture_title_2' ) ?>
                                        </h5>
                                        <p>
                                            <?php the_field( 'kind_of_work_2' ) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="link-icon"><i class="icon-plus"></i></div>
                            </a>

                        </div>
                    </div> <!-- item_2 end -->

                    <div class="columns portfolio-item">
                        <div class="item-wrap">

                            <a href="#modal-03" title=""> 
                                <img alt="" src="<?php the_field( 'picture_3' ) ?>">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>
                                            <?php the_field( 'picture_title_3' ) ?>
                                        </h5>
                                        <p>
                                            <?php the_field( 'kind_of_work_3' ) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="link-icon"><i class="icon-plus"></i></div>
                            </a>
                        </div>
                    </div> <!-- item_3 end -->

                    <div class="columns portfolio-item">
                        <div class="item-wrap">

                            <a href="#modal-04" title=""> 
                                <img alt="" src="<?php the_field( 'picture_4' ) ?>">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>
                                            <?php the_field( 'picture_title_4' ) ?>
                                        </h5>
                                        <p>
                                            <?php the_field( 'kind_of_work_4' ) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="link-icon"><i class="icon-plus"></i></div>
                            </a>
                        </div>
                    </div> <!-- item_4 end -->

                    <div class="columns portfolio-item">
                        <div class="item-wrap">

                            <a href="#modal-05" title=""> 
                                <img alt="" src="<?php the_field( 'picture_5' ) ?>">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>
                                            <?php the_field( 'picture_title_5' ) ?>
                                        </h5>
                                        <p>
                                            <?php the_field( 'kind_of_work_5' ) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="link-icon"><i class="icon-plus"></i></div>
                            </a>         
                        </div>
                    </div> <!-- item_5 end -->

                    <div class="columns portfolio-item">
                        <div class="item-wrap">

                            <a href="#modal-06" title=""> 
                                <img alt="" src="<?php the_field( 'picture_6' ) ?>">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>
                                            <?php the_field( 'picture_title_6' ) ?>
                                        </h5>
                                        <p>
                                            <?php the_field( 'kind_of_work_6' ) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="link-icon"><i class="icon-plus"></i></div>
                            </a>

                        </div>
                    </div> <!-- item_6 end -->

                    <div class="columns portfolio-item">
                        <div class="item-wrap">

                            <a href="#modal-07" title=""> 
                                <img alt="" src="<?php the_field( 'picture_7' ) ?>">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>
                                            <?php the_field( 'picture_title_7' ) ?>
                                        </h5>
                                        <p>
                                            <?php the_field( 'kind_of_work_7' ) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="link-icon"><i class="icon-plus"></i></div>
                            </a>

                        </div>
                    </div> <!-- item_7 end -->

                    <div class="columns portfolio-item">
                        <div class="item-wrap">

                            <a href="#modal-08" title=""> 
                                <img alt="" src="<?php the_field( 'picture_8' ) ?>">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>
                                            <?php the_field( 'picture_title_8' ) ?>
                                        </h5>
                                        <p>
                                            <?php the_field( 'kind_of_work_8' ) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="link-icon"><i class="icon-plus"></i></div>
                            </a>
                        </div>
                    </div>  <!-- item_8 end -->

            </div> <!-- portfolio-wrapper end -->

        </div> <!-- twelve columns end -->


        <!-- Modal Popup
        --------------------------------------------------------------- -->

        <div id="modal-01" class="popup-modal mfp-hide">

                            
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

        <div id="modal-02" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="<?php the_field( 'picture_2' ) ?>">

            <div class="description-box">
                <h4>
                    <?php the_field( 'picture_title_2' ) ?>
                </h4>
                <p>
                    <?php the_field( 'text_description_2' ) ?>                    
                </p>
                <span class="categories"><i class="fa fa-tag"></i><?php the_field( 'tags_2' ) ?> </span>
            </div>

            <div class="link-box">
                <a href="<?php the_field( 'url_2' ) ?> " target="_blank"><?php the_field( 'url_description_2' ) ?> </a>
                <a class="popup-modal-dismiss">Close</a>
            </div>
        </div><!-- modal-02 End -->

        <div id="modal-03" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="<?php the_field( 'picture_3' ) ?>">

            <div class="description-box">
                <h4>
                    <?php the_field( 'picture_title_3' ) ?>
                </h4>
                <p>
                    <?php the_field( 'text_description_3' ) ?>                    
                </p>
                <span class="categories"><i class="fa fa-tag"></i><?php the_field( 'tags_3' ) ?> </span>
            </div>
            <div class="link-box">
                <a href="<?php the_field( 'url_3' ) ?> " target="_blank"><?php the_field( 'url_description_3' ) ?> </a>
                <a class="popup-modal-dismiss">Close</a>
            </div>
        </div><!-- modal-03 End -->

        <div id="modal-04" class="popup-modal mfp-hide">

           <img class="scale-with-grid" src="<?php the_field( 'picture_4' ) ?>">

            <div class="description-box">
                <h4>
                    <?php the_field( 'picture_title_4' ) ?>
                </h4>
                <p>
                    <?php the_field( 'text_description_4' ) ?>                    
                </p>
                <span class="categories"><i class="fa fa-tag"></i><?php the_field( 'tags_4' ) ?> </span>
            </div>
            <div class="link-box">
                <a href="<?php the_field( 'url_4' ) ?> " target="_blank"><?php the_field( 'url_description_4' ) ?> </a>
                <a class="popup-modal-dismiss">Close</a>
            </div>
        </div><!-- modal-04 End -->

        <div id="modal-05" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="<?php the_field( 'picture_5' ) ?>">

            <div class="description-box">
                <h4>
                    <?php the_field( 'picture_title_5' ) ?>
                </h4>
                <p>
                    <?php the_field( 'text_description_5' ) ?>                    
                </p>
                <span class="categories"><i class="fa fa-tag"></i><?php the_field( 'tags_5' ) ?> </span>
            </div>
            <div class="link-box">
                <a href="<?php the_field( 'url_5' ) ?> " target="_blank"><?php the_field( 'url_description_5' ) ?> </a>
                <a class="popup-modal-dismiss">Close</a>
            </div>
        </div><!-- modal-05 End -->

        <div id="modal-06" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="<?php the_field( 'picture_6' ) ?>">

            <div class="description-box">
                <h4>
                    <?php the_field( 'picture_title_6' ) ?>
                </h4>
                <p>
                    <?php the_field( 'text_description_6' ) ?>                    
                </p>
                <span class="categories"><i class="fa fa-tag"></i><?php the_field( 'tags_6' ) ?> </span>
            </div>
            <div class="link-box">
                <a href="<?php the_field( 'url_6' ) ?> " target="_blank"><?php the_field( 'url_description_6' ) ?> </a>
                <a class="popup-modal-dismiss">Close</a>
            </div>
        </div><!-- modal-06 End -->

        <div id="modal-07" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="<?php the_field( 'picture_7' ) ?>">

            <div class="description-box">
                <h4>
                    <?php the_field( 'picture_title_7' ) ?>
                </h4>
                <p>
                    <?php the_field( 'text_description_7' ) ?>                    
                </p>
                <span class="categories"><i class="fa fa-tag"></i><?php the_field( 'tags_7' ) ?> </span>
            </div>
            <div class="link-box">
                <a href="<?php the_field( 'url_7' ) ?> " target="_blank"><?php the_field( 'url_description_7' ) ?> </a>
                <a class="popup-modal-dismiss">Close</a>
            </div>
        </div><!-- modal-07 End -->

        <div id="modal-08" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="<?php the_field( 'picture_8' ) ?>">

            <div class="description-box">
                <h4>
                    <?php the_field( 'picture_title_8' ) ?>
                </h4>
                <p>
                    <?php the_field( 'text_description_8' ) ?>                    
                </p>
                <span class="categories"><i class="fa fa-tag"></i><?php the_field( 'tags_8' ) ?> </span>
            </div>
            <div class="link-box">
                <a href="<?php the_field( 'url_8' ) ?> " target="_blank"><?php the_field( 'url_description_8' ) ?> </a>
                <a class="popup-modal-dismiss">Close</a>
            </div>

        </div><!-- modal-01 End -->


    </div> <!-- row End -->

</section> <!-- Portfolio Section End-->


<?php get_footer(); ?>
