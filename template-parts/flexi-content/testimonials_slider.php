<section class="container section-testimonials wow fadeIn" style="overflow: hidden">

  <?php if ( have_rows('testimonials', 'option') ): ?>
    <div class="swiper testimonialSwiper">
      <div class="swiper-wrapper">
      <?php while ( have_rows('testimonials', 'option') ) : the_row();

      $testimonial_copy = get_sub_field('section_testimonial_copy');
      $testimonial_byline = get_sub_field('section_testimonial_byline');

      ?>
        <div class="swiper-slide">

          <?php echo $testimonial_copy; ?>

          <p class="byline"><?php echo $testimonial_byline; ?></p>

        </div>
      <?php endwhile; ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <?php endif; ?>

</section>
