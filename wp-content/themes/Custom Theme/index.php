<?php include 'header.php'?>
<main>
   <form class="form">
      <div class="close-form"><i class="fa-regular fa-circle-xmark"></i></div>
      <h5>Безкоштовна консультація</h5>
      <label for="phone-number">Введіть, будь ласка, номер телефону:</label>
      <input name="phone-number" type="tel" placeholder="+380123456789">
      <label for="email">Введіть, будь ласка, номер телефону:</label>
      <input name="email" type="email" placeholder="tashevskyitrans@gmail.com">
      <label for="reason">Деталі:</label>
      <textarea class="about" type="text"></textarea>
      <input class="submit" type="submit">
   </form>
   
   <div class="poster">

         <img src="<?php echo get_template_directory_uri(); ?>/img/poster.jpg" alt="poster">
   </div>
   </main>
<?php require 'footer.php'?>