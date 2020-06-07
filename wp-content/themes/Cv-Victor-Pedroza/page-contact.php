<?php /* Template Name: Contact */ ?>
<!--
 * Template Name:  page-contact.php
 *
* This template works to inset the fields for contact page. This template receive the information with the help of the "Contact form 7 " plugin. The variables used are: 
 - echo do_shortcode( '[contact-form-7 id="353" title="Contact form 1"]' ): inset the contact form into de contact-page.php. 
 *
 * @CV-Template
 * @since version 1.0 -->
<?php get_header(); ?>

<!-- Contact Section
================================================== -->
<section id="contact-section" >

   <div class="icon-email">

      <h1><span>Get In Touch.</span></h1>

   </div>

   <div class="form-7">

      <?php echo do_shortcode( '[contact-form-7 id="353" title="Contact form 1"]' );?>
      
   </div>

</section> <!-- Contact Section End-->
<?php get_footer(); ?>
