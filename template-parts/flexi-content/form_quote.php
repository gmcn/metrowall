<div class="container-fluid contact-form">
  <div class="container">
    <div class="row">

      <?php echo do_shortcode('[contact-form-7 id="1702" title="Quote"]') ?>

      <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
          location = 'https://metro-wall.com/quote-thank-you';
        }, false );
      </script>

    </div>
  </div>
</div>
