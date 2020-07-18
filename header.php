<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Romantic About Baseball</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Vollkorn&display=swap" rel="stylesheet">
</head>
<body>

  <?php
  wp_head();
  ?>

  <body>
    <header class="header">


    <div class="container-fluid header-bg">
      <div class="header-screen">
        <a class="navbar-brand" href="<?php echo home_url();?>">
          <?php
					if(function_exists('the_custom_logo')){
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id);
					};
          ?>
        
          <!-- <img class="logo" src="<?php echo $logo[0] ?>" alt="logo" > -->
          <img class="logo" src="<?php #echo home_url();?>/wp-content/themes/RAB-Theme-master/assets/images/RAB-logo-150x150.jpg" alt="logo" />
        </a>
        </div>
        <div class="header-title">A Blog for The Thinking Fan</div>
        <div class="social-icons">
          <p>Follow us: </p>
        <a href="https://www.facebook.com/RomanticAboutBaseball/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/romanticaboutbaseball/"><i class="fab fab fa-instagram" aria-hidden="true"></i></a>
        <a href="https://twitter.com/RmntcBaseball"><i class="fab fa-twitter" aria-hidden="true"></i></a>

        </div>
        <div class="menu-button" id="menu-button">
<i class="fas fa-bars" aria-hidden="true"></i>
</div>
</div>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

<?php

wp_nav_menu(
  array(
    'menu' => 'primary',
    'container' => '',
    'theme_location' => 'primary',
    'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul>'
  )
  );

?>

</nav>
    
    </header>
  
