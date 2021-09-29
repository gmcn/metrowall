<?php
$images = get_sub_field('section_product_gallery_slider__gallery');
if( $images ): ?>
<div class="swiper productSwiper">
  <div class="swiper-wrapper">
        <?php foreach( $images as $image ): ?>
          <div class="swiper-slide" style="background: url(<?php echo esc_url($image['url']); ?>) center center; background-size: cover;">
                <!-- <a href="<?php echo esc_url($image['url']); ?>"> -->
                     <!-- <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> -->
                <!-- </a> -->
            </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
<?php endif; ?>
