<?php if ( have_rows('slides') ): ?>
  <div class="swiper heroSwiper">
    <div class="swiper-wrapper">

    <?php while ( have_rows('slides') ) : the_row();

    $slideImg = get_sub_field('slide_image');
    $slideTitle = get_sub_field('slide_title');


    ?>
      <div class="swiper-slide">

        <?php
        if( !empty( $slideImg ) ): ?>
            <img src="<?php echo esc_url($slideImg['url']); ?>" alt="<?php echo esc_attr($slideImg['alt']); ?>" />
        <?php endif; ?>

        <h1><?php echo $slideTitle; ?></h1>

      </div>
    <?php endwhile; ?>    

  </div>
  <div class="heroSwiper_contact d-none d-md-block">
    <a class="email" href="mailto:SALES@METRO-WALL.COM">SALES@METRO-WALL.COM</a>
    <a class="tel" href="tel:1-888-798-8806">1-888-798-8806</a>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
<?php endif; ?>
