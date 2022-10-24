<?php

$cta_title = get_sub_field('cta_title');
$cta_details = get_sub_field('cta_details');
$cta_link = get_sub_field('cta_link');

 ?>



<div class="container-fluid cta-bar">

  <div class="container">
    <div class="row">
      <div class="col-md-7 col-lg-9 cta-bar_copy">
        <p class="cta-bar_header wow fadeIn"><?php echo $cta_title ?></p>
        <p class="wow fadeIn"><?php echo $cta_details ?></p>
      </div>
      <div class="col-md-5 col-lg-3 cta-bar_link align-self-center">

        <?php if (get_sub_field('cta_image_active')): ?>

          <?php $image_link = get_sub_field('cta_image_link'); ?>

          <?php if ($image_link): ?>

            <a href="<?php echo $image_link ?>">

          <?php endif; ?>

          <?php
          $image = get_sub_field('cta_image');
          if ( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>


          <?php if ($image_link): ?>
            </a>
          <?php endif; ?>


        <?php else : ?>

          <?php
            if( $cta_link ):
                $link_url = $cta_link['url'];
                $link_title = $cta_link['title'];
                $link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
                ?>
                <a class="button wow fadeIn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>


        <?php endif; ?>




      </div>
    </div>
  </div>

</div>
