
<?php if ( have_rows('section_usp_points') ): ?>
  <section class="container section-usp">
    <div class="row">
      <?php while ( have_rows('section_usp_points') ) : the_row();


      $usp_icon = get_sub_field('usp_icon');
      $usp_title = get_sub_field('usp_title');
      $usp_copy = get_sub_field('usp_copy');

      ?>
        <div class="col-6 col-md-4">

          <div class="row">
            <div class="col-md-4 col-lg-3">
              <img src="<?php echo $usp_icon ?>" alt="<?php echo $usp_title ?>">
            </div>
            <div class="col-md-8 col-lg-9">
              <p class="section-usp__title"><?php echo $usp_title ?> </p>
              <p><?php echo $usp_copy ?></p>
            </div>
          </div>

        </div>
      <?php endwhile; ?>
    </div>
  </section>
<?php endif; ?>
