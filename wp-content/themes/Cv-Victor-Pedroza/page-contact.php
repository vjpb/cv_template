<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<!-- Contact Section
================================================== -->
<section id="contact">

   <div class="row section-head">

      <div class="two columns header-col">

         <h1><span>Get In Touch.</span></h1>

      </div>

      <div class="ten columns">
         <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
         eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
         voluptatem quia voluptas sit aspernatur aut odit aut fugit.
         </p>
      </div>

   </div>

   <div class="row">

      <div class="eight columns">

      <?php echo do_shortcode( '[contact-form-7 id="353" title="Contact form 1"]' );?>
      

   </div>


   <aside class="four columns footer-widgets">

      <div class="widget widget_contact">

         <h4>Address and Phone</h4>
         <p class="address">
            Jonathan Doe<br>
            1600 Amphitheatre Parkway <br>
            Mountain View, CA 94043 US<br>
            <span>(123) 456-7890</span>
         </p>

      </div>

      <div class="widget widget_tweets">  

         <h4 class="widget-title">Latest Tweets</h4>

         <ul id="twitter">
            <li>
               <span>
                  This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                  <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
            <li>
               <span>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                  eaque ipsa quae ab illo inventore veritatis et quasi
                  <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
         </ul>
      </div>

   </aside>
</section> <!-- Contact Section End-->
<?php get_footer(); ?>
