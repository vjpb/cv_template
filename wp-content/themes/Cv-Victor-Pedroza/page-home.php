<?php /* Template Name: Home */ ?>
<!--
 * Template Name:  page-home.php
 *
* This template works to complete the custom fields of the home page. This template receive the information with the help of the "Custom Fields" plugin. The variables used are: 
 - the_field(my_name): presentation title, the_field(text_1): the introduction, the_field('background'): background picture. 
 *
 * @CV-Template
 * @since version 1.0 -->

    <?php get_header(); ?>

        <div class ="my-photo" style="background-image: url('<?php the_field ( 'background' ) ?>');"> 
          
            <div class="row banner">

                <div class="banner-text">

                    <h2>
                        <?php the_field ( 'my_name' ) ?>
                    </h2>
                    <h1 class="responsive-headline">
                        <?php the_field ( 'profession' ) ?>                   
                    </h1>
                    <h3>
                            <?php the_field ( 'text_1' ) ?>
                      
                    </h3><!-- Introduction End -->
                    <hr />
                </div>
            </div>  
        </div>      
</header> <!-- Header End -->
    
    <?php get_footer(); ?>
