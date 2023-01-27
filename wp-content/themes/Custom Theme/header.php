<!DOCTYPE html>
<html lang="en">
<head>
   <?php wp_head()?>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tashevskyi Trans UA</title>
   <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/logo.png">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
   <meta name="google-site-verification" content="BkPltZk2ZOuEL5zHoCmWc9AlgxIy8EyG0Lj5QNqijxQ" />
   <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
</head>
<body>
   <header>
<div class="container-header">
      <a href="/" class="logo">

   </a>
   <div class="burger-icon mobile">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
         <span></span>
         <span></span>
   </div>
   <div class="hide burger-menu-container">
       <ul class="header-menu">
      <ul class="header-sub-menu">
      <li class="menu-title menu-item">Email:</li>
      <li class="menu-item"><a href="mailto:<?php echo get_field('email');?>"><?php echo get_field('email');?></a></li>
      </ul>
      <ul class="header-sub-menu">
      <li class="menu-title menu-item" data-ua="Контактний телефон:" data-en="Tel:"></li>
      <li class="menu-item"><a href="tel:<?php echo get_field('phone_number');?>"><?php echo get_field('phone_number');?></a></li>
      </ul>
      <div class="change-theme">
      </div>
      <div class="change-language">
         <i class="fa-solid fa-earth-europe"></i>
         <span class="en"><img alt="ukflag"src="<?php echo get_template_directory_uri(); ?>/img/united-kingdom.png"></span>
         <span class="ua"><img alt="uaflag"src="<?php echo get_template_directory_uri(); ?>/img/ukraine.png"></span>
      </div>
       <div class="header-container">
   <button class="header-button"><i class="fa-regular fa-paper-plane"></i></button>
   </div>
   </ul>
  
   </div>

   <ul class="header-menu desktop">
      <ul class="header-sub-menu">
      <li class="menu-title menu-item">Email:</li>
      <li class="menu-item"><a href="mailto:<?php echo get_field('email');?>"><?php echo get_field('email');?></a></li>
      </ul>
      <ul class="header-sub-menu">
      <li class="menu-title menu-item" data-ua="Контактний телефон:" data-en="Tel:"></li>
      <li class="menu-item"><a href="tel:<?php echo get_field('phone_number');?>"><?php echo get_field('phone_number');?></a></li>
      </ul>
      <div class="change-theme">
      </div>
      <div class="change-language">
         <i class="fa-solid fa-earth-europe"></i>
         <span class="en"><img src="<?php echo get_template_directory_uri(); ?>/img/united-kingdom.png"></span>
         <span class="ua"><img src="<?php echo get_template_directory_uri(); ?>/img/ukraine.png"></span>
      </div>
   <div class="header-container desktop">
   <button class="header-button" data-ua="Розрахувати вартість доставки" data-en="CALCULATE THE COST OF DELIVERY"></button>
   </div>
   </ul>

   </div>
<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?> 

   </header>
   <div class="preloader">
  </div>