    <?php /* Template Name: Home */ ?>

    <?php get_header(); ?>

        <div class ="my-photo"> 
          
            <div class="row banner">

                <div class="banner-text">

                    <h1 class="responsive-headline">
                        <?php the_field ( 'my_name' ) ?>                   
                    </h1>
                    <h3>
                            <?php the_field ( 'text_1' ) ?>
                        
                        <span>
                            <?php the_field ( 'highlighted_text_1' ) ?>
                        </span>

                            <?php the_field ( 'text_2' ) ?>

                        <span>
                            <?php the_field ( 'highlighted_text_2' ) ?>
                        </span>

                            <?php the_field ( 'text_3' ) ?>

                        <span>
                            <?php the_field ( 'highlighted_text_3' ) ?>
                        </span>

                            <?php the_field ( 'text_4' ) ?>

                        <span>
                            <?php the_field ( 'highlighted_text_4' ) ?>
                        </span>
                    </h3><!-- Introduction End -->
                    <hr />
                </div>
            </div>  
        </div>      
</header> <!-- Header End -->
    
    <?php get_footer(); ?>
