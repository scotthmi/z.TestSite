<?php
    /*
        Template Name: Home
    */
?>

<?php get_header(); ?>


<section class="row">
    
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          
                 
        
    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
       
    
    </section>

    <div class="container-full">
  <div id="banner">
  <span id="banner-text"><strong>MAKE IT INTERESTING</strong></span>
</div>


</div>
</div>

<div class="container" style="padding-top: 50px;">
 <div class="row">
  
  <div class=".col-6 intro-text" style="padding-bottom: 20px;">We’re a creative agency. Brand development
is our strength. We offer a full spectrum of creative
services including design, advertising, marketing,
social media, video production, 3D animation and
website/app interactive development.</div>
   
  
</div>
</div>








<section class="row">

<p><?php the_content(); ?></p> 

</section>


<?php get_footer(); ?>