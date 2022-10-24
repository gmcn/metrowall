<section class="container contact-details">

  <div class="row">
    <div class="col-md-4">
      <img src="<?php echo get_template_directory_uri() ?>/images/phone.jpg" alt="Phone">
      <p class="title">Phone</p>
      <a href="tel:1-888-798-8806">1-888-798-8806</a>
    </div>
    <address class="col-md-4">
      <img src="<?php echo get_template_directory_uri() ?>/images/point.jpg" alt="Address">
      <p class="title">Address</p>
      520 Landmark Dr, Congers,
      NY 10920, United States
    </address>
    <div class="col-md-4">
      <img src="<?php echo get_template_directory_uri() ?>/images/envelope.jpg" alt="Email">
      <p class="title">Email</p>
      <a href="mailto:sales@metro-wall.com">sales@metro-wall.com</a>
    </div>
  </div>


</section>

<section id="contact-form" class="container contact-form">

  <p class="title" style="font-size: 1.2em; color: #000;">GET IN TOUCH</p>

  <p>Have a question, or would like to send us a message? Just fill in the form below.</p>

  <?php echo do_shortcode('[contact-form-7 id="1698" title="Contact Us"]') ?>


  <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      location = 'https://metro-wall.com/thank-you';
    }, false );
  </script>

</section>

<?php include(locate_template("template-parts/content-flexi.php")); ?>

<section class="contact-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3003.239980843509!2d-73.9573542845809!3d41.172932679284415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2c3edbf46df0f%3A0x7e732e8bad1a8b31!2s520%20Landmark%20Dr%2C%20Congers%2C%20NY%2010920%2C%20USA!5e0!3m2!1sen!2suk!4v1631625567815!5m2!1sen!2suk" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
