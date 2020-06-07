<!-- This template works to conect the template header, (page-***.php) and footer and show only one page. 
 *
 * @CV-Template
 * @since version 1.0 -->

<?php get_header(); ?>
  
<?php get_template_part( 'content', get_post_format() ); ?>  

<?php get_footer(); ?>





