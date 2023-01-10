<?php include 'header.php'?>
<main>
<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?> 
   
<div class="poster">
		<div class="swiper-slide"><img src="<?php echo get_field('first_photo');?>" alt="poster"></div>
		<div class="swiper-slide"><img src="<?php echo get_field('second_photo');?>" alt="poster"></div>
	</div>
   </main>
<?php require 'footer.php'?>