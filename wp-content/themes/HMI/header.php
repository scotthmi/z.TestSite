<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>


  </head>

  <header class="main-header">
      <div class="container clearfix">
<!-----

        <h1 class="name"><a href="http://localhost:8888/">HMI Theme</a></h1>
---->
      
      
  <a href="http://localhost:8888/"><img id="logo" src="/images/hm-logo.png"></a>
  
  


      
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <?php wp_nav_menu( $defaults );

    ?>
  
</div>

<!-- Use any element to open the sidenav -->
<div id="burgMenu" onclick="openNav()">

  <div class="burg1"></div>
  <div class="burg2"></div>
  <div class="burg3"></div>
</div>



</header>

  <body <?php  body_class(); ?>>

  
 
    
    
    



