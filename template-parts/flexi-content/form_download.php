<div class="container-fluid contact-form">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Download a <span>brochure</span></h3>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="1476" title="Download a brochure"]') ?>
    </div>
  </div>
</div>

<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = '/thank-you-brochure-download/';
}, false );
</script>
