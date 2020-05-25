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
                      
                    </h3><!-- Introduction End -->
                    <hr />
                </div>
            </div>  
        </div>      
</header> <!-- Header End -->
    
    <?php get_footer(); ?>
