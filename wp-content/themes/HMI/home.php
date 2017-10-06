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
  
  <div class=".col-6 intro-text" style="padding-bottom: 50px;">We’re a creative agency. Brand development
is our strength. We offer a full spectrum of creative
services including design, advertising, marketing,
social media, video production, 3D animation and
website/app interactive development.</div>
   
  
</div>
</div>



<div class="col-sm-12 grad" style="padding-top: 50px; padding-bottom: 100px; background-color: #333;">
  <div class="row">
    <div class="col">
      <h1 style="color: #fff;">WEBSITE DEVELOPEMENT</h1>
    </div>
    <div class="col" id="svgAnimation">
      <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 454.7">
  <defs>
    
  </defs>
  <title>responsive</title>
  <rect class="cls-1" x="412.18" y="203" width="180.41" height="230.44" rx="10.2" ry="10.2"/>
  <rect class="cls-2" x="432.68" y="222.77" width="138.43" height="190.29"/>
  <rect class="cls-2" x="448.54" y="356.4" width="104.79" height="36.05"/>
  <rect class="cls-2" x="448.54" y="260.75" width="104.79" height="36.05"/>
  <rect class="cls-2" x="448.54" y="308.81" width="46.62" height="35.57"/>
  <rect class="cls-2" x="506.7" y="308.81" width="46.62" height="35.57"/>
  <rect class="cls-3" x="448.54" y="242.96" width="23.31" height="4.33"/>
  <rect class="cls-3" x="489.27" y="242.96" width="23.31" height="4.33"/>
  <rect class="cls-3" x="530.01" y="242.96" width="23.31" height="4.33"/>
  <rect class="cls-1" x="73.2" y="257.6" width="86.71" height="175.84" rx="8.12" ry="8.12"/>
  <rect class="cls-1" x="80.35" y="284.78" width="71.62" height="117.76"/>
  <rect class="cls-2" x="90.44" y="311.22" width="52.39" height="34.31"/>
  <rect class="cls-2" x="90.44" y="354" width="52.39" height="34.61"/>
  <rect class="cls-3" x="88.52" y="298.48" width="13.22" height="4.09"/>
  <rect class="cls-3" x="110.03" y="298.48" width="13.22" height="4.09"/>
  <rect class="cls-3" x="132.38" y="298.48" width="13.22" height="4.09"/>
  <rect class="cls-4" x="101.74" y="269.4" width="28.6" height="4.09" rx="1.42" ry="1.42"/>
  <polyline class="cls-1" points="73.19 311.22 42.86 311.22 42.86 35.31 500.93 35.31 500.93 203"/>
  <line class="cls-1" x1="412.18" y1="311.22" x2="159.91" y2="311.22"/>
  <line class="cls-1" x1="412.18" y1="330.92" x2="159.91" y2="330.92"/>
  <line class="cls-1" x1="412.18" y1="379.47" x2="159.91" y2="379.47"/>
  <path class="cls-1" d="M180.93,433.44s0-13.83,16.94-13.83h146s16.22.63,16.22,13.83Z"/>
  <line class="cls-1" x1="344.59" y1="379.47" x2="343.87" y2="419.61"/>
  <line class="cls-1" x1="197.99" y1="379.47" x2="197.27" y2="419.61"/>
  <path class="cls-1" d="M73.2,379.47H35.29s-15.86,2.28-15.86-15.38V35.31S18.7,18,34.56,18H500.93s17.42-1.8,17.06,17.3V203"/>
  <line class="cls-1" x1="19.42" y1="330.92" x2="73.2" y2="330.92"/>
  <rect class="cls-2" x="66.65" y="61.63" width="408.45" height="24.15"/>
  <rect class="cls-3" x="78.55" y="71.73" width="9.97" height="3.6"/>
  <rect class="cls-3" x="93.21" y="71.73" width="9.97" height="3.6"/>
  <rect class="cls-3" x="107.87" y="71.73" width="9.97" height="3.6"/>
  <rect class="cls-2" x="66.65" y="99.12" width="85.32" height="135.19"/>
  <polyline class="cls-2" points="475.1 201.14 475.1 99.12 169.03 99.12 169.03 234.31 412.18 234.31"/>
  <polygon class="cls-2" points="208.69 142.02 208.69 179.51 220.22 166.72 238.97 171.22 208.69 142.02"/>
  <polyline class="cls-2" points="216.69 170.64 225.63 192.49 232.84 189.25 224.76 167.81"/>
</svg>
    </div>
  </div>



<section class="row">

<p><?php the_content(); ?></p> 

</section>


<?php get_footer(); ?>