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
  <img id="banner" src="/images/smile-1.jpg">
</div>

<div class="container-fluid" style="padding-top: 50px;">
 <div class="row">
  <div class="col-sm-6" style="padding-bottom: 20px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
  
  <div class="col-sm-6" style="padding-bottom: 20px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
    mollit anim id est laborum."</div>
</div>
</div>








<section class="row">

<p><?php the_content(); ?></p> 

</section>


<?php get_footer(); ?>