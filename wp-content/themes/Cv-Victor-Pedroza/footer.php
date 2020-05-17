   <!-- footer
   ================================================== -->
   <footer>

    

         <div class="social-icons">

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Menu') ) : ?> <?php endif; ?>
          
         </div>

         <div id="go-top"><a title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

     

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-migrate-1.2.1.min.js"></script>

   <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
   <script src="<?php echo get_bloginfo('template_directory'); ?>/js/waypoints.js"></script>
   <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.fittext.js"></script>
   <script src="<?php echo get_bloginfo('template_directory'); ?>/js/magnific-popup.js"></script>
   <script src="<?php echo get_bloginfo('template_directory'); ?>/js/init.js"></script>
   <?php wp_footer(); ?>
</body>

</html>